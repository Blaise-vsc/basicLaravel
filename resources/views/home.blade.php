@extends('layout/app')
@section('title','home page')
@section('content')
{{-- php --}}
@php
$products=[
  [
    'id'=>1,
    'image'=>'/img-larvl/a.jpg',
    'title'=>'project plan',
    'delay'=>'1 month',
    'description'=>'this is one of my busness plan, sugested to a client'
],
[
    'id'=>2,
    'image'=>'/img-larvl/b.jpg',
    'title'=>'branding part',
    'delay'=>'2 days',
    'description'=>'details about what will be done in this part'
],
[
    'id'=>3,
    'image'=>'/img-larvl/c.jpg',
    'title'=>'website creation',
    'delay'=>'2 month',
    'description'=>'how website will be builded and what added like SEO, ADS'
],
[
    'id'=>4,
    'image'=>'/img-larvl/d.jpg',
    'title'=>'visual marketing',
    'delay'=>'1 month',
    'description'=>'spices to make viral'
]
]




@endphp
{{-- endphp --}}
<section id="home" class="home w-full min-h-screen flex items-center justify-center flex-col gap-3 text-white">
    <h1 class="font-bold text-5xl"> BETUA BLAISE</h1>
    <P class="text-2xl">I'm a motion and graphic designer <br> font-end developper <br> and still fighting  for the <span class="text-xl font-bold text-gray-300">FULLSTUCK</span> </P>
</section>
{{-- section about --}}
<section id="about" class="w-full min-h-screen  bg-white py-8 px-5 flex flex-col gap-5 justify-center">
  {{-- about --}}
<div class="flex flex-col gap-4">
    <h1 class="text-3xl font-bold text-blue-950">About</h1>
    <hr class="w-14 h-1 bg-sky-500 " >
</div>
{{-- bio --}}
<div class="flex flex-col gap-4 w-full">
    <p class="text-xl">I'm a passionate motion & graphic designer, skilled front-end developer, and aspiring full-stack enthusiast, determined to master the digital realm, also experienced in SEO strategies.</p>
</div>
<div class="flex flex-row gap-2 w-full">
    <div class="w-1/3">
    <img class="w-full h-full object-cover" src="{{ asset('img-larvl/almy.jpg') }}" alt="betua blaise profile">
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
    <p class="text-xl">Explore the art of user experience with me as your UI/UX developer & web designer. Let's turn your ideas into visually stunning online realities. Ready to shape digital experiences together?
    </p>
  </div>
</div>
</div>
<div class="flex flex-col gap-4">
   <p class="text-xl">Explore the art of user experience with me as your UI/UX developer & web designer. Let's turn your ideas into visually stunning online realities. Ready to shape digital experiences together?</p>
</div>
{{-- fact --}}
<nav class="w-full mt-8 flex flex-col gap-5 justify-center">
    <div class="flex flex-col gap-4">
        <h1 class="text-3xl font-bold text-blue-950">Facts</h1>
        <hr class="w-14 h-1 bg-sky-500 " >
    </div>
    <div>
        <p class="text-lg">Diving into a world of creativity and technology: I excel in graphic design, bring life to visuals through motion design, build functional and captivating websites, and optimize online presence with SEO expertise.</p>
    </div>
    <div class="flex flex-row px-16 gap-6 justify-between mt-6 w-full">
      <div class="flex flex-col w-1/4">
       <nav class="flex flex-row items-center justify-center gap-4">
        <i class='bx bx-happy text-6xl flex items-center justify-center text-blue-500'></i>
        <h1 class="w-3/4 text-5xl font-bold flex items-center">120</h1>
       </nav>
       <nav class="flex flex-row items-center justify-center gap-4">
        <i class='bx bx-happy text-6xl flex items-center justify-center text-white'></i>
        <div class="w-3/4 text-2xl flex items- flex flex-col">
         <h2 class="text-xl font-bold">happy clients</h2>    
         <p class="text-xl">ancaju</p>    
        </div>
       </nav>
      </div>
      <div class="flex flex-col w-1/4">
       <nav class="flex flex-row items-center justify-center gap-4">
        <i class='bx bx-briefcase-alt-2 text-6xl flex items-center justify-center text-blue-500'></i>
        <h1 class="w-3/4 text-5xl font-bold flex items-center">12</h1>
       </nav>
       <nav class="flex flex-row items-center justify-center gap-4">
        <i class='bx bx-happy text-6xl flex items-center justify-center text-white'></i>
        <div class="w-3/4 text-2xl flex items- flex flex-col">
         <h2 class="text-xl font-bold">website</h2>    
         <p class="text-xl">ancaju.com</p>    
        </div>
       </nav>
      </div>
      <div class="flex flex-col w-1/4">
       <nav class="flex flex-row items-center justify-center gap-4">
        <i class='bx bx-street-view text-6xl flex items-center justify-center text-blue-500'></i>
        <h1 class="w-3/4 text-5xl font-bold flex items-center">554</h1>
       </nav>
       <nav class="flex flex-row items-center justify-center gap-4">
        <i class='bx bx-briefcase-alt-2 text-6xl flex items-center  text-white justify-center'></i>
        <div class="w-3/4 text-2xl flex items- flex flex-col">
         <h2 class="text-xl font-bold">hark-work</h2>    
         <p class="text-xl">focus</p>    
        </div>
       </nav>
      </div>
      
    </div>
