@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Cadastro de Usuários</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>

                <div class="text-center mb-5">
                    <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                    <h3>Cadastro de Usuários do sistema</h3>
                    <p></p>
                </div>

                <form action="{{asset('/usuarios')}}" method="POST">
                  @csrf

                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Nome</label>
                                        <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo">
                                   </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Email</label>
                                        <div class="position-relative">

                                        <input type="email" id="email-id-column" name="email" class="form-control" 
                                            placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Senha</label>
                                        <div class="position-relative">

                                        <input type="password" name="password" class="form-control" 
                                            placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Atribuir Perfil</label>
                                        <div class="position-relative">

                                            <select  name="perfil_acesso"class="choices form-select">
                                               @foreach($perfil as $perfils) 
                                               <option value="{{$perfils->Nome_perfil}}">{{$perfils->Nome_perfil}}</option>
                                               @endforeach 
                                            </select>
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-6 col-12">
                                  <!-- Password -->
          
                                </div>
                                {{-- <div class="col-md-6 col-12">
                                   
                                </div> 
                                {{-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Company</label>
                                        <input type="text" id="company-column" class="form-control" name="company-column"
                                            placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Email</label>
                                        <div class="position-relative">

                                        <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                                            placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>                                    </div>
                                </div>

                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Mobile</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Mobile" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i data-feather="phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     --}}

                                </div>
                             
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Registrar Usuário</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>

</section>
@endsection