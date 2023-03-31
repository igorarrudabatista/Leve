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
                        <h5 class="card-title"><strong> Nome da Empresa: </strong> {{$minhaempresas->Nome_Empresa ?? 'Não informado'}}
                        </h5>
                        
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong> CNPJ: </strong> {{$minhaempresas->Cnpj ?? 'Não informado'}}  </li>
                        <li class="list-group-item"><strong> E-mail: </strong> {{$minhaempresas->Email ?? 'Não informado'}}  </li>
                        <li class="list-group-item"><strong> SITE: </strong> {{$minhaempresas->Site ?? 'Não informado'}}  </li>
                        <li class="list-group-item"><strong> Telefone:</strong>  {{$minhaempresas->Telefone ?? 'Não informado'}}  </li>
                        <li class="list-group-item"><strong> Facebook:</strong>  {{$minhaempresas->facebook_url ?? 'Não informado'}}  </li>
                        <li class="list-group-item"><strong> Instagram:</strong>  {{$minhaempresas->instagram_url ?? 'Não informado'}}  </li>
                        <li class="list-group-item"><strong> Linkedin: </strong>  {{$minhaempresas->linkedin_url ?? 'Não informado'}}  </li>
                      </ul>
                      
                      <a class="btn btn-warning" href="{{ route('minhaempresa.edit',$minhaempresas->id) }}">Editar</a>

                    </div>
                  </div>


</center></div></div></div>

@endforeach



@endsection