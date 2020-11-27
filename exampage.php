<?php
ob_start();
session_start();
include('includes/config.php');
if (empty($_SESSION['alogin'])) {
  header('Location: index.php');
  
  # code...
}

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.jpg">
    <link href="album.css" rel="stylesheet">

    <title>WELCOME TO ROEMICHS ONLINE ENTRANCE EXAM</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <style>
    
    
#videos {
    position: relative;
    width: 100%;
    height: 100%;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid blue;
	display: flex;
    flex-wrap: wrap;
    flex-direction: row;
     
     
}

#subscriber {
   
    width: 100%;
    height: 100%;
    float: left;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    
 
    
}

#publisher {
    position: absolute;
    width: 50%;
    height: 240px;
    float:right;
    border: 5px solid green;
    border-radius: 12px;
    bottom:0;
    right:0;
   
   
}
        </style>
    </head>
  <body>

  	     <table class="table table-hover table-bordered table-center">
  	     	<thead> <tr>
  	     		        <th colspan="3" class="bg-dark">
  	     		        <h1 class="text-white text-center">Roemichs International Schools</h1>
  	     		        <h3 class="text-white text-center"> CBT </h3>
  	     		        </th>

  	     		    </tr>
  	     		    <tr>
  	     		    	<td>Instructions</td>
  	     		    	<td colspan="2">Do not start your exam unless, you are told to do so. </td>
  	     		    </tr>
                 <?php 
                  $admission = $_SESSION['alogin'];
                 $sql =  "SELECT * FROM tblstudents WHERE admission = '$admission' LIMIT 1";
                 $result = $connection->query($sql);
                 $row =mysqli_fetch_array($result);

                 ?>
                <tr>
                   <td></td>
                  <td colspan="2"><ul><li><strong>NAME: </strong> <?php echo $row['StudentName']." ".$row['surname'] ?></li>
                  <li><strong>ADMISSION NUMBER: </strong><?php echo $row['admission']; ?></li>
                  <li> <strong>GENDER: </strong><?php echo $row['Gender']; ?></li>
                  
                  </ul></td>
                   <td> </td>
                </tr>

               <tr>
      
                  <td colspan="2">
                  
 
<?php 

$sql= "SELECT * FROM  exam_details WHERE activation = 'activated'";
$result = $connection->query($sql);
while($row = mysqli_fetch_array($result)){




?>
<a href="exam.php?exam_details=<?php echo $row['exam_name'];?>&cat_details=<?php echo $row['cat_name']; ?>" class="btn btn-success"><?php echo $row['exam_name']; ?></a>

<?php } ?>


</select>
                  </td>

                </tr>
  	     	</thead>
           
         

  	     	
  	     </table>


         
  	     
  	       

  
       

  	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
  </body>
</html>
