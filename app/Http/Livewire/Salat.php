<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Salat as Salatt;use 

Illuminate\Support\Facades\DB;


class Salat extends Component
{

	public $salat;

    public function mount()
    {

        $this->salat = Salatt::where('iqama','>', collect(DB::select('SELECT CURRENT_TIME AS lokaci'))->first()->lokaci )->orderBy('iqama')->first();

    }

    public function render()
    {
        return view('livewire.salat');
    }
}
