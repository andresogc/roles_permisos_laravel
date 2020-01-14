<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Support\Facades\DB;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            //Permisos de usuarios
            [
                'name' => 'Navegar usuarios',
                'slug'  => 'users.index', //Users es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Lista y navega todos los usuarios del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ver detalle de usuario',
                'slug'  => 'users.show', //Users es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Ver en detalle cada usuario del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Edición usuarios',
                'slug' => 'users.edit', //Users es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Editar cualquier dato de un usuario del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Eliminar usuario',
                'slug' => 'users.destroy', //Users es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Elimina cualquier usuario del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],

             //Roles
             [
                'name' => 'Navegar roles',
                'slug' => 'roles.index', //roles es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Lista y navega todos los roles del sistema',
                'created_at' => date('Y-m-d H:i:s')
             ],
             [
                'name' => 'Ver detalle de rol',
                'slug' => 'roles.show', //roles es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Ver en detalle cada rol del sistema',
                'created_at' => date('Y-m-d H:i:s')
             ],
            [
                'name' => 'Creacion de roles',
                'slug' => 'roles.create', //roles es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Editar cualquier dato de un rol del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Edición roles',
                'slug' => 'roles.edit', //roles es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Editar cualquier dato de un rol del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Eliminar rol',
                'slug' => 'roles.destroy', //roles es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Elimina cualquier rol del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],

             //Productos
            [
                'name' => 'Navegar productos',
                'slug' => 'productos.index', //productos es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Lista y navega todos los productos del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ver detalle de producto',
                'slug' => 'productos.show', //productos es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Ver en detalle cada producto del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Creacion de productos',
                'slug' => 'productos.create', //productos es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Editar cualquier dato de un producto del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Edición productos',
                'slug' => 'productos.edit', //productos es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Editar cualquier dato de un producto del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Eliminar producto',
                'slug' => 'productos.destroy', //productos es el nombre del moduklo, index es la pagina principla del modulo
                'description' => 'Elimina cualquier producto del sistema',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
