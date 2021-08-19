@extends('admin.layouts.index')

@section('judul', 'Selamat Datang di Halaman Tambah Data')

@section('head')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset ('backend/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('konten')

@include('admin.layouts.konten.galeri.edit')

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
<!-- summernote -->
@endsection