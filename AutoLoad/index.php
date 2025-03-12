<?php

namespace AutoLoad;

use AutoLoad\Controllers\CourseController;
use AutoLoad\Models\Course;

//Esta función se encarga de importar los archivos correspondientes
spl_autoload_register(function ($clase) {
    $clase = '../' . str_replace("\\", "/", $clase) . '.php';

    if(file_exists($clase)) require_once $clase;
});

$course = new Course;

$course->saludar();

echo '<br>';

$controller = new CourseController;

$controller->saludar();