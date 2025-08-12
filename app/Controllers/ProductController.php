<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelProductSale;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    public function product()
    {
        $type = $this->request->getGet('product_category');
        if (!$type) {
            return view('template/header') . view('product') . view('template/footer');
        }
        $model = model(ModelProductSale::class);
        if ($type == 'sale') {
            $products = $model->where('product_category', 'sale')->findAll();
        } elseif ($type == 'rent') {
            $products = $model->where('product_category', 'rent')->findAll();
        } else {
            $products = $model->findAll();
        }
        $data = ['products' => $products];
        return view('template/header') . view('products', $data) . view('template/footer');
    }
}
