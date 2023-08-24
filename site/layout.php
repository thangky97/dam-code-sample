<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Shopping Center</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js"></script>
    </head>
    <body>
        <div class="container-xxl">
            <header>
              <h1>SIÊU THỊ TRỰC TUYẾN</h1>
            </header>
            <nav>
                <?php require 'layout/menu.php';?>            
            </nav>
            <div class="block1">
                <article>
                    <div>
                    <?php require $VIEW_NAME;?>  
                    </div>
                </article>
                <aside>
                    
                    <?php require 'layout/dang-nhap.php';?>
                   
                    <?php require 'layout/loai-hang.php';?>
                    
                    <?php require 'layout/top10.php';?>
                </aside>
            </div>
            <footer>Copyright</footer>
        </div>
        <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



.container-xxl{
    margin: auto;
    padding: 0;
   
}
header{
    display: block;
    
    background-color: #3FEEE6;
    padding: 10px;
 
    margin-bottom: 7px;
}

header h1{
    color: #05386B;
 
}

nav{
    
   line-height: 40px;
  
   margin-bottom: 10px;
}

nav a{
    padding-left: 15px;
    color: #05386B;
    font-weight: bold;
}

.banner img{
    width: 100%;
}

.banner{
    margin-bottom: 10px;
    max-width: 100%;
}

.block1 {

    display: flex;
    justify-content: space-between;
}

article{
    width: 75%;
}

aside{
    width: 24%;
}

.list li{
    list-style: none;
}

a{
    text-decoration: none;
}

.tk, .loai, .top10{
 
    background-color:  #CAFAFE;
    border-radius: 5px;
     padding-bottom: 15PX;
    line-height: 1.3;
    margin-bottom: 15px;
}

.tk .h1, .loai .h1, .top10 .h1{
  text-align: center;
  font-weight: bold;
 
  border-radius: 5PX;
  padding: 10PX;
  font-size: 20PX;
  color: #EDF5E1;
  background-color: #55BCC9;
  margin-bottom: 17px;
}

.tk .img, .tk .img img{
    text-align: center;
    margin-bottom: 10px;
}

.tk .user {
    font-weight: bold;
    margin-bottom: 5px;
}

.tk button{
    padding: 2px 8px;
    border-radius: 5px;
}

.tk .mb{
    margin-bottom: 10px;
}

.tk input[type=text], .tk input[type=password]{
    width: 100%;
    height: 25px;
    padding: 0 5px;
    border: 1px solid #ccc;
}

.loai li{
    padding: 2px 5px;
    margin-bottom: 6px;
}

.loai .search{
    text-align: center;
    margin-top: 10px;
}

.loai li:hover, .top10 li:hover{
    background-color: #97CAEF;
}

.top10 li{
    padding: 2px 5px;
    margin-bottom: 5px;
}

.thumbnail{
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
    padding: 10px;
    margin-bottom: 15px;
}


.caption{
    text-align: left;
    padding-left: 30px;
}

.panel.panel-default{
    border: 1px solid #ccc;
    margin-bottom: 15px;
    border-radius: 5px;
    padding: 12px;
    line-height: 1.3;
}

.panel.panel-default li{
    margin-left: 15px;
}

.panel.panel-default p i{
    margin: 0 285px;
}

.panel.panel-default .panel-heading{
    margin-bottom: 10px;
}

footer{
  
    background-color: #3FEEE6;
    color: #05386B;
    font-weight: 700;
    line-height: 40px;
    text-align: center;
}

.h3{
    text-align: center;
    font-weight: bold;
}

.form1{
    padding: 12px;
}

.form-cn {
    border: 1px solid #ccc;
    background-color: #CAFAFE;
    border-radius: 5px;
    padding: 10px;
}

.form-cn label{
    display: block;
    margin: 10px 0 5px 0;
    font-weight: bold;
}

.form-cn input[type=text], .form-cn input[type=password], .form-cn input[type=email]{
    width: 100%;
    border-radius: 3px;
    height: 25px;
    padding: 0 5px;
    border: 1px solid #ccc;
}

.form-cn .pass{
    margin-bottom: 15px;
}
 
.form-cn input[type=file], .form-cn input[type=email], .form-cn input[type=checkbox]{
    margin-bottom: 15px;
    border: 1px solid #ccc;
}

.form-cn input[type=file]{
    width: 100%;
}

.form-cn button{
    border-radius: 5px;
    padding: 4px 8px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin: 8px 10px;
}

.row .sp{
    width: 23%;
    border: 1px solid #ccc;
    border-radius: 5px;
    justify-content: center;
  display: flex;
  margin: 9px;
  padding: 10px;
  overflow: hidden;
  height: auto;
}

.row .sp .img{
    overflow: hidden;
   text-align: center;
}

.row .sp img{
    margin-bottom: 10px;
    transition: 1s ease-in-out;
    text-align: center;
}

.row .sp img:hover{
    transform: scale(1.3);
    transition: 1s ease-in-out;
}

.row .sp .ten{
    text-align: center;
}


.mota{
    margin-top: 15px;
}

.thumbnail img{
    margin-bottom: 25px;
}

.col{
    width: 93.5%;
}

.col input[type=text]{
   width: 100%; 
   height: 25px;
}

.col-sm-2{
    width: 5%;
    margin-left: 6px;
}
.btn.btn-default{
    padding: 2.5px 8px;
}

.table-sp{
  
    border-radius: 5px;
}

.h2 {
    background-color:  #55BCC9;
    color: #EDF5E1;
    border-radius: 5px;
    padding: 5px 8px;
    margin-bottom: 10px;
}

.h2 h3{
    font-size: 22px;
}
        </style>
    </body>
</html>