@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Usuários</h3>
                <p class="text-subtitle text-muted">
                   <p>Usuários do Sistema.</p>
            <a class="btn btn-success" href="{{ route('usuarios.create') }}"> Criar novo usuário do sistema</a>
        
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel Gerencial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Usuários</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                
                
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Perfil de Acesso</th>
                            <th>Data de Criação</th>
                            <th>Data de Atualização</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                          
                        </tr>
                    </thead>
                    @foreach ($usuario as $key => $usuarios)

                    <tbody>
                        <tr>
               
                           <td>{{ ++$i }}</td>

                           <td>{{$usuarios->name?? 'Sem registros'  }}</td>
                           
                           <td>{{$usuarios->email ?? 'Sem registros'}}</td>

                           <td>
            @if(!empty($usuarios->getRoleNames()))
                @foreach($usuarios->getRoleNames() as $v)
                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                @endforeach
            @endif
        </td>
                           <td>{{$usuarios->created_at ??  'Sem registros'}} </td>
                           <td>{{$usuarios->updated_at ??  'Sem registros'}} </td>
                           <td> <a class="btn btn-primary" href="{{ route('usuario.show',$usuarios->id) }}">Ver</a>
                           <td> <a class="btn btn-warning" href="{{ route('usuario.edit',$usuarios->id) }}">Editar</a>
                           <!-- <td> <a class="btn btn-danger" href="{{ route('usuario.show',$usuarios->id) }}">Excluir</a> -->
                           {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $usuarios->id],'style'=>'display:inline']) !!}
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