<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

class ProdutoController extends Controller
{
    private $product;

    public function __construct(Product $product){
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = $this->product->all();
        return view('painel.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tests(){
        // ======================================================== INSERIR
        // $prod = $this->product;
        // $prod->name = 'Nome do Produto';
        // $prod->number = 1;
        // $prod->active = true;
        // $prod->category = 'Boca';
        // $prod->description = 'Descrição do Produtossssss';
        // $prod->amount = 4;
        // $prod->price = 10.50;
        // $insert = $prod->save();
        // if($insert){
        //     return 'inserido com sucesso';
        // }else{
        //     return 'não inseriu';
        // }

        // $insert = $this->product->create([
        //     'name'          => 'Batom mate',
        //     'marca'         => 'fenzza',
        //     'number'        => '330',
        //     'active'        => true,
        //     'category'      => 'Boca',
        //     'description'   => 'Batom na cor mate',
        //     'amount'        =>5,
        //     'price'         => 10.25,

        // ]);
        // if($insert){
        //     return "inserido com sucesso ID:{$insert->id}";
        // }else{
        //     return 'não inseriu';
        // }
        // ======================================================== FIM INSERIR

        // ======================================================== UPDATE

        // $prod = $this->product->find(4);
        // $prod->name = 'Silios postíços';
        // $prod->number = 2;
        // $prod->active = false;
        // $prod->category = 'Boca';
        // $prod->description = 'Silíos Postíços';
        // $prod->amount = 6;
        // $prod->price = 3.75;
        // $update = $prod->save();
        // if($update){
        //     return "alterado com sucesso";
        // }else{
        //     return "naõ alterado";
        // }

        
        // $update = $this->product
        //     ->where('id','1')
        //     ->update([
        //         'name'          => 'Batom Amarelo',
        //         'marca'         => 'Playboy',
        //         'number'        => '432',
        //         'active'        => false,
        //         'category'      => 'Boca',
        //         'description'   => 'Batom na cor mate',
        //         'amount'        =>2,
        //         'price'         => 7.05,
        // ]);
        // if($update){
        //     return "alterado com sucesso";
        // }else{
        //     return "naõ alterado";
        // }
        // ======================================================== FIM UPDATE

        // ======================================================== DELETE
        // $prod = $this->product->find(6);
        // $delete = $prod->delete();
        // if($delete){
        //     return "deletado com sucesso";
        // }else{
        //     return "naõ deletado";
        // }

        // $delete = $this->product->destroy([1,5]);
        // if($delete){
        //     return "deletado com sucesso";
        // }else{
        //     return "naõ deletado";
        // }

        $delete = $this->product
                ->where('number',432)
                ->delete();
         if($delete){
            return "deletado com sucesso 2";
        }else{
            return "naõ deletado 2";
        }

        //19
        // ======================================================== FIM DELETE

    }
}
