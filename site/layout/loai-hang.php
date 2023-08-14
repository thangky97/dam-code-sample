<!DOCTYPE html>
<html>
    <body>
        <div class="loai">
            <div class="h1">DANH MỤC</div>
            <div class="list">
                <?php
                    require '../../dao/loai.php';
                    $loai_array = loai_select_all();
                    foreach ($loai_array as $loai) {
                        $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                        echo "<li><a href='$href'>$loai[ten_loai]</a></li>";
                    }
                ?>
            </div>
            <div class="search">
                <form action="hang-hoa/liet-ke.php">
                    <input name="keywords" placeholder="Từ khóa tìm kiếm">
                </form>                
            </div>            
        </div>
    </body>
</html>
