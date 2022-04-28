<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function __construct()
    {
        $this->productmodel = new ProductModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $barang = $this->productmodel->search($keyword);
        } else {
            $barang = $this->productmodel;
        }

        $data = [
            'title' => "Product",
            'nav' => "product",
            'list' => $barang->getProduct(),
        ];

        return view('product/product', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => "Detail Produk",
            'nav' => "product",
            'product' => $this->productmodel->getProduct($id),
        ];

        // if (empty($data['product'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk Tidak Ditemukan');
        // }

        return view('product/detail', $data);
    }
}
