@extends('layout/app')
@section('title','home page')
@section('content')
<section class="w-full min-h-screen flex items-center justify-center flex-col gap-3 text-white">
    <h1 class="font-bold text-5xl"> BETUA BLAISE</h1>
    <P class="text-2xl">I'm a motion and graphic designer <br> font-end developper <br> and still fighting  for the <span class="text-xl font-bold text-gray-300">FULLSTUCK</span> </P>
    </section>
<section class="w-full min-h-screen  bg-white py-8 px-3 flex flex-col gap-5 justify-center">
<div class="flex flex-col gap-4">
    <h1 class="text-3xl font-bold text-blue-950">About</h1>
    <hr class="w-14 h-1 bg-sky-500 " >
</div>
<div class="flex flex-col gap-4 w-full">
    <p class="text-xl">I'm a passionate motion & graphic designer, skilled front-end developer, and aspiring full-stack enthusiast, determined to master the digital realm, also experienced in SEO strategies.</p>
</div>
<div class="flex flex-row gap-2 w-full">
    <div class="w-1/3">
    <img class="w-full h-62 object-cover" src="https://betuablaise.netlify.app/profil.jpg" alt="betua blaise profile">
    </div>

    <div class="w-2/3 flex flex-col gap-2">
    <h1 class="text-3xl font-bold text-blue-950 ">UI/UX DEVELOPER & WEB DESIGNER</h1>
    <p class="text-xl">Passionate about crafting seamless,and translating creative visions into captivating web designs.</p>

  <div class="flex flex-row gap-4 w-full">
    <div class="flex flex-col gap-4 w-1/2 justify-start">

      <div class="flex items-center text-xl gap-1">
        <i class='bx bx-chevron-right text-blue-300 text-4xl flex items-center justify-center'></i> <span class="font-bold flex items-center justify-center">Birthday: </span> 3/8/1996
      </div>
      <div class="flex items-center text-xl gap-1">
        <i class='bx bx-chevron-right text-blue-300 text-4xl flex items-center justify-center'></i> <span class="font-bold flex items-center justify-center">Website: </span> betuablaise.netlify.app/
      </div>
      <div class="flex items-center text-xl gap-1">
        <i class='bx bx-chevron-right text-blue-300 text-4xl flex items-center justify-center'></i> <span class="font-bold flex items-center justify-center">Phone: </span> +2567-809-50-387
      </div>
      <div class="flex items-center text-xl gap-1">
        <i class='bx bx-chevron-right text-blue-300 text-4xl flex items-center justify-center'></i> <span class="font-bold flex items-center justify-center">City: </span> Kampala
      </div>
    </div>
     <div class="flex flex-col gap-4 w-1/2">
        <div class="flex items-center text-xl gap-1">
            <i class='bx bx-chevron-right text-blue-300 text-4xl flex items-center justify-center'></i> <span class="font-bold flex items-center justify-center">Age: </span> 27
        </div>
          <div class="flex items-center text-xl gap-1">
            <i class='bx bx-chevron-right text-blue-300 text-4xl flex items-center justify-center'></i> <span class="font-bold flex items-center justify-center">Degre: </span> Graduate
        </div>
          <div class="flex items-center text-xl gap-1">
            <i class='bx bx-chevron-right text-blue-300 text-4xl flex items-center justify-center'></i> <span class="font-bold flex items-center justify-center">Email: </span> blaisebetua23@gmail.com
        </div>
          <div class="flex items-center text-xl gap-1">
            <i class='bx bx-chevron-right text-blue-300 text-4xl flex items-center justify-center'></i> <span class="font-bold flex items-center justify-center">Design: </span> Available
        </div>
    </div>   
  </div>
  <div>
    <p class="text-xl">Explore the art of user experience with me as your UI/UX developer & web designer. Let's turn your ideas into visually stunning online realities. Ready to shape digital experiences together?</p>
  </div>
</div>
</section>
@endsection