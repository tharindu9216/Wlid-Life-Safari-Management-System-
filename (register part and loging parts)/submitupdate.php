
<?php
include 'configSeller.php' ;
            
      ?>

      <?php
        if($_GET['submit']){
            $firstname=$_GET['field0'];
        }

            $query="UPDATE register_table SET r_name='$firstname'";

            $data=mysqli_query($connection,$query);

            if($data){
                echo "<br>succe";
            }
            else{
                echo "error";
            }
            mysqli_close($connection);
?>
