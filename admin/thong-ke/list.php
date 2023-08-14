<!DOCTYPE html>
<html>
    <body>
        <h5>THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h5>
        <div class="container">
            <form action="">
        <table class="table">
            <thead>
                <tr>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($items as $item){
                    extract($item);
            ?>
                <tr>
                    <td><?=$ten_loai?></td>
                    <td><?=$so_luong?></td>
                    <td><?=number_format($gia_min)?><u>đ</u></td>
                    <td><?=number_format($gia_max)?><u>đ</u></td>
                    <td><?=number_format($gia_avg)?><u>đ</u></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <a href="index.php?chart"><input type="button" value="Xem biểu đồ" class="btn btn-primary"></a>
            </form>
        </div>
    </body>
</html>
