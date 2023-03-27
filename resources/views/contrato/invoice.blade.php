<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Recibo - Leve Limpo</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
  <link id="theme-style" rel="stylesheet" href="{{asset('css/recibo/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="invoice">
    <div class="row">
      <div class="col-7">
        <img src="{{asset('/images/logo_levelimpo.png')}}" class="logo">
      </div>
      <div class="col-5">
        <h1 class="document-type display-4">RECIBO</h1>
        <p class="text-right">Data de emissão: <strong> {{ date('d-m-Y') }}</strong></p>
      </div>
    </div>
    <div class="row">
      <div class="col-7">
        <p>
          <strong>{{$recibo->minha_empresa ?? 'Nome não encontrado'  }}</strong><br>
          {{$recibo->endereco ?? 'endereco não encontrado'  }}<br>
          
        </p>
      </div>
      <div class="col-5">
        <br><br><br>
        <p>
          <strong>{{$recibo->empresa_cliente->Nome_Empresa ?? 'Sem registros'  }}</strong><br>
         CNPJ: <em>{{$recibo->empresa_cliente->Cnpj ?? 'Sem registros'  }}</em><br>
         {{$recibo->empresa_cliente->Endereco ?? 'Sem registros'  }} {{$recibo->empresa_cliente->Estado ?? 'Sem registros'  }} - {{$recibo->empresa_cliente->Cidade ?? 'Sem registros'  }}<br>
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
          {{-- <th>Preço</th> --}}
          
        </tr>
      </thead>

      <tbody>
        <tr>
            @foreach($recibo->produto as $item)
            
          </td>
          <td>{{$item->Nome_Produto}}</td>
          <td>{{$quantidade = $item->pivot['Quantidade'] }}</td>
          {{-- <td class="text-right">R$ {{$preco= $item['Preco_Produto']}}</td> --}}
   
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
    
    <p class="bottom-page text-right">
     Leve Limpo<br>
     Rua Tenente Eulálio Guerra, 722 – Bairro Araés<br>
     Cuiabá – MT<br>
     CNPJ: 19.418.179/0001-20
    </p>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
