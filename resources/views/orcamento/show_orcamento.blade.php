@extends('base.base')

@section('content')
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>


<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>


<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
              <h1 class="app-page-title mb-0">Orçamento</h1>
        <a href="{{asset('/orcamento/create_orcamento')}}"  button type="submit" class="btn app-btn-secondary">Criar Orçamento</button> </a>

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
                <a class="btn app-btn-secondary" href="#">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                  Download CSV
              </a>
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
                    <th class="cell">N° Orçamento</th>
                    <th class="cell">Nome Cliente</th>
                    <th class="cell">Valor</th>
                    <th class="cell">Status</th>
                    <th class="cell">Gerar PDF</th>
                    <th class="cell"></th>
                    <th class="cell"></th>
                    <th class="cell"></th>
                    <th class="cell">Status</th>

                  </tr>
                </thead>



@foreach($orders as $order )


          <td class="cell">
          <span class="cell-label">{{$order->id}}</span>
          </td>
        
          <td class="cell">
            <span class="cell-label">{{$order->empresa_cliente->Nome_Empresa ?? ''}}</span>
          </td>
       
         <!-- <div class="product-cell numero_orcamento">
          <span class="cell-label">Valor:</span>{{$order->empresa_cliente->Nome_Empresa ?? ''}}
         </div> -->
         <td class="cell">
        <div class="product-cell price"><span class="cell-label">R$ {{$order->Valor}}</span> </div>  
      </td>

      <td class="cell">

        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Alterar Status
          </button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item bg-success text-light" href="{{asset('/orcamento/update/status_vendarealizada')}}/{{$order->id}}"> <i class="fas fa-check"></i> Aprovado</a>
            <a class="dropdown-item bg-warning text-light" href="{{asset('/orcamento/update/status_pendente')}}/{{$order->id}}"> <i class="fas fa-exclamation-triangle"></i> Pendente</a> 
            <a class="dropdown-item bg-danger text-light"  href="{{asset('/orcamento/update/status_cancelado')}}/{{$order->id}}"> <i class="fas fa-times"></i> Cancelar</a>
          </div>
        </div>
       
    </td>
    
    <td class="cell">
      <div class="btn-group product-cell pdf " role="group">
        <button id="btnGroupDrop1" type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-file-pdf"></i> Gerar PDF </button>
      </div>
    </td>

    <td class="cell">
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo1/')}}/{{$order->id}}">Modelo 1</a>
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo2/')}}/{{$order->id}}">Modelo 2</a>
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo3/')}}/{{$order->id}}">Modelo 3</a>
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo4/')}}/{{$order->id}}">Modelo 4</a>
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo5/')}}/{{$order->id}}">Modelo 5</a>
        <a class="dropdown-item active" href="{{asset('/orcamento/modelos/modelo6/')}}/{{$order->id}}">Modelo 6</a>
      </div>

</td>

<td class="cell">
  <a class="btn btn-warning" href="{{asset('/orcamento/edit')}}/{{$order->id}}">Editar</a>
 </td>


    
    <td class="cell">
     <div class="product-cell status2"> <span class="cell-label"></span>

      @if ($order->Status == 'Cancelado')
      <span class="dropdown-item bg-danger text-light"> <i class="fas fa-times">  </i>  CANCELADO   </span> 

      @elseif  ($order->Status == 'Aprovado')
      <span class="dropdown-item bg-success text-light"> <i class="fas fa-check"></i> APROVADO </span> 
            
      @elseif  ($order->Status == 'Pendente')
      <span class="dropdown-item bg-warning text-light"><i class="fas fa-exclamation-triangle"></i> PENDENTE</span> 

      {{-- @if ($order->Status == 'Cancelada')
      <span class="status active">Cancelada</span>   --}}    
      @else
      <span class="dropdown-item bg-primary text-light"> SEM STATUS </span> 
      @endif


     </td>

     <td class="cell">
      @csrf
      @method('DELETE')
        
        <form action="{{asset('/orcamento')}}/{{$order->id}}" method="POST">
                          @csrf
                          <input name="_method" type="hidden" value="DELETE">

                          <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Deletar</button>
                      </form>

 
   
  </td>
    </tr>

     @endforeach
                  </table>
              </div></div></div>
  <!-- partial -->
