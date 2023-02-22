<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController
{

    public $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $title = "danh sách sp";
        $product = new Product();
        //hứng đc gt từ hàm getProduct();
        $products = $this->product->getProduct();
        //gọi views blade và bắn dữ liệu views blade
        $tieude = "trang danh sach sp";
        $this->render('product.list', compact('title', 'tieude', 'products'));
    }

    public function addProduct()
    {
        $this->render('product.add');
    }

    public function addProductPost()
    {
        if (isset($_POST['them'])) {
            $errors = [];
            if (empty($_POST['ten_sp'])) {
                $errors[] = "tên sp k được bỏ trống";

            }
            if (empty($_POST['gia'])) {
                $errors[] = "đơn giá ko được bỏ trống";
            }
            if (count($errors) > 0) {
                redirect('errors', $errors, 'add-product');
            } else {
                $result = $this->product->addProduct(null, $_POST['ten_sp'], $_POST['gia']);
                if ($result) {
                    redirect('success', 'thêm sp thành công', 'add-product');
                }
            }
        }
    }

    public function editProduct($id)
    {
        $product = $this->product->getDetailProduct($id);
        return $this->render('product.edit', compact('product'));
    }

    public function editProductPost($id)
    {
        if (isset($_POST['sua'])) {

            $result = $this->product->updateProduct($id, $_POST['ten_sp'], $_POST['gia']);
            if ($result) {
                redirect('success', 'sửa sp thành công', 'edit-product/' . $id);
            }
        }
    }

    public function deleteProduct($id)
    {
        $this->product->deleteProduct($id);
        route('test');
        die();


    }


}