<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagen;
use App\Models\Producto;
use PhpParser\Node\Stmt\Switch_;
use Illuminate\Support\Facades\DB;
class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    		$idjean = Producto::where('nombre', 'Jean Skinny')->first();
    		$idBermuda = Producto::where('nombre', 'Bermuda Slim')->first();
    		$idBuzo = Producto::where('nombre', 'Buzo cuello redondo')->first();
    		$idGorra= Producto::where('nombre', 'Gorra Bordada')->first();
            $idCamisa=Producto::where('nombre', 'Camiseta manga corta')->first();
            $idGaban=Producto::where('nombre', 'Gaban unicolor')->first();
            $idSueter=Producto::where('nombre', 'Sueter unicolor')->first();
            $idTenis=Producto::where('nombre', 'Tenis deportivos')->first();

    		Imagen::create([
    			"created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => "https://cdn.koaj.co/60313-big_default/jean-skinny-fit.jpg",
                "producto_id" => $idjean->id
    		]);  
    		Imagen::create([
    			"created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => "https://cdn.koaj.co/60316-big_default/jean-skinny-fit.jpg",
                "producto_id" => $idjean->id
    		]);  


    		Imagen::create([
    			"created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/39453-big_default/bermuda-motivo.jpg",
                "producto_id" => $idBermuda->id,
    		]);  

    		Imagen::create([
    			"created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/39455-big_default/bermuda-motivo.jpg",
                "producto_id" => $idBermuda->id,
    		]);    	
  	


    		Imagen::create([
    			"created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" =>
                    "https://cdn.koaj.co/42880-big_default/-.jpg",
                "producto_id" => $idBuzo->id,
    		]);   

    		Imagen::create([
    			"created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" =>
                 "https://cdn.koaj.co/42883-big_default/-.jpg",
                 "producto_id" => $idBuzo->id,
    		]);     	

    		Imagen::create([
    			"created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/59918-big_default/gorra-bordada.jpg",
                "producto_id" => $idGorra->id,
    		]);    	

    		Imagen::create([
    			"created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/59920-big_default/gorra-bordada.jpg",
                "producto_id" => $idGorra->id,
    		]);    	    	

            Imagen::create([
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/60539-big_default/camiseta-manga-corta-con-estampado-digital.jpg",
                "producto_id" => $idCamisa->id,
            ]);   

            Imagen::create([
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/60541-big_default/camiseta-manga-corta-con-estampado-digital.jpg",
                "producto_id" => $idCamisa->id,
            ]);   

            Imagen::create([
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/55673-big_default/105126580006-906.jpg",
                "producto_id" => $idGaban->id,
            ]);  

            Imagen::create([
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/55672-big_default/105126580006-906.jpg",
                "producto_id" => $idGaban->id,
            ]);  

            Imagen::create([
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/59496-big_default/sueter-unicolor.jpg",
                "producto_id" => $idSueter->id,
            ]);  


            Imagen::create([
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/59497-big_default/sueter-unicolor.jpg",
                "producto_id" => $idSueter->id,
            ]);  

              Imagen::create([
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/54228-big_default/tenis-deportivos.jpg",
                "producto_id" => $idTenis->id,
            ]);  

              Imagen::create([
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "url" => 
                    "https://cdn.koaj.co/54231-big_default/tenis-deportivos.jpg",
                "producto_id" => $idTenis->id,
            ]);  

    }
}
