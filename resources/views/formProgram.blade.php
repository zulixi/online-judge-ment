@extends('layouts.app')

@section('content')
    <h1>提出の問題1-1</h1>
    <p>Javaで文字を表示してください</p>
    <p>例 Hello Java</p>
    <p>input なし </p>
    <p>output Hello Java </p>

    <form action="/form" method="post">
        {{csrf_field()}}
        <select name="problem" id="">
            <option value="problem1">problem1</option>
            <option value="problem2">problem2</option>
            <option value="problem3">problem3</option>
            <option value="problem4">problem4</option>
            <option value="problem5">problem5</option>
            <option value="Calc">Calc</option>
            <option value="Main">Main</option>

        </select>
        <select name="lang">
            <option value="php">php</option>
            <option value="java-8">java</option>
            <option value="sql">sql</option>
        </select><br>
        <textarea name="sourceCode"  cols="30" rows="10"></textarea><br>
        <input type="submit" value="Submit">
    </form>
@endsection
