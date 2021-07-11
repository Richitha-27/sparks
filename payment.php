<?php
require_once "config.php";
    if(isset($_POST["submit"]))
    {
       $sender=$_POST["art_id"];
        $receiver=$_POST["receiver"];
        $amount=$_POST["amount"];
        $err = "";
        if($sender == $receiver)
        {
            $err = "same";
        }


        $sql="select email from users where email='$receiver'";
        $res=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($res);
        if(!$row)
        {
            $err = "receiver not exists";
        }

        $sql="select balance from users where email='$sender'";
        $res=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($res);
        $sender_balance=$row['balance'];
        if($amount>$sender_balance)
        {
            $err = "insufficient balance";
        }
        if($err == "")
        {
            $sql="select balance from users where email='$receiver'";
            $res=mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($res);
            $rec_balance=$row['balance']+$amount;

            
            $sender_balance=$sender_balance-$amount;

            $sql="update users set balance='$sender_balance' where email='$sender'";
            $res=mysqli_query($link,$sql);
            

            $sql="update users set balance='$rec_balance' where email='$receiver'";
            $res=mysqli_query($link,$sql);
            

            $sql  = "insert into transaction(sender,receiver,amount) values('$sender','$receiver','$amount')";
            $res = mysqli_query($link,$sql);
            
            echo " <script>alert('Transcation Successful...');location.href='history.php';</script>";
        }
        else{
            echo "<script>alert('$err')</script>";
        }
    }

?>