<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index($id = null)
    {
        return view('frontend.user.document.editor');
    }
    public function getComponent(Request $request)
    {
        $type = $request->type ?? 'text';
        $view = view('frontend.user.document.components.' . $type, get_defined_vars())->render();

        return response()->json(['view' => $view]);
    }
}
