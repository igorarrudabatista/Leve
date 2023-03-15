'@extends('base.base')
@section('content')


<div id="auth">       
           
            <form action="{{asset('/API/CNPJ')}}" method="GET" enctype="multipart/form-data">

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card py-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                            <h3>Consulta de CNPJ</h3>
                            <p> Utilize o campo de CNPJ para localizar  </p>
                        </div>
                        <form action="index.html">
                            <div class="form-group">
                                {{-- <input type="email" id="first-name-column" class="form-control" name="fname-column"> --}}
                            </div>
    
                            <div class="form-group">
                                <label for="first-name-column">CNPJ</label>
                                <input type="text" id="search" class="form-control" name="search" placeholder="Digite o CNPJ aqui">
                            </div>
    
                               {{--  <div class="form-group">
                                <label for="first-name-column">Data de Nascimento</label>
                               <input type="date" id="first-name-column" class="form-control" name="fname-column"> 
                            </div>--}}
    
                            <div class="clearfix">
                                <button class="btn btn-primary float-end">Pesquisar</button>
                            </div>
<br>
                            @if ($search)

                                <p><b> CNPJ:  </b>   {{ $data->cnpj }}</p> 
                                <p><b> Identificador Matriz Filial:  </b>   {{ $data->identificador_matriz_filial }}</p> 
                                {{-- <p><b> CNPJ:  </b>   {{ $data->descricao_matriz_filial }}</p>  --}}
                                <p><b> Razão Social:  </b>   {{ $data->razao_social }}</p> 
                                <p><b> Nome Fantasia:  </b>   {{ $data->nome_fantasia }}</p> 
                                <p><b> Situação Cadastral:  </b>   {{ $data->situacao_cadastral }}</p> 
                                <p><b> Descrição Situação Cadastral:  </b>   {{ $data->descricao_situacao_cadastral }}</p> 
                                <p><b> Motivo Situação Cadastral:  </b>   {{ $data->motivo_situacao_cadastral }}</p> 
                                {{-- <p><b> CNPJ:  </b>   {{ $data->nome_cidade_exterior }}</p>  --}}
                                <p><b> Cód. Natureza Jurídica:  </b>   {{ $data->codigo_natureza_juridica }}</p> 
                                <p><b> Data Início Atividade:  </b>   {{ $data->data_inicio_atividade }}</p> 
                                <p><b> CNAE Fiscal:  </b>   {{ $data->cnae_fiscal }}</p> 
                                <p><b> CNAE Fiscal Descrição:  </b>   {{ $data->cnae_fiscal_descricao }}</p> 
                                {{-- <p><b> CNPJ:  </b>   {{ $data->descricao_tipo_logradouro }}</p>  --}}
                                <p><b> Endereço:  </b>   {{ $data->logradouro }}</p> 
                                <p><b> N°:  </b>   {{ $data->numero }}</p> 
                                <p><b> Complemento:  </b>   {{ $data->complemento }}</p> 
                                <p><b> Bairro:  </b>   {{ $data->bairro }}</p> 
                                <p><b> CEP:  </b>   {{ $data->cep }}</p> 
                                <p><b> UF:  </b>   {{ $data->uf }}</p> 
                                <p><b> Cód. Munícpio:  </b>   {{ $data->codigo_municipio }}</p> 
                                <p><b> Munícpio:  </b>   {{ $data->municipio }}</p> 
                                <p><b> DDD Telefone 1:  </b>   {{ $data->ddd_telefone_1 }}</p> 
                                <p><b> DDD Telefone 2:  </b>   {{ $data->ddd_telefone_2 }}</p> 
                                <p><b> DDD Fax:  </b>   {{ $data->ddd_fax }}</p> 
                                <p><b> Qualificaçao do Responsável:  </b>   {{ $data->qualificacao_do_responsavel }}</p> 
                                <p><b> Capital Social:  </b>   {{ $data->capital_social }}</p> 
                                <p><b> Porte:  </b>   {{ $data->porte }}</p> 
                                <p><b> Descrição Porte:  </b>   {{ $data->descricao_porte }}</p> 
                                <p><b> Opção pelo Simples:  </b>   {{ $data->opcao_pelo_simples }}</p> 
                                <p><b> Data Opção pelo Simples:  </b>   {{ $data->data_opcao_pelo_simples }}</p> 
                                <p><b> Data Exclusão do Simples:  </b>   {{ $data->data_exclusao_do_simples }}</p> 
                                <p><b> Opção pelo MEI:  </b>   {{ $data->opcao_pelo_mei }}</p> 
                                <p><b> Situação Especial:  </b>   {{ $data->situacao_especial }}</p> 
                                <p><b> Data Situação Especial:   </b>   {{ $data->data_situacao_especial }}</p> 
                                {{-- <p><b> CNPJ:  </b>   {{ $data->qsa }}</p>  --}}
               
              


                            <button class="btn btn-warning float-end">Limpar pesquisa</button> </a>
                            @else
                         
                                      @endif
                                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        </div>

   



@endsection