<!DOCTYPE html>
<html>
    <body>
        <h5>QUẢN LÝ KHÁCH HÀNG</h5>
        <div class="container">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <h4>THÊM MỚI KHÁCH HÀNG</h4>
            <?php
                if(strlen($MESSAGE)){
                    echo "<h5>$MESSAGE</h5>";
                }
            ?>
            <div>
                <div class="mb-3">
                    <label>MÃ KHÁCH HÀNG</label>
                    <input name="ma_kh" class="form-control">
                </div>
                <div class="mb-3">
                    <label>HỌ VÀ TÊN</label>
                    <input name="ho_ten" class="form-control">
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label>MẬT KHẨU</label>
                    <input name="mat_khau" class="form-control" type="password">
                </div>
                <div class="mb-3"> 
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input name="mat_khau2" class="form-control" type="password">
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label>ĐỊA CHỈ EMAIL</label>
                    <input name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>HÌNH ẢNH</label>
                    <input name="hinh" type="file" class="form-control">
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label>KÍCH HOẠT?</label>
                    <div>
                        <label><input name="kich_hoat" value="0" type="radio">Chưa kích hoạt</label>
                        <label><input name="kich_hoat" value="1" type="radio" checked>Kích hoạt</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label>VAI TRÒ</label>
                    <div>
                        <label><input name="vai_tro" value="0" type="radio">Khách hàng</label>
                        <label><input name="vai_tro" value="1" type="radio" checked>Nhân viên</label>
                    </div>
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <button name="btn_insert" class="btn btn-primary">Thêm mới</button>
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?btn_list"> <input type="button" value="Danh sách" class="btn btn-primary"> </a>
                </div>
            </div>
        </form>
        </div>
    </body>
</html>
