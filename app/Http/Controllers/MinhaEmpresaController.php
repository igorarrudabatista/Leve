<?php
    
namespace App\Http\Controllers;
    
use App\Models\MinhaEmpresa;
use Illuminate\Http\Request;
    
class MinhaEmpresaController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:minhaempresa-list|minhaempresa-create|minhaempresa-edit|minhaempresa-delete', ['only' => ['index','show']]);
         $this->middleware('permission:minhaempresa-create', ['only' => ['create','store']]);
         $this->middleware('permission:minhaempresa-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:minhaempresa-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minhaempresa = MinhaEmpresa::latest()->paginate(5);
        return view('minhaempresa.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('minhaempresa.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        MinhaEmpresa::create($request->all());
    
        return redirect()->route('minhaempresa.index')
                        ->with('success','Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(MinhaEmpresa $minhaempresa)
    {
        return view('minhaempresa.show',compact('minhaempresa'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(MinhaEmpresa $minhaempresa)
    {
        return view('minhaempresas.edit',compact('minhaempresa'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MinhaEmpresa $minhaempresa)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $minhaempresa->update($request->all());
    
        return redirect()->route('minhaempresas.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(MinhaEmpresa $minhaempresa)
    {
        $minhaempresa->delete();
    
        return redirect()->route('minhaempresas.index')
                        ->with('success','Product deleted successfully');
    }
}