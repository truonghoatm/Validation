<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'number' => 'required|numeric',
        ]);
        echo 'Da xac thuc thanh cong';
    }
}
