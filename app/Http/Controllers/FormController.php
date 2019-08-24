<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class FormController extends Controller{
    public function form(){
        return view('formProgram');
    }

    public function post(Request $request){
        $filePath = Auth::id() . '-' . Auth::user()->name;
        $disk = Storage::disk('local');
        $disk->makeDirectory($filePath);
        $file =  $filePath . '/' . $request->problem . '.java';
        $disk->put($file , $request->sourceCode);
        $result = shell_exec("sh /Users/kei_adachi/Documents/Programming/php_lavel_lessons/experiment/shell/jrun.sh " . '/Users/kei_adachi/Documents/Programming/php_lavel_lessons/experiment/storage/app/' . $file);
        return redirect('/home')->with('flash_message' , $result);
    }
}
