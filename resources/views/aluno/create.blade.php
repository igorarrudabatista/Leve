@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Cadastro de Alunos</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastro de Alunos</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <form action="{{asset('/aluno/create')}}" method="GET" enctype="multipart/form-data">


<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>

                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-12 col-12">

                <div class="text-center mb-10">
                    <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                    <h3>Cadastro de Aluno</h3>
                </div>
                                </div>
                    <div class="col-md-6 col-12">

                    <label for="first-name-column"> <b> CPF </b> </label>
                    <input type="text" id="search" class="form-control" name="search" placeholder="Digite o CPF do Aluno">
<br>
                    <div class="btn-group mb-1">
                        <div class="dropdown dropdown-color-icon">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                id="dropdownMenuButtonEmoji" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span Class="me-20">🙂</span>Dica
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonEmoji">
                           
                               <span class="dropdown-item-emoji">😎</span>Utilize o CPF do aluno para pesquisar em nossa base de dados. 
                               <br> <i> <b> *Caso o aluno não exista em nossa base, você pode cadastrá-lo manualmente. </b> </i></a>
                               
                            </div>
                            
                        </div>
                    </div>                    
                    <button class="btn btn-primary float-end">Pesquisar</button>
                    </div>
                    <div class="col-md-12 col-6">

                </div>
                            </div>
                        </form>

                @if ($search)

                @foreach ($data->alunos as $result)  
           
            
            
     
                    </form>

                {!! Form::open(array('route' => 'aluno.store','method'=>'POST')) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column"> <b> Nome do Aluno </b> </label>
                                        {!! Form::text('AlunoNome', $result->NomeAluno, array('placeholder' => 'Nome Completo','class' => 'form-control')) !!}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                   </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"> <b> Data de Nascimento </b></label>
                                        <div class="position-relative">

                                        {!! Form::date('AlunoDataNascimento', $result->DataNascAluno, array('placeholder' => 'Data de Nascimento','class' => 'form-control')) !!}

                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b> CPF</b></label>
                                        <div class="position-relative">

                                        {!! Form::text('AlunoCPF', $result->GerPesCPF, array('placeholder' => 'CPF','class' => 'form-control')) !!}

                                         
                                            
                                    </div>
                                </div>

                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b> Sexo</b></label>
                                        <div class="position-relative">

                                        {!! Form::text('AlunoSexo', $result->GerPesSexo, array('placeholder' => 'Sexo','class' => 'form-control' )) !!}

                                  

                                            
                                    </div>
                                </div>

                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"> <b> Nome da Mãe</b></label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoFiliacao1',  $result->GerPesNomMae, array('placeholder' => 'Nome da Mãe','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b>Nome do Pai</b></label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoFiliacao2', $result->GerPesNomPai, array('placeholder' => 'Nome do Pai','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b> Endereço</b> </label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoEndereco', $result->GerPesEnd, array('placeholder' => 'Endereço','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b>Número</b></label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoNumero', $result->GerPesCmpLog, array('placeholder' => 'N°','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b>Bairro</b></label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoBairro',  $result->GerPesBairro, array('placeholder' => 'Bairro','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b>CEP</b></label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoCEP', $result->GerPesCEP, array('placeholder' => 'CEP','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b>Cidade</b></label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoCidade', null, array('placeholder' => 'Cidade','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b>Estado</b></label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoEstado', null, array('placeholder' => 'Estado','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b>DDD</b></label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoDDD', $result->GerPesTelResDDD, array('placeholder' => 'DDD','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><b>Telefone</b></label>
                                        <div class="position-relative">
                                        {!! Form::text('AlunoTelefone', $result->GerPesTelCel, array('placeholder' => 'Telefone','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                  
                                    <div class="card-body">
                                    <h4 class="card-title"><b>Escreva o motivo</b></h4>
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
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Registrar Usuário</button>
                                </div>
                            </div>

                            @endforeach 

                            @else

                            @endif
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