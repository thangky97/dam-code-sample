
<!DOCTYPE html>
<html>
    <body>
        <div class="form-cn">
        <h3 class="h3">ĐĂNG KÝ THÀNH VIÊN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-ky.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Tên đăng nhập</label>
                <input type="text" name="ma_kh" value="<?=$ma_kh?>">
                <div>
                    <?php
                        if(isset($err['ma_kh'])){
                            echo $err['ma_kh'];
                        }
                    ?>
                </div>
            </div>
            <div>
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" value="<?=$mat_khau?>">
            </div>
            <div>
                <label>Xác nhận mật khẩu</label>
                <input name="mat_khau2" type="password" value="<?=$mat_khau2?>">
            </div>
            <div>
                <label>Họ và tên</label>
                <input type="text" name="ho_ten" value="<?=$ho_ten?>">
            </div>
            <div>
                <label>Địa chỉ email</label>
                <input type="email" name="email" value="<?=$email?>">
            </div>
            <div>
                <label style="margin-top: -6px;">Hình</label>
                <input name="up_hinh" type="file">
            </div>
            <div>
                <button name="btn_register">Đăng ký</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
        </form>
        </div>
    </body>
</html>
