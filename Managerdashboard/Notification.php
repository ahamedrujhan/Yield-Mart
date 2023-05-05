<!--Notification-->
<?php
   include 'noticon.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
  }
body{
    padding: 0; margin: 0;
    min-height: 100%;
    background-color: #e9e9e9;
    background-image: repeating-radial-gradient(circle at 0 0, transparent 0, #e9e9e9 10px), repeating-linear-gradient(#a6b69555, #a6b695);
    opacity: 0.8;
    
}

  .container {
    
    width: 100%;
    height: 100%;
    
  }

  .sidebar {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 78px;
    background: #2d4a3e;
    padding: 6px 14px;
    z-index: 99;
    transition: all 0.5s ease;
  }

  .sidebar.open {
    width: 250px;
  }

  .sidebar .logo-details {
    height: 60px;
    display: flex;
    align-items: center;
    position: relative;
  }

  .sidebar .logo-details .icon {
    opacity: 0;
    transition: all 0.5s ease;
  }

  .sidebar .logo-details .logo_name {
    color: #fff;
    font-size: 2rem;
    font-weight: bold;
    opacity: 0;
    transition: all 0.5s ease;
  }

  .sidebar.open .logo-details .icon,
  .sidebar.open .logo-details .logo_name {
    opacity: 1;
  }

  .sidebar .logo-details #btn {
    position: absolute;
    top: 65%;
    right: 0;
    transform: translateY(-50%);
    font-size: 22px;
    transition: all 0.4s ease;
    font-size: 23px;
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
  }

  .sidebar.open .logo-details #btn {
    text-align: right;
  }

  .sidebar i {
    color: #fff;
    height: 60px;
    min-width: 50px;
    font-size: 28px;
    text-align: center;
    line-height: 60px;
  }

  .sidebar .nav-list {
    margin-top: 70px;
    height: 100%;
  }

  .sidebar li {
    position: relative;
    margin: 8px 0;
    list-style: none;
  }

  .sidebar li .tooltip {
    position: absolute;
    top: -20px;
    left: calc(100% + 15px);
    z-index: 3;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 15px;
    font-weight: 400;
    opacity: 0;
    white-space: nowrap;
    pointer-events: none;
    transition: 0s;
  }

  .sidebar li:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    top: 50%;
    transform: translateY(-50%);
  }

  .sidebar.open li .tooltip {
    display: none;
  }

  .sidebar input {
    font-size: 15px;
    color: #FFF;
    font-weight: 400;
    outline: none;
    height: 50px;
    width: 100%;
    width: 50px;
    border: none;
    border-radius: 12px;
    transition: all 0.5s ease;
    background: #1d1b31;
  }

  .sidebar.open input {
    padding: 0 20px 0 50px;
    width: 100%;
  }

  .sidebar .bx-search {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 22px;
    background: #1d1b31;
    color: #FFF;
  }

  .sidebar.open .bx-search:hover {
    background: #1d1b31;
    color: #FFF;
  }

  .sidebar .bx-search:hover {
    background: #FFF;
    color: #11101d;
  }

  .sidebar li a {
    display: flex;
    height: 100%;
    width: 100%;
    border-radius: 12px;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
    background: #11101D;
  }

  .sidebar li a:hover {
    background: #FFF;
  }

  .sidebar li a .links_name {
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: 0.4s;
  }

  .sidebar.open li a .links_name {
    opacity: 1;
    pointer-events: auto;
  }

  .sidebar li a:hover .links_name,
  .sidebar li a:hover i {
    transition: all 0.5s ease;
    color: #11101D;
  }

  .sidebar li i {
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    border-radius: 12px;
  }

  .sidebar li.profile {
    position: fixed;
    height: 60px;
    width: 68px;
    left: 0;
    bottom: -8px;
    padding: 10px 14px;
    background: #1d1b31;
    transition: all 0.5s ease;
    overflow: hidden;
  }

  .sidebar.open li.profile {
    width: 250px;
  }

  .sidebar li .profile-details {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
  }

  .sidebar li img {
    height: 45px;
    width: 45px;
    object-fit: cover;
    border-radius: 6px;
    margin-right: 10px;
  }

  .sidebar li.profile .name,
  .sidebar li.profile .job {
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    white-space: nowrap;
  }

  .sidebar li.profile .job {
    font-size: 12px;
  }

  .sidebar .profile #log_out {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    background: #1d1b31;
    width: 100%;
    height: 60px;
    line-height: 60px;
    border-radius: 0px;
    transition: all 0.5s ease;
  }

  .sidebar.open .profile #log_out {
    width: 50px;
    background: none;
  }

  .home-section {
    position: relative;
    background: #E4E9F7;
    min-height: 100vh;
    top: 0;
    left: 78px;
    width: calc(100% - 78px);
    transition: all 0.5s ease;
    z-index: 2;
  }

  .sidebar.open~.home-section {
    left: 250px;
    width: calc(100% - 250px);
  }

  .home-section .text {
    display: inline-block;
    color: #11101d;
    font-size: 25px;
    font-weight: 500;
    margin: 18px
  }

  .logo_name {
    font-family: 'Averia Serif Libre', cursive;
  }

    @media (max-width: 420px) {
      .sidebar li .tooltip {
        display: none;
      }
    }
