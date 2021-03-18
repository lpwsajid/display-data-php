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
            <h1>Insert Records</h1>
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
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="cname" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="cemail" />
        </div>
         <div class="form-group">
            <label>Salary</label>
            <input type="text" name="csalary" />
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="cphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>


















