<?php

namespace App\Models;

use Nette;

class ProductsModel
{
    use Nette\SmartObject;

    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

    public function getProducts()
    {
        return $this->database->table('products')
            ->fetchAll();
    }
}
