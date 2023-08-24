@props(['title','loginTitle','classContainer','loginClass','loginTitleout','classLog'])
<header class=" w-full  h-[100px] {{ $classContainer }} ">
    <h1 class="font-bold text-[170%]">LOGO</h1>
    <div class="flex flex-row gap-[1rem]  {{ $loginClass }}">
        <a class="bg-gray-200 px-[20px] py-[5px] {{ $classLog }}" href="">{{ $loginTitle }}</a>
        <a class="bg-gray-200 px-[20px] py-[5px] {{ $classLog }}" href="">{{ $loginTitleout }}</a>
    </div>
</header>