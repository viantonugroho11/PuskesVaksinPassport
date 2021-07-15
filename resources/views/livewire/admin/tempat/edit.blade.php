<div>
    {{-- In work, do what you enjoy. --}}
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Tempat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Tempat</li>
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
                <h3 class="card-title">Input Tempat</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form wire:submit.prevent="store">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Tempat</label>
                    <input type="text" wire:model="nama" class="form-control" id="exampleInputEmail1" placeholder="Input Nama Tempat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Tempat</label>
                    <textarea wire:model.lazy="alamat" class="form-control">
                    </textarea>
                    {{-- <input type="text" wire:model="nama" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Link Alamat</label>
                    <input type="text" wire:model.lazy="link" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Foto</label>
                    <input type="file" wire:model.lazy="foto" class="form-control">
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
