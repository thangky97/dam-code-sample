<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Quản trị website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="<?= $CONTENT_URL ?>/js/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="container-fluid">

        <div>
            <div class="flex">
                <div class="left">
                    <h5>QUẢN TRỊ WEBSITE</h5>
                    <?php require 'menu.php'; ?>
                </div>
                <div class="right">
                    <?php
                    require $VIEW_NAME;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .flex {
            display: flex;
        }

        .left {
            width: 15%;
            height: 1200px;
            background-color: white;
        }

        .left h5 {
            margin-top: 17px;
            text-align: center;
            color: #05386B;
        }

        .left a {
            color: rgb(141, 139, 139);
        }

        .right {
            width: 85%;
            height: 1200px;
            /* background-color: #5CDB95; */
            background-color: #55BCC9;
        }

        .right h5 {
            padding-left: 15px;
            line-height: 60px;
            /* background-color: #8EE4AF; */
            background-color:#CAFAFE ;
            color: #05386B;
        }

        a:hover {
            background-color: #379683;
        }
        form{
            background-color: white;
            margin: 25px 15px;
            padding: 20px;
            border-radius: 5px;
        }

        form h4{
            text-align: center;
        }
        form label{
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input[type=radio]{
            margin-right: 5px;
        }

        form #radio1{
            margin-left: 15px;
        }
    </style>
</body>

</html>