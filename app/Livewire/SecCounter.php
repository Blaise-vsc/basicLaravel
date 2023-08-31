<?php

namespace App\Livewire;

use Livewire\Component;

class SecCounter extends Component
{
   public $firstName="";
   public $lastName="";
   public $age="";
   public $course="";
   public $number="";
   public $city="";
   public $country="";
   public $students=[];

   public function register(){
    $this->students[]=['firstName'=>$this->firstName,'lastName'=>$this->lastName,'age'=>$this->age,'course'=>$this->course,'number'=>$this->number,'city'=>$this->city,'country'=>$this->country];
    $this->firstName='';
    $this->lastName='';
    $this->age='';
    $this->course='';
    $this->number='';
    $this->city='';
    $this->country='';
   }
    

    
    public function render()
    {
        return view('livewire.sec-counter');
    }
}