</nav>
{{-- skills --}}
<nav id="skill" class="w-full mt-8 flex flex-col gap-5 justify-center bg-sky-50 py-2">
  <div class="flex flex-col gap-4">
      <h1 class="text-3xl font-bold text-blue-950">Skills</h1>
      <hr class="w-14 h-1 bg-sky-500 " >
  </div>
  <div>
      <p class="text-lg">🎨 Proficient in graphic design, I shape ideas into visuals. 🚀 Motion design brings life to my creations. 💻 Web development is my playground for innovative coding. 📈 SEO expertise ensures online visibility. Join me in crafting impactful digital experiences that merge art and technology seamlessly.</p>
  </div>
  {{-- charts --}}
  <div class="flex flex-row  gap-4 justify-between w-full py-5 ">
    {{-- left charts --}}
    <div class="w-1/2 flex flex-col gap-4">
    <nav class="flex flex-col gap-2 w-full">
      <div class="flex flex-row justify-between w-full">
        <h1 class="font-bold text-blue-950">html</h1>
        <h1 class="font-bold text-blue-950">100</h1>
      </div>
      <div class="w-full h-3 bg-sky-200">
        <h1 class="w-5/5 h-full bg-sky-500"></h1>
      </div>

    </nav>
    <nav class="flex flex-col gap-2 w-full">
      <div class="flex flex-row justify-between w-full">
        <h1 class="font-bold text-blue-950">css/scss</h1>
        <h1 class="font-bold text-blue-950">100</h1>
      </div>
      <div class="w-full h-3 bg-sky-200">
        <h1 class="w-5/5 h-1/2 bg-sky-500"></h1>
        <h1 class="w-5/5 h-1/2 bg-gray-500"></h1>
      </div>

    </nav>
    <nav class="flex flex-col gap-2 w-full">
      <div class="flex flex-row justify-between w-full">
        <h1 class="font-bold text-blue-950">js</h1>
        <h1 class="font-bold text-blue-950">75</h1>
      </div>
      <div class="w-full h-3 bg-sky-200">
        <h1 class="w-4/6 h-full bg-sky-500"></h1>
      </div>

    </nav>
    <nav class="flex flex-col gap-2 w-full">
      <div class="flex flex-row justify-between w-full">
        <h1 class="font-bold text-blue-950">php</h1>
        <h1 class="font-bold text-blue-950">90</h1>
      </div>
      <div class="w-full h-3 bg-sky-200">
        <h1 class="w-5/6 h-full bg-sky-500"></h1>
      </div>

    </nav>
    </div>
    {{-- right chart --}}
    <div class="w-1/2 flex flex-col gap-4  p">
      <nav class="flex flex-col gap-2 w-full">
        <div class="flex flex-row justify-between w-full">
          <h1 class="font-bold text-blue-950">photoshop/adobe-illustator</h1>
          <h1 class="font-bold text-blue-950">90</h1>
        </div>
        <div class="flex flex-col w-full h-3 bg-sky-200">
          <h1 class="w-4/5 h-1/2 bg-sky-500"></h1>
          <h1 class="w-4/5 h-1/2 bg-gray-500"></h1>
        </div>
  
      </nav>
      <nav class="flex flex-col gap-2 w-full">
        <div class="flex flex-row justify-between w-full">
          <h1 class="font-bold text-blue-950">after-effects</h1>
          <h1 class="font-bold text-blue-950">90</h1>
        </div>
        <div class="w-full h-3 bg-sky-200">
          <h1 class="w-5/6 h-full bg-sky-500"></h1>
        </div>
  
      </nav>
      <nav class="flex flex-col gap-2 w-full">
        <div class="flex flex-row justify-between w-full">
          <h1 class="font-bold text-blue-950">canva/VSDC/clip-camp</h1>
          <h1 class="font-bold text-blue-950">90</h1>
        </div>
        <div class="w-full h-3 bg-sky-200">
          <h1 class="w-5/5 h-1/3 bg-sky-500"></h1>
          <h1 class="w-5/5 h-1/3 bg-yellow-200"></h1>
          <h1 class="w-5/5 h-1/3 bg-sky-300"></h1>
        </div>
  
      </nav>
      <nav class="flex flex-col gap-2 w-full">
        <div class="flex flex-row justify-between w-full">
          <h1 class="font-bold text-blue-950">tailwind/laravel/git</h1>
          <h1 class="font-bold text-blue-950">90</h1>
        </div>
        <div class="w-full h-3 bg-sky-200">
          <h1 class="w-4/5 h-1/3 bg-sky-500"></h1>
          <h1 class="w-2/5 h-1/3 bg-lime-500"></h1>
          <h1 class="w-3/5 h-1/3 bg-teal-700"></h1>
        </div>
  
      </nav>
    </div>
    
  </div>
