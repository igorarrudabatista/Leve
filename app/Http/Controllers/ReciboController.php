<?php
    
namespace App\Http\Controllers;

use App\Models\Empresa_Cliente;
use App\Models\Recibo;
use App\Models\MinhaEmpresa;
use App\Models\Produto;
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
         $this->middleware('permission:recibo-list|recibo-create|recibo-edit|recibo-delete|recibo-invoice', ['only' => ['index','show']]);
         $this->middleware('permission:recibo-create', ['only' => ['create','store']]);
         $this->middleware('permission:recibo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:recibo-delete', ['only' => ['destroy']]);
         $this->middleware('permission:recibo-invoice', ['only' => ['invoice']]);
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
        $produto = Produto::orderBy('id','asc')->get();
        $empresa_cliente=Empresa_Cliente::orderBy('id', 'asc')->get();

        return view('recibo.create', compact('empresa_cliente','produto'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    
      //  Recibo::create($request->all());
    
            // dd($request->all());
            $recibo = Recibo::create($request->all());
        
        
        
            $products = $request->input('products', []);
            $quantities = $request->input('quantities', []);
            for ($product=0; $product < count($products); $product++) {
                if ($products[$product] != '') {
                    $recibo->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
                }
            }

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
         return view('recibo.show',compact('recibo'));
     }

     
    public function invoice($id)
    {

        $recibo = Recibo::with('empresa_cliente')->findOrFail($id);
        
      //  $recibo          = Recibo::with('empresa_cliente')->get();  
        $minha_empresa   = MinhaEmpresa::all();
        $recibox   = Recibo::all();

        return view('recibo.invoice', ['recibo'        => $recibo, 
                                       'minha_empresa' => $minha_empresa,
                                       'recibox'       => $recibox

       ]);

    }
    public function contrato($id)
    {

        $recibo = Recibo::with('empresa_cliente')->findOrFail($id);
        
      //  $recibo          = Recibo::with('empresa_cliente')->get();  
        $minha_empresa   = MinhaEmpresa::all();
        $recibox   = Recibo::all();

        return view('recibo.contrato', ['recibo'        => $recibo, 
                                       'minha_empresa' => $minha_empresa,
                                       'recibox'       => $recibox

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
        $produto = Produto::get();
        $recibo->load('produto');

        $recibos = Recibo::with('empresa_cliente')->get();
        $empresa_cliente = Empresa_Cliente::get();

        return view('recibo.edit',compact('recibo','empresa_cliente', 'recibos', 'produto'));
    }
    
    public function update(Request $request, Recibo $recibo)
    {

        $recibo->update($request->all());

        $recibo->produto()->detach();

        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $recibo->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
            }

            return redirect()->route('recibos.index')
            ->with('success','Product updated successfully');
   
    }
}   

    // public function update(Request $request, Recibo $recibo)
    // {
 
    //     $recibo->update($request->all());
    
    //     return redirect()->route('recibos.index')
    //                     ->with('success','Product updated successfully');
    // }
    

    public function destroy(Recibo $recibo)
    {
        $recibo->delete();
        return redirect()->route('recibos.index')
                        ->with('success','Product deleted successfully');
    }
}