<?php
class mysanpham
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
	function xuatmenuleft($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		mysql_close($link);
		if ($i>0)
		{
			while ($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$tendmuc=$row['namecate'];
				echo '<a href="?id='.$id.'">'.$tendmuc.'</a>';
				echo '<hr width="95%" align="center">';
				echo '</br>';
			}
		}
		else
		{
			echo 'Khong co du lieu.';
		}
	}
	function xuatsanpham($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		mysql_close($link);
		if ($i>0)
		{
			while ($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$tensp=$row['product_name'];
				$gia=$row['price'];
				$hinh = $row['hinh'];
				echo '<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <img src="hinh/'.$hinh.'" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>'.$tensp.'</h4>
                                                    <h5>'.$gia.'</h5>
                                                </div>
                                            </div>
                                        </div>';	
			}
		}
		else
		{
			echo 'Khong co du lieu.';
		}
	}
	}
?>