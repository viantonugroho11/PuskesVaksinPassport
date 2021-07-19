<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Tempat;
use App\Models\Vaksinasi;
use App\Models\DaftarVaksinasi;
class Daftarvaksin extends Component
{
    public $nama;
    public $alamat;
    public $nomor;
    public $email;
    public $tanggal;
    public $nik;
    public $jenis_kelamin;
    public $tanggal_vaksin;
    public $lokasi;
    public $sesi;

    public $tanggal_vaksinasi;
    protected $listeners = ['postAdded' => 'showPostAddedMessage'];
    public function store()
    {
        $this->tanggal_vaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->get();
        // dd($this->lokasi,$this->tanggal_vaksinasi);
            // dd();
    }


    public function showPostAddedMessage()
    {
        $this->tanggal_vaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->get();
    }
    public function mount()
    {
        // dd($this->lokasi);
        if($this->tanggal_vaksinasi){
            $this->tanggal_vaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->get();
            // dd($this->tanggal_vaksinasi);
        }
    }
    public function render()
    {
        $tempatvaksin=Tempat::all();
        if($this->tanggal_vaksinasi){
            $this->tanggal_vaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->get();
            // dd($this->tanggal_vaksinasi);
        }
        // $cekvaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->first();
        // $countstok=DaftarVaksinasi::where('id_vaksinasi','=',$cekvaksinasi->id)->count();
        return view('livewire.user.daftarvaksin',compact('tempatvaksin'));
    }
}
