<?php

namespace App\Http\Livewire\Admin\Vaksinasi;

use Livewire\Component;
use App\Models\Tempat;
use App\Models\Vaksinasi;
class Edit extends Component
{
    public $vaksinId;
    public $nama;
    public $tempat;
    // public $tanggal_swab;
    public $stok;
    public $tanggal;
    public $mulai;
    public $selesai;

    public function mount($id)
    {
        $vaksin = Vaksinasi::find($id);
        if($vaksin) {
            $this->vaksinId   = $vaksin->id;
            $this->nama       = $vaksin->nama;
            $this->tempat       = $vaksin->id_tempat;
            $this->stok     = $vaksin->stok;
            $this->tanggal       = $vaksin->tanggal;
            $this->mulai       = $vaksin->jam_mulai;
            $this->selesai       = $vaksin->jam_selesai;
        }
    }
    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'tempat' => 'required',
            'stok' => 'required',
            'tanggal' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
        ]);

        if($this->vaksinId) {

            $vaksin = Tempat::find($this->vaksinId);
            
            if($vaksin) {
                $vaksin->update([
                    'nama' => $this->nama,
                    'id_tempat' => $this->tempat,
                    'stok' => $this->stok,
                    'tanggal' => $this->tanggal,
                    'jam_mulai' => $this->mulai,
                    'jam_selesai' => $this->selesai,
                ]);
            }
        }
        return redirect()->route('admin.vaksinasi');
    }
    public function render()
    {
        $tempat=tempat::all();
        return view('livewire.admin.vaksinasi.edit',compact('tempat'));
    }
}
