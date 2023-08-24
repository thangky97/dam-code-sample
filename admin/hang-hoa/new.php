<!DOCTYPE html>
<html>
    <body>
        <h5>QUẢN LÝ HÀNG HÓA</h5>
         <div class="container">
        <form action="index.php" method="post" enctype="multipart/form-data">
        <h4>THÊM MỚI HÀNG HÓA</h4>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
            <div>
                <div class="mb-3">
                    <label>MÃ HÀNG HÓA</label>
                    <input name="ma_hh" class="form-control" readonly value="auto number">
                </div>
                <div class="mb-3">
                    <label>TÊN HÀNG HÓA</label>
                    <input name="ten_hh" class="form-control">
                </div>
                <div class="mb-3">
                    <label>ĐƠN GIÁ</label>
                    <input name="don_gia" class="form-control">
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label>GIẢM GIÁ</label>
                    <input name="giam_gia" class="form-control">
                </div>
                <div class="mb-3">
                    <label>HÌNH ẢNH</label>
                    <input name="hinh" class="form-control" type="file">
                </div>
                <div class="mb-3">
                    <label>LOẠI HÀNG</label>
                    <select name="ma_loai" class="form-control">
                        <?php
                            foreach ($loai_select_list as $loai) {
                                echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label><input name="dac_biet" value="0" type="radio">Đặc biệt</label>
                        <label id="radio1"><input name="dac_biet" value="1" type="radio" checked>Bình thường</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label>NGÀY NHẬP</label>
                    <input type="date" name="ngay_nhap" class="form-control">
                </div>
                <div class="mb-3">
                    <label>SỐ LƯỢC XEM</label>
                    <input name="so_luot_xem" class="form-control" readonly value="0">
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label>MÔ TẢ</label>
                    <textarea name="mo_ta" rows="4" class="form-control"></textarea>
                </div>
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
