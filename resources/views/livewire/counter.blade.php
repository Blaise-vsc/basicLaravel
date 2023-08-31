<div class='w-full min-h-full flex flex-col justify-center item bg-red-200'>
   <div class="w-[200px] h-[200px] flex justify-center items-center bg-white text-gray-600"><h1>the quintity is {{ $qty }}</h1></div>
   <button wire:click='increment' class="p-[5px] rounded-full bg-blue-400 text-white m-[1rem] h-[40px] max-w-[90px]">increment</button>
   <button wire:click='decrement' class="p-[5px] rounded-full bg-blue-400 text-white m-[1rem]  h-[40px] max-w-[90px]">decrement</button>
   <h1>{{$title}}</h1>
   <h1>{{$description}}</h1>
</div>
