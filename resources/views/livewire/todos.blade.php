<div class="w-full h-full flex items-center justify-center flex-col">
    <form wire:submit='addTodo'>
        <div class="mb-3">
            <label for="title">title</label> <br>
            <input type="text" wire:model='title' class="border border-gray-600  text-[100%] p-[3px] " required>
        </div>
        <div>
            <label for="description"> description</label> <br>
            <input type="text" wire:model='desc' class="border border-gray-600  text-[100%] p-[3px]" required>
        </div>
        <button class="p-1 rounded-full bg-blue-400 text-white mt-4"  type="submit">submit</button>
    </form>

      <div class="mt-4 border border-blue-200 w-[30%] min-h-[15%] px-2 py-1">
         <p>{{ count($notes) }}</p>
         <ul class="list-disc">
         @foreach ($notes as $note)
             <li>{{ $note['title'] }}</li>
             <li>{{ $note['desc'] }}</li>
             <p class="w-[80px] h-[2px] bg-gray-300" ></p>
         @endforeach
        </ul>
      </div>


</div>
