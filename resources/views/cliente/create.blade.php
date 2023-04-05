@extends('base.base')

@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">


                    </div>

                </div>
                <!--//row-->
                <form action="{{ asset('/cliente/create') }}" method="GET" enctype="multipart/form-data">

                    <section id="multiple-column-form">
                        <div class="row match-height">
                            <div class="col-12">
                                <div class="card">

                                    <br>
                                    <div class="text-center mb-5">
                                        <img src="{{ asset('/images/clientes.png') }}" height="88" class='mb-4'>
                                        <h3>CLIENTES</h3>
                                        <p>Cadastre os clientes da sua loja aqui.</p>
                                    </div>

                                    <div class="col-12 col-lg-12">
                                        <div class="app-card app-card-account shadow-sm  flex-column align-items-start">
                                            <div class="app-card-header p-3 border-bottom-0">

                                                <center>
                                                    <div class="col-md-4">
                                                        <input type="text" id="Cnpj" class="form-control inpt "
                                                            name="search" data-mask="00000000000000"
                                                            data-mask-selectonfocus="true"
                                                            placeholder="Digite o CNPJ da empresa">
                                                        <br>
                                                        <center><button
                                                                class="btn btn-primary float text-light">Pesquisar</button>
                                                            <br> <br>
                                                    </div>

                                                    @if ($search)
                </form>
                {!! Form::open(['route' => 'cliente.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">

                    <div class="input-group flex-nowrap col-md-4 mb-4 ">

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-buildings-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z" />
                                </svg>
                            </span>
                            {!! Form::text('Cnpj', $data->cnpj, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> Nome Fantasia</strong></label>
                        {!! Form::text('Nome_fantasia', $data->nome_fantasia, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> Nome do Responsável pela empresa</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z" />
                                </svg>
                            </span>
                            {!! Form::text('Nome_responsavel', $data->razao_social, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> Telefone</strong></label>


                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                            </span>
                            {!! Form::text('Telefone', $data->ddd_telefone_1, ['class' => 'form-control']) !!}
                        </div>


                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> E-mail</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                            </span>
                            {!! Form::text('Email', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> Endereço</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-signpost-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.293.707A1 1 0 0 0 7 1.414V4H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h5v6h2v-6h3.532a1 1 0 0 0 .768-.36l1.933-2.32a.5.5 0 0 0 0-.64L13.3 4.36a1 1 0 0 0-.768-.36H9V1.414A1 1 0 0 0 7.293.707z" />
                                </svg>
                            </span>
                            {!! Form::text('Endereco', $data->logradouro, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> CEP</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-sort-numeric-up" viewBox="0 0 16 16">
                                    <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z" />
                                    <path fill-rule="evenodd"
                                        d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z" />
                                    <path
                                        d="M4.5 13.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z" />
                                </svg>
                            </span>
                            {!! Form::text('Cep', $data->cep, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> N°</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-sort-numeric-up" viewBox="0 0 16 16">
                                    <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z" />
                                    <path fill-rule="evenodd"
                                        d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z" />
                                    <path
                                        d="M4.5 13.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z" />
                                </svg>
                            </span>
                            {!! Form::text('Numero', $data->numero, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> Bairro</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-signpost-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.293.707A1 1 0 0 0 7 1.414V4H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h5v6h2v-6h3.532a1 1 0 0 0 .768-.36l1.933-2.32a.5.5 0 0 0 0-.64L13.3 4.36a1 1 0 0 0-.768-.36H9V1.414A1 1 0 0 0 7.293.707z" />
                                </svg>
                            </span>
                            {!! Form::text('Bairro', $data->bairro, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> Estado</strong></label>

                        {!! Form::select(
                            'Estado',
                            [
                                'AC' => 'AC',
                                'AL' => 'AL',
                                'AP' => 'AP',
                                'AM' => 'AM',
                                'BA' => 'BA',
                                'CE' => 'CE',
                                'DF' => 'DF',
                                'ES' => 'ES',
                                'GO' => 'GO',
                                'MA' => 'MA',
                                'MT' => 'MT',
                                'MS' => 'MS',
                                'MG' => 'MG',
                                'PA' => 'PA',
                                'PB' => 'PB',
                                'PR' => 'PR',
                                'PE' => 'PE',
                                'PI' => 'PI',
                                'RJ' => 'RJ',
                                'RN' => 'RN',
                                'RS' => 'RS',
                                'RO' => 'RO',
                                'RR' => 'RR',
                                'SC' => 'SC',
                                'SP' => 'SP',
                                'SE' => 'SE',
                                'TO' => 'TO',
                                'Estrangeiro' => 'Estrangeiro',
                            ],
                            $data->uf,
                            ['class' => 'choices form-select'],
                        ) !!}
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02"> <strong> Cidade:</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </span>
                            {!! Form::text('Cidade', $data->municipio, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">
                            <strong> Web Site</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                    <path
                                        d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                    <path
                                        d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                </svg>
                            </span>
                            {!! Form::text('Site', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">
                            <strong> Instagram</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </span>
                            {!! Form::text('Instagram', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">
                            <strong> Facebok:</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </span>
                            {!! Form::text('Facebook', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary me-1 mb-1 text-light">Salvar</button>
                </form>

                <script>
                    $(document).ready(function() {
                        $('#Cnpj').mask('00000000000000');
                    });

                    $(document).ready(function() {
                        $('#telefone').mask('(00) 0000-0000#');
                    });
                </script>
            @else
                @endif
            @endsection
