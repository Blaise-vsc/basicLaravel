<div class="w-full min-h-full flex flex-col gap-[2rem]">
    <form wire:submit='register' class="flex flex-col gap-2">
       <h1 class="mb-3 font-bold">STUDENT REGESTOR</h1>
       <nav class='flex flex-row gap-8'>
       <label class="mb-2 font-bold text-blue-500">First Name:</label>
       <input class="border border-blue-100 p-[2px] mb-[6px] w-[400px]" type="text" wire:model='firstName'>
                   {{--  --}}
    </nav>
    <nav class='flex flex-row gap-8'>
       <label class="mb-2 font-bold text-blue-500">Last-Name:</label>
       <input class="border border-blue-100 p-[2px] mb-[6px] w-[400px]" type="text" wire:model='lastName'>
                   {{--  --}}
    </nav>
    <nav class='flex flex-row gap-8'>
       <label class="mb-2 font-bold text-blue-500">Age:</label>
       <input class="border border-blue-100 p-[2px] mb-[6px] w-[400px]" type="number" wire:model='age' required>
                   {{--  --}}
    </nav>
    <nav class='flex flex-row gap-8'>
       <label class="mb-2 font-bold text-blue-500">Course:</label>
       <input class="border border-blue-100 p-[2px] mb-[6px] w-[400px]" type="text" wire:model='course' required>
                   {{--  --}}
    </nav>
    <nav class='flex flex-row gap-8'>
       <label class="mb-2 font-bold text-blue-500">Number:</label>
       <input class="border border-blue-100 p-[2px] mb-[6px] w-[400px]" type="number" wire:model='number' required>
                   {{--  --}}
    </nav>
    <nav class='flex flex-row gap-8'>
       <label class="mb-2 font-bold text-blue-500">City:</label>
       <input class="border border-blue-100 p-[2px] mb-[6px] w-[400px]" type="text" wire:model='city' required>
                   {{--  --}}
    </nav>
    <nav class='flex flex-row gap-8'>
       <label class="mb-2 font-bold text-blue-500">Country:</label>
       <input class="border border-blue-100 p-[2px] mb-[6px] w-[400px]" type="text" wire:model='country' required>
                   {{--  --}}
    </nav>
    <button class="px-[2px] py-[5px] bg-blue-400 rounded-full hover:bg-blue-300 hover:transition-all w-[100px] text-white" type="submit">send</button>
    </form>
    {{--  --}}
    <h1 class="w-[100px] h-[100px] bg-blue-400 rounded-full text-white font-bold fixed z-1 top-[30] right-2 flex items-center justify-center text-[120%]">
       {{count($students)}}
    </h1>
    {{--  --}}
    <div class="w-full grid sm:grid-cols-3 gap-x-2 gap-y-2">
        @foreach ($students as $student)
            
         <div class="border border-blue-200 p-2">
            <h1 class="mb-3 font-bold">WELCOME <span class="uppercase">{{ $student['firstName'] }}</span> <span class="uppercase">{{ $student['lastName'] }}</span> INFORMATIONS</h1>
            <p class="mb-2 font-bold text-blue-500">First Name: <span class="lowercase"> {{ $student['firstName'] }}</span> </p>
            <p class="mb-2 font-bold text-blue-500">Last-Name: <span class="lowercase">{{ $student['lastName'] }}</span> </p>
            <p class="mb-2 font-bold text-blue-500">Age: <span class="lowercase">{{ $student['age'] }}</span></p>
            <p class="mb-2 font-bold text-blue-500">Course: <span class="lowercase">{{ $student['course'] }}</span></p>
            <p class="mb-2 font-bold text-blue-500">Number: <span class="lowercase">{{ $student["number"] }}</span></p>
            <p class="mb-2 font-bold text-blue-500">City/Country: <span class="lowercase">{{ $student['city'] }}</span>  / <span class="lowercase">{{ $student['country'] }}</span></p>
         </div>  
         @endforeach
    </div>

</div>
