<div>
    {{-- In work, do what you enjoy. --}}
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form wire:submit.prevent="store">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" wire:model="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Vaksinasi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input type="text" wire:model="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Vaksinasi">
                    <select wire:model="tempat" class="form-control">
                        <option></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="number" wire:model="stok" class="form-control" id="exampleInputEmail1" placeholder="Stok ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" wire:model="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Vaksinasi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam Mulai</label>
                    <input type="date" wire:model="mulai" class="form-control" id="exampleInputEmail1" placeholder="Jam Mulai">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam Selesai</label>
                    <input type="date" wire:model="selesai" class="form-control" id="exampleInputEmail1" placeholder="Jam Selesai">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
