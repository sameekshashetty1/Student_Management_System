<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","student1");
if(mysqli_connect_errno()){
    echo "Failed to connect:".mysqli_connect_error();
}
$sql="select distinct(t1.usn),t1.name,t1.dob,t2.deptid,t2.dname,t3.courseid,t3.coursetitle,t3.credits,t4.total,t4.avg from student as t1 inner join dept as t2 on t1.usn=t2.usn inner join course as t3 on t2.deptid=t3.deptid inner join grade t4 on t3.courseid=t4.courseid";
$result=mysqli_query($con,$sql);
if($result === false){
    throw new Exception(mysqli_error($con));
}
echo "<center>";
echo "<h1 style='color: aquamarine '>All Student details</h1>";
echo "<h2  style='color:aquamarine'>from record</h2>";
echo "</hr>";
echo "<table border='1' >
<tr>
<th style='color:aquamarine' >Usn</th>
<th style='color:aquamarine'>Name</th>
<th  style='color:aquamarine'>DOB</th>
<th  style='color:aquamarine'>Dept id</th>
<th  style='color:aquamarine'>Dept name</th>
<th  style='color:aquamarine'>Course id</th>
<th  style='color:aquamarine'>Course title</th>
<th  style='color:aquamarine'>Credits</th>
<th  style='color:aquamarine'>Total</th>
<th  style='color:aquamarine'>Average</th>
</tr>";
while($row = mysqli_fetch_array( $result ))
{
    echo "<tr >";
    echo "<td  style='color:aquamarine'>".$row['usn']."</td>";
    echo "<td  style='color:aquamarine'>".$row['name']."</td>";
    echo "<td  style='color:aquamarine'>".$row['dob']."</td>";
    echo "<td  style='color:aquamarine'>".$row['deptid']."</td>";
    echo "<td  style='color:aquamarine'>".$row['dname']."</td>";
    echo "<td  style='color:aquamarine'>".$row['courseid']."</td>";
    echo "<td  style='color:aquamarine'>".$row['coursetitle']."</td>";
    echo "<td  style='color:aquamarine'>".$row['credits']."</td>";
    echo "<td  style='color:aquamarine'>".$row['total']."</td>";
    echo "<td  style='color:aquamarine'>".$row['avg']."</td>";
    echo "</tr>";


}

echo "</table>";

echo "</center>";
mysqli_close($con);
?>
