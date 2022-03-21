@extends('base')

@section('title', 'Homepage')

@section('body')

    <h1>This is body</h1>

@endsection

@section('scripts')

    <script>
        console.log('hello world');
    </script>

@endsection

@section('styles')
    h1 {
        background: red;
    }
@endsection