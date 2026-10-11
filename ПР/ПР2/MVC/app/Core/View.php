<?php

namespace App\Core;

class View {

    public static function render(string $template, array $data = []): void{

        extract($data);

        $viewfile = __DIR__ . '/../Views/' . $template . '.php';

        if(file_exists($viewfile)){
            ob_start();
            require $viewfile;
            $content = ob_get_clean(); 

            require __DIR__.'/../Views/layout.php';
        }else{
            http_response_code(500);
            exit("Учись кодить, файла нет оло {$template}");
        }
    }
}

?>