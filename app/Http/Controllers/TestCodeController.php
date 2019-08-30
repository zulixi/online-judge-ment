<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TestCodeController extends Controller {
    public function test(){
        return view('exec');
    }

    public function post(Request $request){
        $filePath = Auth::id() . '-' . Auth::user()->name;
        $disk = Storage::disk('local');
        $disk->makeDirectory($filePath);
        $disk->makeDirectory($filePath . '\/input');
        $disk->makeDirectory($filePath . '\/output');
        $file = $filePath . '/Main.java';
        $disk->put($file, $request->sourceCode);
        $disk->put($filePath . '\/input/input.txt', $request->input);
        $result = shell_exec('sh ' . base_path('shell/jruninput.sh'). ' '  . storage_path('app/' . $file) . '  ' . storage_path('app/'. $filePath . '/input/input.txt'));
        $data = [ 'output' => Storage::get($filePath . '/output/output.txt'),
                'outerr' =>  Storage::get($filePath . '/output/error.txt')
            ];
        return view('/exec', $data)->with('message', $result);
    }
}
