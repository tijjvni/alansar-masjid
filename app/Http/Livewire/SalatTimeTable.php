<?php

namespace App\Http\Livewire;

use App\Salat;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SalatTimeTable extends Component
{


	public $salats;
	public $jumaa;

	public function mount()
	{
        $this->salats = Salat::where('salat','!=',"Juma'a")
        		->orderBy('iqama')
                ->get();	

        $this->jumaa = Salat::where('salat','=',"Juma'a")
                ->first();	


	}

    public function render()
    {
        return view('livewire.salat-time-table');
    }
}
