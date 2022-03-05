<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","student1");
if(mysqli_connect_errno()){
    echo "Failed to connect:".mysqli_connect_error();
}
else{
    echo "connection successful";
}
?>
<?php
if(isset($_POST['submit'])) {
    $usn = $_POST['usn'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $deptid = $_POST['deptid'];
    $dname = $_POST['dname'];
    $courseid = $_POST['courseid'];
    $ctitle = $_POST['ctitle'];
    $int1 = $_POST['int1'];
    $int2 = $_POST['int2'];
    $see = $_POST['see'];
    $credits =$_POST['credits'];
    $total = $_POST['total'];
    $avg = $_POST['avg'];
    $ai = $_POST['ai'];
    $vr = $_POST['vr'];
    $dl = $_POST['dl'];
    $ml = $_POST['ml'];
    $insert = "INSERT INTO student(usn,name,dob,address,gender) VALUES('$usn','$name','$dob','$address','$sex')";
    $query = mysqli_query($con, $insert) or die(mysqli_error($con));
    if ($query == 1) {
        $ins = "INSERT INTO dept(deptid,usn,dname) VALUES ('$deptid','$usn','$dname')";
        $quey = mysqli_query($con, $ins) or die(mysqli_error($con));
        if ($quey == 1) {
            $ins1 = "INSERT INTO course(courseid,usn,coursetitle,credits,deptid) VALUES ('$courseid','$usn','$ctitle','$credits','$deptid')";
            $quey1 = mysqli_query($con, $ins1) or die(mysqli_error($con));
            if ($quey1 == 1) {
                $ins2 = "INSERT INTO grade(usn,courseid,internal1,internal2,see,total,avg) VALUES ('$usn','$courseid','$int1','$int2','$see','$total','$avg')";
                $quey2 = mysqli_query($con, $ins2) or die(mysqli_error($con));
                if ($quey2 == 1) {
                    $ins3 = "INSERT INTO skill(usn,ai,vr,dl,ml)VALUES ('$usn','$ai','$vr','$dl','$ml')";
                    $quey3 = mysqli_query($con, $ins3) or die(mysqli_error($con));
                    if ($quey3 == 1){
                        echo "Insertion done:";
                    }
                    else{
                        echo "Insertion not done:";
                    }
                }
            }
        }
    }


}
?>
