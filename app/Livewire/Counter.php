<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
      $title="this is my title";
      $desc="this is my decscription";
      return view('livewire.counter',['title'=>$title,'description'=>$desc ]);
    }
    /// // /// 
    public $qty=10;
    // public function 
    public function increment (){
      $this->qty++;  
    }

    public function decrement(){
     $this->qty--;
    }

}

  
   

