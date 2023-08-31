@extends('layout.app')
@section('title','component page')
@section('content')
   <div class="w-full h-[100vh] bg-white bg-opacity-7">
         @livewire('todos')
   </div>

@endsection