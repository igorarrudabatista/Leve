<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Hash;
use Illuminate\Support\Arr;


use App\Models\User;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;
use App\Models\Permissions;
use App\Models\model_has_permissions;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;


use App\Models\FICHA;
use App\Models\CATEGORIA;
use App\Models\ESCOLA;
use App\Models\ALUNO;
use App\Models\PERFIL;


class UsuariosController extends Controller
{
    public function index(Request $request) {
        
        $usuario = User::orderBy('id','DESC')->paginate(5);
        return view('usuarios.index',compact('usuario'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('usuarios.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('usuarios.index')
                        ->with('success','User created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('usuarios.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('usuarios.edit',compact('user','roles','userRole'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('usuarios.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('usuarios.index')
                        ->with('success','Usuário deletado com sucesso!!! ');
    }







    public function form_usuarios() {

        $perfil = PERFIL::all();
        $escola = ESCOLA::all();

    
        return view('usuarios.form_usuarios', [
            'perfil' => $perfil, 
            'escola' => $escola
        ]); 

    }
    
    public function perfil_usuarios() {

        return view('usuarios.perfil_usuarios'    
    );}
    
    public function atribuir_perfil_usuarios() {

        $usuario     = User::all();
      //  $permissions = Permissions::all();



        return view('usuarios.atribuir_perfil_usuarios', [
            'usuario'     => $usuario, 
         //   'permissions' => $permissions,
                    
            ]); 
    }

    // public function atribuir_perfil_usuarios_store(Request $request) {

    //     $perfil = new model_has_permissions;

    //     $perfil->permission_id = $request->permission_id;
    //     $perfil->model_id = $request->model_id;
    //     $perfil->model_type = 'App\Models\User';
    //     $perfil-> save();

    //     return view ('usuarios.atribuir_perfil');
    // }

    public function store_usuarios(Request $request) {

        $usuario                 =     new User;
        $usuario->name           =     $request->name;
        $usuario->email          =     $request->email;
        $usuario->perfil_acesso  =     $request->perfil_acesso;
        $usuario->password       =     bcrypt($request->password);

        $usuario-> save();

                return view ('usuarios.listar_usuarios');
    }


}