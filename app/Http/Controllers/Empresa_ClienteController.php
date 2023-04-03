<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use App\Models\Empresa_Cliente;


use App\Exports\Empresa_ClienteExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;





class Empresa_ClienteController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:cliente-list|cliente-create|cliente-edit|cliente-delete', ['only' => ['index','show']]);
         $this->middleware('permission:cliente-create', ['only' => ['create','store']]);
         $this->middleware('permission:cliente-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:cliente-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Empresa_Cliente::all();

        $search = request('search');

        if($search) {
            $cliente = Empresa_Cliente::where ([['Nome_Empresa', 'like', '%'.$search. '%' ]])->get();

             } else {
                $cliente = Empresa_Cliente::all();
            }
        
        return view('cliente.index', ['cliente'=> $cliente, 'search' => $search]);

    }
    
//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
   public function create()
   {
    $clientes = Empresa_Cliente::all();

    $search = request('search');
    $response = Http::get('https://brasilapi.com.br/api/cnpj/v1/' . $search);

    $result = '';

    $data = json_decode($response); // convert JSON into objects 
    
    //dd($data);
    return view('cliente.create', ['search' => $search,
                                   'data' =>$data,
                                   'clientes' =>$clientes,
                                   'result' =>$result,
                                  ]);

   }



    

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
    public function store(Request $request)
    {

    
        Empresa_Cliente::create($request->all());
    
         return redirect()->route('cliente.index')
                         ->with('success','Cliente criado com sucesso!');
     }
    
//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */

    public function show(Empresa_Cliente $cliente)
    {
        return view('cliente.show',compact('cliente'));
    }
//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function edit(Empresa_Cliente $cliente)
     {
         return view('cliente.edit',compact('cliente'));
     }
    
//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function update(Request $request, Empresa_Cliente $cliente)
     {
    
         $cliente->update($request->all());
    
         return redirect()->route('cliente.index')
                         ->with('edit','Cliente Atualiazado com sucesso!');
     }
    
//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function destroy(Empresa_Cliente $cliente)
     {
         $cliente->delete();
    
         return redirect()->route('cliente.index')
                         ->with('delete','Cliente deletado com sucesso!');
     }

     public function export () {
        
        return Excel::download(new Empresa_ClienteExport, 'clientes.xlsx');
    }

    }