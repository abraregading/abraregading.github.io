<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Proyek</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/proyek" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Pilih Kategori</label>
                <select class="custom-select" name="kategori_id">
                  <option>pilih_kategori</option>
                  @foreach($kategori as $data)
                  <option value="{{ $data->id }}">{{ $data->kt }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Proyek</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Judul Proyek">
              </div>
            </div>
            <label>Isi Berita 1</label>
            <textarea id="summernote1" name="isi1">
              
            </textarea>
            <label>Isi Berita 2</label>
            <textarea id="summernote2" name="isi2">
              
            </textarea>
            <label>Isi Berita 3</label>
            <textarea id="summernote3" name="isi3">
              
            </textarea>

            <label for="gambar">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
           

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>