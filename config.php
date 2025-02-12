<?php
$conn = mysqli_connect("localhost", "root", "", "json_practice") or die('Connection Error');
$sql = "SELECT * FROM `student_info`";
$result = mysqli_query($conn, $sql) or die('Query Error');
$data_arr = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<pre>";
echo json_encode($data_arr);
echo "</pre>";




mysqli_close($conn);