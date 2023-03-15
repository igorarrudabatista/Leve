'@extends('base.base')
@section('content')


<div id="auth">       
           
            <form action="{{asset('/painel/consulta_aluno')}}" method="GET" enctype="multipart/form-data">

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card py-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                            <h3>Consulta de Alunos</h3>
                            <p> Utilize o campo de CPF para localizar o aluno </p>
                        </div>
                        <form action="index.html">
                            <div class="form-group">
                                {{-- <input type="email" id="first-name-column" class="form-control" name="fname-column"> --}}
                            </div>
    
                            <div class="form-group">
                                <label for="first-name-column">CPF</label>
                                <input type="text" id="search" class="form-control" name="search" placeholder="CPF do Aluno">
                            </div>
    
                               {{--  <div class="form-group">
                                <label for="first-name-column">Data de Nascimento</label>
                               <input type="date" id="first-name-column" class="form-control" name="fname-column"> 
                            </div>--}}
    
                            <div class="clearfix">
                                <button class="btn btn-primary float-end">Pesquisar</button>
                            </div>
<br>
                            @if ($search)
                            
                            @foreach ($response as $results)  
                            <p><b> Nome do Aluno:  </b>    {{ $results->AlunoNome }}</p> 
                            <p><b> Data Nascimento:  </b>  {{ $results->AlunoDataNascimento }}</p> 
                            <p><b> CPF:  </b>              {{ $results->AlunoCPF }}</p> 
                            <p><b> Filiação 1:  </b>       {{ $results->AlunoFiliacao1 }}</p> 
                            <p><b> Filiação 2:  </b>       {{ $results->AlunoFiliacao2 }}</p> 
                 

                            {{-- <td> <a class="btn btn-warning float-end" href="{{ route('ficha.create', $results->id) }}">Criar Ficha</a> --}}
                            <td> <a class="btn btn-warning float-end" href="{{asset('/ficha/create/')}}/{{$results->id}}">Criar Ficha</a>
                            
                            @endforeach
                            


                         
                                      @endif
                                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        </div>

   



@endsection