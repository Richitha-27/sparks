<html>
    <head>
    <link rel="stylesheet" href="users.css">
    <link rel="stylesheet" href="index.css">
    <style>
        *{
            
            box-sizing:border-box;
        }
.names
{
  margin-top: 20px;
  width:300px;
  margin-left:500px;
  
}

.values{
  background-color:lightseagreen;
  height: 12mm;
  border: 1px solid black;
  color:black;
  font-size:25px;
  text-align:center;

}
.values:hover{
background-color:rgb(189, 67, 67);
}
    </style>
    </head>
    <body>
        <div class="header">
            
            <h2>Banking System</h2>
        
        </div>
       <div>
        <div class="names">
            <h1 style="color:red;margin-left:25px;">Customer Names</h1>
        <?php
            require_once "config.php";
            $sql = "select *from users";
           
            $res=mysqli_query($link,$sql);
            while($row=mysqli_fetch_assoc($res))
            {
                
                
                echo "
                    
                <div class='values' onclick='nextPage({$row['id']})'>
                    {$row['name']}
                    
                    </div>
               
                ";
               

            }
            
            
        ?>
        </div>
        </div>
        <form action="detail.php" method="post" style="display: none;">
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


    </body>
</html>