<?php

spl_autoload_register(function ($classe) {
    $prefixo = "App\\";

    $diretorio = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;

    $tamanhoPrefixo = strlen($prefixo);

    // echo "Prefixo: $prefixo" . PHP_EOL . '<br/>'; // App\
    // echo "Diretorio: $diretorio" . PHP_EOL . '<br/>'; // C:\Users\Mannesoft\Documents\php-strings\src\
    // echo "Classe: $classe" . PHP_EOL . '<br/>'; // App\Aulas\Usuario

    if (strncmp($prefixo, $classe, $tamanhoPrefixo) !== 0) {
        return ;
    }

    $arquivo = $diretorio . str_replace("\\", DIRECTORY_SEPARATOR, substr($classe, $tamanhoPrefixo)) . '.php';

    if (file_exists($arquivo)) {
        require $arquivo;
    }
});