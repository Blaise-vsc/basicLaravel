@extends('layout.app')
@section('title','about page')
{{--  --}}
@section('content')
<x-header-component classContainer="bg-blue-200 h-[40px] sm:h-[50x] flex items-center justify-between px-[1rem] sm:px-[3rem]" loginTitle='login'  loginClass='gap-[1rem] sm:gap-[2rem]' loginTitleout='logout' classLog='font-bold text-[80%] sm:text-[110%]  px-[10px] rounded-full'/>

@livewire('counter')



@endsection
