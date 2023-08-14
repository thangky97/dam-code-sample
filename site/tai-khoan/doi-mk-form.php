<!DOCTYPE html>
<html>
    <body>
        <div class="form-cn">
        <h3 class="h3">ĐỔI MẬT KHẨU</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="doi-mk.php" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh" type="text">
            </div>
            <div>
                <label>Mật khẩu cũ</label>
                <input name="mat_khau" type="password">
            </div>
            <div>
                <label>Mật khẩu mới</label>
                <input name="mat_khau2" type="password">
            </div>
            <div>
                <label>Xác nhận mật khẩu mới</label>
                <input class="pass" name="mat_khau3" type="password">
            </div>
            <div>
                <button name="btn_change">Đổi mật khẩu</button>
            </div>
        </form>
    </div>
    </body>
</html>
