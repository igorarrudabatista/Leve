<style>

    body{margin-top:20px;
    background-color: #f7f7ff;
    }
    #invoice {
        padding: 0px;
    }
    
    .invoice {
        position: relative;
        background-color: #FFF;
        min-height: 680px;
        padding: 15px
    }
    
    .invoice header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #0d6efd
    }
    
    .invoice .company-details {
        text-align: right
    }
    
    .invoice .company-details .name {
        margin-top: 0;
        margin-bottom: 0
    }
    
    .invoice .contacts {
        margin-bottom: 20px
    }
    
    .invoice .invoice-to {
        text-align: left
    }
    
    .invoice .invoice-to .to {
        margin-top: 0;
        margin-bottom: 0
    }
    
    .invoice .invoice-details {
        text-align: right
    }
    
    .invoice .invoice-details .invoice-id {
        margin-top: 0;
        color: #0d6efd
    }
    
    .invoice main {
        padding-bottom: 50px
    }
    
    .invoice main .thanks {
        margin-top: -100px;
        font-size: 2em;
        margin-bottom: 50px
    }
    
    .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #0d6efd;
        background: #e7f2ff;
        padding: 10px;
    }
    
    .invoice main .notices .notice {
        font-size: 1.2em
    }
    
    .invoice table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px
    }
    
    .invoice table td,
    .invoice table th {
        padding: 15px;
        background: #eee;
        border-bottom: 1px solid #fff
    }
    
    .invoice table th {
        white-space: nowrap;
        font-weight: 400;
        font-size: 16px
    }
    
    .invoice table td h3 {
        margin: 0;
        font-weight: 400;
        color: #0d6efd;
        font-size: 1.2em
    }
    
    .invoice table .qty,
    .invoice table .total,
    .invoice table .unit {
        text-align: right;
        font-size: 1.2em
    }
    
    .invoice table .no {
        color: #fff;
        font-size: 1.6em;
        background: #0d6efd
    }
    
    .invoice table .unit {
        background: #ddd
    }
    
    .invoice table .total {
        background: #0d6efd;
        color: #fff
    }
    
    .invoice table tbody tr:last-child td {
        border: none
    }
    
    .invoice table tfoot td {
        background: 0 0;
        border-bottom: none;
        white-space: nowrap;
        text-align: right;
        padding: 10px 20px;
        font-size: 1.2em;
        border-top: 1px solid #aaa
    }
    
    .invoice table tfoot tr:first-child td {
        border-top: none
    }
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0px solid rgba(0, 0, 0, 0);
        border-radius: .25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
    }
    
    .invoice table tfoot tr:last-child td {
        color: #0d6efd;
        font-size: 1.4em;
        border-top: 1px solid #0d6efd
    }
    
    .invoice table tfoot tr td:first-child {
        border: none
    }
    
    .invoice footer {
        width: 100%;
        text-align: center;
        color: #777;
        border-top: 1px solid #aaa;
        padding: 8px 0
    }
    
    @media print {
        .invoice {
            font-size: 11px !important;
            overflow: hidden !important
        }
        .invoice footer {
            position: absolute;
            bottom: 10px;
            page-break-after: always
        }
        .invoice>div:last-child {
            page-break-before: always
        }
    }
    
    .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #0d6efd;
        background: #e7f2ff;
        padding: 10px;
    }
    </style>
    
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orçamento</title>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div id="invoice">
                        <div class="toolbar hidden-print">
                            <div class="text-end">
                                {{-- <button type="button" class="btn btn-dark">
                                    <i class="fa fa-print"></i> </button> --}}
                                <!-- <button type="button" class="btn btn-danger"> -->
                                    <!-- <i class="fa fa-file-pdf-o"></i> Export as PDF</button> -->
                            </div>
                        </div>
                        
                        <div class="invoice overflow-auto">
                        <div style="min-width: 600px">
                            <header>
                                <div class="row">
                                    <div class="col">
                                    </a>
                                </div>
                                <div class="col company-details">
                                    <h2 class="name">
                                    <img src="{{asset('/img/empresa/')}}/{{$orcamento->empresa->image}}" width="200px" alt=""> 
                                        <br>
                                        {{$orcamento->empresa->Nome_Empresa ?? ''}}
                                        </a>
                                        </h2>
                                        <div>{{$orcamento->empresa->Cnpj ?? ''}}</div>
                                        <div>{{$orcamento->empresa->Telefone ?? ''}}</div>
                                        <div>{{$orcamento->empresa->Email ?? ''}}</div>
                                    </div>
                                </div>
                            </header>
                            <main>
                     
    
    
                            <div class="row contacts">
                                    <div class="col invoice-to">
                                        <div class="text-gray-light">Orçamento para: </div>
                                        <img src="{{asset('/img/empresa/')}}/{{$orcamento->empresa_cliente->image}}" width="200px" alt=""> 
                                        <br>
                                        <h2 class="to"> {{$orcamento->empresa_cliente->Nome_Empresa ?? ''}} </h2>
                                        <div class="address"> Endereço:{{$orcamento->empresa_cliente->Endereco ?? ''}} | {{$orcamento->empresa_cliente->Cidade ?? ''}} - {{$orcamento->empresa_cliente->Estado}} </div>
                                        <div class="email"><a href="mailto:john@example.com">{{$orcamento->empresa_cliente->Email ?? ''}}</a>
                                        </div>
                                    </div>
                                    <div class="col invoice-details">
                                        <h1 class="invoice-id">Número do Orçamento: {{$orcamento->Numero_Orcamento ?? ''}}</h1>
                                        <div class="date">Data: {{$orcamento->Data ?? ''}} </div>
                                        <div class="date">Garantia: {{$orcamento->Garantia ?? ''}}</div>
                                    </div>
                                </div> 
    
                                <table>
                                    
                                    <thead>
                                        <tr>
                                            <th>PRODUTO</th>
                                            <th class="text-left"> </h2> <br>
                                            </th>
                                            
                                            <th class="text-right">PREÇO UND.</th>
                                            <th class="text-right">QUANTIDADE</th>
                                            <th class="text-left">TOTAL</th>
                                        </tr>
                                        
                                    </thead>
    
                                    <?php $total2 = 0 ;?>

                                    @foreach($orcamento->produto as $item)
                                    <tbody>
                                        <tr>                                      
                                            
                                            <td class="no">{{$item->id}}</td>
                                            <td class="text-left">{{$item->Nome_Produto}} </td>
                                                <h3>
                                                 
    
    
                                                      
                                            </a>
                                                </h3>

                                         <td class="unit">R$ {{$preco= $item['Preco_Produto']}} </td>
                                            <td class="qty"> {{$quantidade = $item->pivot['Quantidade'] }}</td>
                                            <td class="total"> R$ {{number_format($total1 = $preco * (int)$quantidade), 2}} <?php $total2 += $total1; ?> </td>
    
                                        </tr>
                                        
                                    </tbody>
                                    
                                    @endforeach
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">SUBTOTAL</td>
                                            <td>R$ {{number_format($total2), 2}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">TAXA </td>
                                            <td>R$ {{$taxa = $orcamento->Taxas}}</td>
                                        </tr>

                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">DESCONTOS </td>
                                            <td> R$ {{$desconto = $orcamento->Desconto}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">TOTAL</td>
                                            <td>R$ {{number_format($total = $total2 + $taxa - $desconto), 2}}</td>
                                        </tr> 
                                    </tfoot>
                                </table>
                                
                                <div class="thanks">Obrigado!</div>
                                <div class="notices">
                                    <div></div>
                                    <div class="notice">Obrigado!</div>
                                </div>
                            </main>
                            <footer>   {{$orcamento->empresa->Nome_Empresa ?? ''}} </footer>
                        </div>
                        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    
    