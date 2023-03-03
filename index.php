<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-primary">

    <form action="insert.php" method="POST">


        <div class="container">
         <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-8 ">
              <h3 class="text-center text-primary font-monospace">TO-DO LIST</h3>
            <div class="col-8">
                <input type="text" name="list" class="form-control">
            </div>
            <div class="col-2">
              <button class="btn btn-outline-primary"> ADD</button>
            </div>
         </div>
        </div>
</form>     
<!-- getdata  -->

<?php
include "config.php";
$rawData=mysqli_query($con, "select * from tbltodo");
?>

<div class="container">
    <div class="col-9 bg-white m-auto mt-5">

<table class="table">
  <tbody>
        <?php
        while($row = mysqli_fetch_array($rawData)){
    
    
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['list']?></td>
            <td style="width:8%"> <a href="update.php? ID=<?php echo $row['id']?> "class="btn btn-outline-warning">update</a>  </td>
            <td style="width:8%"> <a href="delete.php? ID=<?php echo $row['id']?>" class="btn btn-outline-danger">delete</a>  </td>
        </tr>  
        <?php
        }
        ?>
    
  </tbody>
</table>
</div> 
</div>  
</body> 
</html>