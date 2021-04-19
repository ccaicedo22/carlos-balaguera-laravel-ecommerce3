<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $arrayProductos = [
            "producto1" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Jean Skinny",
                "descripcion" => "Jean para homre,5 bolsillos, tiro largo",
                "precio" => 89900,
                "puntuacion" => 5,
                "disponibilidad" => 1,
            ),
            "producto2" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
               "nombre" => "Bermuda Slim",
                "descripcion" => "Bermuda para hombre,tiro medio y slim",
                "precio" => 59900,
                "puntuacion" => 4,
                "disponibilidad" => 1,
            ),
            "producto3" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Buzo cuello redondo",
                "descripcion" => "Buzo para hombre, en tela de cuerpo unicolor,ajuste holgado",
                "precio" => 45900,
                "puntuacion" => 2,
                "disponibilidad" => 7,
            ),
            "producto4" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Gorra Bordada",
                "descripcion" => "Gorra para hombre, tela cuerpo unicolor bordada con visera curva",
                "precio" => 29900,
                "puntuacion" => 4,
                "disponibilidad" => 12,
            ),

             "producto5" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Camiseta manga corta",
                "descripcion" => "Camiseta manga corta para hombre, cuello redondo con estampado digital y hombro adelantado",
                "precio" => 49900,
                "puntuacion" => 5,
                "disponibilidad" => 10,
            ),


              "producto6" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Gaban unicolor",
                "descripcion" => "Gabán para hombre, en tela tipo paño jaspe, solapa clasica, bolsillos de riebete y cierre frontal con botones",
                "precio" => 159900,
                "puntuacion" => 5,
                "disponibilidad" => 6,
            ),


               "producto7" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Sueter unicolor",
                "descripcion" => "Sueter para hombre, en tejido unicolor, cuello alto con cremallera y ajuste ceñido",
                "precio" => 79900,
                "puntuacion" => 3,
                "disponibilidad" => 8,
            ),

               "producto8" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Tenis deportivos",
                "descripcion" => "Tenis para hombre, en tela de cuerpo combinado, forro interno textil y cierre mediante cordones.",
                "precio" => 29900,
                "puntuacion" => 2,
                "disponibilidad" => 9,
            ), 
        ];
        foreach ($arrayProductos as $producto){
            $productoAgregar = new Producto();
            if (is_array($producto)) {
                foreach ($producto as $key => $value){
                    $productoAgregar -> $key = $value;
                }
                $productoAgregar -> save();
            }
        }
    }
}