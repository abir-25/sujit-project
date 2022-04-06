<?php include 'config/config.php'; ?>
<?php include 'lib/database.php'; ?>
<?php include 'helpers/format.php'; ?>
<?php
	$db = new Database();
	$fm = new Format();

?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name  = mysqli_real_escape_string($db->link1, $_POST['name']);
    $phone  = mysqli_real_escape_string($db->link1, $_POST['phone']);
    $email  = mysqli_real_escape_string($db->link1, $_POST['email']);
    $subject  = mysqli_real_escape_string($db->link1, $_POST['subject']);
    $message  = mysqli_real_escape_string($db->link1, $_POST['message']);



    $query = "INSERT INTO tbl_contact(name, phone, email, subject, message) VALUES('$name','$phone','$email', '$subject', '$message')";

    $inserted_rows = $db->insert($query);
    echo "<script>window.location = 'index.php'; </script>";
}
?>