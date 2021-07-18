<?

    spl_autoload_register(function ($class_name) { if (file_exists("./php/classes/{$class_name}.php")){ include("./php/classes/{$class_name}.php");}});

    new App();

?>