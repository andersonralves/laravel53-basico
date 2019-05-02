<?php

namespace App\Http\Controllers\Painel;

use App\Http\Requests\Painel\ProductFormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

class ProdutoController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
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
        $title = 'Listagem dos Produtos';

        return view('painel.products.index', compact('products','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = [ 'eletronicos', 'moveis', 'limpeza', 'banho'];

        return view('painel.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        // Pega todos os dados do formulário
        $dataForm = $request->all();

        $dataForm['active'] = empty($dataForm['active'])? 0 : 1;

        //$this->validate($request, $this->product->rules);

        /*
        $messages = [
            'name.required' => "O campo Nome é obrigatório",
            'number.required' => "O campo Número é obrigatório",
            'number.numeric' => 'Apenas números'
        ];


        $validate = validator( $dataForm, $this->product->rules, $messages );

        if ( $validate->fails() ) {
            return redirect()
                        ->route('produtos.create')
                        ->withErrors($validate)
                        ->withInput();
        }
        */

        // Faz o insert
        $insert = $this->product->create( $dataForm );

        if ($insert) {
            return redirect()->route('produtos.index');
        } else {
            return redirect()->route('produtos.create');
        }

        // dd( $request->all() );
        // dd( $request->only(['name', 'number']) );
        // dd( $request->except(['_token']) );
        // dd( $request->input('name') );

        return 'CADASTRANDO';
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

    public function tests()
    {
        /*
        INSERT

        $insert = $this->product->create([
            'name' => 'Mouse',
            'number' => random_int(1275, 50794),
            'active' => false,
            'category' => 'eletronicos',
            'description' => 'Mouse bluetooth'
        ]);

        if ( $insert )
            return "Inserido com sucesso ID {$insert->id}";
        else
            return 'Falha ao inserir';

        //return 'oi';
        */

        /*
        $prod = $this->product->find(5);
        $prod->name = 'Headphone';
        $prod->number = 77777;
        $prod->active = true;
        $prod->description = "Descricao phone";

        $update = $prod->save();
        */

        /*

        $prod = $this->product->find(6);
        $update = $prod->update([
            'name' => 'Update Teste',
            'number' => random_int(1275, 50794),
            'active' => false,
            'category' => 'eletronicos'
        ]);

        if ( $update )
            return "Alterado com sucesso ";
        else
            return 'Falha ao alterar';
        */

        //77777

        /*

        $prod = $this->product->where('number', 77777);
        $update = $prod->update([
            'name' => 'Update Teste 2',
            'number' => random_int(1275, 50794),
            'active' => true,
            'category' => 'eletronicos'
        ]);

        if ( $update )
            return "Alterado com sucesso 2";
        else
            return 'Falha ao alterar';

        dd($prod);
        */

        /*
        $prod = $this->product->find(1);

        $delete = $prod->delete();

        if ( $delete )
            return 'Excluido com sucesso';
        else
            return 'Falha ao deletar';
        */

        /*
      $delete = $this->product->destroy(4);

      if ( $delete )
          return 'Excluido com sucesso';
      else
          return 'Falha ao deletar';
        */

        $delete = $this->product->where('number', 57846)->delete();

        if ( $delete )
            return 'Excluido com sucesso';
        else
            return 'Falha ao deletar';
    }
}
