<?php

namespace Controllers;

use MVC\Router;
use Model\Vendedor;

class VendedorController {

    public static function crear(Router $router) {
        $errores = Vendedor::getErrores();
        $vendedor = new Vendedor;

        // Ejecutar el código después de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            /** Crea una nueva instancia */
            $vendedor = new Vendedor($_POST['vendedor']);

            // Validar
            $errores = $vendedor->validar();


            if(empty($errores)) {
                $vendedor->guardar();

        $router->render('vendedores/crear', [
            'errores' => $errores,
            'vendedor' => $vendedor
        ]);
    }

    public static function actualizar(Router $router) {
        
        $errores = Vendedor::getErrores();
        $id = validarORedireccionar('/admin');

        $vendedor = Vendedor::find($id);

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Asignar los atributos
                $args = $_POST['vendedor'];
                $vendedor->sincronizar($args);

                // Validación
                $errores = $vendedor->validar();
                
                if(empty($errores)) {

                    // Guarda en la base de datos
                    $resultado = $vendedor->guardar();

                    if($resultado) {
                        header('location: /admin');
                    }
                }
        }

        $router->render('vendedores/actualizar', [
            'vendedor' => $vendedor,
            'errores' => $errores
        ]);
    }

    public static function eliminar( ) {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
                $id = $_POST['id'];
                $id = filter_var($id, FILTER_VALIDATE_INT);
    
                // encontrar y eliminar la propiedad
                $propiedad = Propiedad::find($id);
                $propiedad->eliminar();

                // Redireccionar
                if($id) {
                    $tipo = $_POST['tipo'];
                    if(validarTipoContenido);{
                        $vendedor = Vendedor::find($id);
                        $vendedor->eliminar();

                    }
                }
            }
        }
    }

}