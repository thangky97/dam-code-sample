
<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <h5>QUẢN LÝ LOẠI HÀNG</h5>
        <div class="container">
        <form action="index.php" method="post">
            <H4 style="margin-bottom: 20px;">DANH SÁCH LOẠI HÀNG</H4>
            <?php
                if(strlen($MESSAGE)){
                    echo "<h5 >$MESSAGE</h5>";
                }
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_loai[]" value="<?=$item['ma_loai']?>"></th>
                        <td><?=$ma_loai?></td>
                        <td><?=$ten_loai?></td>
                        <td>
                            <a href="index.php?btn_edit&ma_loai=<?=$ma_loai?>" ><input type="button" value="Sửa" class="btn btn-primary"></a>
                            <a href="index.php?btn_delete&ma_loai=<?=$ma_loai?>" ><input type="button" value="Xóa" class="btn btn-danger"></a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <button class="btn btn-primary" type="button">Chọn tất cả</button>
                            <button class="btn btn-primary" type="button">Bỏ chọn tất cả</button>
                            <button class="btn btn-primary" name="btn_delete">Xóa các mục chọn</button>
                            <a href="index.php"> <input type="button" class="btn btn-primary" value="Nhập thêm"> </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
                </div>
    </body>
</html>
