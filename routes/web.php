<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route :: get ( '/' ,'App\Http\Controllers\PortalController@publica')
    -> name ( 'pagina.index' );

Route :: get ( '/ noticias' ,'App\Http\Controllers\PortalControlle@noticias')
    -> name ( 'pagina.noticias' );

Route :: get ( '/ empresa' ,'App\Http\Controllers\PortalController@empresa')
    -> name ( 'pagina.empresa' );

Route :: get ( '/ onde-estamos' ,'App\Http\Controllers\PortalController@ondeestamos')
    -> name ( 'pagina.estamos' );

Route :: get ( '/ contactos' ,'App\ Http\Controllers\PortalController@contactos')
    -> name ( 'pagina.contactos' );

Route :: post ( '/ formulario' ,'App\Http\Controllers\PortalController@processarFormulario')
    -> name ( 'pagina.formulario' );

Route :: get ( '/ mostrar' ,'App\Http\Controllers\PortalController@mostraSite')
    -> name ( 'pagina.mostrar' );

