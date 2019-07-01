<?php namespace estoque\Http\Controllers;
//Route::get('/produtos', 'ProdutoController@lista');
use DB;
class ProdutoController extends Controller {

    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        return view('listagem')->with('produtos', $produtos);
    }
}

