@extends('base.base')
@section('content')


<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Lista de Alunos</h3>
                <p class="text-subtitle text-muted">
                <a class="btn btn-primary" href="{{ route('aluno.create') }}"> Cadastrar Aluno</a>
            </p>
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
    <section class="section">
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
                            <th>Nome do Aluno</th>
                            <th>Data de Nascimento</th>
                            <th>CPF</th>
                            <th>Nome da Mãe</th>
                            <th>Nome do Pai</th>
                            <th>Telefone</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    @foreach ($aluno as $key => $alunos)

                            <td>{{$alunos->id}}</td>
                            <td>{{$alunos->AlunoNome ?? 'Não encontrado' }}  </td>
                            <td>{{$alunos->AlunoDataNascimento	?? 'Sem registros'  }}</td>
                            <td>{{$alunos->AlunoCPF	?? 'Sem registros'  }}</td>
                            <td>{{$alunos->AlunoFiliacao1	?? 'Sem registros'  }}</td>
                            <td>{{$alunos->AlunoFiliacao2	?? 'Sem registros'  }}</td>
                            <td>({{$alunos->AlunoDDD }}) {{$alunos->AlunoTelefone	?? 'Sem registros'  }}</td>
                            
                           <!-- <td> <a class="btn btn-primary" href="{{ route('aluno.show',$alunos->id) }}">Ver</a> -->
                           <td> <a class="btn btn-warning btn-sm" href="{{ route('aluno.edit',$alunos->id) }}">Editar</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['aluno.destroy', $alunos->id],'style'=>'display:inline']) !!}
                           {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm']) !!} 

                           {!! Form::close() !!}
                            </td>
                  
                            
                            
                        </td>
                    </tr>
                    @endforeach
                      
                </table>
            </div>
        </div>

    </section>
</div>


@endsection