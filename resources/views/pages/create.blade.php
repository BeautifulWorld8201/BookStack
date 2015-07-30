@extends('base')

@section('head')
    <script src="/bower/tinymce-dist/tinymce.jquery.min.js"></script>
    <script src="/bower/dropzone/dist/min/dropzone.min.js"></script>
    <script src="/js/image-manager.js"></script>
@stop

@section('content')
    <form action="{{$book->getUrl() . '/page'}}" method="POST">
        @include('pages/form')
        @if($chapter)
            <input type="hidden" name="chapter" value="{{$chapter->id}}">
        @endif
    </form>
@stop

@section('bottom')
    @include('pages/image-manager')
@stop