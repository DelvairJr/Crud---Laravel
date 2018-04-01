<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use estoque\Models\Produto;

class ProdutoController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view( 'produtos.formulario' );
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        $produto = Produto::find( $id );

        if( empty( $produto ) )
        {
            return "Esse produto não existe";
        }else
        {
           //return ("chegou aqui");
           return view( 'produtos.detalhes', [ 'p' => $produto ] );
        }  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        Produto::create( $request->all() );

        return redirect()
        ->action( 'ProdutoController@listProducts' )
        ->withInput( $request->only( 'nome' ) );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $produto = Produto::find($id);
        
        $produto->delete();

        return redirect()
        ->action( 'ProdutoController@listProducts' );
    }

    public function listProducts()
    {
       // $produtos = DB::select( 'select * from produtos' ); Método tradicional com query
       
       $produtos = Produto::all(); //Método com Eloquent ORM
       return view( 'produtos.listagem', [ 'produtos' => $produtos ] );

        //return view( 'listagem' )->withProdutos( $produtos ); //implementação com Magic Method
        //return view( 'listagem' )->with( 'produtos', $produtos ); //implementação padrão
    }

    

}
