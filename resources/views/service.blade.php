@extends('layout.app')
@section('title','service page')
@section('content')
<x-header-component classContainer="bg-blue-400 opacity-80 backdrop-blur-[3px] h-[50x] flex items-center justify-between px-[3rem]" loginTitle='login'  loginClass='gap-[2rem]' loginTitleout='logout' classLog='font-bold text-[110%] px-[10px] rounded-full'/>
<nav class="w-full min-h-[100vh] bg-white px-2 py-2">
   @livewire('sec-counter') 
</nav>
@endsection