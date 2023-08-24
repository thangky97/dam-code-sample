<!DOCTYPE html>
<html>

<body>
    <h5>QUẢN LÝ LOẠI HÀNG</h5>
    <div class="container">
        <form action="index.php" method="post">
            <h4>THÊM MỚI LOẠI HÀNG</h4>
            <?php
            if (strlen($MESSAGE)) {
                echo "<h5>$MESSAGE</h5>";
            }
            ?>
            <div class="mb-3">
                <label class="">Mã loại</label>
                <input name="ma_loai" class="form-control" value="auto number" readonly>
            </div>

            <div class="mb-3">
                <label>Tên loại</label>
                <input name="ten_loai" class="form-control">
            </div>
            <div class="mb-3">
                <button name="btn_insert" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="index.php?btn_list"> <input type="button" class="btn btn-primary" value="Danh sách"> </a>
            </div>
        </form>
    </div>
</body>

</html>