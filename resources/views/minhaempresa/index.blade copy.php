@extends('base.base')

@section('content')

<style>

* {
  box-sizing: border-box;
}

.card-body{
  position: fixed;
  top: 250px;


}
.contact {
  position: absolute;
  top: 30px;
  left: 50px;
  z-index: 6;
  color: rgba(52, 18, 208, 0.5);
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 12px;
  font-weight: 700;
  padding: 5px 15px;
  border-radius: 20px;
  background: rgba(0, 0, 0, 0.1);
  line-height: 1;
  cursor: pointer;
  text-shadow: 0 1px 0px rgba(14, 43, 230, 0.248);
}
.contact-form {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: white;
  z-index: 5;
  padding: 80px 50px;
  transform: translate3d(-100%, 0, 0);
  transition: 0.3s ease;
  border-radius: 5px;
}
.contact-form.active {
  transform: translate3d(0, 0, 0);
}
.contact-form .close {
  color: rgba(0, 0, 0, 0.7);
  position: absolute;
  right: 30px;
  top: 30px;
}

.cards {
  margin: auto;
  background: #fefefe;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1), 3px 5px 20px rgba(0, 0, 0, 0.2);
  width: 768px;
  height: 800px;
  position: relative;
  display: flex;
  align-items: flex-end;
  padding: 30px;
}
.cards .card {
  display: inline-block;
  margin-right: 20px;
}
.cards .card-toggle {
  z-index: 4;
  position: relative;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: block;
  text-align: center;
  line-height: 1.8;
  font-size: 24px;
  cursor: pointer;
  border: 2px solid transparent;
  transition: 0.3s ease;
}
.cards .card-toggle.active {
  color: white;
  border-color: white;
}
.cards .card-content {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  transition: -webkit-clip-path 1s ease;
  padding: 100px 0 0;
  overflow: hidden;
  border-radius: 5px;
}
.cards .card-content .row {
  display: table;
  width: 100%;
  height: 100%;
  margin-top: -900px;
}
.cards .card-content .col {
  width: 100%;
  height: 100%;
  display: table-cell;
  transition: 0.3s ease 0.3s;
  transform: translate3d(0, 0, 0);
  vertical-align: top;
}
.cards .card-content .col h2 {
  font-weight: 300;
  font-size: 3em;
  line-height: 1;
  margin: 0 0 30px;
}
.cards .card-content .col h2 strong {
  font-weight: 700;
  display: block;
}
.cards .card-content .col img {
  max-width: 90%;
  width: 100%;
}
.cards .card-content .col.left {
  transform: translate3d(0, 0, 0);
  opacity: 0;
  padding-left: 50px;
}
.cards .card-content .col.right {
  transform: translate3d(100px, 0, 0);
  opacity: 0;
  padding-left: 30px;
}
.cards .card.active .col {
  transform: translate3d(0, 0, 0);
  opacity: 1;
}
.cards #overview .card-toggle {
  position: absolute;
  top: 30px;
  right: 30px;
  opacity: 1;
  color: white;
}
.cards #overview .card-content {
  background-color: #efefef;
  -webkit-clip-path: circle(0% at 91.5% 75px);
}
.cards #overview.active .card-toggle {
  opacity: 0;
}
.cards #overview.active .card-content {
  -webkit-clip-path: circle(270% at 91.5% 75px);
}
.cards #overview .right {
  background: url(https://babademoca.com.br/site/wp-content/uploads/2021/07/Turamissu.jpg) no-repeat bottom right;
  background-size: contain;
}
.cards #dribbble .card-content, .cards #behance .card-content, .cards #linkedin .card-content, .cards #twitter .card-content {
  color: white;
}
.cards #dribbble .card-content p, .cards #behance .card-content p, .cards #linkedin .card-content p, .cards #twitter .card-content p {
  color: rgba(255, 255, 255, 0.8);
}
.cards #dribbble .card-content {
  background-color: #F46899;
  -webkit-clip-path: circle(0% at 76px 88%);
  clip-path: circle(0% at 50px 88%);
}
.cards #dribbble.active .card-content {
  -webkit-clip-path: circle(270% at 76px 88%);
  clip-path: circle(270% at 50px 88%);
}
.cards #behance .card-content {
  background-color: #2F98D1;
  -webkit-clip-path: circle(0% at 150px 88%);
  clip-path: circle(0% at 150px 88%);
}
.cards #behance.active .card-content {
  -webkit-clip-path: circle(270% at 150px 88%);
  clip-path: circle(270% at 150px 88%);
}
.cards #linkedin .card-content {
  background-color: #03679B;
  -webkit-clip-path: circle(0% at 220px 88%);
  clip-path: circle(0% at 220px 88%);
}
.cards #linkedin.active .card-content {
  -webkit-clip-path: circle(270% at 220px 88%);
  clip-path: circle(270% at 220px 88%);
}
.cards #twitter .card-content {
  background-color: #7FD0ED;
  -webkit-clip-path: circle(0% at 292px 88%);
  clip-path: circle(0% at 292px 88%);
}
.cards #twitter.active .card-content {
  -webkit-clip-path: circle(270% at 292px 88%);
  clip-path: circle(270% at 292px 88%);
}

