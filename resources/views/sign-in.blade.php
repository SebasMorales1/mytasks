@extends('layouts.appLayout')

@section('title', 'Sign In')

@section('content')

<div class="w-11/12 mx-auto mt-8">
  <h1 class="font-bold text-gray-950 text-2xl">Sign In</h1>
  <livewire:form-sign-in />
</div>

@endsection