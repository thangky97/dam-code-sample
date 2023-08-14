<!DOCTYPE html>
<html>
    <body>
        <div class="form-cn">
        <h3 class="h3">QUÊN MẬT KHẨU</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="quen-mk.php" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh" type="text">
            </div>
            <div>
                <label>Địa chỉ email</label>
                <input name="email" type="email">
            </div>
            <div>
                <button name="btn_forgot">Tìm lại mật khẩu</button>
            </div>
        </form>
        </div>
    </body>
</html>