form .control {
  position: relative;
  margin-bottom: 10px;
  padding-top: 20px;
}
form .control label {
  position: absolute;
  top: 30px;
  left: 0;
  transition: 0.3s ease;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  font-size: 14px;
}
form .control.submit {
  text-align: right;
}
form input, form textarea {
  width: 100%;
  border: none;
  border-bottom: 1px solid #e3e3e3;
  outline: none;
  padding: 10px 0;
}
form .filled label, form input:focus + label, form textarea:focus + label {
  top: 0;
  font-size: 12px;
}
form textarea {
  height: 100px;
}
form input[type=submit] {
  width: auto;
  background-color: #1811de;
  padding: 10px 40px;
  color: white;
  border-radius: 40px;
}
  </style>
  

  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText"></h1>
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
    </div>
    <div class="app-content-actions">
      <div class="app-content-actions-wrapper">
        <div class="filter-button-wrapper">
          <button class="action-button filter jsFilter"><span></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
        
        </div>
        <button class="action-button list active" title="List View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        </button>
        <button class="action-button grid" title="Grid View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </button>
      </div>
    </div>
    {{-- <div class="products-area-wrapper ">
     
      @if (session('msg'))
      <center>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <p class="msg">
   <strong>Mensagem:</strong> {{session('msg')}}  </center>
      @endif
      </div>

       --}}
       {{-- @foreach ($minhaempresa as $criar_empresas)

   

      
      
      @if ($criar_empresas->Nome_Empresa == '')
      <span class="badge bg-danger"> Valor não lançado </span>
   @elseif  ($criar_empresas->Nome_Empresa  != '')
   <span class="badge bg-danger"> Valor não lançado </span>
   @endif


   @endforeach --}}
      {{-- 
        @if (is_null($criar_empresas->id)) 
        
        
        @foreach ($orcamento as $orcamentos)
        
        @if ($orcamentos->empresa_id == 1)  --}}
        
        
        @foreach ($minhaempresa as $criar_empresas)
        
        
        <!-- partial:index.partial.html -->
