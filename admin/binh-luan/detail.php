<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <h5>CHI TIẾT BÌNH LUẬN</h5>
        <div class="container">
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php?ma_hh=<?=$ma_hh?>" method="post">
            <h4 style="margin-bottom: 20px;">HÀNG HÓA: <?=$items[0]['ten_hh']?></h4>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>NỘI DUNG</th>
                        <th>NGÀY BL</th>
                        <th>NGƯỜI BL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_bl[]" value="<?=$ma_bl?>"></th>
                        <td><?=$noi_dung?></td>
                        <td><?=$ngay_bl?></td>
                        <td><?=$ma_kh?></td>
                        <td>
                            <a href="index.php?btn_delete&ma_bl=<?=$ma_bl?>&ma_hh=<?=$ma_hh?>"><input type="button" value="Xóa" class="btn btn-danger"></a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <button onclick="checkAll()" type="button" class="btn btn-primary">Chọn tất cả</button>
                            <button onclick="uncheck()" type="button" class="btn btn-primary">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete" class="btn btn-primary">Xóa các mục chọn</button>
                    </tr>
                </tfoot>
            </table>
        </form>
        </div>

        <script>
            function checkAll(){
    var x = document.getElementsByName("ma_bl[]")
    for(var i =0;i<x.length;i++){
        x[i].checked=true;
    }
}
function uncheck(){
    var x = document.getElementsByName("ma_bl[]")
    for(var i =0;i<x.length;i++){
        x[i].checked=false;
    }
}
        </script>
    </body>
</html>
