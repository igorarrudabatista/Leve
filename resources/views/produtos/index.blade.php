@extends('base.base')

@section('content')

<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
              <h1 class="app-page-title mb-0">Produtos</h1> <br>

        <a href="{{asset('/produtos/create')}}"  button type="submit" class="btn app-btn-secondary">Adicionar Produto </button> </a>

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
     
{{--       
      <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
        <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
    </nav> --}}
    
    
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
                    @elseif  ($produtos->Preco_Produto != '')
                           <big> <span class="badge bg-info">   {{$produtos->Quantidade_Produto }}</span> </big>
                    @endif
                    
                    <td class="cell" >
                      
                    

                    @if ($produtos->Preco_Produto == '')
                       <span class="badge bg-danger"> Valor não lançado </span>
                    @elseif  ($produtos->Preco_Produto != '')
                            <span class="badge bg-success"> R$ {{$produtos->Preco_Produto }}</span>
                    @endif



                    <td class="cell">
                      <a class="btn btn-warning" href="{{ route('produtos.edit',$produtos->id) }}">Editar</a>
                      {!! Form::open(['method' => 'DELETE','route' => ['produtos.destroy', $produtos->id],'style'=>'display:inline']) !!}
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