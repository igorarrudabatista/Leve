<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\
    {

    Empresa_ClienteController, MinhaEmpresaController, ProdutoController, OrcamentoController, ReciboController, ContratosController,
    AgendaController,
    HomeController, AlunosController, APIController, FichaController, PainelGerencialController,
    UsuariosController, RoleController, UserController, ProductController,
    MinisterioController, PoloController, EscolaController, PessoaController,
    PrazoController, ConselhoController,
    Ficha_Ministerio, Ficha_Conselho, ViolenciaController, CalendarController,
    ObjetosController, CatController, SiteController
};

 Route::get('/escola/teste',      [PessoaController::class, 'index']);
//  Route::get('/base/base',      [PainelGerencialController::class, 'dashboard']);


// Route::get('/painel', function () {
//     return view('painel');
// })->middleware(['auth', 'verified'])->name('painel');

Route::middleware('auth')->group(function () {
Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');

Route::resource('roles',                     RoleController::class);
Route::resource('users',                     UserController::class);
// Route::resource('conselho',                  ConselhoController::class);
Route::resource('cliente',                   Empresa_ClienteController::class);
Route::resource('minhaempresa',              MinhaEmpresaController::class);
Route::resource('recibos',                   ReciboController::class);
Route::resource('produtos',                  ProdutoController::class);
Route::resource('contratos',                 ContratosController::class);


//Orçamentos
Route::get('orcamento/create_orcamento',                        [OrcamentoController::class, 'create']);
Route::post('/orcamento',                                       [OrcamentoController::class, 'store']);
Route::get('/orcamento/show_orcamento',                         [OrcamentoController::class, 'show']);
Route::get('/orcamento/edit/{id}',                              [OrcamentoController::class, 'edit']);
Route::put('/orcamento/update/{id}',                            [OrcamentoController::class, 'update']);
//Route::get('/orcamento/update/status/{id}',        [OrcamentoController::class, 'update_status']);
Route::get('/orcamento/update/status_vendarealizada/{id}',      [OrcamentoController::class, 'update_vendarealizada']);
Route::get('/orcamento/update/status_cancelado/{id}',           [OrcamentoController::class, 'update_cancelado']);
Route::get('/orcamento/update/status_pendente/{id}',            [OrcamentoController::class, 'update_pendente']);
//
Route::delete('/orcamento/{id}',                  [OrcamentoController::class, 'destroy']);
Route::get('/orcamento/modelos/modelo1/{id}',     [OrcamentoController::class, 'modelo1']);
Route::get('/orcamento/modelos/modelo2/{id}',     [OrcamentoController::class, 'modelo2']);
Route::get('/orcamento/modelos/modelo3/{id}',     [OrcamentoController::class, 'modelo3']);
Route::get('/orcamento/modelos/modelo4/{id}',     [OrcamentoController::class, 'modelo4']);
Route::get('/orcamento/modelos/modelo5/{id}',     [OrcamentoController::class, 'modelo5']);
Route::get('/orcamento/modelos/modelo6/{id}',     [OrcamentoController::class, 'modelo6']);

Route::get('/orcamento/export',                   [OrcamentoController::class,   'export']);




Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');  
    



/// API
Route::get('/API/CEP/',   [APIController::class, 'cep']);
Route::get('/API/CNPJ/',  [APIController::class, 'cnpj']);
Route::get('/API/FILMES/',[APIController::class, 'filmes']);




////// PAINEL GERENCIAL (DASHBOARD)
Route::get('/painel', [PainelGerencialController::class, 'dashboard']);

Route::get('/painel/index', [PainelGerencialController::class, 'index']);
Route::get('/painel/cadastro/index',  [PainelGerencialController::class, 'cadastro_menu']);
Route::get('/painel/consulta_ficha',  [PainelGerencialController::class, 'consulta_ficha']);
Route::get('/painel/consulta_aluno',  [AlunosController::class, 'search']);
Route::post('/painel/consulta_aluno/', [AlunosController::class, 'search']);

Route::get('/painel/cadastro/cadastro_aluno',      [PainelGerencialController::class, 'cadastro_aluno']);
Route::get('/painel/cadastro/cadastro_conselho',   [PainelGerencialController::class, 'cadastro_conselho']);
Route::get('/painel/cadastro/cadastro_escola',     [PainelGerencialController::class, 'cadastro_escola']);
Route::get('/painel/cadastro/cadastro_ministerio', [PainelGerencialController::class, 'cadastro_ministerio']);
Route::get('/painel/cadastro/cadastro_polo',       [PainelGerencialController::class, 'cadastro_polo']);
Route::get('/painel/cadastro/cadastro_prazo',      [PainelGerencialController::class, 'cadastro_prazo']);
Route::get('/painel/cadastro/cadastro_serie',      [PainelGerencialController::class, 'cadastro_serie']);


Route::get('/usuarios/atribuir_perfil_usuarios',      [RoleController::class, 'atribuir_perfil_usuarios']);


Route::get('/usuarios/perfil_usuarios',               [RoleController::class, 'perfil_usuarios']);
Route::get('/usuarios/form_usuarios',                 [UsuariosController::class, 'form_usuarios']);



    
      Route::get('google', [Ficha_Conselho::class, 'google']);

      Route::get('ficha_conselho/{id}', [Ficha_Conselho::class, 'create']);
      Route::post('ficha_conselho/{id}', [Ficha_Conselho::class, 'store']);

      
      
    Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
    Route::post('calendar', [CalendarController::class, 'store'])->name('calendar.store');
    Route::patch('calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar.update');
    Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');  

//Route::resource('usuarios', UserController::class);


// ---------USUARIOS POST
// Route::post('/usuarios/atribuir_perfil',              [UsuariosController::class, 'atribuir_perfil_usuarios_store']);
// Route::post('/usuarios',                              [UsuariosController::class, 'store_usuarios']);

/////LOGOUT
// Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/Objetos/piano',                 [ObjetosController::class, 'piano']);
Route::get('/Objetos/teclado1',                 [ObjetosController::class, 'teclado']);
Route::get('/Objetos/teclado2',                 [ObjetosController::class, 'teclado2']);
Route::get('/Escolas/index',                 [ObjetosController::class, 'Escolas']);




Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');

});


Route::get('/Site',                 [SiteController::class, 'index']);

require __DIR__.'/auth.php';
