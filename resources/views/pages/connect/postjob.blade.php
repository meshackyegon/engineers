@extends('components.layouts.app')

@section('title','Post a Job')

@section('content')
<div class="container-xxl py-5">
  <h1>Post a Job</h1>
  <p class="text-muted">Employers can post vacancies here. Please <a href="{{ route('login') }}">log in</a> to post a job.</p>
</div>
@endsection
