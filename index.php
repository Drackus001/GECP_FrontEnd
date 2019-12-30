<!-- Head start -->
<?php
$title = "Home :: Government Engineering College, Patan";
include_once './templates/head.php';
?>
<!-- Custom fonts for this template -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="css/slider/css/slicebox.css" rel="stylesheet">
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

  <!-- Slider start -->
<?php
include_once './templates/slider.php';
 ?>
  <!--/ Slider end -->

<!-- <a href="profile.php">detail profile </a><br> -->

<!--News Start-->
  <section class="page-section" id="temp">
    <div class="container-fluid">
      <div class="row">
          <div class="col-xs-6 col-lg-8 text-center">
                          <?php
                            $sql = "SELECT vision,mission FROM college_info;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                            
                            
                                while ($row = mysqli_fetch_assoc($result)) {
                                  echo '<h2 class="section-heading text-uppercase">Mandate</h2><hr>
                                  <p class="text-left">To impart the technical education as per the state and national policy which satisfy the current needs of the society, to interact with the industry and research organizations for the integrated growth, to make the liaison with statutory and professional organizations and to provide the training and research opportunities to the student and faculties in best possible manner. </p><br><br>';
                                  echo '<h2 class="section-heading text-uppercase">Vision</h2><hr>
                                  <p class="text-left">'.$row['vision'].' </p><br><br>';

                                  echo '<h2 class="section-heading text-uppercase">Mission</h2><hr>
                                  <ul>
                                  <li class="text-left">To deliver technical programs and services to cater the current needs of society and industry.</li>
                                  <li class="text-left">Helping industries in solving challenges by means of providing best technical human resources.</li>
                                  <li class="text-left">To contribute in sustainable growth of society.</li>
                                  </ul>
                                  ';
                                  
                                }
                                
                            } else {
                                echo 'SQL ERROR';
                            }
                            ?>
            </div>

          <!-- News Box Start -->
            <?php
            include './templates/newsBox.php';
             ?>
          <!-- News Box End -->

      </div>
    </div>  
  </section>
  <!--News End-->

  <!-- Courses Grid Start -->
  <?php
  include './templates/courses.php';
   ?>
  <!-- Courses Grid End -->

  <!-- About Start-->
  <?php
  include './templates/about.php';
   ?>
  <!-- About End -->

  <!-- ADD-ON Start-->
  <section class="bg-light page-section center" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amenities</h2>
          <h3 class="section-subheading text-muted">GEC,Patan provides many facilities within campus</h3>
        </div>
      </div>
      <div class="row">
      	<div class="flip-card col-md-4 col-sm-6 col-xs-6  " data-aos="flip-left">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="img/campus-map.jpg" alt="Campus" style="width:300px;height:300px;">
		    </div>
		    <div class="flip-card-back">
		      <img src="img/campus-map.jpg" alt="Campus" style="width:300px;height:300px;">
		    </div>
		  </div>
		  <div>
		    <h4>Campus Visit</h4>
		  </div>
		</div>
		<div class="flip-card col-md-4  col-xs-6 col-sm-6" data-aos="flip-left">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="img/facility.jpg" alt="Facilities" style="width:300px;height:300px;">
		    </div>
		    <div class="flip-card-back">
		      <img src="img/facility.jpg" alt="Facilities" style="width:300px;height:300px;">
		    </div>
		  </div>
		  <div>
		    <h4>Facilities</h4>
		  </div>
		</div> 
		<div class="flip-card col-md-4 col-sm-6" data-aos="flip-left">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="img/library.jpg" alt="Library" style="width:300px;height:300px;">
		    </div>
		    <div class="flip-card-back">
		      <img src="img/library.jpg" alt="Library" style="width:300px;height:300px;">
		    </div>
		  </div>
		  <div>
		    <h4>Library Centre</h4>
		  </div>
		</div> 
		<div class="flip-card col-md-4 col-sm-6" data-aos="flip-left">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="img/studentSction.jpg" alt="StudentSec" style="width:300px;height:300px;">
		    </div>
		    <div class="flip-card-back">
		      <img src="img/studentSction.jpg" alt="StudentSec" style="width:300px;height:300px;">
		    </div>
		  </div>
		  <div>
		    <h4>Student Section</h4>
		  </div>
		</div> 
		<div class="flip-card col-md-4 col-sm-6 " data-aos="flip-left">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="img/lectureSeries.jpg" alt="Lecture" style="width:300px;height:300px;">
		    </div>
		    <div class="flip-card-back">
		      <img src="img/lectureSeries.jpg" alt="Lecture" style="width:300px;height:300px;">
		    </div>
		  </div>
		  <div>
		    <h4>Lecture Series</h4>
		  </div>
		</div>
      </div>
    </div>
  </section>
  <!-- ADD ON End -->

  <!-- Footer Start-->
  <?php
  include_once './templates/footer.php';
  ?>
  <!-- Footer End -->
	
	<!-- Bootstrap core JavaScript Start-->
  <?php
  include './templates/scripts.php';
  ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <!-- Bootstrap core JavaScript End-->
  
  	<script>
  		// /*animation*/
      // setTimeout(function(){
      //   $('.loader-bg').fadeOut();
      // },1500);
      AOS.init({duration:1100});
      /*news*/
  		$(function(){
  		  var tickerLength = $('.news-list ul li').length;
  		  var tickerHeight = $('.news-list ul li').outerHeight();
  		  $('.news-list ul li:last-child').prependTo('.news-list ul');
  		  $('.news-list ul').css('marginTop',-tickerHeight);
  		  function moveTop(){
  		    $('.news-list ul').animate({
  		      top : -tickerHeight
  		    },200, function(){
  		     $('.news-list ul li:first-child').appendTo('.news-list	 ul');
  		      $('.news-list ul').css('top','');
  		    });
  		   }
  		  setInterval( function(){
  		    moveTop();
  		  }, 1100);
		  });
    </script>
    <!--slider-->
    <script>
        window.onload = function() {
        "use strict";
        //autoplay true=on, false=off
        var autoplay = true;

        //slideshow autoplay timing in ms
        var autoTime = 3000;

        //vars
        var tracker = 0,
          slidewindow = document.querySelector("#slideshow #slidewindow"),
          slides = document.querySelectorAll("#slideshow #slidewindow div"),
          next = document.querySelector("#slideshow #controls #next"),
          prev = document.querySelector("#slideshow #controls #prev"),
          dots = document.querySelector("#slideshow #controls #dots"),
          allDots = dots.getElementsByTagName("LI");

        //Attach click events to next and prev
        next.onclick = direction;
        prev.onclick = direction;

        //create a dot for each slide
        for (var i = 0; i < slides.length; i++) {
          var dot = document.createElement("LI");
          dot.id = i;
          dots.appendChild(dot);
          dot.onclick = direction;
        }

        //run function on resize
        window.onresize = updateAll;

        //invoke updateAll
        updateAll();

        //update slide and container sizes
        function updateAll() {
          updateDots(tracker);

          //set width of slidewindow to 100%
          slidewindow.style.width = "100%";

          //Get current width and height
          var curWidth = slides[0].offsetWidth;
          var curHeight = slides[0].offsetHeight;

          //set current w/h of slidewindow to match slide
          slidewindow.style.width = curWidth + "px";
          slidewindow.style.height = curHeight + "px";

          //set position of each slide
          for (var i = 0; i < slides.length; i++) {
            console.log(slides[i].style.transform)
            slides[i].style.transform = "translateX(" + (i * curWidth + tracker * curWidth) + "px )";
          }
        }

        function isNumber(obj) {
          return !isNaN(parseFloat(obj));
        }

        //autoplay
        if (autoplay === true) {
          setInterval(function() {
            if (tracker > 1 - slides.length) {
              tracker -= 1;
            } else if (tracker === 1 - slides.length) {
              tracker = 0;
            } else if (tracker < 0) {
              tracker += 1;
            } else if (tracker === 0) {
              tracker = -slides.length + 1;
            }
            updateAll();
          }, autoTime);
        }

        function direction(eventObject) {
          //get id from target
          var idVal = eventObject.target.id;

          if (idVal === "next" && tracker > 1 - slides.length) {
            tracker -= 1;
          } else if (idVal === "next" && tracker === 1 - slides.length) {
            tracker = 0;
          } else if (idVal === "prev" && tracker < 0) {
            tracker += 1;
          } else if (idVal === "prev" && tracker === 0) {
            tracker = -slides.length + 1;
          } else if (isNumber(idVal)) {
            tracker = -idVal;
          }
          updateAll();
        }

        //updateDots
        function updateDots(n) {
          n *= -1;
          for (var i = 0; i < allDots.length; i++) {
            allDots[i].className = "";
          }
          allDots[n].className = "active";
        }

        //swipe event listeners
        slidewindow.addEventListener("touchstart", handleTouchStart, false);
        slidewindow.addEventListener("touchmove", handleTouchMove, false);

        //swipe vars
        var xDown = null;
        var yDown = null;

        //swipe handleTouchStart
        function handleTouchStart(evt) {
          xDown = evt.touches[0].clientX;
          yDown = evt.touches[0].clientY;
        }

        //swipe handleTouchMove
        function handleTouchMove(evt) {
          if (!xDown || !yDown) {
            return;
          }

          var xUp = evt.touches[0].clientX;
          var yUp = evt.touches[0].clientY;

          var xDiff = xDown - xUp;
          var yDiff = yDown - yUp;

          if (Math.abs(xDiff) > Math.abs(yDiff)) {
            /*determine most significant*/
            if (xDiff > 0) {
              //swipe left - next
              if (tracker > 1 - slides.length) {
                tracker -= 1;
              } else if (tracker === 1 - slides.length) {
                tracker = 0;
              }
              updateAll();
            } else {
              //swipe right - prev
              if (tracker < 0) {
                tracker += 1;
              } else if (tracker === 0) {
                tracker = -slides.length + 1;
              }
              updateAll();
            }
          } else {
            if (yDiff > 0) {
              //swipe up
            } else {
              //swipe down
            }
          }

          /* reset values */
          xDown = null;
          yDown = null;
        }
      };

    </script>
        
</body>

</html>
