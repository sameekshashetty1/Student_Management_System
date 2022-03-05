<html>
<head>
    <title>Delete Data</title>
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
    <h1 style='color:aquamarine'>Delete student Record</h1>
    <form action="" method="POST">
    <input type="text" name="id" placeholder="Enter USN"/><br>
    <input type="submit" name="delete" value="Delete Data"/><br>
    </form>
</center>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'student1');

if(isset($_POST['delete']))
{
    $id=$_POST['id'];
    $query4="Delete from `skill`  where usn='$id'";
    $query3="Delete from `grade`  where usn='$id'";
    $query2="Delete from  `course`  where usn='$id'";
    $query1="Delete from `dept` where usn='$id'";
    $query="Delete  from `student` where usn='$id'";

    $query_run4=mysqli_query($con,$query4);
    $query_run3=mysqli_query($con,$query3);
    $query_run2=mysqli_query($con,$query2);
    $query_run1=mysqli_query($con,$query1);
    $query_run=mysqli_query($con,$query);

if($query_run4==1){
    if($query_run3==1){
        if($query_run2==1){
            if($query_run1==1){
                if($query_run==1)
                    {
                        echo '<script type="text/javascript">alert("Data Deleted")</script>';
                    }
                else
                    {
                        echo '<script type="text/javascript">alert("Data is not Deleted")</script>';
                    }

            }
        }
    }
}
}

?>
