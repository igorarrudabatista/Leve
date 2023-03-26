<?php
    
namespace App\Http\Controllers;

use App\Models\Empresa_Cliente;
use App\Models\Recibo;
use App\Models\MinhaEmpresa;
use App\Models\Produto;
use App\Models\Contrato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ContratoController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:contrato-list|contrato-create|contrato-edit|contrato-delete', ['only' => ['index','show']]);
        $this->middleware('permission:contrato-create', ['only' => ['create','store']]);
        $this->middleware('permission:contrato-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:contrato-delete', ['only' => ['destroy']]);
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrato = Contrato::get();
        $search = request('search');

        if($search) {
            $contrato = Contrato::where([['id', 'like', '%'.$search. '%' ]])->get();

             } else {
                $contrato = Contrato::all();
            }

        return view('contrato.index', ['contrato'=> $contrato, 
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
        $empresa_cliente = Empresa_Cliente::get();
        $produto = Produto::get();
        $contrato = Contrato::orderBy('id','asc')->get();

        return view('contrato.create', compact('contrato','empresa_cliente','produto'));
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

     public function show(Contrato $contrato)
     {
         return view('recibo.show',compact('recibo'));
     }

     
    public function edit(Contrato $contrato)
    {
        $contrato = Contrato::get();
        $recibo->load('produto');

        $recibos = Recibo::with('empresa_cliente')->get();
        $empresa_cliente = Empresa_Cliente::get();

        return view('recibo.edit',compact('recibo','empresa_cliente', 'recibos', 'produto'));
    }
    
    public function update(Request $request, Contrato $contrato)
    {

        $recibo->update($request->all());

}   


    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        return redirect()->route('contrato.index')
                        ->with('success','Product deleted successfully');
    }
}