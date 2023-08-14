<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <h5>QUẢN LÝ KHÁCH HÀNG</h5>
        <div class="container">
        <form action="index.php" method="post">
            <h4 style="margin-bottom: 20px;">DANH SÁCH KHÁCH HÀNG</h4>
            <?php
                if(strlen($MESSAGE)){
                    echo "<h5>$MESSAGE</h5>";
                }
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ KH</th>
                        <th>HỌ VÀ TÊN</th>
                        <th>ĐỊA CHỈ EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_kh[]" value="<?=$ma_kh?>"></th>
                        <td><?=$ma_kh?></td>
                        <td><?=$ho_ten?></td>
                        <td><?=$email?></td>
                        <td><img src="../../content/images/users/<?=$hinh?>" alt="" width="80px"></td>
                        <td><?=$vai_tro?'Nhân viên':'Khách hàng'?></td>
                        <td>
                            <a href="index.php?btn_edit&ma_kh=<?=$ma_kh?>"><input type="button" value="Sửa" class="btn btn-primary"></a>
                            <a href="index.php?btn_delete&ma_kh=<?=$ma_kh?>"><input type="button" value="Xóa" class="btn btn-danger"></a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <button  type="button" class="btn btn-primary">Chọn tất cả</button>
                            <button  type="button" class="btn btn-primary">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete" class="btn btn-primary">Xóa các mục chọn</button>
                            <a href="index.php"> <input type="button" value="Nhập thêm" class="btn btn-primary"> </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
        </div>
       
    </body>
</html>
