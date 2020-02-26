<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusesController extends Controller
{
    public function store(){
      $status = Status::create(['body' => request('body'),
                                'user_id' => auth()->id()]);
      return response()->json(['body' => $status->body]);
    }
}
