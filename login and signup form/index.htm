<?php 
  session_start();
  include 'php/db.php';
  $unique_id = $_SESSION['unique_id'];
  $email = $_SESSION['email'];
  if(empty($unique_id))
  {
      header ("Location: login.php");
  } 
  $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
  if(mysqli_num_rows($qry) > 0){
    $row = mysqli_fetch_assoc($qry);
    if($row){
      $_SESSION['Role'] = $row['Role'];
      if($row['verification_status'] != 'Verified')
      {
        header ("Location: verify.php");
      } 
  }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/loader.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap");
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", "sans-serif";
      }
      body{
        position: relative;
        width: 100%;
        height: 100vh;
      }
      a{
        text-decoration: none;
      }
      ul{
        list-style: none;
      }
      body{
        position: relative;
        width: 100%;
      }
      #header{
        display: flex;
        justify-content: space-between;
        padding: 25px;
        background: #ddd;
      }
      #header a.Logo h1{
        text-transform: uppercase;
        color: #006692;
      }
      button.logout_btn{
        padding: 9px 25px;
        background-color: #006692;
        border-radius: 8px;
        border: 1px solid #00b3ff;
        cursor: pointer;
        transition: all 0.3s ease 0s;
        color: #f2f3f7;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
      }
      section{
        margin: 40px;
      }
      span{
        color: #006698;
        cursor: pointer;
        text-decoration: underline;
      }
    </style>
</head>
<body>  

    <header id="header">
        <a href="#" class="Logo"><h1>Logo</h1></a>
        <nav>
            <ul class="navigation">
                <li><a href="php/logout.php?logout_id=<?php echo $unique_id?>"><button class="logout_btn">Log Out</button></a></li>
            </ul>
        </nav>
    </header>

<section>
    <h2>Welcome : <span><?php echo $email;?></span></h2>
</section>

<div id="loader">
  <div class="loader row-item">
	<span class="circle"></span>
	<span class="circle"></span>
	<span class="circle"></span>
	<span class="circle"></span>
	<span class="circle"></span>
</div>
<script>
    $(document).ready(function() {
    //Preloader
    preloaderFadeOutTime = 1200;
    function hidePreloader() {
    var preloader = $('#loader');
    preloader.fadeOut(preloaderFadeOutTime);
    }
    hidePreloader();
    });
    </script>
</body>
</html>