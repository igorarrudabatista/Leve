<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProdutoExport;

class ProdutoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:produto-list|produto-create|produto-edit|produto-delete', ['only' => ['index','show']]);
         $this->middleware('permission:produto-create', ['only' => ['create','store']]);
         $this->middleware('permission:produto-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:produto-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produto = Produto::get();

        $search = request('search');

        if($search) {
            $produto = Produto::where([['Nome_Produto', 'like', '%'.$search. '%' ]])->get();

             } else {
                $produto = Produto::all();
            }
        return view('produtos.index',compact('produto','search'));
       
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    
       // Produto::create($request->all());
       $criar_produto =  new Produto;
        
       $criar_produto -> Nome_Produto       = $request->Nome_Produto;
       $criar_produto -> Categoria_Produto  = $request->Categoria_Produto;
       $criar_produto -> Status_Produto     = $request->Status_Produto;
       $criar_produto -> Preco_Produto      = $request->Preco_Produto;
       $criar_produto -> Estoque_Produto    = $request->Estoque_Produto;
       $criar_produto -> Quantidade_Produto = $request->Quantidade_Produto;

           // Imagem do produto upload
           if ($request->hasFile('image')&& $request->file('image')->isValid()){
            
            $requestImage = $request -> image;
            
            $extension = $requestImage-> extension();
            
            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $request -> image->move(public_path('images/produtos'), $imageName);
            
            $criar_produto -> image = $imageName;
            
        }
        
        $criar_produto ->save();
        
        $criar_produto = Produto::all();

        toast('Produto criado com sucesso!','success');

        return redirect('/produtos')->with('success','Produto criado com sucesso!');


        
        // return redirect()->route('produtos.index')
        //                 ->with('success','produto created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('produtos.show',compact('produto'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit',compact('produto'));
                    

    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto) 
    {
        $produto->update($request->all());


        
        // Imagem do produto upload
        if ($request->hasFile('image')&& $request->file('image')->isValid()){
            
            $requestImage = $request -> image;
            
            $extension = $requestImage-> extension();
            
            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $request -> image->move(public_path('images/empresa'), $imageName);
            
            $data['image'] = $imageName;
            
        }
        toast('Cliente editado com sucesso!','success');



     
        return redirect('/produtos')->with('edit','Produto editado com sucesso!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
    
        return redirect()->route('produtos.index')
                        ->with('delete','Produto deletado com sucesso!');
    }
}

