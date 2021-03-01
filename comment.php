<?php
//include 'database.php';

$conn = OpenCon();

function setComments() {
  if(isset($_POST['commentSubmit'])) {
    $u_name = $_POST['u_name'];
    $u_comment = $_POST['u_comment'];

    $sql = "INSERT INTO comment(u_name, u_comment) VALUES('$u_name', '$u_comment')";
    $result = $conn->query($sql);
  }
}

/* 
function getComments($conn) {
  $sql = "SELECT * FROM comment";
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
    echo $row['u_name']."<br>";
    echo $row['u_comment']."<br><br>";
  }
*/

?>