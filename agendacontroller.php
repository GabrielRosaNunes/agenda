<?php

use Jenssegers\Blade\Blade;


class agendaController {

    public function index (){
        echo "Meu primeiro projetinho";
        $blade = new Blade ("view", "") ;

        echo $blade->render("teste",[]);
    }

    
}