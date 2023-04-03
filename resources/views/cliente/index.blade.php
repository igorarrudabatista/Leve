@extends('base.base')

@section('content')

<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
              <h1 class="app-page-title mb-0">CLIENTES</h1> <br>
        <a href="{{asset('/cliente/create')}}"  button type="submit" class="btn app-btn-secondary">Adicionar Clientes</button> </a>

        </div>
        <div class="col-auto">
           <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
              <div class="col-auto">
                <form class="table-search-form row gx-1 align-items-center">
                          <div class="col-auto">
                              <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Procurar">
                          </div>
                          <div class="col-auto">
                              <button type="submit" class="btn app-btn-secondary">Procurar</button>
                          </div>
                      </form>
                      
              </div><!--//col-->
              <div class="col-auto">
                
             
              </div>
              <div class="col-auto">						    
                <a class="btn app-btn-secondary" href="{{asset('clientes/export')}}">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                  Download Excel
              </a>
              </div>
            </div><!--//row-->
          </div><!--//table-utilities-->
        </div><!--//col-auto-->
      </div><!--//row-->
     
      <div class="card-body">
        @if ($message = Session::get('success'))
  
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration-success" role="alert">
          <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
              <center> <h3 class="mb-3">{{$message}}</h3> </center>
              <div class="row gx-5 gy-3">
                  <div class="col-12 col-lg-12">
                    
                </div><!--//col-->
  
              </div><!--//row-->
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div><!--//app-card-body-->
            
          </div><!--//inner-->
        </div><!--//app-card-->
      
        @elseif ($message = Session::get('edit'))
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration-edit" role="alert">
          <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
              <center> <h3 class="mb-3">{{$message}}</h3> </center>
              <div class="row gx-5 gy-3">
                  <div class="col-12 col-lg-12">
                    
                </div><!--//col-->
  
              </div><!--//row-->
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div><!--//app-card-body-->
            
          </div><!--//inner-->
        </div><!--//app-card-->
      
        @elseif ($message = Session::get('delete'))
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration-delete" role="alert">
          <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
              <center> <h3 class="mb-3">{{$message}}</h3> </center>
              <div class="row gx-5 gy-3">
                  <div class="col-12 col-lg-12">
                    
                </div><!--//col-->
  
              </div><!--//row-->
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div><!--//app-card-body-->
            
          </div><!--//inner-->
        </div><!--//app-card-->
        </div>
      
        @endif
    
    
    <div class="tab-content" id="orders-table-tab-content">
          <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
          <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
              <div class="table-responsive">
                  <table class="table app-table-hover mb-0 text-left">
                <thead>
                  <tr>
                    <th class="cell">Id</th>
                    <th class="cell">Nome</th>
                    <th class="cell">Telefone</th>
                    <th class="cell">Local</th>
                    <th class="cell">Ações</th>
                    <th class="cell"></th>

                  </tr>
                </thead>
                @foreach($cliente as $empresa_clientes )
                
                <tbody>
                  <tr>
                    <td class="cell">{{$empresa_clientes->id}}</td>
                    <td class="cell"><span class="truncate">{{$empresa_clientes->Nome_fantasia}}</span></td>
                    <td class="cell">{{$empresa_clientes->Telefone}}</td>
                    <td class="cell"><span>{{$empresa_clientes->Cidade}}</span><span class="note">{{$empresa_clientes->Estado}}</span>
          
                    <td class="cell">
                      <a class="btn btn-warning" href="{{ route('cliente.edit',$empresa_clientes->id) }}">Editar</a>
                      {!! Form::open(['method' => 'DELETE','route' => ['cliente.destroy', $empresa_clientes->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}


                    {!! Form::close() !!}
                    </td>
                     

     </form>
  </td>
                  </tr>
              
                  
                  @endforeach
                </tbody>
              </table>
                </div><!--//table-responsive-->
            </div><!--//app-card-body-->		
         
        </div><!--//app-card-->
          </div><!--//tab-pane-->
    </div><!--//tab-content-->
    

    </div><!--//container-fluid-->
  </div><!--//app-content-->
  

  
</div><!--//app-wrapper-->    		
@endsection