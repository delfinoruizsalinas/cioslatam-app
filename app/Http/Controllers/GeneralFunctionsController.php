<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralFunctionsController extends Controller
{
    public function __construct()
    {
         //FOOTER PARTNERS
         $url_site = 'http://188.166.16.108:1337';
         $urlPart = $url_site.'/api/partners?populate=imagen';
         $responsePart = file_get_contents($urlPart);
         $newsPartn = json_decode($responsePart);
         
         foreach ($newsPartn->data as $valuepart) {
 
             $urlImg = $valuepart->attributes->imagen->data->attributes->url;
 
             if(empty($valuepart->attributes->link_pange)){
                 $link = '#';
             }else{
                 $link = $valuepart->attributes->link_pange;                        
             }
 
             $partn[] = array(
                                 'link'=> $link,                                       
                                 'imagen' => $url_site.$urlImg,           
                             );
         }
 
         //return view('layouts.partner_slider', compact('partn')); 
         View::share(['partner_slider' => $partn]);
    }
}
