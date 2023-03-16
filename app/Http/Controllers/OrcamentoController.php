<?php

namespace App\Http\Controllers;

use App\Models\Empresa_Cliente;
use Illuminate\Http\Request;
use App\Models\Orcamento;
use App\Models\MinhaEmpresa;
use App\Models\Produto;
use Symfony\Component\Console\Input\Input;
use PDF;
use App\Exports\OrcamentoExport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
Use Alert;



class OrcamentoController extends Controller
{
    public function create()
    {

        $empresa_cliente = Empresa_cliente::all();

        $orcamento = Orcamento::all();
        $minha_empresa = MinhaEmpresa::all();
        $produto = Produto::all();

        // $Produto = [$produto];
        // $Quantidade = [$orcamento];
        // $Preco = [$orcamento];




        return view(
            'orcamento.create_orcamento',
            [
                'empresa_cliente' =>   $empresa_cliente,
                'orcamento'       =>   $orcamento,
                'minha_empresa'   =>   $minha_empresa,
                'produto'         =>   $produto
            ]
        );
    }


    public function export () {
        
    
        return Excel::download(new OrcamentoExport, 'Orcamento.xlsx');
      //  return Excel::download(new Empresa_Cliente, 'users.xlsx');
}

    public function store(Request $request)
    {
        
        // dd($request->all());
        $order = Orcamento::create($request->all());
        
        
        
        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $order->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
            }
        }
        
        toast('Orçamento criado com sucesso!','success');
       
    
        return redirect('/orcamento/show_orcamento');
    }
    


    public function show()
    {

        $orders = Orcamento::with('produto')->get();

        //$orders = Orcamento::all();

        $empresa_cliente = Empresa_cliente::all();
        $empresa = MinhaEmpresa::all();
        $produto = Produto::all();

        $search = request('search');

        if ($search) {
            $criar_orcamento = Orcamento::where([['Numero_Orcamento',   'like', '%' . $search . '%']])->get();
        } else {
            $criar_orcamento = Orcamento::all();
        }
        

        return view('orcamento.show_orcamento', [
            'orders'            => $criar_orcamento,
            'search'            => $search,
            'empresa_cliente'   => $empresa_cliente,
            'produto'           => $produto,
            'empresa'           => $empresa
        ]);
    }



    public function edit($id)
    {
        

        $editar_orcamento = Orcamento::findOrFail($id);
        $empresa_cliente = Empresa_cliente::all();
        $minha_empresa = MinhaEmpresa::all();
        $produto = Produto::all();

        $titulo = "Edita Cliente";

      


            return view('orcamento.edit', [
                'editar_orcamento' => $editar_orcamento, 
                'empresa_cliente' => $empresa_cliente,
                'minha_empresa' => $minha_empresa,
                'produto' => $produto,
            
            compact('titulo')]);
    
        }

    public function update(Request $request, $id)
    {


    $Orcamento = Orcamento::find($id);

   // $Orcamento = Orcamento::create($request->all());
        
     Orcamento::findOrFail($request->id)->update($request->all());
       
       // Orcamento::findOrFail($request->id) -> update();
       
       $Orcamento->save();

       
       
    //    $products = $request->input('products', []);
    //    $quantities = $request->input('quantities', []);
    //    for ($product=0; $product < count($products); $product++) {
    //        if ($products[$product] != '') {
    //            $Orcamento->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
    //         }
    //     }
        
        toast('Orçamento editado com sucesso!','success');

        return redirect('/orcamento/show_orcamento');
    }


    // public function update_status(Request $request, $id)    {

    //     // $order = Orcamento::find($id);
    //     // $order -> Status  = $request -> Status;
    //     // $order -> save();


    //     $order = Orcamento::find($id);

    //    // $order =  new Orcamento();
    //    $cancelado = 'Cancelado';
    //    $order -> Status   = $cancelado;
    //    $order -> save();
           
    //     toast('Status do Orçamento alterado para Cancelado com sucesso!','success');

    //     return redirect('/orcamento/show_orcamento');
    // }
    public function update_vendarealizada(Request $request, $id)    {

      $order = Orcamento::find($id);
      $venda = 'Aprovado';
      $order -> Status   = $venda;
      $order -> save();
           
        toast('Status do Orçamento alterado para <b> Venda Realizada! </b> ','success');

        return redirect('/orcamento/show_orcamento');
    }
    public function update_cancelado(Request $request, $id)    {

      $order = Orcamento::find($id);
      $cancelado = 'Cancelado';
      $order -> Status   = $cancelado;
      $order -> save();
           
        toast('Status do Orçamento alterado para <b> Cancelado! </b> ','success');

        return redirect('/orcamento/show_orcamento');
    }
    public function update_pendente(Request $request, $id)    {

      $order = Orcamento::find($id);
      $pendente = 'Pendente';
      $order -> Status   = $pendente;
      $order -> save();
           
        toast('Status do Orçamento alterado para <b> Pendente </b> !','success');

        return redirect('/orcamento/show_orcamento');
    }

    public function gerar_pdf($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = MinhaEmpresa::all();

        $produto = Produto::all();





        return view('orcamento.gerar_pdf', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }

    public function modelo1($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = MinhaEmpresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo1', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }

    
    public function modelo2($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = MinhaEmpresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo2', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }
    
    public function modelo3($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = MinhaEmpresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo3', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }
    public function modelo4($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = MinhaEmpresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo4', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }
    public function modelo5($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = MinhaEmpresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo5', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }
    public function modelo6($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = MinhaEmpresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo6', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }

    public function destroy($id)
    {
    // toast('Orçamento deletado com sucesso!','error');

    Orcamento::findOrFail($id)->delete();
 //   Alert::question('Realemte deseja deletar este item?', '');

        return redirect('/orcamento/show_orcamento');
        return back();
    }


        public function geraPdf($id) {


            $orcamento = Orcamento::with('produto')->findOrFail($id);
            $empresa_cliente = Empresa_cliente::all();
            $minha_empresa = MinhaEmpresa::all();
            $produto = Produto::all();
    
            $pdf = PDF::loadView('orcamento.modelos.modelo3',[
                'orcamento'=> $orcamento,
                'empresa_cliente'=>$empresa_cliente,
                'minha_empresa'=>$minha_empresa,
                'produto'=>$produto
            ]);
    
            return $pdf->download('invoice.pdf');

         }
}
