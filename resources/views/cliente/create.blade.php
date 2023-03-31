@extends('base.base')

@section('content')



<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">


        </div>

      </div><!--//row-->
      <form action="{{asset('/cliente/create')}}" method="GET" enctype="multipart/form-data">

<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
    
<br>
              <div class="text-center mb-5">
                  <img src="{{asset('/images/clientes.png')}}" height="88" class='mb-4'>
                  <h3>CLIENTES</h3>
                  <p>Cadastre os clientes da sua loja aqui.</p>
              </div>

            <div class="row gy-4">
              <div class="col-12 col-lg-12">
                <div class="app-card app-card-account shadow-sm  flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">


              
              
              
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="validationDefault01"> <strong> CNPJ </strong> </label>
                  <input type="text" id="search" class="form-control" name="search" placeholder="Digite o CNPJ da empresa">
                  <button class="btn btn-primary float-end">Pesquisar</button>
                </div>
                
                @if ($search)
                
              </form>
              {!! Form::open(array('route' => 'cliente.store','method'=>'POST', 'enctype' => "multipart/form-data")) !!}

    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Nome da Empresa</strong></label>
    {!! Form::text('Nome_Empresa', $data->razao_social, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Nome Fantasia</strong></label>
    {!! Form::text('Nome_fantasia', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Nome do Responsável pela empresa</strong></label>
    {!! Form::text('Nome_responsavel', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Telefone</strong></label>
    {!! Form::text('Telefone', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> E-mail</strong></label>
    {!! Form::text('Email', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Endereço</strong></label>
    {!! Form::text('Endereco', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> CEP</strong></label>
    {!! Form::text('Cep', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> N°</strong></label>
    {!! Form::text('Numero', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Bairro</strong></label>
    {!! Form::text('Bairro', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Estado</strong></label>
    {!! Form::select('Estado', ['Acre' => 'Acre', 'Alagoas' => 'Alagoas', 'Amapá' => 'Amapá', 'Amazonas' => 'Amazonas' , 'Bahia' => 'Bahia', 'Ceará' => 'Ceará', 'Distrito Federal' => 'Distrito Federal',
    'Espírito Santo' => 'Espírito Santo', 'Goiás' => 'Goiás', 'Maranhão' => 'Maranhão', 'Mato Grosso' => 'Mato Grosso', 'Mato Grosso do Sul' => 'Mato Grosso do Sul', 'Minas Gerais' => 'Minas Gerais', 'Pará' => 'Pará',
    'Paraíba' => 'Paraíba', 'Paraná' => 'Paraná', 'Pernambuco' =>'Pernambuco', 'Piauí' => 'Piauí', 'Rio de Janeiro' => 'Rio de Janeiro', 'Rio Grande do Norte' => 'Rio Grande do Norte', 'Rio Grande do Sul' =>'Rio Grande do Sul',
    'Rondônia' => 'Rondônia', 'Roraima' => 'Roraima', 'Santa Catarina' => 'Santa Catarina', 'São Paulo' => 'São Paulo', 'Sergipe' => 'Sergipe', 'Tocantins' => 'Tocantins', 'Estrangeiro' => 'Estrangeiro'    
     ], null, ['class' => 'choices form-select']) !!}
       </div>
    
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Cidade:</strong></label>
    {!! Form::text('Cidade', null, array('class' => 'form-control')) !!}
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


    <div class="col-md-2 mb-3">
    <label for="validationDefaultUsername"> <strong> Telefone </strong></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">CNPJ</span>
        </div>
        <input type="text" class="form-control" >
      </div>
    </div>





    <br>

  <div class="form-group">
    <div class="form-check">
   

      
    
  </div>
  <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
</form>


@else

@endif

@endsection