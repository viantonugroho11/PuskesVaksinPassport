<?php

namespace App\Http\Livewire\Admin\Vaksinasi;

use Livewire\Component;
use App\Models\Tempat;
use App\Models\Vaksinasi;
class Create extends Component
{
    public $nama;
    public $tempat;
    // public $tanggal_swab;
    public $stok;
    public $tanggal;
    public $mulai;
    public $selesai;

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'tempat' => 'required',
            'stok' => 'required',
            'tanggal' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
        ]);
        $vaksinasi = Vaksinasi::create([
            'nama' => $this->nama,
            'id_tempat' => $this->tempat,
            'stok' => $this->stok,
            'tanggal' => $this->tanggal,
            'jam_mulai' => $this->mulai,
            'jam_selesai' => $this->selesai,
        ]);
        return redirect()->route('admin.vaksinasi');
    }

    public function render()
    {
        $tempat=tempat::all();
        return view('livewire.admin.vaksinasi.create',compact('tempat'));
    }
}
