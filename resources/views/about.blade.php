@extends('layout.app')
@section('title','about page')
{{--  --}}
@section('content')
<x-header-component classContainer="bg-blue-200 h-[50x] flex items-center justify-between px-[3rem]" loginTitle='login'  loginClass='gap-[2rem]' loginTitleout='logout' classLog='font-bold text-[110%] px-[10px] rounded-full'/>

<h1 class="font-bold text-white">your {{ $name }}</h1>



@endsection
