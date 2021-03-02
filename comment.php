<?php
include 'database.php';

function setComments() {
  if(isset($_POST['commentSubmit'])) {
    $conn = OpenCon();
    $u_name = $_POST['u_name'];
    $u_comment = $_POST['u_comment'];

    $sql = "INSERT INTO comment(u_name, u_comment) VALUES('$u_name', '$u_comment')";
    $result = $conn->query($sql);
    $conn -> close();
  }
}

function getComments() {
  $conn = OpenCon();
  $sql = "SELECT * FROM comment";
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
    echo "<div style='max-width:60vw; font-weight:bold;'>".$row['u_name']."<br><br></div>";
    echo "<div style='max-width:60vw;'>".$row['u_comment']."<br><br><br></div>";
  }
  $conn -> close();
}

?>