@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Editar Aluno</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Aluno</li>
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
                    <h3>Editar Aluno: <b> {{$aluno->AlunoNome}} </b> </h3>
                    <p></p>
                </div>
                {!! Form::model($aluno, ['method' => 'PATCH','route' => ['aluno.update', $aluno->id]]) !!}



                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Nome do Aluno</label>
                                        {!! Form::text('AlunoNome', null, array('placeholder' => 'Nome Completo','class' => 'form-control')) !!}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                   </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Data de Nascimento</label>
                                        <div class="position-relative">

                                        {!! Form::date('AlunoDataNascimento', null, array('placeholder' => 'Data de Nascimento','class' => 'form-control')) !!}

                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">CPF</label>
                                        <div class="position-relative">

                                        {!! Form::text('AlunoCPF', null, array('placeholder' => 'CPF','class' => 'form-control')) !!}

                                         
                                            
                                    </div>
                                </div>

                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Sexo</label>
                                        <div class="position-relative">

                                        {!! Form::text('AlunoSexo', null, array('placeholder' => 'Sexo','class' => 'form-control')) !!}

                                         
                                            
                                    </div>
                                </div>

                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Nome da Mãe</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoFiliacao1', null, array('placeholder' => 'Nome da Mãe','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Nome do Pai</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoFiliacao2', null, array('placeholder' => 'Nome do Pai','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Endereço</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoEndereco', null, array('placeholder' => 'Endereço','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Número</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoNumero', null, array('placeholder' => 'N°','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Bairro</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoBairro', null, array('placeholder' => 'Bairro','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">CEP</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoCEP', null, array('placeholder' => 'CEP','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Cidade</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoCidade', null, array('placeholder' => 'Cidade','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Estado</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoEstado', null, array('placeholder' => 'Estado','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">DDD</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoDDD', null, array('placeholder' => 'DDD','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Telefone</label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoTelefone', null, array('placeholder' => 'Telefone','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                  
                                    <div class="card-body">
                                    <h4 class="card-title">Escreva o motivo</h4>
                                    <div>
                                    {!! Form::text('AlunoObs', null, array('placeholder' => 'Observações','class' => 'form-control', 'id' => 'full')) !!}
                                    <p><br></p>
                                    </div>
                                    </div>
                                        </div>
                                    </div>
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