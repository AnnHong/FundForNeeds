<?php
function getpost()
{
	$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql='select * from posts';
		//echo $sql;
		$qry=mysqli_query($con,$sql);
		return $qry;
	}
}

	$postlist = getpost();

  echo '<table>
  <tr>
    <th>Id</th>
    <th>User_Id</th>
    <th>Post_Content</th>
    <th>Post_Date</th>
  </tr>';
  $count=1;

    while($row = mysqli_fetch_assoc($postlist)){

      echo '<tr>';
  					echo'<td>'.$count.'</td>';
  					echo '<td>'.$row['Id'].'</td>';
  					echo '<td>'.$row['User_Email'].'</td>';
  					echo '<td>'.$row['Post_Content'].'</td>';
  					echo '<td>'.$row['Post_Date'].'</td>';

            //echo "<td><img width='140' height='140' src='C:/xampp/htdocs/user_photos/".$row['image']."'
            echo '</tr>';
					}
    echo '</table>';
 ?>
