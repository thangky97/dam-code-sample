<div class="table-sp">
    <div class="h2">
        <h3>Sản phẩm <?=$ten_lo?></h3>
    </div>
<div class="row">
    <?php
                    foreach ($items as $item) {
                ?>

    <div class="sp">
        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
            <img src="<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>" width="150px" />
            <div class="ten">
                <?=$item['ten_hh']?>
            </div>
            <div class="ten">
                <?=$item['don_gia']?>
            </div>
        </a>
    </div>

    <?php
                    }
                ?>
</div>
</div>