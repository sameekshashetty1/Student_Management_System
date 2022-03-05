<html>
<head>
    <title>Update Data</title>
    <style>
        body{
            background-color:blue;
        }
        input{
            width:40%;
            height:5%;
            border:1px;
            border-radius:05px;
            padding:8px 15px 8px 15px;
            margin:10px 0px 15px 0px;
            box-shadow:1px 1px 2px 1px grey;
        }
    </style>
</head>
<body>
<center>
    <h1 style="color: aquamarine">Updation of Record</h1>
    <form action="" method="post">
        <input type="text" name="usn" placeholder="Enter USN"/><br/>
        <input type="text" name="name" placeholder="Enter Name"/><br/>
        <input type="text" name="dob" placeholder="Enter DOB"/><br/>
        <input type="text" name="deptid" placeholder="Enter Deptid"/><br/>
        <input type="text" name="dname" placeholder="Enter Dept name"/><br/>
        <input type="submit" name="update" value="UPDATE DATA">
    </form>
</center>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'student1');


if(isset($_POST['update']))
{
    $id=$_POST['usn'];
    $query="update `student` set name='$_POST[name]',dob='$_POST[dob]' where usn='$_POST[usn]'";
    $query1="update `dept` set deptid='$_POST[deptid]',dname='$_POST[dname]' where usn='$_POST[usn]'";
    $query_run=mysqli_query($con,$query);
    $query_run1=mysqli_query($con,$query1);
    if($query_run){
        if($query_run1){
            echo '<script type="text/javascript">alert("Data Updated")</script>';
        }
        else{
            echo '<script type="text/javascript">alert("Data Not Updated")</script>';
        }
    }
}
?>