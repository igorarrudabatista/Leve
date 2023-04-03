<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Leve Limpo</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
  <link id="theme-style" rel="stylesheet" href="{{asset('css/recibo/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="invoice">
    <div class="row">
      <div class="col-12">
        <center>
        <img src="{{asset('/images/logo_levelimpo.png')}}" width="220px" > </center>
      </div>
      <div class="col-12">
        <BR>
        <CENTEr> <h3 class=" display-5">CONTRATO DE PEÇAS EM CONSIGNAÇÃO </CENTER>
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p><BR><BR>
          Eu, <strong>{{$contrato->empresa_cliente->Nome_responsavel ?? 'Nome do Responsável pela empresa'  }} </strong>
          , portador(a) do CPF: <strong> <i> {{$contrato->empresa_cliente->Cpf ?? ''  }} </i> </strong>
          , responsável pela empresa <strong>  {{$contrato->empresa_cliente->Nome_Empresa ?? ''  }}</strong>,
          com nome fantasia de <strong> {{$contrato->empresa_cliente->Nome_fantasia ?? ''  }}</strong>
          , localizada no endereço: <strong> {{$contrato->empresa_cliente->Endereco ?? ''  }}, {{$contrato->empresa_cliente->Cidade ?? ''  }} - {{$contrato->empresa_cliente->Estado ?? ''  }} </strong>
          inscrita sob o CNPJ: <strong>  {{$contrato->empresa_cliente->Cnpj ?? ''  }}</strong>. </br>

          Declaro ter recebido da Empresa<strong> <i>Levelimpo Lavanderia Corporativa </i></strong> inscrita no <strong> CNPJ: 19.418.179/0001-20</strong>, com sede na <strong> Rua Tenente Eulálio Guerra, 722 – Bairro Araés, Cuiabá – MT</strong>, 
            sob a condição de consignação as peças descritas abaixo:

          
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Produto</th>
                  <th>Quantidade</th>
                  {{-- <th>Preço</th> --}}
                  
                </tr>
              </thead>
        
              <tbody>
                <tr>
                    @foreach($contrato->produto as $item)
                    
                  </td>
                  <td>{{$item->Nome_Produto}}</td>
                  <td>{{$quantidade = $item->pivot['Quantidade'] }}</td>
                  {{-- <td class="text-right">R$ {{$preco= $item['Preco_Produto']}}</td> --}}
           
                </tr>
                @endforeach
        
              </tbody>
            </table>

          <small><i>  {{$contrato->Observacoes ?? 'Nao encontrado'  }} <br>
            Por estar de acordo, declaro estar ciente das condições, assino o presente em duas vias de igual teor. </br></i> </small> </br></br>
          
          <strong>Cuiabá, </strong><i>{{ date('d/m/Y')}}</i></br></br>

        </p></div></div> 
          <div class="row">
            <div class="col-6">
              <tr>
                <td class="text-left">x<hr></td>
                <td class="text-left">Contratante</td>

              </tr>
            </div>
            <div class="col-6">
              <tr>
                <td class="text-left">x<hr></td>
                <td class="text-left">Leve Limpo</td>

              </tr>
            </div>

          
           
            </div> </div>


          
          </strong><br>
          

<!-- partial -->
  
</body>
</html>
