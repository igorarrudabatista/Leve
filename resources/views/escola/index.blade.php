@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

@extends('base.base')

@section('content')


<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Lista de Escolas</h3>
                <p class="text-subtitle text-muted">
                <a class="btn btn-primary" href="{{ route('escola.create') }}"> Cadastrar Escola</a>
            </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Escolas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
    <div class="card">
        
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Mensagem:</strong> {{ $message }}
  </div>
</div>
            
                @elseif ($message = Session::get('edit'))
                <div class="alert alert-warning alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Mensagem:</strong> {{ $message }}
  </div>
</div>

                @elseif ($message = Session::get('delete'))
                <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Mensagem:</strong> {{ $message }}
  </div>
</div>
                @endif


                <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
                
       <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Código da Escola</th>
                            <th>Nome da Escola</th>
                            <th>Cidade</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Status</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    @foreach ($escola as $key => $escolas)

                            <td>{{$escolas->EscolaCod ?? 'Não encontrado' }}  </td>
                            <td>{{$escolas->EscolaNome ?? 'Não encontrado' }}  </td>
                            <td>{{$escolas->EscolaCidade	?? 'Sem registros'  }} - {{$escolas->EscolaEstado	?? 'Sem registros'  }}</td>
                            <td>({{$escolas->EscolaDDD }}) {{$alunos->EscolaTel	?? 'Sem registros'  }}</td>
                            <td>{{$escolas->EscolaEmail ?? 'Não encontrado' }}  </td>
                            <td>
                            @if ($escolas->EscolaStatus == 'Ativa')
                            <span class="badge bg-success">Ativa</span>

                            @else

                            <span class="badge bg-danger">Inativa</span>


                            @endif

                        </td>

</td>
                            
                           <!-- <td> <a class="btn btn-primary" href="{{ route('escola.show',$escolas->id) }}">Ver</a> -->
                           <td> <a class="btn btn-warning" href="{{ route('escola.edit',$escolas->id) }}">Editar</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['escola.destroy', $escolas->id],'style'=>'display:inline']) !!}
                           {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 

                           {!! Form::close() !!}
                            </td>
                        </tr>
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