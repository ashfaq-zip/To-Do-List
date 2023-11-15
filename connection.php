<?php

class crud{
    public $conn;
    function __construct(){
        $this->conn = mysqli_connect('sql12.freemysqlhosting.net', 'sql12662446', 'ekqdUallvb', 'sql12662446');
    }
    
    function insert(){
        if(isset($_SESSION['NAME'])){
            $table = $_SESSION['NAME'];
            include 'header.php';
            if(isset($_REQUEST['sbt'])){
                $name = $_REQUEST['name'];
                $des = $_REQUEST["des"];
                $sql = "insert into $table(name, des) values('$name', '$des')";
                $result = mysqli_query($this->conn, $sql);
                if($result){
                    header("location:view.php");
                }
                else{
                    header("location:login.php");
                }
            }
        }
    }

    function view(){
        if(isset($_SESSION['NAME'])){
            $table = $_SESSION['NAME'];
            include 'header.php';       
            $sql = "select * from $table";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        else{
            header("location:login.php");
        }
    }

    function edit(){    
        $table = $_SESSION['NAME'];
        if(isset($_REQUEST['sbt'])){  
            $id=$_REQUEST['id'];
            $name = $_REQUEST['name'];
            $des = $_REQUEST['des'];
            $sql = "UPDATE $table SET name='$name', des='$des' WHERE id='$id';";
            $result = mysqli_query($this->conn, $sql);
            if($result){
                header("location:view.php");
            }
        }
    }

    function delete(){
        if(isset($_SESSION['NAME'])){
            $table = $_SESSION['NAME'];
            $id=$_REQUEST['id'];
            $sql = "DELETE FROM $table WHERE id='$id'";
            $result = mysqli_query($this->conn, $sql);
            if($result){
                header("location:view.php");
            }
            else{
                echo "Please Login";
                header("location:home.php");
            }
        }
    }

    function register(){
        if(isset($_REQUEST['sbt'])){
            $n=$_REQUEST['n'];
            $e=$_REQUEST['e'];
            $m=$_REQUEST['m'];
            $p=$_REQUEST['p'];
            $sql = "INSERT INTO details(name, email, mobile, password) VALUES('$n','$e','$m','$p');";
            $ins = mysqli_query($this->conn, $sql);
            if($ins){
                $query = "create table $n (id int(20) auto_increment, name varchar(50), des varchar(100), PRIMARY KEY (id));";
                $res = mysqli_query($this->conn, $query);
                header("location:login.php");
            }
        }
    }

    function login(){
        $e=$_REQUEST['e'];
        $p=$_REQUEST['p'];
        $pd = "Select * from details where password = '$p' AND (email = '$e' OR mobile = '$e');";
        $password = mysqli_query($this->conn, $pd);
        
        $row = mysqli_fetch_assoc($password);
            
        if(($e === $row['email'] || $e === $row['mobile']) AND $p === $row['password']){
            $_SESSION['ID'] = $row['id'];
            $_SESSION['NAME'] = $row['name'];
            header("location:home.php"); 
        }
        else{
            echo "<script>
            alert('Invalid Credentials');
            window.location.href='login.php';
            </script>";
            header("location:login.php");
        }
    }
}
?>