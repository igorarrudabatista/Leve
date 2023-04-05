@extends('base.base')

@section('content')



<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">


        </div>

      </div><!--//row-->
      <form action="{{asset('/fornecedor/create')}}" method="GET" enctype="multipart/form-data">

<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
    
<br>
              <div class="text-center mb-5">
                  <img src="{{asset('/images/fornecedor.png')}}" height="150" class='mb-4'>
                  <h3>FORNECEDOR</h3>
                  <p>Cadastre os fornecedores da sua loja aqui.</p>
              </div>

              <div class="col-12 col-lg-12">
                <div class="app-card app-card-account shadow-sm  flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">
              
            <center>    <div class="col-md-4">
                  <input type="text" id="Cnpj" class="form-control inpt " name="search" data-mask="00000000000000" data-mask-selectonfocus="true" placeholder="Digite o CNPJ da empresa" >
                  <br> 
                  <center><button class="btn btn-primary float text-light">Pesquisar</button>
                    <br> <br>
                </div>
                
              @if ($search)

            </form>
              {!! Form::open(array('route' => 'fornecedor.store','method'=>'POST', 'enctype' => "multipart/form-data")) !!}
              <div class="row">

     <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> CNPJ</strong></label>
    {!! Form::text('Cnpj', $data->cnpj, array('class' => 'form-control')) !!}
  </div> 
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Nome Fantasia</strong></label>
    {!! Form::text('Nome_fantasia', $data->nome_fantasia, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Nome do Responsável pela empresa</strong></label>
    {!! Form::text('Nome_responsavel', $data->razao_social, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Telefone</strong></label>
    {!! Form::text('Telefone', $data->ddd_telefone_1, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> E-mail</strong></label>
    {!! Form::text('Email', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Endereço</strong></label>
    {!! Form::text('Endereco', $data->logradouro, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> CEP</strong></label>
    {!! Form::text('Cep', $data->cep, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> N°</strong></label>
    {!! Form::text('Numero', $data->numero, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Bairro</strong></label>
    {!! Form::text('Bairro', $data->bairro, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Estado</strong></label>
    {!! Form::select('Estado', ['AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM' , 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF',
    'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA',
    'PB' => 'PB', 'PR' => 'PR', 'PE' =>'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' =>'RS',
    'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO', 'Estrangeiro' => 'Estrangeiro'    
     ], $data->uf, ['class' => 'choices form-select']) !!}
       </div>
    
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Cidade:</strong></label>
    {!! Form::text('Cidade', $data->municipio, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Web Site</strong></label>
    {!! Form::text('Site', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Instagram</strong></label>
    {!! Form::text('Instagram', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Facebok:</strong></label>
    {!! Form::text('Facebook', null, array('class' => 'form-control')) !!}               
  </div>

  </div>
    
  </div>
  
  <button type="submit" class="btn btn-primary me-1 mb-1 text-light"> Salvar</button>
</form>


@else

@endif

@endsection