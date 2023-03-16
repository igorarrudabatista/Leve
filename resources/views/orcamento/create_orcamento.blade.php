@extends('base.base')

@section('content')


<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <h1 class="app-page-title">Cadastro de Produtos</h1>
            <div class="row gy-4">
              <div class="col-12 col-lg-12">
                <div class="app-card app-card-account shadow-sm  flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">




    <form action="{{asset('/orcamento/')}}" method="POST" >
      @csrf

      <div class="row">


        <div class="col-md-2 mb-4">
          <label for="validationDefault01">Nº do Orçamento </label>
          <input type="text" class="form-control" id="Numero_Orcamento" name="Numero_Orcamento" required>
        </div>


        <div class="col-md-4 mb-4">
          <label for="validationDefault04"> Sua Empresa </label>
          <select name="empresa_id" id="empresa_id" class="form-control">
            <option value="" disabled> Selecionar empresa </option>
            @foreach ($minha_empresa as $minha_empresas)

            <option value="{{ $minha_empresas->id}}"> {{$minha_empresas->Nome_Empresa}} </option>
            @endforeach

          </select>
        </div>



        <div class="col-md-4 mb-4">
          <label for="validationDefault04"> Informe o cliente </label>
          <select name="empresa_cliente_id" id="empresa_cliente_id" class="form-control">
            <option value="" disabled> Selecionar empresa </option>
            @foreach ($empresa_cliente as $empresa_clientes)

            <option value="{{ $empresa_clientes->id}}"> {{$empresa_clientes->Nome_Empresa}} </option>
            @endforeach

          </select>
        </div>
      </div>



      <div class="card">
        <div class="card-header">
         Produtos e Serviços
        </div>

        <div class="card-body">
          <table class="table" id="products_table">
            <thead>
              <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <!-- <th>Preço</th> -->
              </tr>
            </thead>
            <tbody>
              <tr id="product0">
                <td>
                  <select name="products[]"  class="form-control id_select2_example"  >
                    <option value="">-- Selecione o produto --</option>
                     @foreach ($produto as $produtos)
                    <option value="{{$produtos->id}}" data-img_ssrc="{{asset('/img/produtos/')}}/{{$produtos->image}}">  
                       {{$produtos->Nome_Produto}} - R$ {{$produtos->Preco_Produto}} 
                      @endforeach 
                    </option>
                    
                  </select>
                </td>
                <td>


                  <input type="number" name="quantities[]"  class="form-control" value="1" />
                </td>

              </tr>
              <tr id="product1"></tr>
            </tbody>
          </table>


            <div class="row">
            <div class="col-md-12">
                <button id="add_row" class="btn btn-success pull-left"> + Adicionar Produto</button> 
                <button id='delete_row' class="pull-right btn btn-danger"> - Deletar</button>
              </div>
            </div>

            <br><br>
     

          <div class="row">

            <div class="col-md-2 mb-3">
              <label for="validationDefault02"><b> Data </b></label>
              <input type="date" class="form-control" id="Data" name="Data">
            </div>

            <div class="col-md-2 mb-3">
              <label for="validationDefaultUsername">Validade do orçamento</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">Dias</span>
                </div>
                <input type="text" class="form-control" id="Validade" name="Validade" >
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <label for="validationDefaultUsername">Garantia</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">Meses/Dias</span>
                </div>
                <input type="text" class="form-control" id="Garantia" name="Garantia" >
              </div>
            </div>


            <div class="col-md-4 mb-4">
              <label for="validationDefault03">Forma de Pagamento </label>
              <input type="text" class="form-control" id="Forma_Pagamento" name="Forma_Pagamento" value="Cartão de crédito Pix e Boleto" >
            </div>
          </div>
          <div class="row">

            <div class="col-md-2 mb-4">
              <label for="validationDefault03">Desconto </label>
              <input type="text" class="form-control" id="Desconto" placeholder="Valor" name="Desconto">
            </div>
            <div class="col-md-2 mb-4">
              <label for="validationDefault03">Taxas </label>
              <input type="text" class="form-control" id="Taxas" placeholder="Valor" name="Taxas">
            </div>
          </div>
          <div class="form-row">

            <div class="col-md-3 mb-3">
              <label for="validationDefault03">Descrição do Orçamento </label>
              <textarea rows="5" class="form-control" id="Descricao" name="Descricao" required> </textarea>
            </div>
          </div>

          <div class="form-group">

            <div class="col-md-12 mb-4">

            <button class="btn btn-primary" type="submit" value="{{ trans('global.save') }}">Cadastrar Orçamento</button> 

            
            </div>
          </div>
    </form>



  </div>
</div>
</div>
</div>


<script type="text/javascript">
  function swapImage(){
    var image = document.getElementById("imageToSwap");
    var dropd = document.getElementById("dlist");
    image.src = dropd.value;	
  };
  </script>
<!-- partial -->
@endsection