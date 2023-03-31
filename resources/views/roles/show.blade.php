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



                                   
                                        <label for="first-name-column"><strong> Nome do Perfil </strong></label>
                                        {{ $role->name }}
                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->

                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Permissão </strong></label>
                                        <div class="position-relative">

                                            @if(!empty($rolePermissions))
                                            @foreach($rolePermissions as $v)
                                                <label class="label label-success">{{ $v->name }},</label>
                                            @endforeach
                                        @endif
                                                   
                             
                                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Voltar </a>

                            {!! Form::close() !!}
                            
                        </form>


</section>
@endsection