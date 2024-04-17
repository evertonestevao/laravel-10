<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request) {

        return Produto::filter($request->all())->get();

        // return Produto::where('categoria',$request->input('categoria'))->get();

        // return Produto::find($request->input('id'));

        // return Produto::all();

    }


}
