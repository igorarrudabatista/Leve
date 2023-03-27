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
       

            <div class="row gy-4">
              <div class="col-6 col-lg-6">
                <div class="app-card app-card-account shadow-sm  flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">
<center>

                <div class="card">
                    <img src="{{asset('/images/empresa.png')}}" width="100px" class='card-img-top'>

                    
                    </div>


</center></div></div></div>

              <div class="col-6 col-lg-6">
                <div class="app-card app-card-account shadow-sm  flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">
<center>

                <div class="card">

                    <div class="card-body">
                        
                        @foreach($minhaempresa as $minhaempresas)
                        <h5 class="card-title">{{$minhaempresas->Nome_Empresa}}
                        </h5>
                        
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$minhaempresas->Cnpj}}  </li>
                        <li class="list-group-item">{{$minhaempresas->Email}}  </li>
                        <li class="list-group-item">{{$minhaempresas->Site}}  </li>
                        <li class="list-group-item">{{$minhaempresas->Telefone}}  </li>
                        <li class="list-group-item">{{$minhaempresas->facebook_url}}  </li>
                        <li class="list-group-item">{{$minhaempresas->instagram_url}}  </li>
                        <li class="list-group-item">{{$minhaempresas->linkedin_url}}  </li>
                        <li class="list-group-item">{{$minhaempresas->Cnpj}}  </li>
                      </ul>
                      
                      <a class="btn btn-warning" href="{{ route('minhaempresa.edit',$minhaempresas->id) }}">Editar</a>

                      <a href="#" class="btn btn-primary">Editar empresa</a>
                    </div>
                  </div>


</center></div></div></div>

@endforeach



@endsection