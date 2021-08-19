<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/menu/{{ $menu->id }}">
              @method('patch')
              @csrf
                <div class="form-group">
                  <label for="menu">Nama Menu</label>
                  <input type="text" name="menu" id="menu" class="form-control" placeholder="Masukkan Nama Menu">
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