<!DOCTYPE html>
<html>
    <body>
        <div class="tk">
            <div class="h1">TÀI KHOẢN</div>
            <div class="form1">
                <div class="img">
                    <img src='<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>' width="120px">
                    <br>
                    <?= $_SESSION['user']['ho_ten']?>
                </div>
                <li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
                <?php
                    if($_SESSION['user']['vai_tro'] == TRUE){
                        echo "<li><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                    }
                ?>
            </div>
        </div>        
    </body>
</html>
