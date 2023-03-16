<style>
    .print-container {
  max-width: 900px;
  margin: 30px auto;
  background: white;
  padding: 10px 30px;
}
.print-container .header {
  margin-bottom: 20px;
  border-bottom: 1px solid #dbdbdb;
  padding-bottom: 20px;
}
.print-container table {
  margin-top: 30px;
}
.print-container table tbody tr.no-border:first-child {
  opacity: 0.6 !important;
}
.print-container .summary-table {
  border: 1px solid #DDE1E4;
}
.print-container .summary-table tr td:last-child {
  text-align: right;
}
.print-container .summary-table tr th:last-child {
  text-align: right;
}
.print-container .summary-table td {
  border-left: 1px solid #dbdbdb;
}
.print-container .summary-table th {
  border-left: 1px solid #dbdbdb;
}
.print-container .summary-table thead {
  color: #737F8B;
}
.print-container .ft-18 {
  font-size: 20px;
  margin-bottom: 10px;
}
.print-container .adder {
  font-size: 16px;
  font-weight: 500;
  text-align: right;
  border-left: 0;
  border-right: 0;
  border-bottom: 0;
}
.print-container .total {
  font-size: 22px;
}
.print-container .mega {
  font-size: 33px;
  margin-bottom: 10px;
}

.invoice-logo {
  height: 150px;
  width: auto;
}

.other-rates {
  float: right;
  width: 350px;
  text-align: right;
}
.other-rates dl {
  width: 100%;
  margin-bottom: 5px;
}
.other-rates dl.total {
  border-top: 1px solid #dbdbdb;
  padding-top: 10px;
}
.other-rates dt {
  width: 50%;
  float: left;
}
.other-rates dd {
  width: 50%;
  float: left;
  padding-right: 10px;
  margin: 0;
}

.invoice-from {
  float: right;
}

.summary-info {
  border-bottom: 1px solid #dbdbdb;
  margin-bottom: 20px;
  padding-bottom: 10px;
}

.heading {
  border-bottom: 1px solid #dbdbdb;
}

.sub-heading .billto {
  padding: 10px 0;
}

@media print {
  h1, h2, h3, h4, h5, h6 {
    font-weight: bold;
  }
  h1:first-letter, h2:first-letter, h3:first-letter, h4:first-letter, h5:first-letter, h6:first-letter {
    font-size: inherit;
  }
}
.invoice-details {
  float: right;
}

.ft-12 {
  font-size: 12px;
}
</style>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

<body>
<!-- partial:index.partial.html -->
<div class="print-container clearfix">
  <div class="header">
    <div class="sub-header">
    <div class="content">
      <table style="width:100%">
        <tr style="width:100%" class="heading">
          <td colspan="3">

                      <img class="invoice-logo" src="{{asset('/img/empresa/')}}/{{$orcamento->empresa->image}}" alt="" />
          </td>
          <td class="text-right">
            <div class="invoice-from" style="max-width:400px">
              <h3 class="mega">ORÇAMENTO</h3>
          <h6 class="grey"> <B> {{$orcamento->empresa->Nome_Empresa ?? ''}} </B> </h6>
          <P>{{$orcamento->empresa->Endereco ?? ''}} </P>
          <p>{{$orcamento->empresa->Cidade ?? ''}}</p>
          <p>{{$orcamento->empresa->Cnpj ?? ''}}</p>
                <br />
            <strong>{{$orcamento->empresa->Email ?? ''}}</strong>
            <br /> <strong>{{$orcamento->empresa->Telefone ?? ''}}</strong></P>
            </div>
            
          </td>
        </tr>
          <tr class="sub-heading">
            <td colspan="3">
                <div class="billto">
                  <strong><big> {{$orcamento->empresa_cliente->Nome_Empresa ?? ''}}</strong></big> <br />
                  {{$orcamento->empresa_cliente->Endereco ?? ''}} <br />
                  {{$orcamento->empresa_cliente->Cidade ?? ''}} -  {{$orcamento->empresa_cliente->Estado ?? ''}}<br />
                  {{$orcamento->empresa_cliente->Email ?? ''}} <br />
                  {{$orcamento->empresa_cliente->Telefone ?? ''}}
                  
                </div>    
            </td>
            <td class="">
                <div class="invoice-details">
                  <strong>N° Orçamento : </strong> # {{$orcamento->Numero_Orcamento ?? ''}} <br />
                  <strong>Data: </strong>{{$orcamento->Data ?? ''}}<br />
                  <strong>Validade: </strong> {{$orcamento->Validade ?? ''}} <br />
                  <strong>Garantia: </strong>{{$orcamento->Garantia ?? ''}} <br />
                </div>    
            </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="body">
      
    <div class="summary-info">
       <table class="table summary-table">
  <thead>
    <tr>
      <th>N°</th>
      <th>Item</th>
      <th>Quantidade</th>
      <th>Preço</th>
      <th>Total</th>
    </tr>
  </thead>

  <?php $total2 = 0 ;?>

  @foreach($orcamento->produto as $item)
  <tbody>
    <tr class="simple">
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->Nome_Produto}}</td>
      <td>{{$quantidade = $item->pivot['Quantidade'] }}</td>
      <td>R$ {{$preco= $item['Preco_Produto']}} </td>
      <td> R$ {{number_format($total1 = $preco * (int)$quantidade), 2}} <?php $total2 += $total1; ?></td>
    </tr>
@endforeach
  </tbody>
      </table>
      <table class="table summary-table">
  <thead>
    <tr>
      <th>Subtotal</th>
      <th>Taxas</th>
      <th>Desconto</th>
      <th>Descrição</th>

    </tr>
  </thead>
  <tbody>
    <tr class="simple">
      <th scope="row">R$ {{number_format($total2), 2}}</th>
      <th>R$ {{$taxa = $orcamento->Taxas}}</th>
      <th>R$ {{$desconto = $orcamento->Desconto}}</th>
   
      <td width="150px" class="text-left ft-12">{{$orcamento->Descricao}}
</td>
    </tr>
  </tbody>
      </table>
    <div class="row">
      <div class="col-md-12">
        <div class="other-rates clearfix">
      <dl class="dl-horizontal total clearfix">
        <dt class="blue">Total</dt>
        <dd>R$ {{number_format($total = $total2 + $taxa - $desconto), 2, '.', ','}}</dd>
      </dl>
    </div>
      </div>
    </div>
    </div>
    <p style="font-size:12px" class="text-right">Obrigado pela preferência.</p>
<!-- partial -->
  
</body>
</html>
