<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/kategori">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="kt">Kategori</label>
                    <input type="text" name="kt" id="kt" class="form-control" placeholder="Masukkan kategori">
                  </div>
                </div>
                <!-- /.card-body -->

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