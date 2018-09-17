@extends('layouts.app')

@section('title', '新建文章')

@section('content')
    <div id="editSection"></div>
@endsection

@section('scripts')
    <script>
      var editor = new Editor({
        el: document.querySelector('#editSection'),
        initialEditType: 'markdown',
        previewStyle: 'vertical',
        height: '300px'
      });
    </script>
@endsection