.noti{
    font-family: 'Averia Serif Libre', cursive;
    padding-left:30%;
    margin-top: 25px;
    font-weight: bold;
    font-size: 25px;
}


.Content{
    font-family: 'Roboto', sans-serif;
    font-weight: 600;
    display:flex;
    justify-content: center;
}

.Content form{
  position: absolute;
  padding: 2rem;
  top: 58%;
  left: 50%;
  right: 50%;
  height: 455px;
  width: 600px;
  transform: translate(-40%,-50%);
  box-sizing: border-box;
  border-radius: 12px;
  border: 5px solid hsl(0, 0%, 90%);
  background-color: #F8F6F0;
  
  
}

input[type=text], textarea, select{
  width: 100%;
  height: 10%;
  padding: 5px 20px;
  margin: 25px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 12px;
  box-sizing: border-box;
  background-color: white;
}

textarea{
  height: 4rem;
}

.s_button {
  background-color: var(--color-primary);
  border: 2.5px solid transparent;
  border-radius: 12px;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 25px 270px;
  position: absolute;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  cursor: pointer;
}

.count{
  font-size: 15px;
  position: absolute;
  top: -5px;
  right: -4px;
  width: 20px;
  height: 20px;
  background: red;
  color: #ffffff;
  display: flex;
  justify-content: center;
  border-radius: 50%;

}

</style>
<body>
<?php
  include 'nheader.php'
?>


<div class="sidebar">
  <div class="logo-details">
    <div class="logo_name"> Yield Mart </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="mdashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li><br>
      
      <!-- Count Notification-->
      <?php
      $sql_get = mysqli_query($con, "SELECT * FROM notify WHERE status = 0");
      $count=mysqli_num_rows($sql_get);
      ?>
      <li>
        <a href="products.php">
          <i class="bx bx-bell notification-icon"></i>
          <span class="links_name">View Notification</span>
        </a>
        <span class="count" id="count">   
          <?php
              echo $count;
          ?>
        </span>
        <span class="tooltip">View Notification</span>
      </li><br>

      <li>
        <a href="technician.php">
          <i class="bx bx-send send-notification-icon"></i>
          <span class="links_name">Sent Notifications</span>
        </a>
        <span class="tooltip">Sent Notifications</span>
      </li><br>

      <li>
        <a href="email.php">
          <i class='bx bx-user '></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
      <br>
    </ul>
</div>
</div>

<div class="background">
<div class="noti"> Notification 
     <i class="bx bx-bell bx-tada bold-notification-icon"></i>
</div>
<div class="Content">
<form method = "post">
    <label for="user"> Send to </label>
    <select id="user" name="user">
      <option value="All">All</option>
      <option value="Farmer">Farmer</option>
      <option value="Whole sellers"> Whole sellers </option>
    </select>

    <label for="topic">Topic</label>
    <input type="text" id="topic" name="topic" placeholder="Type here">
    
    <div class="mes">
    <label for="mes"> Message </label>
    <textarea id="mes" name="mes" row="4" cols="50"> </textarea>
    </div>
    
    <button type="submit" name="send" class="s_button"> Send </button>
    
</form>
</div>
</div>

<?php

  include 'noticon.php';

  if(isset($_POST['send'])){
    $user = $_POST['user'];
    $mes=$_POST['mes'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('y-m-d H:i:s');
    $topic=$_POST['topic'];
    $sql_send="INSERT INTO notify(user, message, cr_date, topic) VALUES('$user', '$mes', '$date', '$topic')";

    $sql_insert = mysqli_query($con,$sql_send);
    if($sql_insert)
    {
      echo "<script>";
      echo "alert('Message send Successfully');";
      echo "</script>";
    }
    else
    {
      echo mysql_error($con);
      exit;
    }
  }
?>


  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
      }
    }
  </script>

  </div>
</body>

</html>
</body>
</html>