@extends('layouts.app')

@section('content')
    <h1>実行環境(コードテスト)</h1>
    <p>Java</p>
    <form action="/test" method="post">
        {{ csrf_field() }}

        <p>ソースコード</p>
        <textarea name="sourceCode" id="" cols="30" rows="10"></textarea>
        <p>標準入力</p>
        <textarea name="input" id="input" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" id="" value="submit">

        @if(session('message'))
            <div class="alert alert-info mb-3">
                {{session('message')}}
            </div>
        @endif
        <p>標準出力</p>
        <textarea name="output" id="output" cols="30" rows="10"　readonly>@if(isset($output)){{$output}}@endif</textarea>
        <p>標準出力エラー</p>
        <textarea name="error"  id="error" cols="30" rows="10" readonly>@if(isset($outerr)){{$outerr}}@endif</textarea>
    </form>
@endsection
