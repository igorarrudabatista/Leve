<style>
    @page {
  bleed: 1cm;
  size: A4 portrait;
  size:  auto;   /* auto is the initial value */
  margin-bottom: 50pt;
  margin-top: 0cm;
  font-size: 12pt;

  #content, #page {
  width: 100%;
  margin: 0;
  float: none;
  }
}


@media print {
  .page {
    border: initial;
    border-radius: initial;
    width: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
  }

  table{
    page-break-inside: auto;
  }

  tr.last-row {
      background-color: #555!important;
  }

  tr.last-row > th, tr.last-row > td {
    background-color: unset!important;
  }

  div.page-break{
    page-break-before: auto;
  }
}

.gray{
  color: #333;
}

.gray-ish{
  color: #666;
}

.almost-gray{
  color: #999;
}

body{
  background-color: #eee;
  padding-top: 25px;
  -webkit-print-color-adjust: exact !important;
  height: 100%;
  margin-top: 40px;
}

div.container{
  background-color: white;
  border-radius: 10px;
  height: 100%;
  position: relative;
  margin-top: 50px;
}

div.invoice-header{
  background-color: #444;
  color: white;
  border-bottom: 3px solid rgb(255, 77, 77);
}

div.invoice-header > div > p{
  font-size: 1.2rem;
  font-weight: 350;
}

div.invoice-header > div > h1{
  font-size: 4rem;
}

div.invoice-table{
  border-top: 3px solid rgb(255, 77, 77);
}

div.invoice-table > table.table > thead, div.invoice-table > table.table > thead.thead > tr, div.invoice-table > table.table > thead.thead > tr > th {
  border-top: none;
}

div.total-field{
  position: relative;
}

h5.due-date{
  position: absolute;
  bottom: 10px;
  right: 15px;
}

div.sub-table{
  border-left: 3px solid rgb(255, 77, 77);
  padding-left: 0;
}

div.sub-table > table{
  padding-bottom: 0;
  margin-bottom: 0;
}

tr.last-row{
  margin-top: 25px;
  background-color: #555;
  color: white;
  border-top: 3px solid rgb(255, 77, 77);
}

p.footer{
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: white;
    padding-top: 15px;
    border-top: 3px solid red;
}
</style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>

<div class="container">
    <div class="row invoice-header px-3 py-2">
      <div class="col-4">
        <p>{{$orcamento->empresa->Nome_Empresa ?? ''}}     </p>
        <h1>ORÇAMENTO</h1>
      </div>
      <div class="col-4 text-right">
        <p>{{$orcamento->empresa->Telefone ?? ''}}</p>
        <p>{{$orcamento->empresa->Email ?? ''}}</p>
        <p>{{$orcamento->empresa->Site ?? ''}}</p>
      </div>
      <div class="col-4 text-right">
        <p>{{$orcamento->empresa->Endereco ?? ''}}</p>
        <p>{{$orcamento->empresa->Cidade ?? ''}}</p>
        <p>{{$orcamento->empresa->Cnpj ?? ''}}</p>
      </div>
    </div>
  
    <div class="invoice-content row px-5 pt-5">
      <div class="col-3">
        <h5 class="almost-gray mb-3">Orçamento para:</h5>
        <p class="gray-ish"> {{$orcamento->empresa_cliente->Nome_Empresa ?? ''}}</p>
        <p class="gray-ish">{{$orcamento->empresa_cliente->Endereco ?? ''}} | {{$orcamento->empresa_cliente->Cidade ?? ''}} - {{$orcamento->empresa_cliente->Estado}}</p>
        <p class="gray-ish">CNPJ:  {{$orcamento->empresa_cliente->Cnpj ?? ''}}</p>
      </div>
      <div class="col-3">
        <h5 class="almost-gray">N° Orçamento:</h5>
        <p class="gray-ish"># {{$orcamento->Numero_Orcamento ?? ''}}</p>
  
        <h5 class="almost-gray">Data:</h5>
        <p class="gray-ish"> {{$orcamento->Data ?? ''}} </p>
     
      </div>

 


      <div class="col-6 text-right total-field">
        <h4 class="almost-gray"> </h4>
        <h1 class="gray-ish">Validade: {{$orcamento->Validade ?? ''}} Dias </h1>
        <h5 class="almost-gray due-date">Garantia: {{$orcamento->Garantia ?? ''}} Dias</h5>
      </div>
    </div>
  
    <div class="row mt-5">
      <div class="col-10 offset-1 invoice-table pt-1">
        <table class="table table-hover">
              <thead class="thead splitForPrint">
                <tr>
                  <th scope="col gray-ish">NO.</th>
                  <th scope="col gray-ish">Item</th>
                  <th scope="col gray-ish">Qty.</th>
                  <th scope="col gray-ish">Preço Unit.</th>
                  <th class="text-right" scope="col gray-ish">Total</th>
                </tr>
              </thead>

              <?php $total2 = 0 ;?>

              @foreach($orcamento->produto as $item)
              <tbody>
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td class="item">{{$item->Nome_Produto}}</td>
                  <td>{{$quantidade = $item->pivot['Quantidade'] }}</td>
                  <td class="unit">R$ {{$preco= $item['Preco_Produto']}} </td>

                  <td class="text-right">R$ {{$total1 = $preco * (int)$quantidade}} <?php $total2 += $total1; ?> </td>
               
                </tr>

    
 
              </tbody>
              @endforeach

            </table>
      </div>
    </div>
  <div class="row invoice_details">
     <!-- invoiced to details -->
     <div class="col-4 offset-1 pt-3">
       <h4 class="gray-ish">Descrição</h4>
       <p class="pt-3 almost-gray"> {{$orcamento->Descricao}}.</p>
     </div>
     <!-- Invoice assets and total -->
          <div class="offset-1 col-5 mb-3 pr-4 sub-table">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th scope="row gray-ish">Subtotal</th>
                  <td class="text-right">R$ {{$total2}} </td>
                </tr>
             
                <tr>
                  <th scope="row gray-ish">Taxas*</th>
                  <td class="text-right">R$ {{$taxa = $orcamento->Taxas}} </td>
                </tr>
                <tr>
                  <th scope="row gray-ish">Desconto</th>
                  <td class="text-right">R$ {{$desconto = $orcamento->Desconto}} </td>
                </tr>
                <tr class="last-row">
                    <th scope="row"><h4>Total</h4></th>
                    <td class="text-right"><h4></h4></td>
                </tr>
              </tbody>
            </table>
          </div>
     </div>
    <p class="text-center pb-3"><em> Obrigado pela preferência.</em></p>
  </div>
