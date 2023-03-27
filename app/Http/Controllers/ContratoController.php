<?php
    
namespace App\Http\Controllers;

use App\Models\Empresa_Cliente;
use App\Models\Recibo;
use App\Models\Contrato;
use App\Models\MinhaEmpresa;
use App\Models\Produto;
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
         $this->middleware('permission:contrato-list|contrato-create|contrato-edit|contrato-delete|contrato-invoice', ['only' => ['index','show']]);
         $this->middleware('permission:contrato-create', ['only' => ['create','store']]);
         $this->middleware('permission:contrato-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:contrato-delete', ['only' => ['destroy']]);
         $this->middleware('permission:contrato-invoice', ['only' => ['invoice']]);
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $contrato = Contrato::with('empresa_cliente')->get();  

        $empresa_cliente = Empresa_Cliente::get();
        $search = request('search');

        if($search) {
            $empresa_cliente = Empresa_Cliente::where([['Nome_Empresa', 'like', '%'.$search. '%' ]])->get();

             } else {
                $empresa_cliente = Empresa_Cliente::all();
            }

        return view('contrato.index', [
                                     'contrato'        => $contrato, 
                                     'empresa_cliente' => $empresa_cliente,
                                     'search'          => $search,
                                    ]);

    }
    

    public function create() {

        $produto         = Produto::orderBy('id','asc')->get();
        $empresa_cliente = Empresa_Cliente::orderBy('id', 'asc')->get();

        return view('contrato.create', compact('empresa_cliente','produto'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
            
    $contrato = Contrato::create($request->all());

        $products = $request->input('products', []);
            $quantities = $request->input('quantities', []);
            for ($product=0; $product < count($products); $product++) {
                if ($products[$product] != '') {
                    $contrato->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
                }
            }

        return redirect()->route('contrato.index')
                        ->with('success','Product created successfully.');
    }
    
     public function show(Contrato $contrato)
     {
         return view('contrato.show',compact('contrato'));
     }

     
    public function invoice($id) {

        $contrato = Contrato::with('empresa_cliente')->findOrFail($id);
        $minha_empresa   = MinhaEmpresa::all();
        $recibox   = Recibo::all();

        return view('contrato.invoice', ['contrato'    => $contrato, 
                                       'minha_empresa' => $minha_empresa,
                                       'recibox'       => $recibox

       ]);

    }
    public function contrato($id)
    {

        $contrato = Contrato::with('empresa_cliente')->findOrFail($id);
        $cliente = Empresa_Cliente::get();
      //  $recibo          = Recibo::with('empresa_cliente')->get();  
        $minha_empresa   = MinhaEmpresa::all();
        $recibox   = Recibo::all();

        return view('contrato.contrato', ['contrato'        => $contrato, 
                                       'minha_empresa' => $minha_empresa,
                                       'recibox'       => $recibox,
                                       'cliente'       =>$cliente

       ]);

    }

    public function edit(Contrato $contrato)
    {
        $produto = Produto::get();
        $contrato->load('produto');

        $contratos = Contrato::with('empresa_cliente')->get();
        $empresa_cliente = Empresa_Cliente::get();

        return view('contrato.edit',compact('contrato','empresa_cliente', 'contratos', 'produto'));
    }
    
    public function update(Request $request, Contrato $contrato)
    {

        $contrato->update($request->all());

        $contrato->produto()->detach();

        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $contrato->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
            }

            return redirect()->route('contrato.index')
            ->with('success','Product updated successfully');
   
    }
}   

    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        return redirect()->route('contrato.index')
                        ->with('success','Product deleted successfully');
    }
}