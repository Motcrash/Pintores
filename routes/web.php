<?php

Route::get('/', 'Controlador@Sesion');

Route::post('/validar', 'Controlador@ValidarSesion');

Route::get('/menu', 'Controlador@Index');

Route::get('/pablo', 'Controlador@Pablo');

Route::get('/vanGogh', 'Controlador@VanGogh');

Route::get('/diego', 'Controlador@Diego');

Route::get('/Leonardo', 'Controlador@Leonardo');

Route::get('/Velazquez', 'Controlador@Velazquez');



