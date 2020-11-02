<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    
    //

    public  $paginas = [
        'https://www.bazardesportivo.com/pt/',
        'https://www.fuxia-store.com/pt/'
    ];

    public  function  mostraSite() {
        $numero = contagem ( $this -> paginas );
        return  view ( 'paginas' , [ 'paginas' => $this -> paginas , 'nom' => $numero ]);
    }

    public  function  processarFormulario ( Request  $request ) {
        $nome = $solicitação -> nome ;
        $idade = $pedido -> idade ;
        $marcafavortia = $request -> marcafavorita ;
        return  view ( 'formulariosubmetido' , [ 'nome' => $nome , 'idade' => $idade , 'marcafavorita' => $marcafavorita]);
    }

   public function publica() {
         return view ( 'index');
    }
    public  function  noticias() {
          return view ( 'noticias' );
    }
    public function empresa() {
          return view ( 'empresa' );
    }
    public  function  ondeestamos() {
          return view ( 'estamos' );
    }
     public function contacto() {
         return view ( 'contactos' );
    }
}
