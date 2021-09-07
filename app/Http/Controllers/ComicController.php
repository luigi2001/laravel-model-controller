<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function comics() {
        $data = config('comics');
        $data = ['comics' => $data];
        return view('main', $data);
    }

    public function details($id) {
        $data = config('comics');
        $data = ['comic' => $data[$id]];
        return view('dettagli', $data);
    }
}
