<?php

namespace estoque\Http\Controllers;

use DB;
//use \Illuminate\Http\Request;
use Request;


class ProdutoController extends Controller {

    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        return view('listagem')->with('produtos', $produtos);
    }
    public function mostra(){
        //public function mostra(Request $request){
        //$id=$this->request->input('id',0);
        //$id = Request::INPUT('id',0);
        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?',[$id]);
        return view('detalhes')->with('p', $produto[0]);
    }
    public function novo(){
        return view('formulario');
    }
}

