@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Atribuir Peril ao Usuário</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel Gerencial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Atribuir Peril ao Usuário</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>

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
                                <div class="col-md-6 col-12">
                                    <div class="form-group">

                                        <form action="{{asset('/usuarios/atribuir_perfil')}}" method="POST">
                                            @csrf
                                            
                                        <select  name="permission_id"   class="choices form-select">
                                            @foreach($permissions as $permission)
                                            <option value="{{$permission->id}}">{{$permission->name ?? 'Perfil não encontrado'}} - {{$permission->id}} </option>
                          
                                            @endforeach
                                        </select>
                    

                                    
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <select  name="model_id "class="choices form-select">
                                            @foreach($usuario as $usuarios)
                                            <option value="{{$usuarios->id}}">{{$usuarios->name ?? 'Nome não encontrado'}} - {{$usuarios->id}}</option>
                          
                                            @endforeach
                                        </select>
                                     
                                    </div>
                                </div>

                               
                            </div>
                                 
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>

</section>
@endsection