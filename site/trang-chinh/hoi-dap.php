<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="rows">
        <aside>
            <li><a href="">Android</a></li>
            <li><a href="">iPhone - IOS</a></li>
            <li><a href="">Laptop - Máy tính</a></li>
            <li><a href="">Phụ kiện và sản phẩm khác</a></li>
        </aside>
        <article>
            <div class="col">
                <div class="img">
                    <img src="../../content/images/top-5-dien-thoai-duoi-2-trieu-ban-chay-nhat-t8-2021-tai-0.jpg" alt="">
                </div>
                <div class="text">
                    Top 5 điện thoại dưới 2 triệu bán chạy nhất T8/2021
                </div>
            </div>
            <div class="col">
                <div class="img">
                    <img src="../../content/images/top-10-dien-thoai-samsung-ban-chay-nhat-nam-2021-tai-the-thumb.jpg" alt="">
                </div>
                <div class="text">
                    Top 10 điện thoại Samsung bán chạy nhất năm 2021
                </div>
            </div>
        </article>
    </div>
    <style>
        .rows{
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding: 5px 0 5px 20px;
            border: 1px solid #ccc;
        }
        aside{
            width: 15%;
            padding-right: 10px;
            line-height: 1.4;
           
        }

        img{
            width: 100%;
        }

        article{
            width: 85%;
        }

        li{
            list-style: none;
        }

        .col{
            margin-bottom: 25px;
        }
    </style>
</body>
</html>