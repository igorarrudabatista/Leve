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
                    <h3>USUÁRIOS DO SISTEMA</h3>
                    <p>Criar acesso ao sistema <strong> </strong></p>
                </div>

                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column"><strong> Nome </strong></label>
                                        {!! Form::text('name', null, array('placeholder' => 'Nome Completo','class' => 'form-control')) !!}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                   </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Email</strong></label>
                                        <div class="position-relative">

                                        {!! Form::text('email', null, array('placeholder' => 'E-mail','class' => 'form-control')) !!}

                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Senha</strong></label>
                                        <div class="position-relative">

                                        {!! Form::password('password', array('placeholder' => 'Senha','class' => 'form-control')) !!}

                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Senha</strong></label>
                                        <div class="position-relative">

                                        {!! Form::password('confirm-password', array('placeholder' => 'Confirme a Senha','class' => 'form-control')) !!}

                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Perfil</strong></label>
                                        <div class="position-relative">

                                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

                                            
                                    </div>
                                </div>

                                </div>
                             
                             <!-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Company</label>
                                        <input type="text" id="company-column" class="form-control" name="company-column"
                                            placeholder="Company">
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Email</label>
                                        <div class="position-relative">

                                        <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                                            placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>                                    </div>
                                </div> -->

                                    
                                    <!-- <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Mobile</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Mobile" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i data-feather="phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                             
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1 text-light">Registrar Usuário</button>
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