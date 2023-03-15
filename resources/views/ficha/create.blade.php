@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Ficha</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Criar Ficha</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
               
                <div class="card-content">
                    <div class="card-body">
                        <div class="container">
                          
                            <section class="section">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="container">
                                                        <div class="row d-flex justify-content-center">
                                                          <div class="col-sm">
                                                          </div>
                                                          <div class="d-flex justify-content-center">
                                                            <B> MINISTÉRIO PÚBLICO DO ESTADO DE MATO GROSSO <br>

                                                                NÚCLEO DE DEFESA DA CIDADANIA DA CAPITAL  
                                                                  <br>  8° PROMOTORIA DE JUSTIÇA CÍVEL </B>
                                                          </div> 
                                                          <div class="col-sm">
                                                          </div>
                                                        </div>
                                                        <br> 

                                                        <div class="row justify-content-md-center">
                                                            <div class="col-sm">
                                                            </div>
                                                            <div class="col-md-auto ">
                                                        <code> MISSÃO: </code> Defender o regime democrático, a ordem jurídica e os interesses sociais e indivíduais indispensáveis, buscando a justiça social
                                                         e o pleno exercício da cidadania.
                                                            </div> 
                                                            <div class="col-sm">
                                                            </div>
                                                          </div>
                                                           
                                                          <br> 
                                                            <div class="row justify-content-md-center">
                                                                <div class="col-sm">
                                                                </div>
                                                                <div class="col-md-auto ">
                                                                <B> FICHA DE ESTUDANTE INFREQUENTE / INDISCIPLINADO / INFRATOR - FICAI </B>
                                                                <br> <br>
                                                            </div> 
                                                            <div class="col-sm">
                                                            </div>
                                                        </div>
                                                        {{-- <form action="{{asset('/ficha')}}" method="POST">
                                                            @csrf --}}
                                                
                                                            {!! Form::open(array('route' => 'ficha.store','method'=>'POST')) !!}

          
                                                <hr>
                                                <div class="card-header">
                                                    <h6 class="card-title">IDENTIFICAÇÃO DO ESTUDANTE: </h5>
                                                </div>
                                                <div class="card-body">

                                                <input type="hidden" class="form-control" id="aluno_id" name="aluno_id" value="{{$id_aluno->id}}" > 
                                                
                                                
                                                


                                                    
                                                        <code> Nome: </code> {{ $id_aluno->AlunoNome ?? 'Não encontrado' }} 
                                                        <code> Data de Nascimento: </code> {{ $id_aluno->AlunoDataNascimento ?? 'Não encontrado' }} <br>
                                                        <code> Filiação: </code> {{ $id_aluno->AlunoFiliacao1 ?? 'Não encontrado' }} <br>
                                                        <code> Endereço: </code> {{ $id_aluno->AlunoEndereco ?? 'Não encontrado' }} 
                                                        <code> Telefone: </code> {{ $id_aluno->AlunoTelefone ?? 'Não encontrado' }}<br>
                                                        <code> Município: </code> {{ $id_aluno->AlunoCidade ?? 'Não encontrado' }}

                                           
                                            
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="card-header">
                                                <h6 class="card-title">IDENTIFICAÇÃO DA ESCOLA: </h5>
                                            </div>
                                            <div class="card-body">

                                                <select name="escola_id" id="escola_id" class="form-control">
                                                    <option value="" disabled> Selecione a Escola do Aluno</option>
                                                    @foreach ($escola as $escolas)
                                                    <option value="{{ $escolas->id}}">{{$escolas->id}} - {{$escolas->EscolaNome}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-4 ">
                                                                    <div class="list-group" role="tablist">
                                                                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                                                                            data-bs-toggle="list" href="#list-home" role="tab">1. Motivo do Encaminhamento</a>
                                                                        <a class="list-group-item list-group-item-action" id="list-profile-list"
                                                                            data-bs-toggle="list" href="#list-profile" role="tab">2. Providências da Unidade Escolar</a>
                                                                        <a class="list-group-item list-group-item-action" id="list-settings-tramitar"
                                                                            data-bs-toggle="list" href="#list-tramitar" role="tab">3. Tramitar para</a>
                                                                        <a class="list-group-item list-group-item-action" id="list-settings-finalizar"
                                                                            data-bs-toggle="list" href="#list-finalizar" role="tab">4. FINALIZAR CADASTRO</a>
                                                                   
                                                                        </div>
                                                                </div>

                                                                <div class="col-12 col-sm-12 col-md-8 mt-1">
                                                                    <div class="tab-content text-justify" id="nav-tabContent">
                                                                        <div class="tab-pane show active" id="list-home" role="tabpanel"
                                                                            aria-labelledby="list-home-list">
                                                                            
                                                                            <div class="form-group">

                                                                                    <h6>Selecione o Motivo do Encaminhamento:</h6>

                                                                                    <div class="form-group">

                                                                                    <select name="categoria_id" id="categoria_id" class="form-control">
                                                                                        <option value="" disabled> Selecionar Aluno </option>
                                                                                        @foreach ($categoria as $categorias)
                                                                                        <option value="{{ $categorias->id}}"> {{$categorias->Categoria_Nome}} </option>
                                                                                        @endforeach
                                                                                    </select>

                                                                                    </div>
                                                                                    
                                                                                    <label for="first-name-column">Nome do Responsável pelo Encaminhamento</label>
                                                                                    {{-- <input type="text" class="form-control"  name="Nome_resp_encaminhamento" > --}}
                                                                                    {!! Form::text('Nome_resp_encaminhamento', null, array('placeholder' => 'Nome Completo do responsável','class' => 'form-control')) !!}


                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="last-name-column">CPF</label>
                                                                                {{-- <input type="text" class="form-control"  name="CPF_resp_encaminhamento" > --}}
                                                                                {!! Form::text('CPF_resp_encaminhamento', null, array('placeholder' => 'CPF do responsável','class' => 'form-control')) !!}

                                                                            </div>
                                                                                  
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">Escreva o motivo</h4>
                                                                                <div>
                                                                                {{-- <input type="text" class="form-control" id="Obs_motivo" name="Obs_motivo" > --}}
                                                                                {!! Form::text('Obs_motivo', null, array('placeholder' => 'Motivo:','class' => 'form-control')) !!}

                                                                            <p><br></p>
                                                                                </div>
                                                                            </div>
                                                                              
                                                                        </div>

                                                                        <div class="tab-pane" id="list-profile" role="tabpanel"
                                                                            aria-labelledby="list-profile-list">
                                                                            <div class="row">

                                                                                <div class="form-group col-md-4 col-4">
                                                                                <label for="first-name-column">Data da Comunicação aos Pais</label>
                                                                                {{-- <input type="date" class="form-control" id="Data_comunica_responsaveis" name="Data_comunica_responsaveis" > --}}
                                                                                {!! Form::date('Data_comunica_responsaveis', null, array('placeholder' => 'Motivo:','class' => 'form-control')) !!}


                                                                                </div>
                                                                       
                                                                            <div class="form-group col-md-6 col-6">
                                                                                <label for="last-name-column">Nome </label>
                                                                                {{-- <input type="text" class="form-control" id="Nome_comunica_responsaveis" name="Nome_comunica_responsaveis" > --}}
                                                                                {!! Form::text('Nome_comunica_responsaveis', null, array('placeholder' => '','class' => 'form-control')) !!}


                                                                            </div>

                                                                            <div class="form-group col-md-4 col-4">

                                                                                <label for="last-name-column">Por quem:</label>
                                                                                {{-- <input type="text" class="form-control" id="Porquem_comunica_responsaveis" name="Porquem_comunica_responsaveis" > --}}
                                                                                {!! Form::text('Porquem_comunica_responsaveis', null, array('placeholder' => '','class' => 'form-control')) !!}

                                                                            </div>
                                                                            <div class="form-group col-md-4 col-4">

                                                                                <label for="last-name-column">CPF</label>
                                                                                {{-- <input type="text" class="form-control" id="CPF_comunica_responsaveis" name="CPF_comunica_responsaveis" > --}}
                                                                                {!! Form::text('CPF_comunica_responsaveis', null, array('placeholder' => '','class' => 'form-control')) !!}


                                                                            </div>
                                                                            <div class="form-group col-md-4 col-4">

                                                                            <div class="form-group has-icon-left">
                                                                                <label for="mobile-id-icon">Telefone</label>
                                                                                <div class="position-relative">
                                                                                {{-- <input type="text" class="form-control" id="Telefone_comunica_responsaveis" name="Telefone_comunica_responsaveis" > --}}
                                                                                {!! Form::text('Telefone_comunica_responsaveis', null, array('placeholder' => '','class' => 'form-control')) !!}


                                                                                    <!-- <input type="text" class="form-control" placeholder="DDD + Telefone" id="mobile-id-icon"> -->
                                                                                    <div class="form-control-icon">
                                                                                        <i data-feather="phone"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div> </div>
                                                                            
                                                                            <div class="form-group col-md-4 col-4">
                                                                                <label for="last-name-column">Para quem:</label>
                                                                                {{-- <input type="text" class="form-control" id="Paraquem_comunica_responsaveis" name="Paraquem_comunica_responsaveis" > --}}
                                                                                {!! Form::text('Paraquem_comunica_responsaveis', null, array('placeholder' => '','class' => 'form-control')) !!}


                                                                            </div>
                                                                            <div class="form-group col-md-4 col-4">
                                                                                <label for="last-name-column">Escolha o Conselho</label>
                                                                                <input type="text" class="form-control" id="Conselho_comunica_responsaveis" name="Conselho_comunica_responsaveis" >


                                                                            </div>

                                                                            <section class="section">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="card">
                                                                                            <div class="card-header">
                                                                                                Procedimentos Realizados
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <div class="form-group with-title mb-3">
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                                                    <label>Escreva aqui</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                            
                                                                        </div></div>
                                                                        {{-- <div class="tab-pane" id="list-messages" role="tabpanel"
                                                                            aria-labelledby="list-messages-list">
                                                                            <div class="row">

                                                                                <div class="form-group col-md-4 col-4">
                                                                                    <label for="first-name-column">Encaminhando para a SEDUC em</label>
                                                                                    <input type="date" id="first-name-column" class="form-control" placeholder="First Name"
                                                                                    name="fname-column">
                                                                                </div>

                                                                                <div class="form-group col-md-4 col-4">
                                                                                    <label for="last-name-column">CPF</label>
                                                                                    <input type="text" id="last-name-column" class="form-control" placeholder="000.000.000-00"
                                                                                        name="lname-column">
                                                                                </div> 
                                                                            </div>
                                                                            <div class="form-group col-md-6 col-6">
                                                                                <label for="last-name-column">Nome </label>
                                                                                <input type="text" id="last-name-column" class="form-control" placeholder="Nome"
                                                                                    name="lname-column">
                                                                            </div>
                                                                            <section class="section">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="card">
                                                                                            <div class="card-header">
                                                                                                Procedimentos Realizados
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <div class="form-group with-title mb-3">
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                                                    <label>Escreva aqui</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                        <div class="tab-pane" id="list-settings" role="tabpanel"
                                                                            aria-labelledby="list-settings-list">
                                                                            <div class="row">

                                                                                <div class="form-group col-md-4 col-4">
                                                                                    <label for="first-name-column">Encaminhando para o Conselho Tutelar em</label>
                                                                                    <input type="date" id="first-name-column" class="form-control" placeholder="First Name"
                                                                                    name="fname-column">
                                                                                </div>

                                                                                <div class="form-group col-md-4 col-4">
                                                                                    <label for="last-name-column">CPF</label>
                                                                                    <input type="text" id="last-name-column" class="form-control" placeholder="000.000.000-00"
                                                                                        name="lname-column">
                                                                                </div> 
                                                                            </div>
                                                                            <div class="form-group col-md-6 col-6">
                                                                                <label for="last-name-column">Nome </label>
                                                                                <input type="text" id="last-name-column" class="form-control" placeholder="Nome"
                                                                                    name="lname-column">
                                                                            </div>
                                                                            <section class="section">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="card">
                                                                                            <div class="card-header">
                                                                                                Procedimentos Realizados
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <div class="form-group with-title mb-3">
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                                                    <label>Escreva aqui</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                    </div>

                                                                    <div class="tab-pane" id="list-ministerio" role="tabpanel"
                                                                    aria-labelledby="list-settings-list">
                                                                    <div class="row">

                                                                        <div class="form-group col-md-4 col-4">
                                                                        <label for="first-name-column">Encaminhando Ministério Público em</label>
                                                                        <input type="date" id="first-name-column" class="form-control" placeholder="First Name"
                                                                            name="fname-column">
                                                                        </div>

                                                                        <div class="form-group col-md-4 col-4">
                                                                            <label for="last-name-column">CPF</label>
                                                                            <input type="text" id="last-name-column" class="form-control" placeholder="000.000.000-00"
                                                                                name="lname-column">
                                                                        </div> 
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-6">
                                                                        <label for="last-name-column">Nome </label>
                                                                        <input type="text" id="last-name-column" class="form-control" placeholder="Nome"
                                                                            name="lname-column">
                                                                    </div>

                                                                    <section class="section">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        Procedimentos Realizados
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <div class="form-group with-title mb-3">
                                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                                            <label>Escreva aqui</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                    <div class="clearfix"> 
                                                                        
                                                                        <button class="btn btn-primary float-end"> Salvar</button>
                                                                    </div>
                                                            </div>
--}}
                                                            <div class="tab-pane" id="list-tramitar" role="tabpanel"
                                                            aria-labelledby="list-settings-list">
                                                            <div class="row">

                                                                <div class="col-xl-6 col-sm-6 col-12">
                                                                    <div class="card text-center bg-lighten-2">
                                                                        <div class="card-content d-flex">
                                                                            <div class="card-body">
                                                                                <img src="https://www.onlyoffice.com/blog/wp-content/uploads/2022/09/Blog_fillable_form_in_PDF.jpg" alt="" height="100"
                                                                                    class="mb-1">
                                                                                <h4 class="card-title white">Tramitar para</h4>
                                                                                {!! Form::select('status_id', $user, null, ['class' => 'form-control']) !!}


                                                                              
                                                                                
                                                                                </select>

                                                                              

                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            </div>
                                                            
                                                                <div class="tab-pane" id="list-finalizar" role="tabpanel"
                                                                aria-labelledby="list-settings-list">
                                                                <div class="row">
                                                                <div class="col-xl-4 col-sm-6 col-12">
                                                                    <div class="card text-center bg-lighten-2">
                                                                        <div class="card-content d-flex">
                                                                            <div class="card-body">
                                                                                <img src="https://www.onlyoffice.com/blog/wp-content/uploads/2022/09/Blog_fillable_form_in_PDF.jpg" alt="" height="100"
                                                                                    class="mb-1">
                                                                                <h4 class="card-title white">Finalize o formulário clicando em Salvar</h4>
                                                                                <p class="card-text white">Obrigado</p>
                                                                                <button class="btn btn-primary white"> Salvar</button>

                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </div> 


                                               

                                                              
                                                               
                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- List group navigation ends -->


<script src="{{asset('/js/pages/form-editor.js')}}"></script>

@endsection