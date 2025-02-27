<html>
	<head>
		<title> Form đăng ký </title>
		<link rel="stylesheet" href="style.css">
	</head
	<body>
	<form action="#" method="POST" >
		<h1 style="font-size:25px; text-align: center;color:red; ">Đăng ký khách hàng</h1>
		<table class = "tb_login" style="border-spacing:5px;">
			<tr>
				<td align="center" colspan=2>
					<img src="user.png" 
					width="100px" height="100px"
					></img>
				</td>
			</tr>
			
			<tr align="left" >
				<td class="col-header" colspan = 2><b >Thông tin đăng nhập</b></td>
			</tr>

			<tr>
				<td> Tên đăng nhập: </td>
				<td> <input type="text" name="UserName" ></input> </td>
			</tr>
			<tr>
				<td> Mật khẩu: </td>
				<td> <input type="password" name="Pass" ></input> </td>
			</tr>
			<tr>
				<td> Nhập lại mật khẩu: </td>
				<td> <input type="password" name="PassRep" ></input> </td>
			</tr>
		</table>
		<table class = "tb_login" style="border-spacing:5px;">
			<tr align="left" >
				<td class="col-header" colspan = 2><b >Thông tin khách hàng</b></td>
			</tr>
			<tr>
				<td> Họ tên khách hàng: </td>
				<td> <input type="text" name="UserName" ></input> </td>
			</tr>
			<tr>
				<td> Ngày sinh: </td>
				<td> <input type="date" name="Birth" "></input> </td>
			</tr>
			<tr>
				<td> Giới tính: </td>
				<td> <input type="radio" name="Gender" value="Nam" checked="true">Nam</input>
					<input type="radio" name="Gender" value="Nữ" >Nữ</input> 
					<input type="radio" name="Gender" value="Other" >Khác</input> 
				</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td> <input type="text" name="Email" "></input> </td>
			</tr>
			<tr>
				<td>Thu nhập:</td>
				<td> <input type="text" name="Income" "></input> </td>
			</tr>
			<tr>
				<td colspan=2 align = "center" ><input type="submit" value="Đăng ký" class="btn"></input></td>
			</tr>
		</table>
	</form>
	</body>
</html>