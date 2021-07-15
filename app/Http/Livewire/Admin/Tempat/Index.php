<?php

namespace App\Http\Livewire\Admin\Tempat;

use Livewire\Component;
use App\Models\Tempat;
class Index extends Component
{
    public function destroy($id)
    {
        $tempat = Tempat::find($id);
        if($tempat) {
           $tempat->delete();
        }
        //redirect
        return redirect()->route('admin.tempat');
    }
    public function render()
    {
        $tempat=Tempat::all();
        return view('livewire.admin.tempat.index',compact('tempat'));
    }
}
