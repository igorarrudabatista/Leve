@extends('base.base')

@section('content')





<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
              <h1 class="app-page-title mb-0">PRODUTOS</h1> <br>

        <a href="{{asset('/produtos/create')}}"  button type="submit" class="btn bg-primary text-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
          <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z"/>
        </svg> Adicionar Produto </button> </a>

        </div>
        <div class="col-auto">
           <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
              <div class="col-auto">
                <form class="table-search-form row gx-1 align-items-center">
                          <div class="col-auto">
                              <input type="text" id="search" name="search" class="form-control search-orders" placeholder="Procurar">
                          </div>
                          <div class="col-auto">
                              <button type="submit" class="btn app-btn-secondary">Procurar</button>
                          </div>
                      </form>
                      
              </div><!--//col-->
              <div class="col-auto">						    
                <a class="btn app-btn-secondary" href="{{asset('/produto/export')}}">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                  Download Excel
              </a>
              </div>
              <div class="col-auto">						    
                @if ($search)
                <a href="{{asset('/produtos')}}">
                  <button class="btn">Limpar pesquisa</button> </a>
                  @else
            
                  @endif
                  
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
                    <th class="cell">Categoria</th>
                    <th class="cell">Quantidade</th>
                    <th class="cell">Preço</th>
                    <th class="cell">Ações</th>
                    <th class="cell"></th>

                  </tr>
                </thead>
                @foreach($produto as $produtos )
                
                <tbody>
                  <tr>
              
                    <td class="cell">{{$produtos->id}}</td>
                    <td class="cell"><span class="truncate">{{$produtos->Nome_Produto}}</span></td>
                    <td class="cell">{{$produtos->Categoria_Produto}}</td>


                    <td class="cell">
                    @if ($produtos->Quantidade_Produto == '')
                       <span class="badge bg-warning"> Quantidade não lançado </span>
                    @elseif  ($produtos->Preco_Produto !== '')
                           <big> <span class="badge bg-info"> {{$produtos->Quantidade_Produto }}</span> </big>
                    @endif
                    
                    <td class="cell" >
                    
                    @if ($produtos->Preco_Produto == '')
                       <span class="badge bg-danger"> Valor não lançado </span>
                    @elseif  ($produtos->Preco_Produto != '')
                            <span class="badge bg-success"> R${{ number_format($produtos->Preco_Produto, 2.2) }} </span>
                    @endif



                    <td class="cell">
                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-subtract" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                              </svg>
                            </div><!--//dropdown-toggle-->
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
    </svg>View</a></li>
                                <li><a class="dropdown-item" href="{{ route('produtos.edit',$produtos->id) }}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
    </svg>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
    <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
    </svg>Download</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a>
                                  {!! Form::open(['method' => 'DELETE','route' => ['produtos.destroy', $produtos->id]]) !!}
                                  {!! Form::image('images/trash3.svg', 'Deletar', ['class' => 'dropdown-item']) !!}


                                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg> 
                                  {!! Form::close() !!} 
                                </li>
                              </ul>
                        </div><!--//dropdown-->
                    </div><!--//app-card-actions-->
                      {{-- <a class="btn btn-warning text-light" href="{{ route('produtos.edit',$produtos->id) }}">Editar</a> --}}
                 




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