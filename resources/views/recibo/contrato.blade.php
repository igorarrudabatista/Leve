<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Contrato - Leve Limpo</title>
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
        <img src="{{asset('/images/logo_levelimpo.png')}}" width="250px" > </center>
      </div>
      <div class="col-12">
        <BR>
        <CENTEr> <h1 class=" display-6">CONTRATO DE PEÇAS EM CONSIGNAÇÃO </CENTER>
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p><BR><BR>
          Eu, <strong>{{$recibo->minha_empresa ?? ''  }} </strong>, portador(a) do CPF: {{$recibo->minha_empresa ?? ''  }}, responsável pela empresa {{$recibo->minha_empresa ?? ''  }},
           com nome fantasia de {{$recibo->minha_empresa ?? ''  }}, localizada no endereço: {{$recibo->minha_empresa ?? ''  }} - MT inscrita sob o CNPJ: {{$recibo->minha_empresa ?? ''  }}. </br>

          Declaro ter recebido da Empresa Levelimpo Lavanderia Corporativa inscrita no CNPJ: 19 418179/0001-20, com sede na Rua Tenente Eulálio Guerra, 722 – Bairro Araés, Cuiabá – MT, 
            sob a condição de consignação as peças descritas abaixo:

          
          (itens aqui)

        </br>
          Sendo o valor unitário de {{$recibo->minha_empresa ?? ''  }} 40,00 para cada toalha, caso seja extraviada, manchada ou rasgada. </br>

          Por estar de acordo, declaro estar ciente das condições, assino o presente em duas vias de igual teor. </br>
          
          Cuiabá  ,   05   de Julho de 2022

      </br>
          (Assinaturas)

          _________________           ___________________
          Contratante                   Leve Limpo
          
          </strong><br>
          
        </p>
      </div>

    </div>
    <br>
    <br>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome do Produto</th>
          <th>Quantidade</th>
          <th>Preço</th>
          
        </tr>
      </thead>

      <tbody>
        <tr>
            @foreach($recibo->produto as $item)
            
          </td>
          <td>{{$item->Nome_Produto}}</td>
          <td>{{$quantidade = $item->pivot['Quantidade'] }}</td>
          <td class="text-right">R$ {{$preco= $item['Preco_Produto']}}</td>
   
        </tr>
        @endforeach

      </tbody>
    </table>
    <div class="row">
      <div class="col-8">
      </div>
      <div class="col-6">
        <table class="table table-sm text-right">
          <tr>
            <td><strong>Data da Entrega:</strong></td>
            <td class="text-left">{{$recibo->DataEntrega}}</td>
          </tr>
          <tr>
            <td><strong> Data da Retirada: </strong></td>
            <td class="text-left">{{$recibo->DataRetirada}}</td>
          </tr>
          <tr>
            <td> <strong> Obs.*: </strong> {{$recibo->Observacoes}} </td>
          </tr>
   
        </table>
      </div>
    </div>
    <hr><br>
    <h6> <strong> <center> {{$recibo->MensagemCliente}} </strong>   </center> </h6>
    
    <br>
    <br>
    <br>
    <br>
    
    {{-- <p class="bottom-page text-right">
      90TECH SAS - N° SIRET 80897753200015 RCS METZ<br>
      6B, Rue aux Saussaies des Dames - 57950 MONTIGNY-LES-METZ 03 55 80 42 62 - www.90tech.fr<br>
      Code APE 6201Z - N° TVA Intracom. FR 77 808977532<br>
      IBAN FR76 1470 7034 0031 4211 7882 825 - SWIFT CCBPFRPPMTZ
    </p> --}}
  </div>
</div>
<!-- partial -->
  
</body>
</html>
