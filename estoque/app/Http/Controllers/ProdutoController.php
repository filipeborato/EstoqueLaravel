<?php   namespace estoque\Http\Controllers;

//Route::get('/produtos', 'ProdutoController@lista');
use DB;
use Request;


class ProdutoController extends Controller {

    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        return view('listagem')->with('produtos', $produtos);
    }
    public function mostra(){
        $id = Request::INPUT('id',0);
        $produto = DB::select('select * from produtos where id = ?',[$id]);
        return view('detalhes')->with('p', $produto[0]);
    }
}

