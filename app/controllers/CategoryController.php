<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController
{
    public $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {

        $categorys = $this->category->getCategory();
        //gọi views blade và bắn dữ liệu views blade
        $this->render('category.list', compact('categorys'));
    }

    public function addCategory()
    {
        $this->render('category.add');
    }

    public function addCategoryPost()
    {
        if (isset($_POST['them'])) {
            $errors = [];
            if (empty($_POST['ten_dm'])) {
                $errors[] = "tên dm k được bỏ trống";

            }
            if (count($errors) > 0) {
                redirect('errors', $errors, 'add-category');
            } else {
                $result = $this->category->addCategory(null, $_POST['ten_dm']);
                if ($result) {
                    redirect('success', 'thêm sp thành công', 'add-category');
                }
            }
        }
    }
    public function editCategory($id)
    {
        $category = $this->category->getDetailCategory($id);
        return $this->render('category.edit', compact('category'));
    }

    public function editCategoryPost($id)
    {
        if (isset($_POST['sua'])) {

            $result = $this->category->updateCategory($id, $_POST['ten_dm']);
            if ($result) {
                redirect('success', 'sửa sp thành công', 'edit-category/' . $id);
            }
        }
    } public function deleteCategory($id)
{
    $this->category->deleteCategory($id);
    route('category');
    die();


}

}