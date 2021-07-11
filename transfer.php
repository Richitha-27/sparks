<html>
    <head>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="tansfer.css">
    </head>
    <body>
        <?php
        require_once "config.php";
        $str=$_POST["art_id"];
        $sender=$str;
           
        ?>
        <div class="header">
        <h2>Banking System</h2>
        </div>
        <div style="margin-left:32%;margin-top:7%;">
        <form action="payment.php" method="post">
        <input type="text" name="art_id" id="art_txt"  style="display: none;" value="<?php echo $sender?>">
        <div>
                <label for="receiver" class="lbl">Receiver's UPI:</label>
        <input type="text" name="receiver" id="receiver" class="txtbox" placeholder="Enter Receivers UPI" style="margin-left:10px;">
        </div>
            <div>
                <label for="amount" class="lbl">Amount:</label>
        <input type="text" name="amount" id="amount" class="txtbox" placeholder="Enter In Rupees" style="margin-left:90px;">
        </div>
        <div>
        <input type="submit" value="Transfer" name="submit" class="btn">
        </div>
        </form>
        </div>

    </body>
</html>