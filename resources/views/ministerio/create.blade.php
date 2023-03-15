@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Cadastro de Ministério</h3>
                <!-- <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a> -->

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastro de Ministério</li>
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
                    <h3>Cadastro de Informações do Ministério</h3>
                    <p></p>
                </div>

                {!! Form::open(array('route' => 'ministerio.store','method'=>'POST')) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Nome</label>
                                        {!! Form::text('MinisterioNome', null, array('placeholder' => 'Nome Completo','class' => 'form-control')) !!}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                   </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Email</label>
                                        <div class="position-relative">

                                        {!! Form::text('MinisterioEmail', null, array('placeholder' => 'E-mail','class' => 'form-control')) !!}

                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">DDD</label>
                                        <div class="position-relative">

                                        {!! Form::text('MinisterioDDD', null, array('placeholder' => 'DDD','class' => 'form-control')) !!}

                                         
                                            
                                    </div>
                                </div>

                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Telefone</label>
                                        <div class="position-relative">

                                        {!! Form::text('MinisterioFone', null, array('placeholder' => 'Telefone','class' => 'form-control')) !!}

                                         
                                            
                                    </div>
                                </div>

                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Endereço</label>
                                        <div class="position-relative">
                                        {!! Form::text('MinisterioEndereco', null, array('placeholder' => 'Endereço','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Bairro</label>
                                        <div class="position-relative">
                                        {!! Form::text('MinisterioEndBairroId', null, array('placeholder' => 'Bairro','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">N°</label>
                                        <div class="position-relative">
                                        {!! Form::text('MinisterioEndNmr', null, array('placeholder' => 'Número','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Cidade</label>
                                        <div class="position-relative">
                                        {!! Form::text('MinisterioCidade', null, array('placeholder' => 'Cidade','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Estado</label>
                                        <div class="position-relative">
                                        {!! Form::text('MinisterioEstado', null, array('placeholder' => 'Estado','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">status</label>
                                        <div class="position-relative">
                                        {!! Form::text('MinisterioStatus', null, array('placeholder' => 'status','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                          
          

                                </div>
                             
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Registrar Usuário</button>
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
@endsection