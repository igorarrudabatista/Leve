@extends('base.base')
@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <h1 class="app-page-title">Painel Dashboard</h1>

                {{-- <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                <div class="inner">
                    <div class="app-card-body p-3 p-lg-4">
                        <h3 class="mb-3">Welcome, developer!</h3>
                        <div class="row gx-5 gy-3">
                            <div class="col-12 col-lg-9">
                                
                                <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple, clean and modular so it's a great base for building any modern web app.</div>
                            </div><!--//col-->
                            <div class="col-12 col-lg-3">
                                <a class="btn app-btn-primary" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
<path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
<path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z"/>
</svg>Free Download</a>
                            </div><!--//col-->
                        </div><!--//row-->
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div><!--//app-card-body-->
                    
                </div><!--//inner-->
            </div><!--//app-card-->
                 --}}
                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Clientes cadastrados</h4>
                                <div class="stats-figure">{{ $clientes }}</div>
                                <div class="stats-meta text-success">
                                </div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="{{ asset('/cliente') }}"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Produtos Cadastrados</h4>
                                <div class="stats-figure">{{ $produto }}</div>
                                <div class="stats-meta text-success">
                                </div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="{{ asset('/produtos') }}"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Contratos</h4>
                                <div class="stats-figure">{{ $contrato }}</div>
                                <div class="stats-meta">
                                </div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="{{ asset('/contrato') }}"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Recibos</h4>
                                <div class="stats-figure">{{ $recibo }}</div>
                                <div class="stats-meta"></div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="{{ asset('/recibos') }}"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->
                <div class="row g-4 mb-4">
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Clientes </h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Cadastre os clientes aqui.</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="{{ asset('/cliente/create') }}">clique para
                                    acessar</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Fornecedores </h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Cadastre os seu Fornecedores.</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="{{ asset('/fornecedor/create') }}">clique para
                                    acessar</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Produtos </h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Cadastre os seus produtos.</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="{{ asset('/produtos/create') }}">Clique para
                                    acessar</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                                <path
                                                    d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Contratos </h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Crie os seus contratos aqui.</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="{{ asset('/contrato/create') }}">Clique para
                                    acessar</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                                                <path
                                                    d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                <path
                                                    d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Recibos</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Crie os recibos aqui.</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="{{ asset('/recibos/create') }}">clique para
                                    acessar</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Suporte</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Fale com o suporte.</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="{{ asset('/suporte') }}">Fale com o Suporte</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->

                <div class="row g-4 mb-4">

                    <div class="col-12 col-lg-6">
                        <div class="app-card app-card-stats-table h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Últimos 5 recibos</h4>
                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <div class="card-header-action">
                                            <a href="{{ asset('/recibos') }}">Acessar</a>
                                        </div>
                                        <!--//card-header-actions-->
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th class="meta">Clientes</th>
                                                <th class="meta stat-cell">N° do recibo</th>
                                            </tr>
                                        </thead>
                                        @foreach ($recibos as $key => $item)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $item->empresa_cliente->Nome_fantasia ?? 'Sem registros' }}</td>
                                                    <td class="stat-cell">{{ $item->id ?? '' }}</td>

                                                </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-6">
                        <div class="app-card app-card-stats-table h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Últimos 5 Contratos</h4>
                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <div class="card-header-action">
                                            <a href="{{ asset('/contrato') }}">Acessar</a>
                                        </div>
                                        <!--//card-header-actions-->
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th class="meta">Cliente</th>
                                                <th class="meta stat-cell">N° do contrato</th>
                                            </tr>
                                        </thead>
                                        @foreach ($contratos as $key => $item)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $item->empresa_cliente->Nome_fantasia ?? 'Sem registros' }}</td>

                                                    <td class="stat-cell">{{ $item->id ?? '' }}</td>


                                                </tr>
                                        @endforeach

                                        </tbody>

                                    </table>
                                </div>
                                <!--//table-responsive-->
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                </div>
                <!--//row-->


            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
    @endsection
