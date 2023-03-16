<style>
    @page {
  bleed: 1cm;
  size: A4 portrait;
      size:  auto;   /* auto is the initial value */
      margin-left: 0mm;  /* this affects the margin in the printer settings */
      margin-bottom: 0mm;
      margin-top: 0mm;

  html
  {
      background-color: #FFFFFF;
      margin: 0px;  /* this affects the margin on the html before sending to printer */
  }

  body
  {
      border: solid 1px blue ;
      margin: 10mm 15mm 10mm 15mm; /* margin you want for the content */
  }
}

@media print {
  .page {
    margin: 0;
    border: initial;
    border-radius: initial;
    width: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
  }
}

body{
  background-color: #eee;
  -webkit-print-color-adjust: exact !important;
}

img.logo{
  margin-right: 50px;
}

.container{
  background-color: #e3e3e3;
  margin-top: 50px;
  margin-bottom: 50px;
  border-top-right-radius: 25px;
  border-top-left-radius: 25px;
/*   box-shadow: 0 10px 10px #999; */
}

div.header{
  position: relative;
}

.arrow-right {
  width: 0; 
  height: 0; 
  border-top: 60px solid transparent;
  border-bottom: 60px solid transparent;
  border-left: 60px solid white;
  z-index: 3;
  position: absolute;
  left: 735px;
  top: 75px;
}

h1.title{
  display: inline-block;
  z-index: 1;
  color: #333;
  font-size: 72px;
  position: absolute;
  top: 50px;
  left: 40px;
}

div.header::after{
  background-color: white;
  height: 50px;
  width: 120px;
}

div.shape{
  width: 60%;
  height: 150px;
  background-color: white;
  position: absolute;
  top: 50px;
}

div.shape::after{
  content: "";
  visibility: visible;
  width: 150px;
  height: 150px;
  background-color: white;
  position: absolute;
  right: -70px;
  border-radius: 100%;
}

div.shape::before{
  content: "";
  visibility: visible;
  width: 125px;
  height: 125px;
  background-color: #e3e3e3;
  position: absolute;
  right: -210px;
  top: -28px;
  border-radius: 100%;
  z-index: 0;
}

div.rectangle{
  position: absolute;
  height: 100px;
  width: 150px;
  right: 310px;
  top: 120px;
  background-color: white;
  z-index: 0;
}

div.invoice-content{
  background-color: white;
  margin-top: -2px;
  z-index: 3;
  border-bottom: 5px solid #0079C2;
  padding-bottom: 15px;
}

div.invoiced-to {
  color: #333;
}

div.invoiced-details{
  background-color: #efefef;
}

table > thead.thead-blue{
  background-color: #0079C2;
  color: white;
}

div.background{
  background-color: white;
}

tr.last-row{
  border-bottom: 3px solid #333;
}

td.total{
  width: 200px;
}

td.total-value{
  width: 100px;
}

td.total, td.total-value{
  background-color: #0079C2;
  color: white;
}

td.empty{
  visibility: hidden;
}

.color{
  color: #0079C2;
}

