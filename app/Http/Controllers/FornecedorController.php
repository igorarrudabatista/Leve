<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;


use App\Models\Fornecedor;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FornecedorExport;


class FornecedorController extends Controller
{

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
            $fornecedor = Fornecedor::where ([['Nome_Empresa', 'like', '%'.$search. '%' ]])->get();

             } else {
                $fornecedor = Fornecedor::all();
            }
        
        return view('fornecedor.index', ['fornecedor'=> $fornecedor, 'search' => $search]);

    }

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
    public function store(Request $request)
    {

    
        Fornecedor::create($request->all());
    
         return redirect()->route('fornecedor.index')
                         ->with('success','Fornecedor criado com sucesso!');
     }
    

    public function show(Fornecedor $fornecedor)
    {
        return view('fornecedor.show',compact('fornecedor'));
    }

    public function edit(Fornecedor $fornecedor)
     {
         return view('fornecedor.edit',compact('fornecedor'));
     }

    
    public function update(Request $request, Fornecedor $fornecedor)
     {
    
         $fornecedor->update($request->all());
    
         return redirect()->route('fornecedor.index')
                         ->with('edit','Fornecedor Atualiazado com sucesso!');
     }


     public function destroy(Fornecedor $fornecedor)
     {
         $fornecedor->delete();
    
         return redirect()->route('fornecedor.index')
                         ->with('delete','Fornecedor deletado com sucesso!');
     }

     
   public function export () {   

    return Excel::download(new FornecedorExport, 'Fornecedores.xlsx');
    }

}