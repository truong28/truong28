
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
 <img src="images/logo1.jpg"/></center>
<h1 align="center"> QUẢN LÝ DANH SÁCH SẢN PHẨM </h1>
<br />

<hr width="70%" /><br />
<?php
	$p->loaddanhsachsp("select * from products order by id desc");
?>
<br /><hr width="70%" /><br /><br />
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle" height="50"><b style="font-size:24px">THÊM SẢN PHẨM</b></td>
  </tr>
  <tr>
    <td width="242">Chọn nhà cung cấp</td>
    <td width="542">
    <?php
	$p->loadlistcty("select * from category order by id asc");
	?>
    </td>
  </tr>
  <tr>
    <td>Nhập tên sản phẩm</td>
    <td><label for="txtten"></label>
      <input type="text" name="txtten" id="txtten" /></td>
  </tr>
  <tr>
    <td>Nhập giá</td>
    <td><label for="txtgia"></label>
      <input type="text" name="txtgia" id="txtgia" /></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><label for="txtmota"></label>
      <textarea name="txtmota" id="txtmota" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Hình đại diện</td>
    <td><label for="myfile"></label>
      <input type="file" name="myfile" id="myfile" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="nut" id="nut" value="Thêm sản phẩm" /></td>
  </tr>
</table>


<div align="center">
<?php
$ten=$_REQUEST['txtten'];
$gia=$_REQUEST['txtgia'];
$mota=$_REQUEST['txtmota'];
$cty=$_REQUEST['cty'];
$local=$_FILES['myfile']['tmp_name'];
$name=$_FILES['myfile']['name'];


	switch($_POST['nut'])
	{
		case 'Thêm sản phẩm':
		{
			if($ten!='' && $gia!='')
			{
				if($p->themxoasua("insert into products(product_name,price,details,category) values ('$ten','$gia','$mota','$cty')")==1)
				{
						$id_moithem=mysql_insert_id();
						$name=$id_moithem."_".$name;
						if($p->myupload($local,$name)==1)
						{
							$p->themxoasua("update products set hinh='$name' where id='$id_moithem' limit 1");
						}
				}
				else
				{
					echo '<script language="javascript">
										alert("Thêm KHÔNG thành công.");
										</script>';	
				}
			}
			else
			{
				echo 'Vui lòng nhập đầy đủ thông tin sản phẩm.';	
			}
			echo '<script language="javascript">
				window.location="danhsachsanpham.php";
				</script>';
			break;	
		}	
	}
?>

  <?php
  $id=$_POST['radio'];
  switch($_POST['nut'])
  {
	  case 'Xóa':
	  {
$p->themxoasua("delete from products where id='$id'");
	  }}
  ?>
    
</div>
</form>
</body>
</html>