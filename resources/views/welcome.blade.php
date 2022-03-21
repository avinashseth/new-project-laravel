@extends('base')

@section('title', 'Homepage')

@section('body')

    <form action="{{ route('verify-age', ['roll_number'=>114521]) }}" method="post">
        @csrf
        <input type="text" name="age" />
        <input type="submit" value="Verify" />
    </form>

    <a href="{{ route('get-accounts-login-page') }}">Click here to login</a>

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