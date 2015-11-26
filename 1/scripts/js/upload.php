<?php
$target_dir = "../../uploads/";
// $target_file = $target_dir . basename($_POST["img"]["name"]);
// $target_file = $target_dir . basename($_POST["img"]["name"]);
$target_file = $target_dir . $_POST["filename"];
// $uploadOk = 1;
//Check if file already exists
// if (file_exists($target_file)) {
    // echo "Sorry, file already exists.";
    // $uploadOk = 0;
// }
// Check file size
// if ($_POST["img"]["size"] > 500000) {
    // echo "Sorry, your file is too large.";
    // $uploadOk = 0;
// }
// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
    // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
// } else {
    // if (move_uploaded_file($_POST["img"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_POST["img"]["name"]). " has been uploaded.";
    // } else {
        // echo "Sorry, there was an error uploading your file.";
    // }
// }
$mili = $target_dir . $_POST["filename"];
$img = $_POST['img'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $mili . '.png';
$success = file_put_contents($file, $data);
// echo $mili;
?>