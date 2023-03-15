<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    
    <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="{{asset('images/favicon.svg')}}" height="48" class='mb-4'>
                        <h3>Cadastre - se</h3>
                        <p>Por favor, preecha o formulário para acessar o sistema.</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    {{-- <form action="index.html"> --}}
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Nome')" />
                                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                    
                                    {{-- <label for="first-name-column">First Name</label>
                                    <input type="text" id="first-name-column" class="form-control"  name="fname-column"> --}}
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                           <!-- Email Address -->
                                           <div>
                                                <x-input-label for="email" :value="__('E-mail')" />
                                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                    {{-- <label for="last-name-column">Last Name</label>
                                    <input type="text" id="last-name-column" class="form-control"  name="lname-column">
                                    --}}
                                </div> 
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">

                                     <!-- Password -->
                                    <div>
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="form-control"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    {{-- <label for="username-column">Username</label>
                                    <input type="text" id="username-column" class="form-control" name="username-column">
                                 --}}
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                               
                                     <!-- Confirm Password -->
                                    <div>
                                        <x-input-label for="password_confirmation" :value="__('Confirme a Senha')" />

                                        <x-text-input id="password_confirmation" class="form-control"
                                                        type="password"
                                                        name="password_confirmation" required />

                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                    {{-- <label for="country-floating">Country</label>
                                    <input type="text" id="country-floating" class="form-control" name="country-floating">
                                --}}
                                </div>
                            </div>
                            
                        </diV>

                                <a href="{{ route('login') }}">Você já possui conta? Faça o Login.</a>
                        <div class="clearfix">
                            <button class="btn btn-primary float-end">Registrar</button>
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
    <script src="{{asset('assets/js/app.js')}}"></script>
    
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
