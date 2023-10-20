<?php require_once "./classes/app.php"; ?>
<!-- Middleware will redirect if session is out -->
<?php middleware::logout("id", "index"); ?>
<?php middleware::is_visitor("403"); ?>

<?php

$file = DB::select("name", "file")::from("files")::where(["id" => http::param("id")])::execute();
$file = DB::fetch("one");


$filename = "uploads/" . $file["file"];

if (file_exists($filename)) {
    // Set headers to force download
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=' . $file["name"] . ".pdf");
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));

    // Read and output the file
    readfile($filename);
    http::redirect("home");
} else {
    echo 'File not found';
}
?>