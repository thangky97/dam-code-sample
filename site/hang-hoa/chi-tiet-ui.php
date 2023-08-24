<!DOCTYPE html>
<html>
    <body>
        <div class="thumbnail">
            <img src='<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>' style="max-width: 55%">
            <div class="caption">
                <p>
                    <ul>
                        <li>MÃ HH: <?=$ma_hh?></li>
                        <li>TÊN HH: <?=$ten_hh?></li>
                        <li>ĐƠN GIÁ: <?=number_format($don_gia)?></li>
                        <li>GIẢM GIÁ: <?=$giam_gia * 100 ?>%</li>
                    </ul>
                </p>
                <div class="mota" style="margin: 0 10px 0 -10px;"><?= $mo_ta ?></div>
            </div>
        </div>
        
        <?php require 'binh-luan.php';?>
        
        <?php require 'hang-cung-loai.php';?>
    </body>
</html>
