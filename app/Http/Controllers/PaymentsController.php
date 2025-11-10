<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PaymentsController extends Controller
{
    /**
     * Show the membership payment page
     */
    public function index()
    {
        return view('payments.index');
    }

    /**
     * Initiate M-Pesa payment (demo/simulated)
     */
    public function mpesa(Request $request)
    {
        $user = Auth::user();
        if (! $user) {
            return redirect()->route('login');
        }

        $amount = 1000.00; // membership amount (KES)

        // Create payment record (pending)
        $payment = Payment::create([
            'user_id' => $user->id,
            'provider' => 'mpesa',
            'reference' => 'MPESA-' . Str::upper(Str::random(10)),
            'amount' => $amount,
            'status' => 'pending',
            'payload' => [
                'initiated_at' => now()->toDateTimeString(),
                'phone' => $request->input('phone', $user->phone),
            ],
        ]);

        // In a real integration: call M-Pesa API here and redirect or return payment result.
        // For now, simulate an immediate successful payment for demo purposes.

        // Simulate callback handling
        $this->handleMpesaCallback($payment, [
            'result' => 'success',
            'transaction_id' => 'STK-' . Str::upper(Str::random(8)),
        ]);

        return redirect()->route('dashboard')->with('status', 'Payment completed (simulated). Your membership is now active.');
    }

    /**
     * Handle simulated M-Pesa callback
     */
    protected function handleMpesaCallback(Payment $payment, array $data): void
    {
        Log::info('Simulated M-Pesa callback', ['payment_id' => $payment->id, 'data' => $data]);

        $payment->update([
            'status' => 'success',
            'payload' => array_merge($payment->payload ?? [], $data),
            'reference' => $payment->reference ?? ($data['transaction_id'] ?? $payment->reference),
        ]);

        // Activate user's membership for 1 year
        $user = $payment->user;
        $user->membership_paid = true;
        $user->is_active = true;
        $user->payment_provider = 'mpesa';
        $user->payment_reference = $payment->reference;
        $user->membership_expires_at = Carbon::now()->addYear();
        $user->save();
    }
}
