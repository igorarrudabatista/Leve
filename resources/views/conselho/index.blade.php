@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Cadastro de Conselho</h3>
                <p class="text-subtitle text-muted">
                   <p>Cadastre as informações do Conselho.</p>
                   <a class="btn btn-primary" href="{{ route('conselho.create') }}"> Cadastrar Conselho</a>

        
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel Gerencial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Conselho</li>
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
                            <th>Nome</th>
                            <th>Status</th>
                            <th>Data da criação</th>
                            <th>Data da atualização</th>
                            <th>Ação</th>
              
                          
                        </tr>
                    </thead>
                    @foreach ($conselho as $key => $conselhos)

                    <tbody>
                        <tr>
               
                           <td>{{$conselhos->id }}</td>

                           <td>{{$conselhos->ConselhoNome?? 'Sem registros'  }}</td>
                           

                        <td>
                            @if ($conselhos->ConselhoStatus == 'Ativa')
                            <span class="badge bg-success">Ativa</span>
 
                            @else
 
                            <span class="badge bg-danger">Inativa</span>
 
 
                            @endif
                            
                        </td>
                           <td>{{$conselhos->created_at ??  'Sem registros'}} </td>
                           <td>{{$conselhos->updated_at ??  'Sem registros'}} </td>
                           <td> <a class="btn btn-warning" href="{{ route('conselho.edit',$conselhos->id) }}">Editar</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['conselho.destroy', $conselhos->id],'style'=>'display:inline']) !!}
                           {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}

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