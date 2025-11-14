@extends('components.layouts.app')

@section('title','Members Portal')

@section('content')
<div class="container-xxl py-5">
  <h1>Members Portal</h1>
  <p class="text-muted">Access member-only resources, events, CPD materials and discussion forums. Please <a href="{{ route('login') }}">log in</a> to proceed.</p>
</div>
@endsection
