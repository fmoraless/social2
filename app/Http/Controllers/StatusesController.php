<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function store()
    {
        $status = Status::create([
            'body' => request('body'),
            'user_id' => auth()->id()
            ]);
        return response()->json(['body' => $status->body]);
    }
}
