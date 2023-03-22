<?php
    
namespace App\Http\Controllers;

use App\Models\Empresa_Cliente;
use App\Models\Recibo;
use App\Models\MinhaEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ReciboController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:recibo-list|recibo-create|recibo-edit|recibo-delete', ['only' => ['index','show']]);
         $this->middleware('permission:recibo-create', ['only' => ['create','store']]);
         $this->middleware('permission:recibo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:recibo-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recibo = Recibo::with('empresa_cliente')->get();  
        $empresa_cliente = Empresa_Cliente::get();
        $search = request('search');

        if($search) {
            $empresa_cliente = Empresa_Cliente::where([['Nome_Empresa', 'like', '%'.$search. '%' ]])->get();

             } else {
                $empresa_cliente = Empresa_Cliente::all();
            }

        return view('recibo.index', ['recibo'=> $recibo, 
                                     'empresa_cliente' => $empresa_cliente,
                                     'search' => $search,
                                    ]);

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa_cliente=Empresa_Cliente::get();

        return view('recibo.create', compact('empresa_cliente'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    
        Recibo::create($request->all());
    
        return redirect()->route('recibos.index')
                        ->with('success','Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Recibo $recibo)
    {
        $recibo          = Recibo::with('empresa_cliente')->get();  
        $empresa_cliente = Empresa_Cliente::get();
        $minha_empresa   = MinhaEmpresa::get();

        return view('recibo.index', ['recibo'=> $recibo, 
                    'empresa_cliente' => $empresa_cliente,
                    'minha_empresa' => $minha_empresa

       ]);

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Recibo $recibo)
    {
        $recibos = Recibo::with('empresa_cliente')->get();
        $empresa_cliente=Empresa_Cliente::get();

        return view('recibo.edit',compact('recibo','empresa_cliente', 'recibos'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recibo $recibo)
    {
 
        $recibo->update($request->all());
    
        return redirect()->route('recibos.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recibo $recibo)
    {
        $recibo->delete();
        return redirect()->route('recibos.index')
                        ->with('success','Product deleted successfully');
    }
}