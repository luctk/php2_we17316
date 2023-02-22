<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    public $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->getUser();
        $this->render('user.list', compact('users'));
    }

    public function addUser()
    {
        $this->render('user.add');
    }

    public function addUserPost()
    {
        if (isset($_POST['them'])) {
            $errors = [];
            if (empty($_POST['username'])) {
                $errors[] = "ko được bỏ trống username";
            }
            if (empty($_POST['password'])) {
                $errors[] = "ko được bỏ trống password";
            }
            if (count($errors) > 0) {
                redirect('errors', $errors, 'add-user');
            } else {
                $result = $this->user->addUser(null, $_POST['username'], $_POST['password']);
                if ($result) {
                    redirect('success', 'Thêm user thành công', 'add-user');
                }
            }
        }
    }

    public function editUser($id)
    {
        $users = $this->user->getDetailUser($id);
        return $this->render('user.edit', compact('users'));

    }

    public function editUserPost($id)
    {
        if (isset($_POST['sua'])) {
            $result = $this->user->updateUser($id, $_POST['username'], $_POST['password']);
            if ($result) {
                redirect('success', 'sua thanh cong', 'edit-user/' . $id
                );
            }
        }
    }
    public function deleteUser($id){
        $this->user->deleteUser($id);
       die();

    }


}