 <div class="header">
    <img src="img\19D.png" width="100%" height="130" />
  </div>
  
  
  
<div id="fromtim">
				<p>&nbsp;				  </p>
				<p>
				  <input type="submit" name="bt_timkiem" value="Tìm" />
				  <strong>
				    <input type="text" name="tim" placeholder="Tìm kiếm" />
						<?php session_start();
						include('connect.php');
						if(isset($_SESSION['username'])){
							$user=$_SESSION['username'];
							$sqlhear="SELECT * from member where username='$user'";
							$queryhear=mysqli_query($connect,$sqlhear);
							$row=mysqli_fetch_assoc($queryhear);
							if(isset($_POST["dangxuat"])){
								session_destroy();
								header('location: index.php');}
							?>
							<form action="" method="POST">
							Xin chào <?php echo $_SESSION['username'];?>(<?php echo $row['quyen'];?>)
							<input type="submit" name="dangxuat" id="button2" value="Đăng Xuất" />
							</form>
							<?php
						}else{?>
				   <a href="?xem=login" ><input type="submit" name="dangnhap" id="button" value="Đăng Nhập" /></a>
			      or 
			      <a href="?xem=dangky" > <input type="submit" name="dangki" id="button2" value="Đăng Ký" /></a>
				  </strong></p>
						<?php }?>
</div> 

