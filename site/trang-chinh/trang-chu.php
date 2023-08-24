<div class="table-sp">
    <div class="h2">
        <h3>Sản phẩm</h3>
    </div>
    <div class="row">
        <?php
        foreach ($items as $item) {
        ?>

            <div class="sp">
                <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>">
                    <div class="img">
                        <img src="<?= $CONTENT_URL ?>/images/products/<?= $item['hinh'] ?>" width="150px" />
                    </div>
                    <div class="ten">
                        <?= $item['ten_hh'] ?>
                    </div>
                    <div class="ten" style="color: red;">
                        <?= number_format($item['don_gia'], 0, '', ",") ?><u>đ</u>
                    </div>
                </a>
            </div>

        <?php
        }
        ?>
    </div>
</div>