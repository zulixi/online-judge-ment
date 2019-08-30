@extends('layouts.myapp')

@section('content')
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document" >
        <div class="modal-content">
{{--    <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" >--}}
        <div class="modal-header">
            <h1 class="heading lead">実行環境(コードテスト)</h1>
            <p>Java</p>
        </div>
        <div class="modal-body">
            <div class="text-center">
                <form action="/test" method="post">
                    {{ csrf_field() }}

                    <div class="md-form">
                        <i class="fas fa-pencil-alt fa-2x prefix"></i>
                        <label for="form10" >Source Code</label>
                        <textarea class="md-textarea form-control" name="sourceCode" rows="20" ></textarea>
                    </div>
                    <br>
                    <div class="md-form">
                        <i class="fas fa-angle-double-right fa-2x prefix"></i>
                        <label for="form9">標準入力</label>
                        <textarea class="md-textarea form-control"  name="input" id="input" rows="5"></textarea>
                    </div>
                    <div class="mx-auto">
                        <input class="btn btn-outline-primary waves-effect" type="submit" name="submit" id="" value="submit">
                    </div>

                    @if(session('message'))
                        <div class="alert alert-info mb-3">
                            {{session('message')}}
                        </div>
                    @endif
                    <div class="md-form">
                        <label for="output">標準出力</label>
                        <textarea class="md-textarea form-control" name="output" id="output" cols="30" rows="10" readonly>@if(isset($output)){{$output}}@endif</textarea>
                    </div>
                    <div class="md-form">
                        <label for="error">標準出力エラー</label>
                        <textarea class="md-textarea form-control" name="error"  id="error" cols="30" rows="10" readonly>@if(isset($outerr)){{$outerr}}@endif</textarea>
                    </div>
                </form>
            </div>

        </div>

        </div>
    </div>

@endsection
