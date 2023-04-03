<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use App\Models\Fornecedor;


use App\Exports\ClienteExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;


class FornecedorController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:fornecedor-list|fornecedor-create|fornecedor-edit|fornecedor-delete', ['only' => ['index','show']]);
         $this->middleware('permission:fornecedor-create', ['only' => ['create','store']]);
         $this->middleware('permission:fornecedor-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:fornecedor-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedor = Fornecedor::all();

        $search = request('search');

        if($search) {
            $cliente = Fornecedor::where ([['Nome_Empresa', 'like', '%'.$search. '%' ]])->get();

             } else {
                $cliente = Fornecedor::all();
            }
        
        return view('fornecedor.index', ['fornecedor'=> $fornecedor, 'search' => $search]);

    }
    
//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
   public function create()
   {
    $fornecedor = Fornecedor::all();

    $search = request('search');
    $response = Http::get('https://brasilapi.com.br/api/cnpj/v1/' . $search);

    $result = '';

    $data = json_decode($response); // convert JSON into objects 
    
    //dd($data);
    return view('fornecedor.create', ['search' => $search,
                                   'data' =>$data,
                                   'fornecedor' =>$fornecedor,
                                   'result' =>$result,
                                  ]);

   }

   public function export () {
        
    $fornecedor = Fornecedor::all();

    return Excel::download(new fornecedorExport, 'fornecedor.xlsx');
}

    
//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
    public function store(Request $request)
    {

    
        Fornecedor::create($request->all());
    
         return redirect()->route('fornecedor.index')
                         ->with('success','Fornecedor criado com sucesso!');
     }
    
//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */

    public function show(Fornecedor $fornecedor)
    {
        return view('fornecedor.show',compact('fornecedor'));
    }
//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function edit(Fornecedor $fornecedor)
     {
         return view('fornecedor.edit',compact('fornecedor'));
     }
    
//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function update(Request $request, Fornecedor $fornecedor)
     {
    
         $fornecedor->update($request->all());
    
         return redirect()->route('fornecedor.index')
                         ->with('edit','Fornecedor Atualiazado com sucesso!');
     }
    
//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function destroy(Fornecedor $fornecedor)
     {
         $fornecedor->delete();
    
         return redirect()->route('fornecedor.index')
                         ->with('delete','Fornecedor deletado com sucesso!');
     }

    }