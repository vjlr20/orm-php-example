<?php
    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/config/database.php';
    
    require_once __DIR__ . '/controllers/AutorController.php';
    require_once __DIR__ . '/controllers/LibroController.php';
    
    // $autor = new AutorController();
    $libro = new LibroController();
    
    // $info = array(
    //     'nombres' => "Mauricio Antonio",
    //     'apellidos' => "Saca",
    // );

    echo ($libro->getAll());
