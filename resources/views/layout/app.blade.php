<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- box icons --}}
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      {{-- tailwindcss --}}
      <script src="https://cdn.tailwindcss.com"></script>
      {{-- font link --}}
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">
      
    <title>@yield('title')</title>
</head>
<body class="font-family: 'Roboto', sans-serif;">
    <main class="relative w-full min-h-screen flex items-center justify-end bg-blue-200">
    <div class="w-1/4 min-h-screen bg-gray-900 text-gray-400 py-8 px-8 fixed top-0 left-0">
     <div class="flex items-center justify-center flex-col gap-4">
        <img src="https://betuablaise.netlify.app/profil.jpg" class="w-32 h-32 object-contain rounded-full border-4 border-gray-700 bg-white" alt="betua blaise">
        <h2 class="font-bold text-xl">BETUA BLAISE</h2>
        <div class="flex flex-row gap-3 ">
            <i class='bx bxl-linkedin flex items-center justify-center  text-xl text-gray-900 bg-gray-400 rounded-full  w-8 h-8 hover:bg-blue-600 easy-in duration-150'></i>
            <i class='bx bxl-whatsapp flex items-center justify-center text-xl text-gray-900 bg-gray-400 rounded-full w-8 h-8 hover:bg-blue-600 easy-in duration-150'></i>
            <i class='bx bxl-facebook flex items-center justify-center text-xl text-gray-900 bg-gray-400 rounded-full w-8 h-8 hover:bg-blue-600 easy-in duration-150'></i>
            <i class='bx bxl-instagram flex justify-center items-center  text-xl text-gray-900 bg-gray-400 rounded-full w-8 h-8 hover:bg-blue-600 easy-in duration-150'></i>
        </div>
        <hr class="w-full ">
    </div>
     <div class="flex flex-col py-8 w-full h-full">
        <a href="/" class="flex flex-row gap-3 hover:border-b-2 border-gray-500  hover:text-gray-300 easy-in durection-00 hover:w-full py-2 px-2 align-items" >
            <i class='bx bxs-home flex items-center text-lg'></i>
            <h1 class="text-lg">home</h1>
        </a>
        <a href="/about" class="flex flex-row gap-3 hover:border-b-2 border-gray-500  hover:text-gray-300 easy-in durection-00 hover:w-full py-2 px-2 align-items" >
            <i class='bx bx-building-house flex items-center text-lg'></i>
            <h1 class="text-lg">about</h1>
        </a>
        <a href="/services" class="flex flex-row gap-3 hover:border-b-2 border-gray-500  hover:text-gray-300 easy-in durection-00 hover:w-full py-2 px-2 align-items" >
            <i class='bx bxs-contact flex items-center text-lg'></i>
            <h1 class="text-lg">services</h1>
        </a>
        <a href="/dashboard" class="flex flex-row gap-3 hover:border-b-2 border-gray-500  hover:text-gray-300 easy-in durection-00 hover:w-full py-2 px-2 align-items" >
            <i class='bx bxs-dashboard flex items-center text-lg'></i>
            <h1 class="text-lg">dashboard</h1>
        </a>
     </div>
        
    </div>
        <div class="w-3/4 min-h-screen flex justify-center flex-col bg-fixed bg-cover" style="background-image: url('https://images.unsplash.com/photo-1620570623737-efc0ec4ab486?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHRlY2hub2xvZ3klMjBiYWNrZ3JvdW5kfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60')">
        @yield('content')
        </div>
    </main>
</body>
</html>
