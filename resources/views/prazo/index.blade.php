@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Cadastro de Prazos</h3>
                <p class="text-subtitle text-muted">
                   <p>Cadastre as informações de Prazos.</p>
                   <a class="btn btn-primary" href="{{ route('prazo.create') }}"> Cadastrar Prazos</a>

        
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel Gerencial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Prazos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card">
        
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            
                @elseif ($message = Session::get('edit'))
                   <div class="alert alert-warning">
                        <p>{{ $message }}</p>
                    </div>

                @elseif ($message = Session::get('delete'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                </div>
            </div>
                @endif
                
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Prazo</th>
                            <th>Dias do Prazo</th>
                            <th>Data de Criação</th>
                            <th>Data de Atualização</th>
                            <th>Ações</th>
                          
                        </tr>
                    </thead>
                    @foreach ($prazo as $key => $prazos)

                    <tbody>
                        <tr>
               
                           <td>{{$prazos->id }}</td>

                           <td>{{$prazos->ParmPerfilAcessoNivel?? 'Sem registros'  }}</td>
                           
                           <td>{{$prazos->ParmPrazoDias ?? 'Sem registros'}}</td>

          
                           <td>{{$prazos->created_at ??  'Sem registros'}} </td>
                           <td>{{$prazos->updated_at ??  'Sem registros'}} </td>
                           <td> <a class="btn btn-warning" href="{{ route('prazo.edit',$prazos->id) }}">Editar</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['prazo.destroy', $prazos->id],'style'=>'display:inline']) !!}
                           {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                           {!! Form::close() !!}
 </td>


                            
                                            </tr>
                        
                        @endforeach

                        
                    </tbody>
                </table>
                
            </div>
        </div>
        
    </section>
</div>


@endsection