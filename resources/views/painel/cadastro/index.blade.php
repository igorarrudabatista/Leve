@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Cadastros Básicos e Parâmetros dos sistemas</h3>
                <p class="text-subtitle text-muted">Cadastros Básicos do sistema em só lugar.</p>
            </div>
            <div class="col-12 col-md-6">
                <nav aria-label="breadcrumb" class='breadcrumb-header text-right'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Card</li>
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
                            <h4 class="card-title mb-50">Cadastro de Polo</h4>
                            Cadastrar Polos.
                            <p class="card-text text-ellipsis">
                            </p>
                        </div>
                        <div class="overlay-status">
                            <a href="{{asset('/polo')}}" class="btn btn-primary btn-sm">Clique aqui </a>
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
                            <h4 class="card-title mb-50">Cadastro de Aluno</h4>
                            <p class="card-text text-ellipsis">
                               Cadastrar Alunos.
                            </p>
                        </div>
                        <div class="overlay-status">
                            <a href="{{asset('/aluno/create')}}" class="btn btn-primary btn-sm">Clique aqui </a>
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
                            <h4 class="card-title mb-50">Cadastro de Prazos</h4>
                            <p class="card-text text-ellipsis">
                                Cadastrar Prazos
                            </p>
                        </div>
                        <div class="overlay-status text-right">
                            <a href="{{asset('/prazo/create')}}" class="btn btn-primary btn-sm">Clique aqui </a>
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
                            <h4 class="card-title mb-50">Cadastro de Série</h4>
                            <p class="card-text text-ellipsis">
                            Cadastrar série
                            </p>
                        </div>
                        <div class="overlay-status text-right">
                            <a href="{{asset('/serie/create')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/samples/programmers-coding-computer-app-7CFXNL5.jpg')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Cadastro de Ministérios</h4>

                            <p class="card-text text-ellipsis">
                                Cadastro das informções do Ministério.
                            </p>
                        </div>
                        <div class="overlay-status">
                            <a href="{{asset('/ministerio/create')}}" class="btn btn-primary btn-sm">Clique aqui </a>
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
                            <h4 class="card-title mb-50">Cadastro de Conselhos</h4>
                            <p class="card-text text-ellipsis">
                               Cadastrar conselhos.
                            </p>
                        </div>
                        <div class="overlay-status">
                            <a href="{{asset('/conselho/create')}}" class="btn btn-primary btn-sm">Clique aqui </a>
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
                            <h4 class="card-title mb-50">Cadastro de Escolas / Lotações</h4>

                            <p class="card-text text-ellipsis">
                                Cadastrar Escolas / Lotações
                            </p>
                        </div>
                        <div class="overlay-status text-right">
                            <a href="{{asset('/escola/create')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</section>
    </div>


@endsection