<?php

if(isset($_GET['id']))
{
	
	$masp = $_GET['id'];

	
	$con =$p->connect();
	$sql = "select * from products where id='$masp'";
	$result = mysql_query($sql,$con);
	$row = mysql_fetch_array($result);
	
	if(!isset($_SESSION['giohang']))
	{
			$giohang = array();
			$giohang[$masp]= array(
				'masp'=>$row['id'],
				'name'=>$row['product_name'],
				'mota'=>$row['details'],
				'price'=>$row['price'],
				
				'hinh'=>$row['hinh'],
				'quantity'=>'1 ',
			
			);
		
	}
	else{
		$giohang = $_SESSION['giohang'];
		if(array_key_exists($masp,$giohang))
		{
			
				$giohang[$masp]= array(
				'masp'=>$row['id'],
				'name'=>$row['product_name'],
					'mota'=>$row['details'],
				'price'=>$row['price'],
					'hinh'=>$row['hinh'],
					'quantity'=>'1 ',
	
			);
		}
		else{
			
				$giohang[$masp]= array(
				'masp'=>$row['id'],
				'name'=>$row['product_name'],
					'mota'=>$row['details'],
				'price'=>$row['price'],
					
				'hinh'=>$row['hinh'],
				'quantity'=>'1',
				
			
			);
		}
	}
	if($_SESSION['giohang']= $giohang)
	{
	    print_r($giohang);
		echo '<script language="javascript">alert("Thêm Vào Giỏ Hàng Thành Công")</script>';
	}
		
		
	
	
	
}
?>