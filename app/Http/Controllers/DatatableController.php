<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function index()
    {
        $users = User::with('buyer')->get();

        return response()->json([
            'data' => $users
        ]);
    }
}
