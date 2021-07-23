<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
      {{-- Stop trying to control. --}}
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <a href="{{route('user.home')}}"><h4>Back To Home</h4></a>
                    <h2 class="title">Cek Register</h2>
                    <form wire:submit.prevent="cekdata">
                        <div class="input-group">
                            <label class="label">Nomor Induk Kependudukan (NIK) *</label>
                            <input class="input--style-4" type="text" wire:model="nik" placeholder="Masukan NIK">
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Cek Data Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            @if ($hasil)    
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Cek Vaksinasi</h2>
                    <label>Nama : {{$cekvaksin->nama}}</label></br>
                    {{-- <label>Tempat : {{$tempat->nama}}</label></br> --}}
                    <label>Tanggal : {{$vaksinasi->tanggal}}</label></br>
                    <label>Sesi : {{$vaksinasi->jam_mulai}} - {{$vaksinasi->jam_selesai}}</label></br>
                    <label>Kode : {{$cekvaksin->id_user}}</label></br>
                </div>
            </div>
            @else
            @endif
        </div>
    </div>

</div>
