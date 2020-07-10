<?php if (!isset($_SESSION)) {
    session_start();
} ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <table style="width:100%">

        <tr>
            <td style="font-size:28px">Admin Links</td>
        </tr>

        <?php if ($_SESSION["usertype"] == "Admin") { ?>

            <tr>
                <td><a href="adduser.php">Add User</a></td>
            </tr>
            <tr>
                <td><a href="updateuser.php">Update User</a></td>
            </tr>
            <tr>
                <td><a href="deleteuser.php">Delete User</a></td>
            </tr>

        <?php } ?>




        <?php if ($_SESSION["usertype"] == "Admin") { ?>
            <tr>
                <td><a href="addcategory.php">Add Tour</a></td>
            </tr>
            <tr>
                <td><a href="updatecategory.php">Update Tour</a></td>
            </tr>
            <tr>
                <td><a href="deletecategory.php">Delete Tour</a></td>
            </tr>
        <?php } ?>


        <tr>
            <td><a href="viewcategory.php">View Tour</a></td>
        </tr>

        <?php if ($_SESSION["usertype"] == "Admin") { ?>
            <tr>
                <td><a href="addsubcategory.php">Add Location</a></td>
            </tr>
            <tr>
                <td><a href="updatesubcategory.php">Update Location</a></td>
            </tr>
            <tr>
                <td><a href="deletesubcategory.php">Delete Location</a></td>
            </tr>
        <?php } ?>

        <tr>
            <td><a href="viewsubcategory.php">View Location</a></td>
        </tr>

        <?php if ($_SESSION["usertype"] == "Admin") { ?>
            <tr>
                <td><a href="addpackage.php">Add Package</a></td>
            </tr>
            <tr>
                <td><a href="updatepackage.php">Update Package</a></td>
            </tr>
            <tr>
                <td><a href="deletepackage.php">Delete Package</a></td>
            </tr>

        <?php } ?>

        <tr>
            <td><a href="viewpackage.php">View Package</a></td>
        </tr>

        <tr>
            <td><a href="addadvertisement.php">Add Hotel</a></td>
        </tr>

        <?php if ($_SESSION["usertype"] == "Admin") { ?>
            <tr>
                <td><a href="deleteadvertisement.php">Delete Hotel</a></td>
            </tr>
        <?php } ?>

        <tr>
            <td><a href="viewadvertisement.php">View Hotel</a></td>
        </tr>
        <?php if ($_SESSION["usertype"] == "Admin") { ?>
            <tr>
                <td><a href="viewenquiry.php">View Bookings</a></td>
            </tr>
            <tr>
                <td><a href="contactus.php">View Feedback/Enquries</a></td>
            </tr>
        <?php } ?>
    </table>


</body>

</html>