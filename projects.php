<?php
include_once('codesw-hub-master/template_top.php');
?>
  <head>
    <title>Projects</title>
  </head>
  <body>

    <!-- Banner -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="slider">
              <h1>Projects</h1> 
              <p>Bringing local projects to life through out IT support;
                  tailoring to what is required<br>whilst adding a touch of personality.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <h2 class="page-title"><u>Projects</u></h2>
            <br><br>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <!-- Trigger the modal -->
            <div class="project-container">
              <div class="project-hotel" data-toggle="modal" data-target="#myModal">
                <img src="codesw-hub-master/images/laptopcoffee.jpg" class="img-responsive img-rounded project-img" />
                <div class="overlay">
                  <div class="text"><strong>Hotel Reservation</strong><br />
                    <span class="project-description">Bringing Innovation To Booking Services</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="project-container">
              <div class="project-cake" data-toggle="modal" data-target="#myModal">
                <img src="codesw-hub-master/images/cake-decorating.jpg" class="img-responsive img-rounded project-img" /></a>
                <div class="overlay">
                  <div class="text"><strong>Cake Decorating</strong><br />
                    <span class="project-description">Personalised, Creative And Tasty!</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="project-container">
              <div class="project-tech" data-toggle="modal" data-target="#myModal">
                <img src="codesw-hub-master/images/techstore.fw.png" class="img-responsive img-rounded project-img" /></a>
                <div class="overlay">
                  <div class="text"><strong>The Tech Store</strong><br />
                    <span class="project-description">Ecommerce Website</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
			  <div class="project-container">
               <div class="project-burnham" data-toggle="modal" data-target="#myModal">
                <img src="codesw-hub-master/images/burnham-on-sea.jpg" class="img-responsive img-rounded project-img" /></a>
                <div class="overlay">
                  <div class="text"><strong>Burnham-on-Sea</strong><br />
                    <span class="project-description">Local Town Website</span></div>
                  </div>
                </div>
              </div>
            </div>
		  </div>
          </div>
        </div>
        <br><br>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="codesw-hub-master/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
// Include footer
include_once("codesw-hub-master/template_bottom.php");
?>
