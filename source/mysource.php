<?php
class mylogin
{
	function connect()
	{
		$con=mysql_connect("localhost","shop","");	
		if(!$con)
		{
			echo "khong ket noi csdl";
			exit();	
		}
		else
		{
			mysql_select_db("cartshopping");
			mysql_query("SET NAMES UTF8");
			return $con;
		}
	}
	function admin($user,$pass)
	{
		$usernamemacdinh='admin';
		$passwordmacdinh='helloadmin';
		if ($user==$usernamemacdinh && $pass==$passwordmacdinh)
		{
			session_start();	
         	$_SESSION['myuser']=$user;
	        $_SESSION['mypass']=$pass;
	        header('location:AdminLTE-master/trangquanly.php');
			}
		else
			{
				return 0;
				}
		}
		function dangnhap($user,$pass)
	{
		$pass=md5("$pass");
		$link=$this->connect();
		$sql="select id,username,password,email,phanquyen from cartshopping where username='$user' and password='$pass' limit 1";
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i==1)
		{
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$username=$row['username'];
				$password=$row['password'];
				$email=$row['email'];
				$phanquyen=$row['phanquyen'];
				
				session_start();
				$_SESSION['id']=$id;
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				$_SESSION['email']=$email;
				$_SESSION['phanquyen']=$phanquyen;
				
				echo '<script language="javascript">
				window.location="ultimateshop1.php";
				</script>';				
			}
		}
		else
		{
			echo '<script language="javascript">
				alert("Đăng nhập không thành công, mời đăng nhập lại.");
				</script>';
			echo '<script language="javascript">
				window.location="login.php";
				</script>';
		}
	}
	function xacnhandangnhap($id,$user,$pass,$phanquyen,$email)
	{	session_start();	
		$link=$this->connect();
		$sql="select id from cartshopping where id='$id' and username='$user' and password='$pass' and phanquyen='$phanquyen' and email='$email' limit 1";
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['phanquyen']) && isset($_SESSION['email']))
		{
		echo'<script language="javascript"> alert("Đăng nhập thành công");</script>';
		
			echo '<script language="javascript">
				alert("Chưa đăng nhập, vui lòng đăng nhập.");
				</script>';
			echo '<script language="javascript">
				window.location="login.php";
				</script>';}
		
	}
		
	function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysql_query($sql,$link))
		{
			return 1;	
		}
		else
		{
			return 0;	
		}
	}
	function loaduser($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
		{
			$dem=1;
  echo'<form id="form1" name="form1" method="post" action="">
			<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr height="35">
  <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">STT</td>
    <td align="center" valign="middle">USERNAME</td>
    <td align="center" valign="middle">EMAIL</td>
    <td align="center" valign="middle">PHÂN QUYỀN</td>
	<td align="center" valign="middle">&nbsp;</td>

  </tr>';
       while($row=mysql_fetch_array($ketqua))
	   {
		 $id=$row['id'];
		$username=$row['username'];
		$password=$row['password'];
		$phanquyen=$row['phanquyen'];
		$email=$row['email']; 
		if($phanquyen==1)
		{
			$phanquyen='Normal';
		}
		else if($phanquyen==2)
		{
			$phanquyen='VIP';
		}
		echo'<tr>
		
		    <td align="center" valign="middle"><input type="radio" name="radio" id="radio" value="'.$id.'" />
      <label for="radio"></label></td>
    <td align="center" valign="middle">'.$dem.'</td>
    <td align="center" valign="middle">'.$username.'</td>
    <td align="center" valign="middle">'.$email.'</td>
    <td align="center" valign="middle">'.$phanquyen.'</td>
	  <td align="center" valign="middle"><input type="submit" name="nut" id="nut" value="Xóa" />
	  
	  </td>
  </tr>'; 
  $dem++;
	   }
	   echo'</table>';
		}
	}
}
class admin
{
	
	function connect()
	{
		$con=mysql_connect("localhost","shop","");
		if(!$con)
		{
			die("Không kết nối được csdl");
			exit();	
		}	
		else
		{
			mysql_select_db("cartshopping");
			mysql_query("SET NAMES UTF8");
			return $con;	
		}		
	}
	function loadlistcty($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
		{
			echo '<select name="cty" id="cty">';
			echo '<option value="0">Mời chọn danh mục</option>';
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$tencty=$row['namecate'];
				echo '<option value="'.$id.'">'.$tencty.'</option>';
				
			}
			echo '</select>';	
		}	
		mysql_close($link);
	}
	function loaddanhsachsp($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
		{
			echo '<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
			  <tr>
			   <td align="center" width="30" height="50" valign="middle" >&nbsp;</td>
				<td width="30" height="50" align="center" valign="middle">STT</td>
				<td width="500" height="50" align="center" valign="middle">TÊN SẢN PHẨM</td>
				<td width="40" height="50" align="center" valign="middle">GIÁ</td>
				<td width="150" height="50" align="center" valign="middle">HÌNH</td>
				<td align="center" height="50" valign="middle">&nbsp;</td>
				<td align="center" height="50" valign="middle">&nbsp;</td>
			  </tr>';
			  $dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$ten=$row['product_name'];
				$gia=$row['price'];
				$mota=$row['details'];
				$hinh=$row['hinh'];
				echo '<tr>
				<td align="center" height="50" valign="middle"><input type="radio" name="radio" id="radio" value="'.$id.'" />
      <label for="radio"></label></td>
					<td align="center" valign="middle">'.$dem.'</td>
					<td align="center" width="500" valign="middle">'.$ten.'</td>
					<td align="center" valign="middle">'.$gia.'</td>
					<td align="center" valign="middle"><img src="hinh/'.$hinh.'" width="135" height="100" /></td>	
					  <td align="center" width="80" valign="middle"><input type="submit" name="nut" id="nut" value="Xóa" />		
					  <td align="center" width="80" valign="middle"><input type="submit" name="sua" id="sua" value="Sửa" />			
				  </tr>';
				$dem++;			
			}
			echo '</table>';
		}	
		mysql_close($link);
	}
	function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysql_query($sql,$link))
		{
			return 1;	
		}
		else
		{
			return 0;	
		}
	
	}
	function myupload($local,$name)
	{
		if(move_uploaded_file($local,"hinh/".$name))
		{
			return 1;	
		}
		else
		{
			return 0;	
		}
	}
}
?>
