<html>
    <head>
        <link rel="stylesheet" href="index.css">
        <style>
            .det
            {
                font-size:30px;
                margin-left:400px;
                margin-top:50px;
                background-color:lightblue;
                width:500px;
                text-align:center;
            }
            </style>

</head>
        <body>
        <div class="header">
            
            <h2>Banking System</h2>
        
        </div>
        <div style="margin:30px auto;font-size:20px;">
            <h1  style="text-align:center;">Customer Information</h1>
        </div>
            
        <div class="det" >
    <?php
            $str=$_POST["art_id"];
           
            require_once "config.php";
            $sql = "select *from users where id='$str' ";
           
            $res=mysqli_query($link,$sql);
               $row=mysqli_fetch_assoc($res);
                $str="\""."{$row['email']}"."\"";
                echo "
                    <p> Transaction Id:<span>{$row['id']}</span></p><hr>
                   <p>Name:<span>{$row['name']}</span></p>
                   <p>UPI:<span>{$row['email']}</span></p>
                   <p>Balance:<span>{$row['balance']}</span></p>
                   
                <div><button class='btns' onclick='nextPage($str)'>Transfer</button></div>  
                ";
                ?>
                <form action="transfer.php" method="post" style="display: none;">
        <input type="text" name="art_id" id="art_txt"  style="display: none;">
        <input type="submit" name="submit" id="sub"  style="display: none;">
        </form>
    <script>
                        function nextPage(thisid)
                        {
                                                          
                               document.getElementById('art_txt').value=thisid;
                               document.getElementById('sub').click();
                            
                        }

                        </script>

</div>
</body>
</html>


            
            
            
        