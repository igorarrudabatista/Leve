@extends('base.base')
@section('content')





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
                    <img src="{{asset('/images/contrato.png')}}" height="188" class='mb-4'>
                    <h3>Contratos</h3>
                    <p>Crie os seus contratos aqui!</p>
                </div>

      
                {!! Form::open(array('route' => 'contratos.store','method'=>'POST')) !!}

                <div class="container">
                    <div id="app">
                        
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


                                   </div>

                                <div class="col-md-3 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Data de Entrega </strong></label>
                                        <div class="position-relative">


                                          <select name="empresa_cliente_id" id="empresa_cliente_id" class="form-control">
                                            <option value="1"> Selecione o produto </option>
                                            @foreach ($produto as $produtos	)
                                            <option value="{{ $produto->id}}">{{$produto->Nome_Produto}} </option>
                                            @endforeach
                                        </select>
                                         
                                            
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
                          <br>
                           
                           <center> <h3>Selecione os Produtos e Quantidades</h3> </center>
                            <div class="card-body">
                              <table class="table" id="products_table">
                                <thead>
                                  <tr>
                                    <th><h3> <strong> Produto: </strong> </h3></th>
                                    <th><h3> <strong> Quantidade:  </strong> </h3></th>
                                    <!-- <th>Preço</th> -->
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr id="product0">
                                    <td>
                                      <select name="products[]"  class="form-control id_select2_example"  >
                                        <option value="">-- Selecione o produto --</option>
                                         @foreach ($produto as $produtos)
                                        <option value="{{$produtos->id}}" data-img_ssrc="{{asset('/img/produtos/')}}/{{$produtos->image}}">  
                                           {{$produtos->Nome_Produto}}
                                          @endforeach 
                                        </option>
                                        
                                      </select>
                                    </td>
                                    <td>
                    
                    
                                      <input type="number" name="quantities[]"  class="form-control" value="1" />
                                    </td>
                    
                                  </tr>
                                  <tr id="product1"></tr>
                                </tbody>
                              </table>
                    
                    
                                <div class="row">
                                <div class="col-md-12">
                                    <button id="add_row" class="btn btn-success pull-left"> + Adicionar Produto</button> 
                                    <button id='delete_row' class="pull-right btn btn-danger"> - Deletar</button>
                                  </div>
                                </div>
                    
                                <br><br> </div> </div>
                
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

                    </div>
                </div>

                </form>

                             
                            {!! Form::close() !!}
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
 
s

    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>


</section>
@endsection