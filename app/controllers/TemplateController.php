<?php
/**
* Created by PhpStorm.
* User: asolorzano
* Date: 20/01/15
* Time: 12:59 AM
*/

class TemplateController extends BaseController{

    public function showIndex($id)
    {


        $carros = array('0'=>'BMW','1'=>'FORD','2'=>'Chevrolet');
        $countCarros = count($carros);

        if(!isset($carros[$id])){

            return View::make('template', array('msj'=>'Su carro no esta definido', 'error'=>'1'));
        }else{
            for($i=0;$i<$countCarros;$i++){
                return View::make('template', array('carros'=>$carros[$id], 'error'=>'0'));
            }
        }
    }
}