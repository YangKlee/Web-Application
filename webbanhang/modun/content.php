<div class="content">

<div class="left">
<?php
	include('modun/left/danhsachsanpham.php');
?>
</div>
   
<div class="right">
<?php
if(isset($_GET['xem'])){
	$tam=$_GET['xem'];
} else
	{
	$tam='';
	} 
	if($tam=='chitietloaisanpham'){
		include('modun/right/chitietloaisanpham.php');}
	if ($tam=='chitietsanpham'){
		include('modun/right/chitietsanpham.php');
		} 
	if ($tam=='aosomi'){
		include('modun/right/aosomi.php');
		}
			if ($tam=='thongbao'){
		include('modun/right/thongbao.php');
			}
	if ($tam=='aothun'){
		include('modun/right/aothun.php');
		}
	if ($tam=='login'){
		include('login.php');
		}
	if ($tam=='dangky'){
		include('dangky.php');
	}
	if ($tam==''){
		include('modun/right/tatcasanpham.php');
		}
?>
</div>