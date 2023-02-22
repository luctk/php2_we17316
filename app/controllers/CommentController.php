<?php
namespace App\Controllers;
use App\Models\Comment;
class CommentController extends BaseController {
    public $comment;
    public function __construct()
    {
        $this->comment=new Comment();
    }
    public function index(){
        $comments=$this->comment->getComment();
        $this->render('comment.list',compact('comments'));
    }
    public function addComment(){
        $this->render('comment.add');
    }
    public function addCommentPost(){
        if(isset($_POST['them'])){
            $errors=[];
            if(empty($_POST['noi_dung'])){
                $errors[]="nội dung k đc bỏ trống";
            }if(count($errors)>0){
                redirect('errors',$errors,'add-comment');

            }else{
                $result=$this->comment->addComment(null,$_POST['noi_dung']);
                if($result){
                    redirect('success','thêm thành công','add-comment');
                }
            }
        }
    }
    public function editComment($id){
        $comment=$this->comment->getDetailComment($id);
       $this->render('comment.edit',compact('comment'));
    }
    public function editCommentPost($id){
        if(isset($_POST['sua'])){
            $result=$this->comment->updateComment($id,$_POST['noi_dung']);
            if($result){
                redirect('success','sửa thành công','edit-comment/'.$id);
            }
        }
    }
    public function deleteComment($id){
       $this->comment->deleteComment($id);
//        redirect('success','xóa thành công','delete-comment/'.$id);
//        $this->render('comment.list');
    }

}