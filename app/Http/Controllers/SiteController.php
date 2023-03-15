<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SiteController extends Controller
{
    public function index() {

        $ultimos_produtos = Product::orderBy('id', 'DESC')->limit(8)->get();

     $produtos = Product::limit(2)->get();
     //   $produtos = Product::paginate(10);

        $search = request('search');

        if($search) {
            $produtos = Product::where ([['name', 'like', '%'.$search. '%' ]])->get();

             } else {
                $produtos = Product::all();
            }
       

       return view('Site.index', [
        'produtos'=> $produtos,
        'search' => $search,
        'ultimos_produtos' => $ultimos_produtos
    ]);
   }


   public Function search(Request $request) {

    $search = $request->input('search');
    $response = Product::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->get();

  return view('Site.index',         ['search'    => $search,
                                        'response' => $response
                                    ]);

  }

   
   public function store (Request $request) {
       
       
       $criar_produto =  new Product;
       
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
           
           $request -> image->move(public_path('img/produtos'), $imageName);
           
           $criar_produto -> image = $imageName;
           
       }
       
       $criar_produto ->save();
       
       $criar_produto = Product::all();
       
       toast('Produto criado com sucesso!','success');

      return redirect('/produtos/produtos');

        

   }


   public function create (){

       return view ('produtos.create');
       }



   public function edit ($id){

       $editar_produto = Product::findOrFail($id);

       return view ('produtos.edit', ['editar_produto'=> $editar_produto]);


   }

   public function update (Request $request){
       
       $data = $request->all();
       
       
       // Imagem do produto upload
       if ($request->hasFile('image')&& $request->file('image')->isValid()){
           
           $requestImage = $request -> image;
           
           $extension = $requestImage-> extension();
           
           $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
           
           $request -> image->move(public_path('img/produtos'), $imageName);
           
           $data['image'] = $imageName;
           
       }
       toast('Produto editado com sucesso!','success');

       Product::findOrFail($request->id) -> update ($data);
       return redirect('/produtos/produtos');



   }

   public function destroy($id){
  
    Product::findOrFail($id) -> delete();
      toast('Produto deletado com sucesso!','error');
       return redirect('/produtos/produtos');
   }
}
