<?php
require '../../global.php';
require '../../dao/hang-hoa.php';
//-------------------------------//

extract($_REQUEST);


$hang_hoa = hang_hoa_select_by_id($ma_hh);
extract($hang_hoa);

$VIEW_NAME = "hang-hoa/chi-tiet-ui.php";
require '../layout.php';
