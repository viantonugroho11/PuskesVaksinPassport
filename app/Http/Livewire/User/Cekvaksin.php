<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\DaftarVaksinasi;
use App\Models\Vaksinasi;
use App\Models\Tempat;
class Cekvaksin extends Component
{
    public $nik;
    public $hasil;
    public $tempat;
    public $vaksinasi;
    public $cekvaksin;
    public function cekdata()
    {
        $this->hasil=DaftarVaksinasi::where('nik','=',$this->nik)->get();
        $cekdatavaksin=DaftarVaksinasi::where('nik','=',$this->nik)->first();
        // dd($cekdatavaksin);
        $this->cekvaksin=DaftarVaksinasi::where('nik','=',$this->nik)->first();
        $this->vaksinasi=Vaksinasi::where('id','=',$cekdatavaksin->id_vaksinasi)->first();
        // $this->tempat=Tempat::where('id','=',$this->vakinasi->id_tempat)->first();
    }
    public function render()
    {
        return view('livewire.user.cekvaksin');
    }
}
