@extends('base.base')
@section('content')


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>

<link id="theme-style" rel="stylesheet" href="{{asset('css/step-by-step/style.css')}}">

<div class="app-wrapper">
	    
    <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
        
        <div class="row g-3 mb-4 align-items-center justify-content-between">
          <div class="col-auto">
  
  
          </div>

        </div><!--//row-->

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
      
<br>
                <div class="text-center mb-5">
                    <img src="{{asset('/images/i.webp')}}" height="88" class='mb-4'>
                    <h3>Recibos</h3>
                    <p>Editando o Recibo do cliente: <strong> {{$recibo->empresa_cliente->Nome_Empresa}} </strong></p>
                </div>


                {!! Form::model($recibo, ['method' => 'PATCH','route' => ['recibos.update', $recibo->id]]) !!}


                <div class="container">
                    <div id="app">
                        <step-navigation :steps="steps" :currentstep="currentstep">
                        </step-navigation>
                        
                        <div v-show="currentstep == 1">
                            <h3>Passo 1</h3>
                            <div class="row">
                                <div class="col-md-5 col-12">
                                   
                                        <label for="first-name-column"><strong> Cliente </strong></label>
                                        <input type="text" class="form-control" id="empresa_cliente_id" name="empresa_cliente_id" value="{{$recibo->empresa_cliente->Nome_Empresa}}" disabled> 

                                        

                                        {{-- {!! Form::text('ParmPerfilAcessoNivel', null, array('placeholder' => 'Nome Completo','class' => 'form-control')) !!} --}}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                   </div>

                                <div class="col-md-3 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Data de Entrega </strong></label>
                                        <div class="position-relative">

                                      {!! Form::date('DataEntrega', null, array('placeholder' => 'E-mail','class' => 'form-control')) !!} 

                                         
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"> <strong> Data de Retirada </strong></label>
                                        <div class="position-relative">

                                       {!! Form::date('DataRetirada', null, array('placeholder' => 'E-mail','class' => 'form-control')) !!} 
                                          
                                            
                                    </div>
                                </div>

                            </div>          

                                </div>
                        </div>
                
                        <div v-show="currentstep == 2">
                           
                            <h3>Produtos</h3> 
                            <div class="form-group">
                                <div class="row">
                                <div class="col-md-6 col-12">
                      
                                <br/>
                                <hr>
                                <div class="custom-control custom-checkbox">

                                    <label class="checkbox-inline">


                                      
                                    {{-- <input type="checkbox" name="DescProdutos[]" value="Locação Toalha Hair" <?php if (in_array("Locação Toalha Hair", $recibo->DescProdutos)) { echo "checked"; } ?>> Locação Toalha Hair <br> --}}
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Locação Toalha Hair"<?php if (in_array("Locação Toalha Hair", $recibo->DescProdutos)) { echo "checked"; } ?>><big> Locação Toalha Hair <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Hig. Toalha Hair "<?php if (in_array("Hig. Toalha Hair", $recibo->DescProdutos)) { echo "checked"; } ?>> Hig. Toalha Hair <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Manicure"<?php if (in_array("Manicure", $recibo->DescProdutos)) { echo "checked"; } ?>> Manicure <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Ombro Tintura"<?php if (in_array("Ombro Tintura", $recibo->DescProdutos)) { echo "checked"; } ?>> Ombro Tintura <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Capa"<?php if (in_array("Capa", $recibo->DescProdutos)) { echo "checked"; } ?>> Capa <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Toalha Banho"<?php if (in_array("Toalha Banho", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Banho <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Tapete"<?php if (in_array("Tapete", $recibo->DescProdutos)) { echo "checked"; } ?>> Tapete <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Lençol"<?php if (in_array("Lençol", $recibo->DescProdutos)) { echo "checked"; } ?>> Lençol <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Roupão"<?php if (in_array("Roupão", $recibo->DescProdutos)) { echo "checked"; } ?>> Roupão <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Locação Toalha PE"<?php if (in_array("Locação Toalha PE", $recibo->DescProdutos)) { echo "checked"; } ?>> Locação Toalha PE <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Cobertor"<?php if (in_array("Cobertor", $recibo->DescProdutos)) { echo "checked"; } ?>> Cobertor <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Travesseiro / Almofada"<?php if (in_array("Locação Toalha Hair", $recibo->DescProdutos)) { echo "checked"; } ?>> Travesseiro / Almofada <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Hig. Toalha"<?php if (in_array("Hig. Toalha", $recibo->DescProdutos)) { echo "checked"; } ?>> Hig. Toalha <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Caminha"<?php if (in_array("Caminha", $recibo->DescProdutos)) { echo "checked"; } ?>> Caminha </big> <br/>
                                </div>
                               </div>

                               <div class="col-md-6 col-12">
                                <div class="form-group has-icon-left">
                                <br>

                                <hr>
                                        <input type="checkbox"  class="custom-control-input" name="DescProdutos[]" value="Toalha Preta"<?php if (in_array("Toalha Preta", $recibo->DescProdutos)) { echo "checked"; } ?>><big> Toalha Preta <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Dourada"<?php if (in_array("Toalha Dourada", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Dourada <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Rosa"<?php if (in_array("Toalha Rosa", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Rosa <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Azul Escuro"<?php if (in_array("Toalha Azul Escuro", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Azul Escuro <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Verde"<?php if (in_array("Toalha Verde", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Verde <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Cinza"<?php if (in_array("Toalha Cinza", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Cinza <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Laranja"<?php if (in_array("Toalha Laranja", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Laranja <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Azul Claro"<?php if (in_array("Toalha Azul Claro", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Azul Claro <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Bordô"<?php if (in_array("Toalha Bordô", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Bordô <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Lilás"<?php if (in_array("Toalha Lilás", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Lilás <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Vermelha"<?php if (in_array("Toalha Vermelha", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Vermelha <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Azul"<?php if (in_array("Toalha Azul", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Azul <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Verde Claro"<?php if (in_array("Toalha Verde Claro", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Verde Claro <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Marrom"<?php if (in_array("Toalha Marrom", $recibo->DescProdutos)) { echo "checked"; } ?>> Toalha Marrom </big> <br/>

                                </div>

                                
                            </div>
                            </div>
                        </div>
                        </div>
                
                        <div v-show="currentstep == 3">
                            <h3>Passo 3</h3>
                            <div class="form-group">
                                <label for="textarea">Observações:</label>
                                <textarea class="form-control" name="Observacoes" rows="4" placeholder="Esta mensagem será exibida no cupom"> </textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="textarea">Mensagem para o Cliente:</label>
                                <textarea class="form-control" name="MensagemCliente" rows="4" placeholder="Escreva aqui"> </textarea>
                            </div>
                  
                        </div>
                        
                
                        <step v-for="step in steps" :currentstep="currentstep" :key="step.id" :step="step" :stepcount="steps.length" @step-change="stepChanged"> </step>
                
                        <script type="x-template" id="step-navigation-template">
                            <ol class="step-indicator">
                                <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
                                </li>
                            </ol>
                        </script>
                
                        <script type="x-template" id="step-navigation-step-template">
                            <li :class="indicatorclass">
                                <div class="step"><i :class="step.icon_class"></i></div>
                                <div class="caption hidden-xs hidden-sm">Passo <span v-text="step.id"></span>: <span v-text="step.title"></span></div>
                            </li>
                        </script>
                
                        <script type="x-template" id="step-template">
                            <div class="step-wrapper" :class="stepWrapperClass">
                                <button type="button" class="btn btn-primary" @click="lastStep" :disabled="firststep">
                                    Voltar
                                </button>
                                <button type="button" class="btn btn-primary" @click="nextStep" :disabled="laststep">
                                    Próximo
                                </button>

                                <input type="submit" class="btn btn-primary" @click="nextStep" :disabled="firststep" value="Salvar Recibo"/>

                            
                            </div>
                        </script>


                    </div>
                </div>

                </form>


                            


                                        {{-- {!! Form::text('ParmPerfilAcessoNivel', null, array('placeholder' => 'Nome Completo','class' => 'form-control')) !!} --}}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->

                             
                            {!! Form::close() !!}
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>
    <script src="{{asset('js/step-by-step/script.js')}}"></script>



</section>
@endsection