
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>cd</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Show Records</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="index.php">Add</a>
                </li>
                <li>
                    <a href="add.php">Show</a>
                </li>
            </ul>
        </div>

<div id="main-content">
    <h2>All Records</h2>
    <?php
        
      $con = mysqli_connect("localhost","root","","cr") or die("Connection Faild");
       $sql = "SELECT * FROM cd";
       $reslut = mysqli_query($con, $sql) or die("Query unsuccsessful");

       if (mysqli_num_rows($reslut) > 0) {

     ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Salary</th>
        <th>Phone</th>
        </thead>
        <tbody>
            <?php 

            while ($row = mysqli_fetch_assoc($reslut)) {
               
           ?>
            <tr>
                <td><?php echo $row['cid'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['cemail'] ?></td>
                <td><?php echo $row['csalary'] ?></td>
                <td><?php echo $row['cphone'] ?></td>
            </tr>
            <?php  }  ?>
        </tbody>
        <?php } ?>
    </table>
</div>
</div>
</body>
</html>
