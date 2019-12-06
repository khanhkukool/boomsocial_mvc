<?php
require_once 'models/User.php';

class UserController{
    public $error;
    public function index(){
        $user_model = new User();
        $users = $user_model->index();
        require_once 'views/users/index.php';
    }

    public function create(){
        $error = '';
        if(isset($_POST['submit'])){
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $avatar = $_POST['avatar'];
            $facebook = $_POST['facebook'];
            $address = $_POST['address'];
            if(empty($phone_number)){
                $error = "Không được để trống số điện thoại";
            }
            elseif(empty($email)){
                $error = "Không được để trống email";
            }
            elseif(empty($password)){
                $error = "Không được để trống mật khẩu";
            }
            else{
                $user_model = new User();
                $arr_params = [
                    ':phone_number' => $phone_number,
                    ':email' => $email,
                    ':password' => $password,
                    ':avatar' => $avatar,
                    ':facebook' =>$facebook,
                    ':address' => $address
                ];
                $is_insert = $user_model->insert($arr_params);

                if($is_insert){
                    $_SESSION['success'] = 'Thêm mới thành viên thành công';
                }
                else{
                    $_SESSION['error']= 'Thêm mới thành viên thất bại';
                }

                header("Location: index.php?controller=user");
                exit();
            }
        }

        require_once 'views/users/create.php';
    }
}