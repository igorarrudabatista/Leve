@extends('base.base')
@section('content')




<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Painel Gerencial</h3>
                <p class="text-subtitle text-muted">Central do Sistema em único lugar.</p>
            </div>
            <div class="col-12 col-md-6">
                <nav aria-label="breadcrumb" class='breadcrumb-header text-right'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                    </ol>
                </nav>
            </div>
        </div>
<section id="card-caps">
    <div class="row">

        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/samples/programmers-coding-computer-app-7CFXNL5.jpg')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Cadastro Básicos</h4>

                            <p class="card-text text-ellipsis">
                                Cadastros básicos do sitema.
                            </p>
                        </div>
                        <div class="overlay-status">
                            <a href="{{asset('/painel/cadastro/index')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/samples/happy-children-building-robots-at-robotics-school-PW3NYKH.jpg')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark bg-overlay d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Consulta de Aluno</h4>
                            <p class="card-text text-ellipsis">
                               Consultar Alunos.
                            </p>
                        </div>
                        <div class="overlay-status">
                            <a href="{{asset('/painel/consulta_aluno')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/samples/modern-teaching-concept-P7BTJU7.jpg')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Consulta de Fichas</h4>

                            <p class="card-text text-ellipsis">
                                Consultar fichas.
                            </p>
                        </div>
                        <div class="overlay-status text-right">
                            <a href="{{asset('/painel/consulta_ficha')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/samples/learning-new-codes-8VKXG4E.jpg')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Outros...</h4>
                            <p class="card-text text-ellipsis">
                              Reservado...
                            </p>
                        </div>
                        <div class="overlay-status text-right">
                            <a href="#" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
    </div>


@endsection