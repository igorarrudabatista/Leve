@extends('base.base')

@section('content')



<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">


        </div>

      </div><!--//row-->

<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
    
<br>
              <div class="text-center mb-5">
                  <img src="{{asset('/images/empresa.png')}}" height="160" class='mb-4'>
                  <h3>SUA EMPRESA</h3>
                  <p>Cadastre as inforamções da sua empresa aqui.</p>
              </div>

            <div class="row gy-4">
              <div class="col-12 col-lg-12">
                <div class="app-card app-card-account shadow-sm  flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">


            {!! Form::model($minhaempresa, ['method' => 'PATCH','route' => ['minhaempresa.update', $minhaempresa->id]]) !!}


        <div class="row">
    <div class="col-md-4 mb-3">
    <label for="validationDefault01"> <strong> Nome da sua Empresa </strong> </label>
    {!! Form::text('Nome_Empresa', null, array('class' => 'form-control')) !!}

    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong>CNPJ</strong></label>
    {!! Form::text('Cnpj', null, array('class' => 'form-control')) !!}
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
    <label for="validationDefault02"> <strong> Site</strong></label>
    {!! Form::text('Site', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Facebook</strong></label>
    {!! Form::text('facebook_url', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Instagram</strong></label>
    {!! Form::text('instagram_url', null, array('class' => 'form-control')) !!}
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault02"> <strong> Linkedin</strong></label>
    {!! Form::text('linkedin_url', null, array('class' => 'form-control')) !!}
  </div>
   

    <br>

  <div class="form-group">
    <div class="form-check">
   

      
    
  </div>
  <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
</form>



@endsection