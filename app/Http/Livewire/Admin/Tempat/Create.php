<?php

namespace App\Http\Livewire\Admin\Tempat;

use Livewire\Component;
use App\Models\Tempat;
use Livewire\WithFileUploads;
class Create extends Component
{
    use WithFileUploads;

    public $nama;
    public $alamat;
    public $link;
    public $foto;

    public function store()
    {
        $this->validate([
            'nama'      => 'required',
            'alamat'      => 'required',
            'link'      => 'required',
        ]);
        // dd($this->foto);
        if($this->foto==null)
        {
            // $this->foto->storeAs('public/photoTempat/', $this->foto->hashName());
            $tempat = Tempat::create([
                'nama'     => $this->nama,
                'alamat'=> $this->alamat,
                'koordinat'   =>$this->link,
                // 'foto'     =>$this->foto->hashName(),
            ]);
        }else{
            $this->foto->storeAs('public/photoTempat/', $this->foto->hashName());
            $tempat = Tempat::create([
                'nama'     => $this->nama,
                'alamat'=> $this->alamat,
                'koordinat'   =>$this->link,
                'foto'     =>$this->foto->hashName(),
            ]);
        }
        // dd($tempat);
        return redirect()->route('admin.tempat');
    }
    public function render()
    {
        return view('livewire.admin.tempat.create');
    }
}
