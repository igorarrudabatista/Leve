<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    
    <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            
                        {{-- <img src="{{images/favicon.svg')}}" height="48" class='mb-4'> --}}
                        <h3>Acesso ao Sistema</h3>
                        <p>Por favor, faça o login para acessar o sistema.</p>
                    </div>
                    <form action="index.html">
                        <div class="form-group position-relative has-icon-left">
                            {{-- <label for="username">Usuário</label> --}}
                            <div class="position-relative">

                              
                                    <x-input-label  for="email" :value="__('Usuário')" />
                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>


                                {{-- <input type="text" class="form-control" id="username" for="email" :value="__('Email')">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div> --}}
                             </div> 
                 

                        
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                {{-- <label for="password">Password</label> --}}
                                <a href="{{ __('esqueci-senha') }}" class='float-end'>
                                    <small>Esqueceu a senha?</small>
                                </a>
                            </div>
                            <div class="position-relative">
                                 <!-- Password -->
        
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
     
        <div class="form-control-icon">
            <i data-feather="lock"></i>
        </div>
                                {{-- <input type="password" class="form-control" for="password" :value="__('Password')" >
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div> --}}
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-start">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">{{ __('Lembrar') }}</label>
                            </div>
                            <div class="float-end">
                                <a href="{{ __('registrar') }}">Não possui cadastro?</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-end"> {{ __('Entrar') }}</button>
                        </div>
                    </form>
                    <div class="divider">
                        <div class="divider-text">OU</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="{{asset('js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
