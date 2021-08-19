@extends('admin.layouts.index')

@section('judul', 'Selamat Datang di Halaman Tambah Data')

@section('head')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset ('backend/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('konten')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/artikel" enctype="multipart/form-data">
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
                <label for="judul">Judul Artikel</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Judul Artikel">
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
            <label>Quote</label>
            <textarea id="summernote4" name="quote">
              
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

@endsection

@section('script')
<!-- Summernote -->
<script src="{{ asset ('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote1').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<script>
  $(function () {
    // Summernote
    $('#summernote2').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<script>
  $(function () {
    // Summernote
    $('#summernote3').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<script>
  $(function () {
    // Summernote
    $('#summernote4').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<!-- summernote -->
@endsection