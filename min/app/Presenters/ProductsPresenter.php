<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use App\Models\ProductsModel;


final class ProductsPresenter extends Nette\Application\UI\Presenter
{
      /** @var ProductsModel */
      private $productsModel;

      public function __construct(ProductsModel $productsModel)
    {
        $this->productsModel = $productsModel;
    }

    public function renderDefault(): void
    {
        $this->template->products = $this->productsModel->getProducts();
    }
}
