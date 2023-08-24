<!DOCTYPE html>
<html>
    <body>
        <div class="tk">
            <div class="h1">TÀI KHOẢN</div>
            <div class="form1">
                <form action="<?=$SITE_URL?>/tai-khoan/dang-nhap.php" method="post">
                    <div class="mb">
                        <div class="user">Tên đăng nhập</div>
                        <input type="text" name="ma_kh" value="<?=$ma_kh?>">
                    </div>
                    <div class="mb">
                        <div class="user">Mật khẩu</div>
                        <input name="mat_khau" type="password" value="<?=$mat_khau?>">
                    </div>
                    <div>
                        <div class="mb">
                            <label>
                                <input name="ghi_nho" type="checkbox" checked>
                                Ghi nhớ tài khoản?
                            </label>
                        </div>
                    </div>
                    <div class="mb">
                        <button name="btn_login">Đăng nhập</button>
                    </div>
                    <div class="mb">
                        <li><a href="<?=$SITE_URL?>/tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
                        <li><a href="<?=$SITE_URL?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
                    </div>
                </form>        
            </div>
        </div>        
    </body>
</html>
