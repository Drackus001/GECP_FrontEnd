<!-- Head start -->
<?php
$title = "Profile :: Government Engineering College, Patan";
include_once './templates/head.php';
?>
<!-- Custom styles for this template -->
<link href="css/profileCss.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
  
</head>
<!-- Head End -->

<body id="page-top">  

    <!--Loader start-->
    <?php
    include_once './templates/loader.php';
  ?>
  <!-- Loader end -->

  <!-- Navigation Start -->
  <?php
  include_once './templates/nav.php';
  ?>
  <!-- Navigation End -->

  <div id="parallax">
      <div class="parallax"></div>
      <h2>Mr. HARIKRISHNA JETHVA</h2>
  </div>

  <div class="container-fluid profile-section">
    <div class="row">
      <!--profileCard-->
      <div class="col-md-4 profile-div">
        <div class="container-fluid breadcrumb-modern">
          <div class="profile-card">
          <img src="img/team/1.jpg" class="profile-img thumbnail" alt="John">
          <h3>Mr. HARIKRISHNA JETHVA</h3>
          <p class="title">Associate Professor</p>
          <p>PhD.</p>
          <p>Neural Network, Theory of Computation, Compiler design, Soft computing, Algorithms</p>
          <div> 
            <a href="#"><i class="fa fa-envelope"></i></a> 
            <a href="#"><i class="fa fa-phone"></i></a>   
          </div>
        </div>
        </div>
      </div>
      <!--Details -->
      <div class="col-md-8">
        <div class="container-fluid">
          <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#personal">Personal Details</a></li>
            <li><a data-toggle="pill" href="#qual">Qualification Details</a></li>
            <li><a data-toggle="pill" href="#workxp">Work Experience</a></li>
            <li><a data-toggle="pill" href="#portF">Portfolios</a></li>
            <li><a data-toggle="pill" href="#workshop">Training and Workshop</a></li>
          </ul>
          
          <div class="tab-content">
            <div id="personal" class="tab-pane fade in active">
              <div class="detail">
                <div class="col-md-12 text-left">
                  <h2 class="section-heading text-uppercase">Personal Details :</h2>
                </div>
                <div class="col-md-12">
                  <table class="table table-hover">
                    <tr>
                      <td>Name:</td>
                      <td>JETHVA HARIKRISHNA B.</td>
                    </tr>
                    <tr>
                      <td>Date of birth:</td>
                      <td>30th  July 1979</td>
                    </tr><tr>
                      <td>Marital status:</td>
                      <td>Married</td>
                    </tr><tr>
                      <td>Address:</td>
                      <td>4 Shrinagar society, Patan(N.G.) </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div id="qual" class="tab-pane fade">
              <div class="detail">
                <div class="col-md-12 text-left">
                  <h2 class="section-heading text-uppercase">Qualification Details :</h2>
                </div>
                <div class="col-md-12">
                  <table class="table table-hover">
                    <tr>
                      <th>Degree</th>
                      <th>Specification</th>
                    </tr>
                    <tr>
                      <td>B.E.</td>
                      <td>Computer Engineering</td>
                    </tr><tr>
                      <td>M.E.</td>
                      <td>Computer Engineering</td>
                    </tr><tr>
                      <td>Ph.D.</td>
                      <td>Performance Improvement of Backpropagation Algorithm in Artificial Neural Network</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div id="workxp" class="tab-pane fade">
              <div class="detail">
                <div class="col-md-12 text-left">
                  <h2 class="section-heading text-uppercase">Work Experience :</h2>
                </div>
                <div class="col-md-12">
                  <ol>
                    <li>Highway/Traffic Engineer at SAI Consulting Engineers PVT. LTD. (1 Year)</li>
                    <li>Assistant Professor - Sankalchand Patel College of Engineering Visnagar (4 years)</li>
                    <li> Assistant Professor, Government Engineering College, Patan (since 12-07-2017)</li>
                  </ol>
                </div>
              </div>
            </div>
            <div id="portF" class="tab-pane fade">
              <div class="detail">
                <div class="col-md-12 text-left">
                  <h2 class="section-heading text-uppercase">Portfolio :</h2>
                </div>
                <div class="col-md-12">
                  <ol>
                    <li>Departmental Student section Coordinator</li>
                    <li>Departmental Training and Placement Coordinator</li>
                  </ol>
                </div>
              </div>
            </div>
            <div id="workshop" class="tab-pane fade">
              <div class="detail">
                <div class="col-md-12 text-left">
                  <h2 class="section-heading text-uppercase">Training and Workshop :</h2>
                </div>
                <div class="col-md-12">
                  <ul>
                    <li>Taken training on " Wireless Communication " at NITTTR, Chandigarh during 07-11 May 2007.</li>
                    <li>Taken training on “LINUX “at NITTTR, Chandigarh during 14-may-2007 to 18-may-2007.</li>
                    <li>Taken training on "Institute Accreditation and Quality Improvement” at NITTTR, Chandigarh during 11-15 may 2009.  </li>
                    <li>Taken training on “Entrepreneurship Development using Blue ocean strategies" at NITTTR, Chandigarh during 18-22 may 2009.</li>
                    <li>“Entrepreneurship Skill for Service Sector” 14 to 18 Sept. 2009 at NITTTR Extension centre Ahmedabad.</li>
                    <li>Taken training on “Computational and Simulation aspects of Nanoscience and Engineering at GEC, Patan during 18-21 Jan 2010.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start-->
  <?php
  include_once './templates/footer.php';
  ?>
  <!-- Footer End -->
	
	<!-- Bootstrap core JavaScript Start-->
  <?php
  include './templates/scripts.php';
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Bootstrap core JavaScript End-->
</body>

</html>
