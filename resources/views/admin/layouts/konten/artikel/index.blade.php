<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Dafar Kategori Artikel</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="/artikel/create" class="btn btn-sm btn-primary sm-3">Tambah Data</a>
                  @if (session('pesan'))
                        <div class="alert alert-success">
                            {{ session('pesan') }}
                        </div>
                    @endif
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($artikel as $data)
                  <tr>
                    <td width="80">{{ $loop->iteration }}</td>
                    <td>{{ $data->kt }}</td>
                    <td>{{ $data->judul }}</td>
                    <td width="120">
                        <a href="/artikel/{{ $data->id }}/edit" class="btn btn-sm btn-info">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus{{ $data->id }}">Hapus</button>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    @foreach($artikel as $data)
<div class="modal fade" id="hapus{{ $data->id }}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-danger">
        <div class="modal-header">
            <h4 class="modal-title">{{ $data->judul }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Apakah anda yakin akan menghapus data ini?</p>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
            <form action="/artikel/{{ $data->id }}" method="post">
                @method('delete')
                @csrf
            <button type="submit" class="btn btn-outline-light">Iya</button>
            </form>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
