@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Cadastro de Escolas</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastro de Escolas</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>

                <div class="text-center mb-5">
                    <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                    <h3>Cadastro de Escolas</h3>
                    <p></p>
                </div>

                {!! Form::open(array('route' => 'escola.store','method'=>'POST')) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Cóidigo da Escola</label>
                                        {!! Form::text('EscolaCod', null, array('placeholder' => 'Código da Escola','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Nome da Escola</label>
                                        {!! Form::text('EscolaNome', null, array('placeholder' => 'Nome da Escola','class' => 'form-control')) !!}
                                </div>
                                
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Endereço da Escola</label>
                                        {!! Form::text('EscolaEndereco', null, array('placeholder' => 'Endereço da Escola','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">N°</label>
                                        {!! Form::text('EscolaNumero', null, array('placeholder' => 'Número','class' => 'form-control')) !!}
                                </div>
                                
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Bairro</label>
                                        {!! Form::text('EscolaBairro', null, array('placeholder' => 'Bairro','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">CEP</label>
                                        {!! Form::text('EscolaCep', null, array('placeholder' => 'CEP','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Cidade</label>
                                        {!! Form::text('EscolaCidade', null, array('placeholder' => 'Cidade','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Estado</label>
                                        {!! Form::text('EscolaEstado', null, array('placeholder' => 'Estado','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">DDD</label>
                                        {!! Form::text('EscolaDDD', null, array('placeholder' => 'DDD','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Telefone da Escola</label>
                                        {!! Form::text('EscolaTel', null, array('placeholder' => 'Telefone da Escola','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">E-mail da Escola</label>
                                        {!! Form::text('EscolaEmail', null, array('placeholder' => 'E-mail da Escola','class' => 'form-control')) !!}
                                </div>

                                
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                    <label for="first-name-column"> <b> Escola Ativa? </b></label>
                  
        
                                                                 {!! Form::select('EscolaStatus', ['Ativa' => 'Ativa', 'Inativa' => 'Inativa'], null, ['class' => 'choices form-select']) !!}


                                                                </div>

                                </div>
                             
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>

</section>
<script src="{{asset('/js/pages/form-editor.js')}}"></script>

@endsection