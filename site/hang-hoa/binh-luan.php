<!DOCTYPE html>
<html>
    <body>
        <div class="panel panel-default">
            <div class="panel-heading">BÌNH LUẬN</div>
            <div class="panel-body">
            <?php
                require '../../dao/binh-luan.php';
                if(exist_param("noi_dung")){
                    $ma_kh = $_SESSION['user']['ma_kh'];
                    $ngay_bl = date_format(date_create(), 'Y-m-d');
                    binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
                }
                $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
                foreach ($binh_luan_list as $bl) {
                    echo "<p> $bl[noi_dung] <i class='pull-right'><b>$bl[ma_kh]</b></i> $bl[ngay_bl]</p>";
                }
            ?>
            </div>
            <div class="panel-footer">
            <?php
                if(!isset($_SESSION['user'])){
                    echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
                }else{
            ?>
                <form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                               <input type="text" name="noi_dung" id="">
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-default">Gửi</button>
                            </div>
                        </div>
                    </div>
                </form>                
            <?php }?>
            </div>
        </div>        
    </body>
</html>
