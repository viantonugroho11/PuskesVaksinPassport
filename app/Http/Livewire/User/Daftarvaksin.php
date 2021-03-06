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
    public $sesiform;
    
    public $lokasi;
    public $sesi;
    public $tanggal_vaksinasi;
    protected $listeners = ['postAdded' => 'showPostAddedMessage',
                            'postTanggal'=>'showSesiPage'];
    public function store()
    {
        // $this->tanggal_vaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->get();
        // dd($this->lokasi,$this->tanggal_vaksinasi);
        // $this->sesi=Vaksinasi::where('id_tempat','=',$this->lokasi)->where('tanggal','=',$this->tanggal_vaksin)->get();
            // dd();
        $this->validate([
            'nama'   => 'required',
            'alamat'   => 'required',
            'nomor'   => 'required',
            'email'   => 'required',
            'tanggal'   => 'required',
            'nik'   => 'required',

            'jenis_kelamin'   => 'required',
            'lokasi'   => 'required',
            'tanggal_vaksin'   => 'required',
            'sesiform'   => 'required',
        ]);
        
        $cekdaftar=DaftarVaksinasi::where('nik','=',$this->nik)->first();
        if(!$cekdaftar){
            $dftVaksinasi = DaftarVaksinasi::create([
                'nama'     => $this->nama,
                'id_user'   =>'null',
                'id_vaksinasi'=> $this->sesiform,
                'nik'=> $this->nik,
                'alamat'=> $this->alamat,
                'tanggal_lahir'=> $this->tanggal_vaksin,
                'email'=> $this->email,
                'no_telp'=> $this->nomor,
                'foto_ktp'=> 'null',
                'link'=>'null',
            ]);

            //flash message
            session()->flash('message', 'Data Berhasil Disimpan.');

            //redirect
            return redirect()->route('user.home');
        }
        else
        {
            //flash message
            session()->flash('message', 'Data Telah DiTelah Didaftar.');

            //redirect
            return redirect()->route('user.daftarvaksin');
        }
    }


    public function showPostAddedMessage()
    {
        $this->tanggal_vaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->get();
    }
    public function showSesiPage()
    {
        $this->sesi=Vaksinasi::where('id_tempat','=',$this->lokasi)->where('tanggal','=',$this->tanggal_vaksin)->get();
        // dd($this->sesi,$this->lokasi,$this->tanggal_vaksin);
    }
    public function mount()
    {
        // dd($this->lokasi);
        if($this->tanggal_vaksinasi){
            // $this->tanggal_vaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->distinct('tanggal');
            // dd($this->tanggal_vaksinasi);
        }
    }
    public function render()
    {
        $tempatvaksin=Tempat::all();
        if($this->tanggal_vaksinasi){
            $this->tanggal_vaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->select('tanggal')->distinct()->get();
            // dd($this->tanggal_vaksinasi);       
        }
        if($this->tanggal_vaksin){
            $this->sesi=Vaksinasi::where('id_tempat','=',$this->lokasi)->where('tanggal','=',$this->tanggal_vaksin)->get();
            // dd($this->sesi);
        }
        // $cekvaksinasi=Vaksinasi::where('id_tempat','=',$this->lokasi)->first();
        // $countstok=DaftarVaksinasi::where('id_vaksinasi','=',$cekvaksinasi->id)->count();
        return view('livewire.user.daftarvaksin',compact('tempatvaksin'));
    }
}
