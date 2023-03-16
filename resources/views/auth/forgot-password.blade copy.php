<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    
    <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card py-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="{{asset('images/favicon.svg')}}" height="48" class='mb-4'>
                        <h3>Esqueci a senha</h3>
                        <p>Por favor, entre com o seu e-mail para receber uma senha temporária.</p>
                    </div>
                        <div class="form-group">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                        
                            <div>
                                <x-input-label for="email" :value="__('E-mail')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            {{-- <label for="first-name-column">Email</label>
                            <input type="email" id="first-name-column" class="form-control" name="fname-column"> --}}


                        </div>

                        <div class="clearfix">
                            <button class="btn btn-primary float-end"> Alterar Senha</button>
                        </div>
                    </form>
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
