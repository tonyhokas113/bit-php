<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CalcController extends Controller
{
    public function suma($one, $two)
    {
        return view('calculator.suma', ['susumuota' => $one + $two]);
    }

    public function showDaugyba()
    {
        $rez = Session::pull('rez', '');
        $x = Session::pull('x', '');
        $y = Session::pull('y', '');
        return view('calculator.daugyba', [
            'rezultatas' => $rez,
            'x' => $x,
            'y' => $y
        ]);
    }


    public function doDaugyba(Request $request)
    {
        $iksas = $request->x; // name="x"
        $igrekas = $request->y; // name="y"
        $result = $iksas * $igrekas;
        Session::put('rez', $result);
        Session::put('x', $iksas);
        Session::put('y', $igrekas);
        return redirect()->route('show');
    }



}
