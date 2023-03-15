'@extends('base.base')
@section('content')


<div id="auth">       
           
            <form action="{{asset('/API/CEP')}}" method="GET" enctype="multipart/form-data">

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card py-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                            <h3>Consulta de CEP</h3>
                            <p> Utilize o campo de CEP para localizar  </p>
                        </div>
                        <form action="index.html">
                            <div class="form-group">
                                {{-- <input type="email" id="first-name-column" class="form-control" name="fname-column"> --}}
                            </div>
    
                            <div class="form-group">
                                <label for="first-name-column">CEP</label>
                                <input type="text" id="search" class="form-control" name="search" placeholder="Digite o CEP aqui">
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

                                <p><b> Cidade:  </b>   {{ $data->city }}</p> 
                                <p><b> Estado:</b>   {{ $data->state }}</p> 
                                <p><b> Bairro:</b> {{ $data->neighborhood }}</p> 
                                <p><b> Rua:</b>      {{ $data->street }}</p> 
                                <p><b> Serviço:</b>      {{ $data->service }}</p> 
                                <p><b> Longitude:</b>      {{ $data->location->coordinates->longitude }}
                                <b>    Latitude:</b>      {{ $data->location->coordinates->latitude }}</p> 
              


                            <button class="btn btn-warning float-end">Limpar pesquisa</button> </a>
                            @else
                         
                                      @endif
                                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        </div>

   



@endsection