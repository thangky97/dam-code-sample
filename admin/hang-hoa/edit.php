<!DOCTYPE html>
<html>
    <body>
        <h5>QUẢN LÝ HÀNG HÓA</h5>
        <div class="container">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <h4>CẬP NHẬT THÔNG TIN HÀNG HÓA</h4>
            <?php
                if(strlen($MESSAGE)){
                    echo "<h5>$MESSAGE</h5>";
                }
            ?>
            <div>
                <div class="mb-3">
                    <label>MÃ HÀNG HÓA</label>
                    <input name="ma_hh" class="form-control" readonly value="<?=$ma_hh?>">
                </div>
                <div class="mb-3">
                    <label>TÊN HÀNG HÓA</label>
                    <input name="ten_hh" class="form-control" value="<?=$ten_hh?>">
                </div>
                <div class="mb-3">
                    <label>ĐƠN GIÁ</label>
                    <input name="don_gia" class="form-control" value="<?=$don_gia?>">
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label>GIẢM GIÁ</label>
                    <input name="giam_gia" class="form-control" value="<?=$giam_gia?>">
                </div>
                <div class="mb-3">
                    <label>HÌNH ẢNH</label>
                    <input name="up_hinh"  type="file">
                    <input name="hinh" type="hidden" value="<?=$hinh?>"> (<?=$hinh?>)
                </div>
                <div class="mb-3">
                    <label>LOẠI HÀNG</label>
                    <select name="ma_loai" class="form-control">
                        <?php
                            foreach ($loai_select_list as $loai) {
                                if($loai['ma_loai'] == $ma_loai){
                                    echo '<option selected value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                }
                                else{
                                    echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label><input name="dac_biet" value="0" type="radio" <?=$dac_biet?'':'checked'?>>Đặc biệt</label>
                        <label><input name="dac_biet" value="1" type="radio"<?=$dac_biet?'checked':''?>>Bình thường</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label>NGÀY NHẬP</label>
                    <input type="date" name="ngay_nhap" class="form-control" value="<?=$ngay_nhap?>">
                </div>
                <div class="mb-3">
                    <label>SỐ LƯỢC XEM</label>
                    <input name="so_luot_xem" class="form-control" readonly value="0" value="<?=$so_luot_xem?>">
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label>MÔ TẢ</label>
                    <textarea name="mo_ta" class="form-control" rows="4"><?=$mo_ta?></textarea>
                </div>
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
