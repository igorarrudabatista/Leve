@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Usuários</h3>
                <p class="text-subtitle text-muted">
            <a class="btn btn-primary" href="{{ route('users.create') }}"> Criar novo usuário do sistema</a>
        
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
                            <th>E-mail</th>
                            <th>Perfil de Acesso</th>
                            <th>Data de Criação</th>
                            <th>Data de Atualização</th>
                            <th>Ver</th>
                            <th>Ações</th>
                          
                        </tr>
                    </thead>
                    @foreach ($data as $key => $user)

                    <tbody>
                        <tr>
               
                           <td>{{ ++$i }}</td>

                           <td>{{$user->name?? 'Sem registros'  }}</td>
                           
                           <td>{{$user->email ?? 'Sem registros'}}</td>

                           <td>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                @endforeach
            @endif
        </td>
                           <td>{{$user->created_at ??  'Sem registros'}} </td>
                           <td>{{$user->updated_at ??  'Sem registros'}} </td>
                           <td> <a class="btn btn-primary" href="{{ route('users.show',$user->id) }}">Ver</a>
                           <td> <a class="btn btn-warning" href="{{ route('users.edit',$user->id) }}">Editar</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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