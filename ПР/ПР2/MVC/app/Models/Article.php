<?php

namespace App\Models;

use App\Core\Database;


class Article{


    public function all(): array{

        return Database::pdo()
        ->query("SELECT * FROM articles")->fetchAll();

    }

    public function find(array $id): ?array{
        $stm = Database::pdo()->prepare("SELECT * FROM articles WHERE id = ?");
        $stm->execute([$id[0]]);

        return $stm->fetchAll() ?:null;
    }
}



?>