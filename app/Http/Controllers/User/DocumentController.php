<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        return view('frontend.user.document.index', get_defined_vars());
    }
}
