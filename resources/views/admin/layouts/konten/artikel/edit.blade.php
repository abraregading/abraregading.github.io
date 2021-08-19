<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/artikel/{{ $artikel->id }}" enctype="multipart/form-data">
              @method('patch')
              @csrf
              <div class="form-group">
                <label>Pilih Menu</label>
                <select class="custom-select" name="menu_id">
                  <option>pilih_menu</option>
                  @foreach($menu as $data)
                  <option value="{{ $data->id }}" {{ ($artikel->menu_id == $data->id) ? 'selected' : '' }}>{{ $data->menu }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Pilih Kategori</label>
                <select class="custom-select" name="kategori_id">
                  <option>pilih_kategori</option>
                  @foreach($kategori as $data)
                  <option value="{{ $data->id }}" {{ ($artikel->kategori_id == $data->id) ? 'selected' : '' }}>{{ $data->kt }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Judul Artikel" value="{{ $artikel->judul }}">
              </div>
            </div>
            <label>Isi Berita 1</label>
            <textarea id="summernote1" name="isi1">
            {{ $artikel->isi1 }}
            </textarea>
            <label>Isi Berita 2</label>
            <textarea id="summernote2" name="isi2">
            {{ $artikel->isi2 }}
            </textarea>
            <label>Isi Berita 3</label>
            <textarea id="summernote3" name="isi3">
            {{ $artikel->isi3 }}
            </textarea>

            <label for="gambar">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ubah</button>
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