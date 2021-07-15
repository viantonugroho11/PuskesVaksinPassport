<?php

namespace App\Http\Livewire\Admin\Tempat;

use Livewire\Component;
use App\Models\Tempat;
use Livewire\WithFileUploads;
class Edit extends Component
{
    use WithFileUploads;

    public $tempatId;
    public $nama;
    public $alamat;
    public $link;
    public $foto;

    public function mount($id)
    {
        $tempat = Tempat::find($id);
        if($tempat) {
            $this->tempatId   = $tempat->id;
            $this->nama       = $tempat->nama;
            $this->alamat  = $tempat->alamat;
            $this->link     = $tempat->koordinat;
        }
    }
    public function update()
    {
        $this->validate([
            'nama'      => 'required',
            'alamat' => 'required',
            'link'    => 'required',
        ]);

        if($this->tempatId) {

            $tempat = Tempat::find($this->tempatId);
            
            if($tempat) {
                if($this->foto==null)
                {
                    $tempat->update([
                        'nama'     => $this->nama,
                        'alamat'=> $this->alamat,
                        'koordinat'   =>$this->link,
                    ]);
                }
                else
                {
                    $this->foto->storeAs('public/photoTempat/', $this->foto->hashName());
                    $tempat->update([
                        'nama'     => $this->nama,
                        'alamat'=> $this->alamat,
                        'koordinat'   =>$this->link,
                        'foto'     =>$this->foto->hashName(),
                    ]);
                }
            }
        }
        return redirect()->route('admin.tempat');
    }
    public function render()
    {
        return view('livewire.admin.tempat.edit');
    }
}
