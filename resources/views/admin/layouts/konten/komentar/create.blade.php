<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Porpolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/porpolio" enctype="multipart/form-data">
              @csrf
              
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Judul Porpolio">
              </div>
              </div>
              <label>Isi Berita 1</label>
              <textarea id="summernote1" name="isi1">
                
              </textarea>    

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