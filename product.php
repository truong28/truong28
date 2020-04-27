
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="css/style5.css" type="text/css" media="screen" />
</head>
<body>


<div align="center" id="mainWrapper">
  <?php include_once("template_header.php");?>
  <div id="pageContent">
  <table width="100%" border="0" cellspacing="0" cellpadding="15">
  <tr>
    <td width="19%" valign="top"><img src="hinh/<?php echo  '1' ?>.jpg" width="142" height="188" alt=">" /><br />
      <a href="hinh/<?php echo  '1' ?>.jpg">View Full Size Image</a></td>
    <td width="81%" valign="top"><h3><?php echo  '1'; ?></h3>
      <p><?php echo "$".$price; ?><br />
        <br />
        <?php echo '1' ?> <br />
<br />
        <?php echo '1'; ?>
<br />
        </p>
      <form id="form1" name="form1" method="post" action="cart.php">
        <input type="hidden" name="pid" id="pid" value="" />
        <input type="submit" name="button" id="button" value="Add to Shopping Cart" />
      </form>
      </td>
    </tr>
</table>
  </div>

</div>
</body>
</html>