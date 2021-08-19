@extends('admin.layouts.index')

@section('judul', 'Selamat Datang di Halaman Tambah Data')

@section('head')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset ('backend') }}/plugins/summernote/summernote-bs4.min.css">
<!-- CodeMirror -->
<link rel="stylesheet" href="{{ asset ('backend') }}/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="{{ asset ('backend') }}/plugins/codemirror/theme/monokai.css">
@endsection

@section('konten')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Tambah porfolio</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="/porfolio" enctype="multipart/form-data">
          @csrf          
          <div class="card-body">
            <div class="form-group">
              <label>Pilih Kategori</label>
              <select class="custom-select" name="kategori_id">
                <option>pilih_kategori</option>
                @foreach($kategori as $data)
                <option value="{{ $data->id }}">{{ $data->kt }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="judul">Judul Artikel</label>
              <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Judul Artikel">
            </div>
          </div>

          <div class="card-body">
            <div class="card-body p-0">
              <textarea id="codeMirrorDemo1" class="p-3">
              </textarea>
            </div>
          </div>
          
        </div>
        

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
<script src="{{ asset ('backend')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="{{ asset ('backend')}}/plugins/codemirror/codemirror.js"></script>
<script src="{{ asset ('backend')}}/plugins/codemirror/mode/css/css.js"></script>
<script src="{{ asset ('backend')}}/plugins/codemirror/mode/xml/xml.js"></script>
<script src="{{ asset ('backend')}}/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote1').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo1"), {
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
<!-- summernote -->
@endsection