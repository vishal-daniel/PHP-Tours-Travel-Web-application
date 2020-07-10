<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>My Tour</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href="stylecss.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--js-->
	<script src="js/jquery.min.js"></script>

	<!--/js-->
	<!--animated-css-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>

<body>
	<?php include('function.php'); ?>
	<?php
	if (isset($_POST["sbmt"])) {
		$cn = makeconnection();
		$s = "select * from package where Pack_id='" . $_REQUEST["pid"] . "'";
		$result = mysqli_query($cn, $s);
		$r = mysqli_num_rows($result);
		$data = mysqli_fetch_array($result);
		$packid = $data[4];
		$day = $_POST["t1"];
		$child = $_POST["t2"];
		$adult = $_POST["t3"];
		$sprice = $packid;
		$s = "CALL Totalcost($day,$child,$adult,$sprice,@tprice);";
		mysqli_query($cn, $s);
		$sa = "SELECT @tprice";
		$result = mysqli_query($cn, $sa);
		$r = mysqli_num_rows($result);
		$data = mysqli_fetch_array($result);
		$rs = $data[0];
		echo "<script>alert('The Total Cost is : $rs');</script>";
	}
	?>

	<?php include('top.php'); ?>
	<!--/sticky-->
	<?php include('slider.php'); ?>
	<div style="height:50px"></div>
	<div style="width:1000px; margin:auto">

		<?php

		$s = "select * from tours";
		$result = mysqli_query($cn, $s);
		$r = mysqli_num_rows($result);

		while ($data = mysqli_fetch_array($result)) {

			echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";
		}
		?>

		</table>

	</div> -->

	<div style="width:800px; float:left">
		<table cellpadding="0px" cellspacing="0" width="1000px">
			<tr>
				<td class="headingText">Price</td>
			</tr>
			<tr>
				<td class="paraText" width="900px">
					<table cellpadding="0" cellspacing="0" width="900px">
						<td>

							<table border="0" ; width="600px" height="400px" align="center">
								<?php

								$s = "select * from package,tours,location where package.tour=tours.tour_id and package.location=location.loc_id and package.pack_id='" . $_GET["pid"] . "'";

								$result = mysqli_query($cn, $s);
								$r = mysqli_num_rows($result);
								$n = 0;
								$data = mysqli_fetch_array($result);
								mysqli_close($cn);
								?>

								<form method="post" enctype="multipart/form-data">
									<tr>
										<td colspan="3" class="middletext">Package Id:&nbsp;&nbsp;&nbsp;<?php echo $data[0]; ?></td>
									</tr>
									<tr>
										<td colspan="3" class="middletext">Pack Name:&nbsp;&nbsp;&nbsp;<?php echo $data[1]; ?></td>
									</tr>
									<tr>
										<td class="lefttxt">Number of Days (+ 10,000 for extra day):</td>
										<td><input type="number" name="t1" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No. oF Days" /></td>
										<td><br />
									<tr>
										<td class="lefttxt">Number of Children (+ 2,500 for extra child):</td>
										<td><input type="number" name="t2" required pattern="[1 _]{1,10}" title"Please Enter Only numbers between 1 to 10 for Children" /></td>
										<td><br />
									<tr>
										<td class="lefttxt">Number of Adults (+ 5,000 for extra adult):</td>
										<td><input type="number" name="t3" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No.Of Adults" /></td>
										<td><br />
									<tr>
										<td></td>
										<td align="left" colspan="3" height="50px"><input type="submit" value="Check" name="sbmt" /></td>
									</tr>
									<tr>
										<td align="center" colspan="3" height="50px"><a href="enquiry.php?pid=<?php echo $data[0];   ?>"><input type="button" value="BOOK" name="chk" /></a></td>
									</tr>

								</form>
						</td>
			</tr>
		</table>
		</td>
		</table>
		</td>
		</tr>
		</table>

	</div>

	</div>

	<div style="clear:both"></div>

	<?php include('bottom.php'); ?>
</body>

</html>