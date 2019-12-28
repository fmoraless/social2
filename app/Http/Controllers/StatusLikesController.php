<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusLikesController extends Controller
{
    public function store(Status $status)
    {
        $status->like();

        /*$status->likes()->create([
            'user_id' => auth()->id()
        ]);*/
    }
}
