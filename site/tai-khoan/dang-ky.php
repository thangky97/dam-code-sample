<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if(exist_param("btn_register")){
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name?$file_name:"user.png";
        try {
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } 
        catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
else{
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}

$VIEW_NAME="tai-khoan/dang-ky-form.php"; 
require '../layout.php';
