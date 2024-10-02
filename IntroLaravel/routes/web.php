<?php

use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('rutainicio');

Route::view('/formulario','formulario')->name('rutaformulario');

Route::view('/consultar','clientes')->name('rutaclientes');

