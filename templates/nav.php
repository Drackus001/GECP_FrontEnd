 <!-- Navigation Start -->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
      	<div class="row clg-brand">
  			<div class="col-lg-2 clg-img">
  				<img class="img-fluid float-left" src="img/logos/gec.png" alt="logo">
  			</div>
  			<div class="col-md-6 clg-head">
  				<h5 >Government Engineering College,Patan</h5>
      			<h6 >( Under Directorate of Technical Education )</h6>
  			</div>
      	</div>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
        <li class="active nav-link js-scroll-trigger"><a href="index.php">Home</a></li>

                            <?php
                            $sql = "SELECT name,id FROM departments;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                            echo '<li class="dropdown">
                            <a class="dropdown-toggle nav-link js-scroll-trigger" data-toggle="dropdown" href="#">Departments
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">';
                                while ($row = mysqli_fetch_assoc($result)) {
                                  echo '<a href="department_info.php?dept='.$row['id'].'"><li class="dropdown-item">'.$row['name'].'</li>  </a>';
                                }
                                echo '</ul>
                                </li>';
                            } else {
                                echo 'SQL ERROR';
                            }
                            ?>
        
        <li class="dropdown">
          <a class="dropdown-toggle nav-link js-scroll-trigger" data-toggle="dropdown" href="#">Campus
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <a href="#"><li class="dropdown-item">Library</li> <li class="divider"></li></a>
          <a href="#"><li class="dropdown-item">Canteen</li> <li class="divider"></li></a>
          <a href="#"><li class="dropdown-item">Hostels</li> <li class="divider"></li></a>
          <a href="#"><li class="dropdown-item">Workshop</li> <li class="divider"></li></a>
        </ul>
        </li>

        <?php
                            $sql = "SELECT name,id FROM commities;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                            echo '<li class="dropdown">
                            <a class="dropdown-toggle nav-link js-scroll-trigger" data-toggle="dropdown" href="#">Commities
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">';
                                while ($row = mysqli_fetch_assoc($result)) {
                                  echo '<a href="commity_info.php?commity='.$row['id'].'"><li class="dropdown-item">'.$row['name'].'</li>  </a>';
                                }
                                echo '</ul>
                                </li>';
                            } else {
                                echo 'SQL ERROR';
                            }
                            ?>

        <li><a class="nav-link js-scroll-trigger" href="#footer">Gallery</a></li>
        <li><a class="nav-link js-scroll-trigger" href="downloads.php">Downloads</a></li>
        <li><a class="nav-link js-scroll-trigger" href="#footer">Contact Us</a></li>
        </ul>

      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
  <!-- Navigation End -->