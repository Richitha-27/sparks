<html>
    <head>
        <link rel="stylesheet" href="history.css";>
        <link rel="stylesheet" href="index.css";>
</head>
<body>
<div class="header">
            
            <h2>Banking System</h2>
        
        </div>
    <h1 style="margin-left:500px;">Transaction Details</h1>
    <table class="tab">
        <tr>
        <th>Transaction Id</th>
        <th>Sender</th>
        <th>Receiver</th>
        <th>Amount</th>
        <th>Time Date</th>
        </tr>
        <?php
            require_once "config.php";

            $sql = "select * from transaction order by datetime desc";
            $res  = mysqli_query($link, $sql);
            while($row = mysqli_fetch_assoc($res))
            {
                echo "<tr>
                <td>{$row['sno']}</td>
                <td>{$row['sender']}</td>
                <td>{$row['receiver']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['datetime']}</td>
                </tr>";
            }
        ?>
    </table>
        
</body>
</html>