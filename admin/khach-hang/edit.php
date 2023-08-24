<!DOCTYPE html>
<html>

<body>
    <h5>QUẢN LÝ KHÁCH HÀNG</h5>
    <div class="container">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <H4>CẬP NHẬT THÔNG TIN KHÁCH HÀNG</H4>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
        <div>
            <div class="mb-3">
                <label>MÃ KHÁCH HÀNG</label>
                <input name="ma_kh" class="form-control" value="<?= $ma_kh ?>" readonly>
            </div>
            <div class="mb-3">
                <label>HỌ VÀ TÊN</label>
                <input name="ho_ten" class="form-control" value="<?= $ho_ten ?>">
            </div>
        </div>
        <div>
            <div class="mb-3">
                <label>MẬT KHẨU</label>
                <input name="mat_khau" class="form-control" value="<?= $mat_khau ?>" type="password">
            </div>
            <div class="mb-3">
                <label>XÁC NHẬN MẬT KHẨU</label>
                <input name="mat_khau2" class="form-control" value="<?= $mat_khau ?>" type="password">
            </div>
        </div>
        <div>
            <div class="mb-3">
                <label>ĐỊA CHỈ EMAIL</label>
                <input name="email" class="form-control" value="<?= $email ?>">
            </div>
            <div class="mb-3">
                <label>HÌNH ẢNH</label><br>
                <input name="hinh" class="form-control" type="hidden" value="<?= $hinh ?>">
                <input name="up_hinh" type="file"> (<?= $hinh ?>)
            </div>
        </div>
        <div>
            <div class="mb-3">
                <label>KÍCH HOẠT?</label>
                <div>
                    <label>
                        <input <?= !$kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="0" type="radio">
                        Chưa kích hoạt
                    </label>
                    <label>
                        <input <?= $kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="1" type="radio">
                        Kích hoạt
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label>VAI TRÒ</label>
                <div>
                    <label>
                        <input <?= !$vai_tro ? 'checked' : '' ?> name="vai_tro" value="0" type="radio">
                        Khách hàng
                    </label>
                    <label>
                        <input <?= $vai_tro ? 'checked' : '' ?> name="vai_tro" value="1" type="radio">
                        Nhân viên
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div class="mb-3">
                <button name="btn_update" class="btn btn-primary">Cập nhật</button>
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="index.php"> <input type="button" value="Thêm mới" class="btn btn-primary"> </a>
                <a href="index.php?btn_list"> <input type="button" value="Danh sách" class="btn btn-primary"> </a>
            </div>
        </div>
    </form>
    </div>
</body>

</html>