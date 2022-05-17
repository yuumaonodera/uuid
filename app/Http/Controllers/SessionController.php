<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSes(Request $request)
    {
        $data = $request->session()->get('txt');
        return view('/session', ['data'=>$data]);
    }
    public function postSes(Rewuest $request)
    {
        $txt = $request->input;
        $request->session()->put('txt', $txt);
        return redirect('/session');
    }
}

