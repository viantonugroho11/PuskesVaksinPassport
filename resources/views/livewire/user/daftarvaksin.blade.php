<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
      {{-- Stop trying to control. --}}
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <form wire:submit.prevent="store">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Pendaftaran Vaksinasi COVID-19</h2>
                    <h3 class="">Informasi Pribadi</h3>
                    
                        <div class="row">
                            <div class="input-group" style="width: 100%">
                                <label class="label">Nama Lengkap (sesuai KTP) *</label>
                                <input wire:model="nama" class="input input--style-4" type="text" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group" style="width: 100%">
                                <label class="label">Nomor Induk Kependudukan (NIK) *</label>
                                <input wire:model="nik" class="input input--style-4" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group" style="width: 100%">
                                <label class="label">Tanggal Lahir *</label>
                                <input wire:model="tanggal" class="input--style-4" type="date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group" style="width: 100%">
                                <label class="label">Nomor Whatsapp Aktif *</label>
                                <input wire:model="nomor" class="input input--style-4" type="number" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group" style="width: 100%">
                                <label class="label">Alamat Surel (Email) *</label>
                                <input wire:model="email" class="input input--style-4" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group" style="width: 100%">
                                <label class="label">Alamat Lengkap Sesuai KTP *</label>
                                <textarea wire:model="alamat" class="input input--style-4" style="width: 100%;resize: vertical;" name="first_name"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group" style="width: 100%">
                                <label class="label">Jenis Kelamin *</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Laki-Laki
                                            <input wire:model="jenis_kelamin" type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Perempuan
                                            <input wire:model="jenis_kelamin" type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
            <br>
            <div class="card card-4">
                <div class="card-body">
                    <h4 class="title">Jadwal dan Sesi</h4>
                    <h5 >Apabila tanggal/sesi vaksin tidak dapat dipilih, kuota pada tanggal/sesi vaksin tersebut telah habis.</h5>
                    <form method="">
                        <br>
                        <div class="input-group">
                            <label class="label">Lokasi Vaksin</label>
                                <select wire:model="lokasi" wire:change="$emit('postAdded')">
                                    {{-- <option disabled="disabled" selected="selected">Pilih Tempat</option> --}}
                                    <option>Pilih Tempat</option>
                                    @foreach ($tempatvaksin as $item)
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="input-group">
                            <label class="label">Tanggal Vaksin</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select wire:model="tanggal_vaksin">
                                    <option disabled="disabled" selected="selected">Pilih Tanggal</option>
                                    @if($tanggal_vaksinasi)
                                    @foreach ($tanggal_vaksinasi as $item)
                                        <option>{{$item->tanggal}}</option>
                                    @endforeach
                                    @endif
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Sesi Vaksin</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select wire:model="sesi">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
