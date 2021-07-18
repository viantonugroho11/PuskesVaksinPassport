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
        $vaksinasi=Vaksinasi::join('tempats','tempats.id','vaksinasis.id_tempat')
        ->select('vaksinasis.*','tempats.nama as TempatNama')
        ->latest()->get();
        return view('livewire.admin.vaksinasi.index',compact('vaksinasi'));
    }
}
