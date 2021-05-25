<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require('config.php');
if(!isset($_SESSION['status']))
{
  echo "Please Login!";
  header("location:login.php");
}
?>
<style>
form.example input[type=text] {
  padding: 5px;
  font-size: 15px;
  border: 1px solid grey;
  float: left;
  width: 70%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 5px;
  background: #2196F3;
  color: white;
  font-size: 15px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                        <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                        <!--     i.ficon.feather.icon-menu-->
                    </ul>
                    <ul class="nav navbar-nav">
                    </ul>
                </div>
                <form class="example" action="process_search.php">
                  <input type="text" placeholder="Search.." id="s" name="s" value="">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"> <i class="feather icon-plus" onclick="parent.location='addProduct.php'">ADD POST</i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"> <i class="feather" onclick="parent.location='myad.php'">My POST</i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"> <i class="feather" onclick="parent.location='logout.php'">Log Out</i></a></li>



                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="profile.php" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                          <span class="user-name text-bold-600">
                            <?php
                            if(isset($_SESSION['status']))
                            {
                              echo $_SESSION['name'];
                            }
                            else{
                              echo "Please Login!";
                            }
                            ?>
                          </span>
                          <?php
                          echo '</div><span><img class="round" src="profile/'.$_SESSION['profile'].'" alt="avatar" height="40" width="40"></span>';
                          ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profile.php"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="addProduct.php"><i class="feather icon-mail"></i> Add Product</a>
                          <a class="dropdown-item" href="myad.php"><i class="feather icon-mail"></i> My Product</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- END: Header-->
