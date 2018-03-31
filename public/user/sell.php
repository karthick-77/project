<?php $isbn = $_GET['isbn'];
       $link = mysqli_connect("localhost", "root", "", "test");
      $sql = "SELECT isbn,bname FROM products where isbn='$isbn'";
if ($res = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0) {
             while ($row = mysqli_fetch_array($res)) {
            
            $isbn = $row['isbn'];
            $bname = $row['bname'];
            
                     }
       
        
    }
    else {
       $isbn = "No matching records are found";
    }
}

?>