@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Usuários</h3>
                <p class="text-subtitle text-muted">
                   <p>Perfis do Sistema.</p>
            <a class="btn btn-primary" href="{{ route('roles.create') }}"> Criar Novo Perfil </a>
        
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel Gerencial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Perfis</li>
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
           @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
                
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nome</th>
                            <th>Ações</th>
                          
                        </tr>
                    </thead>
                        @foreach ($roles as $key => $role)

                    <tbody>
                        <tr>
               
                           <td>{{ ++$i }}</td>
                           <td>{{ $role->name }}</td>
                          <td>
            <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">Ver</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Editar</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
                
            </div>
        </div>
        
    </section>
</div>


@endsection