td.total-value{
  width: auto;
}
</style>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  
  <div class="row header">
    <div class="arrow-right"></div>
    <h1 class="title">ORÇAMENTO</h1>
    <div class="col-12 text-right pr-5 pt-4">
      <img class="logo" height="125px" width="125px" src="https://roundpeg.biz/wp-content/uploads/2013/12/Chase.png" />
    </div>
    <div class="rectangle"></div>
    <div class="shape"></div>
  </div>
  <div class="row invoice-content">
    <div class="col-4 pl-5">
      <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i> {{$orcamento->empresa->Nome_Empresa ?? ''}}</h5>
      <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i> {{$orcamento->empresa->Telefone ?? ''}}</h5>
      <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> {{$orcamento->empresa->Email ?? ''}}</h5>
    </div>
    
    <div class="col-4 offset-4 text-right pr-5 pt-3">
      <h4>N° Orçamento <strong>#{{$orcamento->Numero_Orcamento ?? ''}}</strong></h4>
      <h4>Data: <strong>{{$orcamento->Data ?? ''}}</strong></h4>
    </div>
  </div>
  
  <div class="row invoiced-details">
    <div class="col-8 invoiced-to p-5">
      <h3><u>Cliente</u></h3>
      <h6><strong> {{$orcamento->empresa_cliente->Nome_Empresa ?? ''}}</strong></h6>
      <h6> {{$orcamento->empresa_cliente->Telefone ?? ''}}</h6>
      <h6> {{$orcamento->empresa_cliente->Endereco ?? ''}} - {{$orcamento->empresa_cliente->Estado ?? ''}} -  {{$orcamento->empresa_cliente->Cidade ?? ''}}<br /> </h6>
    </div>
    
    <div class="col-4 p-5 text-right">
      <h3>Validade: <u> {{$orcamento->Validade ?? ''}} Dias </u>
        </h3>
      <h3>Garantia: <u>{{$orcamento->Garantia ?? ''}} Dias 
        </u></h3>
    </div>
  </div>
  
  <div class="row background">
    <table class="table">
      <thead class="thead-blue">
        <tr>
          <th scope="col">Nr.</th>
          <th scope="col">Item</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Preço</th>
          <th scope="col">Valor</th>
        </tr>
      </thead>
     
      <?php $total2 = 0 ;?>
      @foreach($orcamento->produto as $item)

      <tbody>
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->Nome_Produto}}</td>
            <td>{{$quantidade = $item->pivot['Quantidade'] }}</td>
            <td>R$ {{$preco= $item['Preco_Produto']}} </td>
            <td>R$ {{number_format($total1 = $preco * (int)$quantidade) . 2}} <?php $total2 += $total1; ?> </td>
          </tr>
          @endforeach
        
          <tr>
            <td colspan="2" class="empty"></td>
            <td colspan="2"><h5><strong>SUBTOTAL</strong></h5></td>
            <td><h5><strong>R$ {{number_format($total2). 2}} </strong></h5></td>
          </tr>
          <tr>
            <td colspan="2" class="empty"></td>
            <td colspan="2"><h5><strong>Taxa</strong></h5></td>
            <td><h5><strong>R$ {{$taxa = $orcamento->Taxas}} </strong></h5></td>
          </tr>
          <tr class="total">
            <td colspan="2" class="empty"></td>
            <td colspan="2"><h5><strong>Desconto</strong></h5></td>
            <td><h4><strong>R$ {{$desconto = $orcamento->Desconto}} </strong></h4></td>
          </tr>
          <tr>
            <td colspan="2" class="empty"></td>
            <td colspan="2" class="total"><h4><strong>TOTAL</strong></h4></td>
            <td class="total-value"><h4><strong>R$ {{number_format ($total = $total2 + $taxa - $desconto). 2}} </strong></h4></td>
          </tr> 
        </tbody>
       
      </table>
    </div>
    
    <div class="row p-5 background">
      <div class="col-4">
        <h5><strong>Descrição: </strong></h5>
        <h5>{{$orcamento->Descricao}}</h5>
      </div>
    </div>
  
  <div class="row pl-5 pt-4 text-light">
    <div class="col-4">
      <h5 class="color"><img src="{{asset('/img/empresa/')}}/{{$orcamento->empresa->image}}" width="200px" alt=""> 
       </h5>

    </div>
    <div class="col-4">
      <h5 class="color">Formas de Pagamento</h5>
      <h6> {{$orcamento->Forma_Pagamento}}</h6>
    </div>
    <div class="col-4">
      <h5 class="color">Visite nos em:</h5>
      <h6> {{$orcamento->empresa->Site}} </h6>

    </div>
  </div>
  
  <div class="row p-3 pl-5 mt-4 background">
    <div class="col-12">
      <h5>Obrigado pela preferência.</h5>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
