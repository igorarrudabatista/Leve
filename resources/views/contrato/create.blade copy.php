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
                    <p>Crie os seus recibos aqui!</p>
                </div>

                {!! Form::open(array('route' => 'recibos.store','method'=>'POST')) !!}

                <div class="container">
                    <div id="app">
                        <step-navigation :steps="steps" :currentstep="currentstep">
                        </step-navigation>
                        
                        <div v-show="currentstep == 1">
                            <h3>Passo 1</h3>
                            <div class="row">
                                <div class="col-md-5 col-12">
                                   
                                        <label for="first-name-column"><strong> Cliente </strong></label>

                                        <select name="empresa_cliente_id" id="empresa_cliente_id" class="form-control">
                                            <option value="1"> Selecione a empresa </option>
                                            @foreach ($empresa_cliente as $empresa_clientes	)
                                            <option value="{{ $empresa_clientes->id}}">{{$empresa_clientes->Nome_Empresa}} </option>
                                            @endforeach
                                        </select>


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
                           
                            <h3>Selecione os Produtos e Quantidades</h3> 
                            <div class="form-group">
                                <div class="row">
                                <div class="col-md-4 col-12">
                      
                                <br/>
                                <hr>

                                <div class="custom-control custom-checkbox">

                                    <label> Produtos </label> <br>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Locação Toalha Hair"><big> Locação Toalha Hair
                                    <input type="number"  class="custom-control-input" name="DescProdutos[]" value="Toalha Preta"> <br/>

                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Hig. Toalha Hair "> Hig. Toalha Hair <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Manicure"> Manicure <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Ombro Tintura"> Ombro Tintura <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Capa"> Capa <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Toalha Banho"> Toalha Banho <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Tapete"> Tapete <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Lençol"> Lençol <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Roupão"> Roupão <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Locação Toalha PE"> Locação Toalha PE <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Cobertor"> Cobertor <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Travesseiro / Almofada"> Travesseiro / Almofada <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Hig. Toalha"> Hig. Toalha <br/>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="DescProdutos[]" value="Caminha"> Caminha </big> <br/>
                                </div>
                               </div>



                               <div class="col-md-4 col-12">
                                <div class="form-group has-icon-left">
                                <br>

                                <hr>
                                        <input type="checkbox"  class="custom-control-input" name="DescProdutos[]" value="Toalha Preta"><big> Toalha Preta <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Dourada"> Toalha Dourada <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Rosa"> Toalha Rosa <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Azul Escuro"> Toalha Azul Escuro <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Verde"> Toalha Verde <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Cinza"> Toalha Cinza <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Laranja"> Toalha Laranja <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Azul Claro"> Toalha Azul Claro <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Bordô"> Toalha Bordô <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Lilás"> Toalha Lilás <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Vermelha"> Toalha Vermelha <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Azul"> Toalha Azul <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Verde Claro"> Toalha Verde Claro <br/>
                                        <input type="checkbox" name="DescProdutos[]" value="Toalha Marrom"> Toalha Marrom </big> <br/>

                                </div>

                                
                            </div>
                            </div>
                        </div>
                        </div>
                
                        <div v-show="currentstep == 3">
                            <h3>Passo 3</h3>
                            <div class="form-group">
                                <label for="textarea">Observações:</label>
                                <textarea class="form-control" name="textarea" rows="4" placeholder="Esta mensagem será exibida no cupom"> </textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="textarea">Mensagem para o Cliente:</label>
                                <textarea class="form-control" name="textarea" rows="4" placeholder="Escreva aqui"> </textarea>
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