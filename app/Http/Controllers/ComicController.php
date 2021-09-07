<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    public function comics() {
        $data = Comic::all();
        $data = ['comics' => $data];
        return view('main', $data);
    }

    public function details($id) {
        $data = Comic::all();
        $data = ['comic' => $data[$id]];
        return view('dettagli', $data);
    }
}
