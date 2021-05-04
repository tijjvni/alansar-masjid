<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class HallPermit extends Component
{

	public function mount()
	{
		return Storage::download('alansar-masjid-handbook.pdf');
	}

    public function render()
    {
        return view('livewire.hall-permit');
    }
}
