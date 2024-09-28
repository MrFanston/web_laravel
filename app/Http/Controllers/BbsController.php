<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index()
    {
        $bbs = Bb::latest()->get();
        $s = "Объявления\r\r\r\n";
        foreach ($bbs as $bb)
        {
            $s .= $bb->title . "\r\n";
            $s .= $bb->price . " he,.\r\n";
            $s .= "\r\n";
        }
        return response($s);
    }
}
