<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            ///produto
            'produto-list',
            'produto-create',
            'produto-edit',
            'produto-delete',
            ///minhaempresa
            'minhaempresa-list',
            'minhaempresa-create',
            'minhaempresa-edit',
            'minhaempresa-delete',
            ///cliente
            'cliente-list',
            'cliente-create',
            'cliente-edit',
            'cliente-delete',
            ///fornecedor
            'fornecedor-list',
            'fornecedor-create',
            'fornecedor-edit',
            'fornecedor-delete',
            ///recibos
            'recibo-list',
            'recibo-create',
            'recibo-edit',
            'recibo-delete',
            'recibo-invoice',
            ///contratos
            'contrato-list',
            'contrato-create',
            'contrato-edit',
            'contrato-delete',
            ///orcamento
            'orcamento-list',
            'orcamento-create',
            'orcamento-edit',
            'orcamento-delete',

            
        ];
       
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}