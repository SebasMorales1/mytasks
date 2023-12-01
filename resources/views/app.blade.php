@extends('layouts.appLayout')

@section('title', 'Main Page')

@section('content')
<h1>MyTasks</h1>

@auth
  {{ auth()->user()->name }}
@endauth

@endsection