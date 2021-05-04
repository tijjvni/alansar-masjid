<?php

namespace App\Http\Livewire;

use App\ContactInfo;
use Livewire\Component;

class Map extends Component
{


	public $phone;
	public $email;
	public $address;


	public function mount()
	{
    	$data = ContactInfo::find(1);

        
    	$this->phone = $data->phone;
    	$this->email = $data->email;
    	$this->address = $data->address;
	}

    public function render()
    {
        return view('livewire.map');
    }

}
