<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index(){
       
    }

    public function register()
    {
        $title = "CIO's LATAM - PARTNERS REGISTRO";
       
        return view('layouts.partners_registro', compact('title'));   
    }

    public function detalle($id)
    {   
        //RESUMEN DE PARTNERS
        $url_site = 'http://188.166.16.108:1337';
        $urlPart = $url_site.'/api/resumen-de-partners/'.$id.'?populate=imagen';
        $responsePart = file_get_contents($urlPart);
        $newsPartn = json_decode($responsePart);
        $urlImg = $newsPartn->data->attributes->imagen->data->attributes->url;

        $resumenId[] = array(
                            'nombre' => $newsPartn->data->attributes->nombre,    
                            'telefono'=> $newsPartn->data->attributes->telefono,
                            'correo'=> $newsPartn->data->attributes->correo,                                
                            'website'=> $newsPartn->data->attributes->website,    
                            'titulo'=> $newsPartn->data->attributes->titulo,
                            'resumen'=> $newsPartn->data->attributes->resumen,
                            'servicios' => $newsPartn->data->attributes->servicios,
                            'oficinas' => $newsPartn->data->attributes->oficinas,   
                            'clientes' => $newsPartn->data->attributes->clientes,    
                            'anios_mercado' => $newsPartn->data->attributes->anios_mercado,                                                                                                                                                                                                                                        
                            'imagen' => $url_site.$urlImg,       
                        );
        $title = "CIO's LATAM - ".$newsPartn->data->attributes->titulo;
        //dd($title);
                         
        return view('layouts.partners_detalle', compact('title','resumenId'));   
    }

    public function page_resumen()
    {   
        $title = "CIO's LATAM - PARTNERS RESUMEN";
        //RESUMEN DE PARTNERS
        $url_site = 'http://188.166.16.108:1337';
        $urlPart = $url_site.'/api/resumen-de-partners?populate=imagen';
        $responsePart = file_get_contents($urlPart);
        $newsPartn = json_decode($responsePart);
        
        //dd($newsPartn);
        foreach ($newsPartn->data as $valuepart) {

            $urlImg = $valuepart->attributes->imagen->data->attributes->url;
            $partnerResumen[] = array(
                                'id'=> $valuepart->id,                                       
                                'imagen' => $url_site.$urlImg,
                                'nombre' =>  $valuepart->attributes->nombre,           
                            );
        }
        return view('layouts.partners_resumen', compact('title','partnerResumen'));   
    }
    
}
