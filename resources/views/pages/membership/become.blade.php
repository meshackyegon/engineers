@extends('components.layouts.app')

@section('title','Become a Member')

@section('content')
<div class="container-xxl py-5">
  <h1>Become a Member</h1>
  <p class="lead text-muted">Join GCSAK to access procurement opportunities, training, and a trusted directory listing. Membership categories include Contractors, Suppliers, and Associates.</p>
  <a href="{{ route('register') }}" class="btn btn-primary mt-3">Create an account</a>
</div>
@endsection
