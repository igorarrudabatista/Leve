@extends('base.base')

@section('content')


<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <h1 class="app-page-title">Cadastro de Clientes</h1>
            <div class="row gy-4">
              <div class="col-12 col-lg-6">
                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">
                <div class="row align-items-center gx-3">
                  <div class="col-auto">
                    <div class="app-icon-holder">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
      
<form action="{{asset('/cliente')}}" method="POST" enctype="multipart/form-data">
  @csrf</div><!--//icon-holder-->
                        
                  </div><!--//col-->
                  <div class="col-auto">
                    <h4 class="app-card-title">Dados básicos</h4>
                  </div><!--//col-->
                </div><!--//row-->
            </div><!--//app-card-header-->
            <div class="app-card-body px-4 w-100">
              <div class="item border-bottom py-3">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    <div class="item-label mb-2"><strong>Foto</strong></div>
                    <div class="item-data"><img class="profile-image" src="assets/images/user.png" alt=""></div>
                  </div><!--//col-->
                  <div class="col text-end">
                    <a class="btn-sm app-btn-secondary" href="#">Alterar</a>
                  </div><!--//col-->
                </div><!--//row-->
              </div><!--//item-->
              <div class="item border-bottom py-3">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    <div class="item-label"><strong>CNPJ</strong></div>
                      <div class="item-data">
                      <input type="text" class="form-control" id="Cnpj" name="Cnpj" onkeypress="$(this).mask('00.000.000/0000-00')">
                      <div class="item-label"><strong>Nome Empresa</strong></div>
                      <input type="text" class="form-control" id="Nome_Empresa" name="Nome_Empresa" required>
                      <div class="item-label"><strong>Telefone</strong></div>
                      <input type="text" class="form-control" id="Telefone" name="Telefone" Placeholder="(DDD)+Telefone" onkeypress="$(this).mask('(00) 00000-0000')"  >    
                      <div class="item-label"><strong>Email</strong></div>
                      <input type="text" class="form-control" id="Email" name="Email" >

                    </div>
                  </div><!--//col-->
                  <div class="col text-end">
                    <a class="btn-sm app-btn-secondary" href="#">Procurar</a>
                  </div><!--//col-->
                </div><!--//row-->
              </div><!--//item-->

              <div class="item border-bottom py-3">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    <div class="item-label"><strong>Web Site </strong></div>
                    <input type="text" class="form-control" id="Site" name="Site" Placeholder="www.site.com.br" >

                    <div class="item-label"><strong>Instagram:</strong></div>
                    <input type="text" class="form-control" id="Instagram" name="Instagram">
                    <div class="item-label"><strong>Facebook:</strong></div>
                    <input type="text" class="form-control" id="Facebook" name="Facebook">                    
                  </div><!--//col-->
                  
                </div><!--//row-->
              </div><!--//item-->
         

            </div><!--//app-card-body-->
          
           
        </div><!--//app-card-->
              </div><!--//col-->
              <div class="col-12 col-lg-6">
                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">
                <div class="row align-items-center gx-3">
                  <div class="col-auto">
                    <div class="app-icon-holder">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-sliders" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
</svg>
                  </div><!--//icon-holder-->
                        
                  </div><!--//col-->
                  <div class="col-auto">
                    <h4 class="app-card-title">Social</h4>
                  </div><!--//col-->
                </div><!--//row-->
            </div><!--//app-card-header-->
            <div class="app-card-body px-4 w-100">
              
              
          

              <div class="item border-bottom py-3">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    <div class="item-label"><strong>Endereço</strong></div>
                    <input type="text" class="form-control" id="Endereco" name="Endereco"  >
                    <div class="item-label"><strong>CEP</strong></div>
                    <input type="text" class="form-control" id="Cep" name="Cep"  onkeypress="$(this).mask('00000-000')" >
                    <div class="item-label"><strong>N°</strong></div>
                    <input type="text" class="form-control" id="Numero" name="Numero"  >
                    <div class="item-label"><strong>Bairro:</strong></div>
                    <input type="text" class="form-control" id="Bairro" name="Bairro"  >
                    <div class="item-label"><strong>Estado:</strong></div>
                    <select class="form-control" id="estado" name="Estado">
                      <option value="Acre">Acre</option>
                      <option value="Alagoas">Alagoas</option>
                      <option value="Amapá">Amapá</option>
                      <option value="Amazonas">Amazonas</option>
                      <option value="Bahia">Bahia</option>
                      <option value="Ceará">Ceará</option>
                      <option value="Distrito Federal">Distrito Federal</option>
                      <option value="Espírito Santo">Espírito Santo</option>
                      <option value="Goiás">Goiás</option>
                      <option value="Maranhão">Maranhão</option>
                      <option value="Mato Grosso">Mato Grosso</option>
                      <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                      <option value="Minas GeraisG">Minas Gerais</option>
                      <option value="Pará">Pará</option>
                      <option value="Paraíba">Paraíba</option>
                      <option value="Paraná">Paraná</option>
                      <option value="Pernambuco">Pernambuco</option>
                      <option value="Piauí">Piauí</option>
                      <option value="Rio de Janeiro">Rio de Janeiro</option>
                      <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                      <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                      <option value="Rondônia">Rondônia</option>
                      <option value="Roraima">Roraima</option>
                      <option value="Santa Catarina">Santa Catarina</option>
                      <option value="São Paulo">São Paulo</option>
                      <option value="Sergipe">Sergipe</option>
                      <option value="Tocantins">Tocantins</option>
                      <option value="Estrangeiro">Estrangeiro</option>
                    </select>
                    
                    <div class="item-label"><strong>Cidade:</strong></div>
                    <input type="text" class="form-control" id="Cidade" name="Cidade">

                  </div><!--//col-->             
                </div><!--//row-->
              </div><!--//item-->

              <div class="app-card-footer p-4 mt-auto col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
            </div>

           
        </div><!--//app-card-->
              </div><!--//col-->
              @endsection