<div class="cards">

  
	
	<div class="contact">Clique para editar as informações da sua empresa</div> <br>
  <br>
	<div class="contact-form">
		<a href="#" class="close"><i class="fa fa-times"></i></a>

        
			<div class="control">
      <input type="text"  value="{{$criar_empresas->Nome_Empresa}}" name="Nome_Empresa" placeholder="Nome Empresa"/></div>
			<div class="control">
        <input type="text"  value="{{$criar_empresas->Cnpj}}" name="Cnpj" placeholder="CNPJ" onkeypress="$(this).mask('00.000.000/0000-00')"/></div>
			<div class="control"><input type="text"  value="{{$criar_empresas->Telefone}}" name="Telefone" placeholder="Telefone" onkeypress="$(this).mask('(00) 00000-00009')" /></div>
			<div class="control"><input type="text"  value="{{$criar_empresas->Email}}" name="Email"placeholder="E-mail@dominio.com" /></div>
			<div class="control"><input type="text"  value="{{$criar_empresas->Site}}" name="Site"placeholder="www.site.com" /></div>
     
      <div class="upload">
        <input type="file" title="" id="image" name="image"  class="drop-here">
        <div class="text text-drop"><img src="{{asset ('/img/empresa/')}}/{{$criar_empresas->image}}" width="200px" />

        </div>
        
        <div class="text text-upload">Enviando</div>
        <svg class="progress-wrapper" width="300" height="300">
          <circle class="progress" r="115" cx="150" cy="150"></circle>
        </svg>
        <svg class="check-wrapper" width="130" height="130">
          <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
        </svg>
        <div class="shadow"></div>
      </div>
      <br>


       <button class="btn btn-primary" type="submit">Salvar</button>

		</form>
	</div>

  <div class="card w-5">
    <div class="card-body">
      <h5 class="card-title">
        <img src="{{asset ('/img/empresa/')}}/{{$criar_empresas->image}}" width="200px" />
        
      <h6 class="display-7"> <b> Nome da Empresa: </b> {{$criar_empresas->Nome_Empresa}}</h6>
      
      <p class="card-text"> <b> CNPJ:             </b> {{$criar_empresas->Cnpj}}</p>
      <p class="card-text"> <b> Telefone:         </b> {{$criar_empresas->Telefone}}</p>
      <p class="card-text"> <b> E-mail:           </b> {{$criar_empresas->Email}}</p>
      <p class="card-text"> <b> Site:             </b> {{$criar_empresas->Site}}</p>

<hr>

</div>
  </div>
	

	<div class="card" id="dribbble">
		<a class="card-toggle"><i><span class="fa fa-facebook"></span></i></a>
		<div class="card-content">
			<div class="row">
				<div class="left col">
					<h2>My <strong>Dribbble</strong></h2>
					
					<p>In ipsa reiciendis, eligendi labore dolores delectus facere perferendis ex architecto reprehenderit maxime exercitationem, libero itaque, at voluptatibus! Sit obcaecati repellat incidunt accusantium voluptas suscipit a consequuntur repudiandae nulla eius.</p>
					
				</div>
				<div class="right col"><img src="https://dl.dropboxusercontent.com/u/26808427/cdn/preview.jpg" alt="" /></div>
			</div>
		</div>
	</div> 
	
	<div class="card" id="behance">
		<a class="card-toggle"><i><span class="fa fa-instagram"></span></i></a>
		<div class="card-content">
			<div class="row">
				<div class="left col">
					<h2>My <strong>Behance</strong></h2>
					<p>Quia fugit animi, iure error veritatis? Ipsa quis, deserunt illum culpa ab id mollitia nesciunt commodi aut dolores vero ipsam ut minima neque nam excepturi corporis obcaecati consequuntur accusantium laborum!</p>
				</div>
				<div class="right col"><img src="https://dl.dropboxusercontent.com/u/26808427/cdn/preview.jpg" alt="" /></div>
			</div>
		</div>
	</div>
	<div class="card" id="linkedin">
		<a class="card-toggle"><i><span class="fa fa-linkedin"></span></i></a>
		<div class="card-content">
			<div class="row">
				<div class="left col">
					<h2>My <strong>LinkedIn</strong></h2>
				
					<p>Voluptas aliquam, perferendis laboriosam, cumque, autem vero pariatur dolorum tempora sint hic laborum distinctio suscipit magnam, porro provident maxime labore. Porro vel error quaerat consequatur sapiente? Nostrum at voluptatibus necessitatibus.</p>
				</div>
				<div class="right col"><img src="https://dl.dropboxusercontent.com/u/26808427/cdn/preview.jpg" alt="" /></div>
			</div>
		</div>
	</div>
	<div class="card" id="twitter">
		<a class="card-toggle"><i><span class="fa fa-twitter"></span></i></a>
		<div class="card-content">
			<div class="row">
				<div class="left col">
					<h2>My <strong>Twitter</strong></h2>
				
					<p>Fugit veniam, animi architecto doloribus veritatis vitae sint doloremque possimus quae. Pariatur libero, veniam voluptatibus alias distinctio qui nostrum debitis voluptate amet hic repellat officiis nam quos vel doloremque praesentium.</p>
				</div>
				<div class="right col"><img src="https://dl.dropboxusercontent.com/u/26808427/cdn/preview.jpg" alt="" /></div>
			</div>
		</div>
	</div>
	
  @endforeach

  

  
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

   

<!-- partial -->
@endsection