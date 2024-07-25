<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function suma($num1, $num2)
    {
        $suma = $num1 + $num2;
        return response()->json(['suma' => $suma]);
    }

    public function multiplicar($num1, $num2)
    {
        $suma = $num1 * $num2;
        return response()->json(['suma' => $suma]);
    }

    public function resta($num1, $num2)
    {
        $suma = $num1 - $num2;
        return response()->json(['suma' => $suma]);
    }
}
