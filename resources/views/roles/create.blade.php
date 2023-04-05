@extends('base.base')
@section('content')

<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">


        </div>

      </div><!--//row-->

<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
    
<br>
              <div class="text-center mb-5">
                  <img src="{{asset('/images/User-logo.png')}}" height="140" class='mb-4'>
                  <h3>PERFIS DO SISTEMA</h3>
                  <p>Criar perfil acesso ao sistema <strong> </strong></p>
              </div>

                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column"><strong> Nome do Perfil </strong></label>
                                        {!! Form::text('name', null, array('placeholder' => 'Nome','class' => 'form-control')) !!}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                   </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Permissão </strong></label>
                                        <div class="position-relative">

                                            @foreach($permission as $value)
                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                            {{ $value->name }}</label>
                                        <br/>
                                        @endforeach
                                                   
                                    </div>
                                </div>
                                </div>
                                </div>
                             
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1 text-light">Salvar</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>

</section>
@endsection