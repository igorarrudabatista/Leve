@extends('base.base')
@section('content')

<div class="app-content">
    <div class="app-content-header">
      @if ($search)
      <h1 class="app-content-headerText">Resultado da busca: {{$search}} </h1>
      <a href="{{asset('/escola/teste')}}">
        <button class="btn">Limpar pesquisa</button> </a>
        @else
        <h1 class="app-content-headerText"> Orçamentos </h1>
  
        @endif
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
  
      <a href="{{asset('/orcamento/create_orcamento')}}"> <button class="btn btn-primary delete-btn">Novo Orcamento</button> </a> &nbsp  
      <a href="{{asset('orcamento/export')}}"> <button class="btn btn-outline-warning">Download Excel</button> </a>
  
    </div>
  
    <div class="app-content-actions">
      <form action="{{asset('/escola/teste')}}" method="GET">
        <input class="search-bar" placeholder="Número do Orçamento:" id="search" name="search" type="text">
          </form>    <div class="app-content-actions-wrapper">
        <div class="filter-button-wrapper">
          <button class="action-button filter jsFilter"><span>Filtro</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
          <div class="filter-menu">
            <label>Categoria</label>
            <select>
              <option>Todas as Categorias</option>
           
            </select>
            <label>Status</label>
            <select>
              <option> Todos</option>
              {{-- <option>Ativo</option>
              <option>Inativo</option> --}}
            </select>
            <div class="filter-menu-buttons">
              <button class="filter-button reset">
                Limpar
              </button>
              <button class="filter-button apply">
                Aplicar
              </button>
            </div>
          </div>
        </div>
        <button class="action-button list active" title="List View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        </button>
        <button class="action-button grid" title="Grid View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </button>
  
      </div></div>
  
      <div class="products-area-wrapper tableView">
        <div class="products-header">
          <div class="product-cell image">   
            Logo
          </div>
  
          <div class="product-cell numero_orcamento"> Número do Orçamento <button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
      
          <div class="product-cell Cliente"> Cliente <button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
          <div class="product-cell Valor"> Valor <button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
      
  
            <div class="product-cell status">Status<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
            <div class="product-cell pdf">Gerar PDF<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>       
            <div class="product-cell acao">Ação<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>       
            <div class="product-cell status2">---<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>       
   
          </div>
  
  
  @foreach($pessoa as $pessoas )
  
        <div class="products-row">
          <button class="cell-more-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
          </button>
            <div class="product-cell image">
            <a href="{{asset('/orcamento/edit/')}}/{{$pessoas->id}}">
               <img src="{{asset('/img/empresa/')}}/{{$pessoas->empresa_cliente->image}}" > </a>
            </div>
  
          <div class="product-cell numero_orcamento">
            <span class="cell-label">N. Orçamento:</span>{{$pessoas->Numero_Orcamento}}
          </div>
          
          <div class="product-cell Cliente">
            <span class="cell-label">Cliente:</span>{{$pessoas->empresa_cliente->Nome_Empresa ?? ''}}
           </div>
         
           <!-- <div class="product-cell numero_orcamento">
            <span class="cell-label">Valor:</span>{{$pessoas->empresa_cliente->Nome_Empresa ?? ''}}
           </div> -->
          
          <div class="product-cell price"><span class="cell-label">Valor:</span> R$ {{$pessoas->Valor}}  </div>  
            
      
          
  
   
  
  
        <div class="product-cell status"><span class="cell-label"> </span> 
  
          <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alterar Status
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item bg-success text-light" href="{{asset('/orcamento/update/status_vendarealizada')}}/{{$pessoas->id}}"> <i class="fas fa-check"></i> Aprovado</a>
              <a class="dropdown-item bg-warning text-light" href="{{asset('/orcamento/update/status_pendente')}}/{{$pessoas->id}}"> <i class="fas fa-exclamation-triangle"></i> Pendente</a> 
              <a class="dropdown-item bg-danger text-light"  href="{{asset('/orcamento/update/status_cancelado')}}/{{$pessoas->id}}"> <i class="fas fa-times"></i> Cancelar</a>
            </div>
          </div>
        </div>
         
    
        <div class="btn-group product-cell pdf " role="group">
    <button id="btnGroupDrop1" type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="far fa-file-pdf"></i>   Gerar PDF
    </button>
    
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      
      <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo1/')}}/{{$pessoas->id}}">Modelo 1</a>
      <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo2/')}}/{{$pessoas->id}}">Modelo 2</a>
      <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo3/')}}/{{$pessoas->id}}">Modelo 3</a>
      <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo4/')}}/{{$pessoas->id}}">Modelo 4</a>
      <a class="dropdown-item"        href="{{asset('/orcamento/modelos/modelo5/')}}/{{$pessoas->id}}">Modelo 5</a>
      <a class="dropdown-item active" href="{{asset('/orcamento/modelos/modelo6/')}}/{{$pessoas->id}}">Modelo 6</a>
    </div>
  
  
  
  </div>
  
        <div class="product-cell acao"><span class="cell-label">Ação:</span>       
        <!-- <form action="{{asset('/orcamento')}}/{{$pessoas->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"> </ion-icon>Deletar</button>
            </form>   -->
            <form action="{{asset('/orcamento')}}/{{$pessoas->id}}" method="POST">
                              @csrf
                              <input name="_method" type="hidden" value="DELETE">
                              <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Deletar</button>
                          </form>
        </div>
  
              <div class="product-cell status2"> <span class="cell-label">Status:</span>
  
        @if ($pessoas->Status == 'Cancelado')
        <span class="dropdown-item bg-danger text-light"> <i class="fas fa-times">  </i>  CANCELADO   </span> 
  
        @elseif  ($pessoas->Status == 'Aprovado')
        <span class="dropdown-item bg-success text-light"> <i class="fas fa-check"></i> APROVADO </span> 
              
        @elseif  ($pessoas->Status == 'Pendente')
        <span class="dropdown-item bg-warning text-light"><i class="fas fa-exclamation-triangle"></i> PENDENTE</span> 
  
        {{-- @if ($pessoas->Status == 'Cancelada')
        <span class="status active">Cancelada</span>   --}}    
        @else
        <span class="dropdown-item bg-primary text-light"> SEM STATUS </span> 
        @endif
  
  
  </div> 
  </div>
  
  @endforeach
  </div>
  </div>
  </div>
  </div>
  </div>
  <!-- partial -->


@endsection