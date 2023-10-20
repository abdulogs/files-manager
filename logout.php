<?php require_once "./classes/app.php"; ?>

<?php
DB::create("login_history", [
  "status" => 0,
  "member_id" => session::get("id"),
  "created_at" => date('Y-m-d H:i:s'),
  "updated_at" => date('Y-m-d H:i:s')
])::execute();
?>

<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php");
?>
