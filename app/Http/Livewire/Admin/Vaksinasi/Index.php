<?php

namespace App\Http\Livewire\Admin\Vaksinasi;

use Livewire\Component;
use App\Models\Vaksinasi;
use App\Models\DaftarVaksinasi;
use App\Models\Tempat;

class Index extends Component
{
    public function render()
    {
        $vaksinasi=Vaksinasi::all();
        return view('livewire.admin.vaksinasi.index',compact('vaksinasi'));
    }
}
