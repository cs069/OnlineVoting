<?php 

  include "connection.php";
  //if ($_POST['view1']) {
    $mysqli1= new mysqli('localhost','root','','DEMO');

   $sql = "SELECT voterid FROM voter ";
    $result = mysqli_query($mysqli1,$sql);
  // $query = mysqli_query("SELECT voterid FROM voter");
while ($rowtwo = mysqli_fetch_array($result)) {
   # code...
 
echo '<table>
  <tr>
  <td>'.$rowtwo['voterid'].'</td>
  </tr>
  </table>';
        
  // } else {
       // an error has occured

  }
  ?>
	