</nav>
{{-- resume --}}
<nav id="resume" class="w-full mt-8 flex flex-col gap-5   py-2 min-h-screen">
  <div class="flex flex-col gap-4">
      <h1 class="text-3xl font-bold text-blue-950">Resume</h1>
      <hr class="w-14 h-1 bg-sky-500 " >
  </div>
  <div>
      <p class="text-lg">Experienced UI/UX designer, skilled front-end developer, and SEO expert. Proficient in graphic and motion design, creating captivating web experiences. Passionate about merging creativity and technology for impactful results.</p>
  </div>
  {{-- charts --}}
  <div class="flex flex-row  gap-4 justify-between w-full py-5 ">
    {{-- left charts --}}
    <div class="flex flex-col w-1/2">
      <nav class="w-full flex flex-col gap-2 relative pl-5 pb-8">
        <hr class="bg-blue-950 w-1 h-32  left-0 top-12 absolute">
        <hr class="bg-blue-950 w-1 h-20  left-0 bottom-10 absolute">
        <hr class="border-blue-950 w-4 h-4 rounded-full border-2  -left-1 top-2 absolute">
      <h1 class=" text-2xl font-bold text-blue-950">Summer</h1>
      <p class="text-lg">
        Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.
      </p>
      <p class="text-lg">. uganda/ kampala. congo/ kinshasa</p>
      <p class="text-lg">. +2567809 50 387</p>
      <p class="text-lg">. betuabalsie23@gmail.com</p>
      </nav>
      {{--  --}}
      <nav class="w-full flex flex-col gap-2 relative pl-5 pb-8">
        <hr class="bg-blue-300 w-1 h-32  left-0 top-12 absolute">
        <hr class="border-blue-950 w-4 h-4 rounded-full border-2  -left-1 top-2 absolute">
      <h1 class=" text-2xl font-bold text-blue-950">Training</h1>
      <div class="flex flex-col">
      <p class="text-lg">. graphic design</p>
      <p class="text-lg">. motion design</p>
      <p class="text-lg">. front-end</p>
      <p class="text-lg">. back-end</p>
      <p class="text-lg">. SEO</p>
      </div>
      </nav>
    </div>
    {{-- right chart --}}
    <div class="flex flex-col w-1/2">
      <nav class="w-full flex flex-col gap-2 relative pl-5 pb-8">
        <hr class="bg-blue-950 w-1 h-32  left-0 top-12 absolute">
        <hr class="bg-blue-950 w-1 h-20  left-0 bottom-10 absolute">
        <hr class="border-blue-950 w-4 h-4 rounded-full border-2  -left-1 top-2 absolute">
      <h1 class=" text-2xl font-bold text-blue-950">Graduet</h1>
      <p class="text-lg">
        deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.
      </p>
      <p class="text-lg">. congo/ kinshasa</p>
      <p class="text-lg">. isc/beni</p>
      <p class="text-lg">. institut superieur de commerce de beni@gmail.com</p>
      </nav>
      {{--  --}}
      <nav class="w-full flex flex-col gap-2 relative pl-5 pb-8">
        <hr class="bg-blue-300 w-1 h-32  left-0 top-12 absolute">
        <hr class="border-blue-950 w-4 h-4 rounded-full border-2  -left-1 top-2 absolute">
      <h1 class=" text-2xl font-bold text-blue-950">ressources</h1>
      <div class="flex flex-col">
      <p class="text-lg">. pnj-wings</p>
      <p class="text-lg">. unsplash</p>
      <p class="text-lg">. pexel</p>
      <p class="text-lg">. pixbay</p>
      <p class="text-lg">. panzoid</p>
      </div>
      </nav>
    </div>
    
  </div>
</nav>
{{-- Portfolio --}}
<nav id="portfolio" class="portfolio w-full flex flex-col gap-5 py-2 min-h-screen">
  <div class="flex flex-col gap-4">
      <h1 class="text-3xl font-bold text-blue-950">Portfolio</h1>
      <hr class="w-14 h-1 bg-sky-500 " >
  </div>
  <div>
      <p class="text-lg">Motion Design Graphic Designer skilled in SEO and front-end development. Committed to crafting captivating visuals and immersive digital experiences. Evolving into back-end development. Portfolio reflects a blend of creativity, technology, and a user-centric approach.</p>
  </div>
  {{-- charts --}}
  <div  class="card-parent ">
    
    @foreach ($products as $product )
    <nav class="bg-gray-200 rounded-[10px] flex flex-col gap-2 p-[1rem]">
      <h1><span class="font-bold">id:</span> {{ $product['id'] }}</h1>
      <div class="img-parent">
        <img class="w-[220px] h-[120px] shadow-lg object-cover rounded-[10px]" src="{{ asset($product['image']) }}" alt="">
      </div>
      <h2><span class="font-bold">title: </span> {{ $product['title'] }}</h2>
      <p><span class="font-bold">Description:</span> {{ $product['description'] }}</p>
      <p><span class="font-bold">delay:</span>{{$product['delay']}}</p>
    </nav> 
    @endforeach
   
    
    
  </div>
</nav>
</section>


@endsection