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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>

<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
              <h1 class="app-page-title mb-0">Orçamentos</h1><br>
        <a href="{{asset('/orcamento/create')}}"  button type="submit" class="btn bg-primary text-light ">Adicionar Orçamento</button> </a>

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
                  Download
              </a>
              </div>
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
                    <th class="cell">Status</th>
                    <th class="cell">N° Orçamento</th>
                    <th class="cell">Nome Cliente</th>
                    <th class="cell">Valor</th>
                    <th class="cell">Status</th>
                    <th class="cell">Gerar PDF</th>
                    <th class="cell">Editar</th>
                    <th class="cell">Deletar</th>

                  </tr>
                </thead>



@foreach($orcamento as $order )

    
<td class="cell">
     <div class=""> <span class=""></span>

      @if ($order->Status == 'Cancelado')
      <span class="btn bg-danger text-light">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg> CANCELADO   </span> 

      @elseif  ($order->Status == 'Aprovado')
      <span class="btn bg-success text-light">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check" viewBox="0 0 16 16">
              <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
              <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
              <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
        </svg> APROVADO </span> 
            
      @elseif  ($order->Status == 'Pendente')
      <span class="btn bg-warning text-light">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
      <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
      <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
      </svg> PENDENTE</span> 

     
      @else
      <span class="btn  text-info"> SEM STATUS </span> 
      @endif


     </td>
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
<!-- Default dropright button -->
<div class="btn-group dropright">
  <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Alterar Status
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <div>
            <a class="dropdown-item bg-success text-light" href="{{asset('/orcamento/update/status_vendarealizada')}}/{{$order->id}}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check" viewBox="0 0 16 16">
            <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.         5.5.5 0 0 1 .5-.5h3Z"/>
            <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.          5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
            </svg> Aprovado</a>

            <a class="dropdown-item bg-warning text-light" href="{{asset('/orcamento/update/status_pendente')}}/{{$order->id}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z">
            </svg> Pendente</a> 

            <a class="dropdown-item bg-danger text-light"  href="{{asset('/orcamento/update/status_cancelado')}}/{{$order->id}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.         646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg> Cancelar</a>

          </div>
  </div>
</div>


       
    </td>
    
    <td class="cell">

    <div class="btn-group dropright">
  <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg>
  Imprimir
  </button>

  
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <div>
            <a class="dropdown-item text-info" href="{{asset('/orcamento/modelos/modelo1/')}}/{{$order->id}}">  Modelo 1</a>
            <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo2/')}}/{{$order->id}}">Modelo 2</a>
            <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo3/')}}/{{$order->id}}">Modelo 3</a>
            <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo4/')}}/{{$order->id}}">Modelo 4</a>
            <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo5/')}}/{{$order->id}}">Modelo 5</a>

          

          </div>
  </div>
</div>


      <!-- <div class="btn-group product-cell pdf " role="group">
        <button id="btnGroupDrop1" type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-file-pdf"></i> Gerar PDF </button>
      </div>
    

      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo1/')}}/{{$order->id}}">Modelo 1</a>
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo2/')}}/{{$order->id}}">Modelo 2</a>
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo3/')}}/{{$order->id}}">Modelo 3</a>
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo4/')}}/{{$order->id}}">Modelo 4</a>
        <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo5/')}}/{{$order->id}}">Modelo 5</a>
        <a class="dropdown-item active" href="{{asset('/orcamento/modelos/modelo6/')}}/{{$order->id}}">Modelo 6</a>
      </div> -->

</td>

<td class="cell">
  <td> <a class="btn btn-warning" href="{{ route('orcamento.edit',$order->id) }}">Editar</a>

  {{-- <a class="btn btn-warning" href="{{asset('/orcamento/edit')}}/{{$order->id}}">Editar</a> --}}
 </td>




     <td class="cell">

      {!! Form::open(['method' => 'DELETE','route' => ['orcamento.destroy', $order->id],'style'=>'display:inline']) !!}
      {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}

      {!! Form::close() !!}
    
 
   
  </td>
</tr>
@endforeach
    
                  </table> </div> </div> </div> </div>
@endsection