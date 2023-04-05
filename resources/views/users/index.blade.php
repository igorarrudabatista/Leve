@extends('base.base')
@section('content')



<div class="app-wrapper">

  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
              <h1 class="app-page-title mb-0">USUÁRIOS</h1><br>
        <a href="{{asset('/users/create')}}"  button type="submit" class="btn bg-primary text-light ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
              </svg> Criar Usuários do Sistema</button> </a>

        </div>
        <div class="col-auto">
           <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
              <div class="col-auto">
    
                      
              </div><!--//col-->

             
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
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Perfil de Acesso</th>
                            <th>Data de Criação</th>
                            <th>Data de Atualização</th>
                            <th>Ações</th>
                          
                        </tr>
                    </thead>
                    @foreach ($data as $key => $user)

                    <tbody>
                        <tr>
               
                           <td>{{ ++$i }}</td>

                           <td>{{$user->name?? 'Sem registros'  }}</td>
                           
                           <td>{{$user->email ?? 'Sem registros'}}</td>

                           <td>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                @endforeach
            @endif
        </td>
                           <td>{{$user->created_at ??  'Sem registros'}} </td>
                           <td>{{$user->updated_at ??  'Sem registros'}} </td>
                           <td> <a class="btn btn-warning text-light" href="{{ route('users.edit',$user->id) }}">Editar</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                           {!! Form::submit('Delete', ['class' => 'btn btn-danger text-light']) !!}

                           {!! Form::close() !!}
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