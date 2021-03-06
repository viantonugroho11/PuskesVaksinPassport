<div>
    {{-- The Master doesn't talk, he acts. --}}
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Vaksinasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Vaksinasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <a href="{{route('admin.vaksinasi.create')}}" class="btn btn-xs btn-primary">Tambah Vaksinasi</a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Vaksinasi</th>
                      <th>Tempat</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Stok</th>
                    </tr>
                  </thead>
                  @php
                    $no=1;
                  @endphp
                  <tbody>
                    @foreach ($vaksinasi as $item)
                        <tr> 
                          <td>{{$no++}}</td>
                          <td>{{$item->nama}}</td>
                          <td>{{$item->TempatNama}}</td>
                          <td>{{$item->tanggal}}</td>
                          <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                          <td>{{$item->stok}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@push('scriptcss')
@endpush
@push('scriptjs')
@endpush