<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Tempat;
use App\Models\Vaksinasi;
use App\Models\DaftarVaksinasi;
class Dashboard extends Component
{
    public function render()
    {
        $tempat=Tempat::count();
        $vaksinasi=Vaksinasi::count();
        $jumlahvaksin=Vaksinasi::sum('stok');
        $daftarvaksin=DaftarVaksinasi::count();
        return view('livewire.admin.dashboard',compact(['tempat','vaksinasi','jumlahvaksin','daftarvaksin']));
    }
}
