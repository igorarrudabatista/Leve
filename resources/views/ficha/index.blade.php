@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Minhas Fichas</h3>
                <p class="text-subtitle text-muted">
                   <p> Listagem de Fichas Criadas por você, <b> {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->name }}}  </b></p>
                   <a class="btn btn-primary" href="{{ route('ficha.create') }}"> Criar nova Ficha</a>


            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fichas</li>
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
                            <th>Id da Ficha</th>
                            <th>Categoria</th>
                            <th>Nome do Aluno</th>
                            <th>Escola</th>
                            <th>Data de Abertura</th>
                            <th>Atualizado em</th>
                            <th>Ação</th>
                            <th>Tramitado para</th>
                        </tr>
                    </thead>
                    @foreach($ficha as $fichas) 
                   

                           <td>{{$fichas->id}}</td>

                           <td>{{$fichas->categoria->FichaCatNome ?? ' Registro Não Encontrado'  }}</td>
                           
                           <td>{{$fichas->aluno->AlunoNome ?? ' Registro Não Encontrado'}}</td>

                           <td>{{$fichas->escola->EscolaNome ??  ' Registro Não Encontrado'}}</td>


                           


                           <td>{{$fichas->created_at ??  'Sem registros'}} </td>
                           <td>{{$fichas->updated_at ??  'Sem registros'}} </td>
                           <td> <a class="btn btn-warning" href="{{ route('ficha.edit',$fichas->id) }}">Editar</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['ficha.destroy', $fichas->id],'style'=>'display:inline']) !!}
                           {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}

                           {!! Form::close() !!}
                            
                            <td>
                            @if ($fichas->status_id != '')
                            <span class="badge bg-success">{{$fichas->users->name ?? 'Não encontrado'}} <br> {{$fichas->users->email ?? 'Não encontrado'}} </span>
                            
                            {{-- @elseif  ($fichas->FichaStatus == 'Conselho2')
                            <span class="badge bg-warning">Conselho 2</span>

                            @elseif  ($fichas->FichaStatus == 'Conselho3')
                            <span class="badge bg-primary">Conselho 3</span> --}}

                            @else
                            <span class="badge bg-danger">Não Tramitado</span>
                            @endif
                            
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