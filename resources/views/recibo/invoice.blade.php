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
        <img src="https://s3.eu-central-1.amazonaws.com/zl-clients-sharings/90Tech.png" class="logo">
      </div>
      <div class="col-5">
        <h1 class="document-type display-4">RECIBO</h1>
        <p class="text-right">Data de emissão: <strong> {{ date('d-m-Y') }}</strong></p>
      </div>
    </div>
    <div class="row">
      <div class="col-7">
        <p>
          <strong>{{$recibo->MinhaEmpresa->Nome_Empresa ?? 'Sem registros'  }}</strong><br>
          6B Rue Aux-Saussaies-Des-Dames<br>
          57950 MONTIGNY-LES-METZ
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
          <th>Produtos</th>
          <th>Quantité</th>
          <th>Unité</th>
          <th>PU HT</th>
          <th>TVA</th>
          <th>Total HT</th>
        </tr>
      </thead>
      @foreach($recibox as $recibos )

      <tbody>
        <tr>
          {{-- <td>{{json_decode($recibos->['DescProdutos']) }} --}}


          </td>
          <td>1</td>
          <td>Jour</td>
          <td class="text-right">500,00€</td>
          <td>20%</td>
          <td class="text-right">500,00€</td>
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
            <td class="text-left">{{$recibos->DataEntrega}}</td>
          </tr>
          <tr>
            <td><strong> Data da Retirada: </strong></td>
            <td class="text-left">{{$recibos->DataRetirada}}</td>
          </tr>
          <tr>
            <td><strong>Obs.</strong></td>
            <td class="text-left">{{$recibos->Observacoes}}</td>
          </tr>
        </table>
      </div>
    </div>
    
    <h6> <strong> {{$recibos->MensagemCliente}} </strong>   </h6>
    
    <br>
    <br>
    <br>
    <br>
    
    <p class="bottom-page text-right">
      90TECH SAS - N° SIRET 80897753200015 RCS METZ<br>
      6B, Rue aux Saussaies des Dames - 57950 MONTIGNY-LES-METZ 03 55 80 42 62 - www.90tech.fr<br>
      Code APE 6201Z - N° TVA Intracom. FR 77 808977532<br>
      IBAN FR76 1470 7034 0031 4211 7882 825 - SWIFT CCBPFRPPMTZ
    </p>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
