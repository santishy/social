<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\Validator;

class StatusesController extends Controller
{
    public function store(Request $request){
      $request->validate(['body' => 'required|min:8']);
      $status = Status::create(['body' => request('body'),
                                'user_id' => auth()->id()]);
      return response()->json(['body' => $status->body]);
    }
}
