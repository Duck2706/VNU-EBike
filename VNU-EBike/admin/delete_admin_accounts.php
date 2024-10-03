<?php
include "class/admin_accounts_class.php";

$user = new user;

if (!isset($_GET['id']) || $_GET['id']==NULL){
    echo "<script>window.location = 'show_admin_accounts.php'</script>";
}
else {
    $id = $_GET['id'];
}
    $delete_user = $user->delete_user($id);

?>

