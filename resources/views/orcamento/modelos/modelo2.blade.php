<style>
     .body-main {
     background: #ffffff;
     border-bottom: 15px solid #1E1F23;
     border-top: 15px solid #1E1F23;
     margin-top: 30px;
     margin-bottom: 30px;
     padding: 40px 30px !important;
     position: relative;
     box-shadow: 0 1px 21px #808080;
     font-size: 10px
 }

 .main thead {
     background: #1E1F23;
     color: #fff
 }

 .img {
     height: 100px
 }

 h1 {
     text-align: center
 }

 </style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <title>Orçamento</title>
</head>

<body>
<div class="container">
    <div class="page-header">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 body-main">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"> <img class="img" alt="Invoce Template" src="http://pngimg.com/uploads/shopping_cart/shopping_cart_PNG59.png" /> </div>
                        <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong>{{$orcamento->empresa->Nome_Empresa ?? ''}} </strong></h4>
                            <p>{{$orcamento->empresa->Endereco ?? ''}}</p>
                            <p>{{$orcamento->empresa->Cidade ?? ''}}</p>
                            <p>{{$orcamento->empresa->Cnpj ?? ''}}</p>
                            <p>{{$orcamento->empresa->Telefone ?? ''}}</p>
                            <p>{{$orcamento->empresa->Email ?? ''}}</p>
                            <p>{{$orcamento->empresa->Site ?? ''}}</p>

                        </div>
                    </div> <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>ORÇAMENTO</h2>
                            <h5>#{{$orcamento->Numero_Orcamento ?? ''}}</h5>
                        </div>
                    </div> <br />
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h5>Descrição</h5>
                                    </th>
 
                                    <th>
                                        <h5>Quantidade</h5>
                                    </th>

                                    <th>
                                        <h5>Preço </h5>
                                    </th>

                                    <th>
                                        <h5>Total</h5>
                                    </th>
                                </tr>
                            </thead>
                            <?php $total2 = 0 ;?>

                            @foreach($orcamento->produto as $item)
                            <tbody>
                                <tr>
                                    <td class="col-md-3">{{$item->Nome_Produto}}</td>
                                    <td class="col-md-3">{{$quantidade = $item->pivot['Quantidade'] }}</td>
                                    <td class="col-md-3">{{number_format($preco= $item['Preco_Produto']), 2 }} </td> 


                                    <td class="col-md-3">
                                        R$ {{number_format($total1 = $preco * (int)$quantidade), 2}} <?php $total2 += $total1; ?>  </td>
                                </tr>
                         
                                @endforeach

                                <tr>
                                    <td class="text-right">
                                        <p> <strong>Subtotal:</strong> </p>
                                        <p> <strong>Taxas: </strong> </p>
                                        <p> <strong>Descontos: </strong> </p>
                                    </td>
                                    <td>
                                        <p> <strong>R$ {{number_format($total2), 2}} </strong> </p>
                                        <p> <strong>R$ {{$taxa = $orcamento->Taxas}} </strong> </p>
                                        <p> <strong>R$ {{$desconto = $orcamento->Desconto}}  </strong> </p>
                                    </td>
                                </tr>
                                <tr style="color: #F81D2D;">
                                    <td class="text-right">
                                        <h4><strong>Total:</strong></h4>
                                    </td>
                                    <td class="text-left">
                                        <h4><strong>R$ {{number_format ($total = $total2 + $taxa - $desconto), 2}} </strong></h4>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <p><b>Data do Orçamento:</b> {{$orcamento->Data ?? ''}} </p> 
                            <p><b>Validade :</b> {{$orcamento->Validade ?? ''}} dias </p> 
                            <p><b>Garantia: {{$orcamento->Garantia ?? ''}} dias </b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

