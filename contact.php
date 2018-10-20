<?php
include_once('codesw-hub-master/template_top.php');
?>
  <head>
    <title>Contact</title>
  </head>
  <body>

    <!-- Banner -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="slider">
              <h1>Contact Us</h1> 
              <p>Bringing local projects to life through out IT support;
                  tailoring to what is required<br>whilst adding a touch of personality.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="content">
      <div class="container">
        <br><br>
        <div class="row">
          <div class="col-md-12">
            <h4 class="contact-top">For any enquiries, please use the contact form below</h4>
            <br><br>
          </div>
        </div>
        <div class="contact-wrapper">
        <div class="col-md-12 left-contact">
          <div class="row">
              <!-- User needs to give consent to this form -->
            <form class="form-horizontal" action="sendMail.php" method="post">
              <br>
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" required="true">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" required="true">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="phone">Telephone Number:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="phone" name="phone" required="true">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="subject">Subject:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="subject" name="subject" required="true">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="message">Message:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="5" id="message" name="message" placeholder="Enter a message..." required="true"></textarea>
                </div>
              </div>
              <input type="submit" name="submit">
              <input type="reset">
            </p>
			<div class="col-md-12">
				<div class="row" style="padding-top: 20px;">
					<p class="contact-form">We take your privacy seriously and we will only use the details you provide to respond to your enquiry or in order to fulfil your request.<br />
						<label><input type="radio" name="optradio" value="Accept"> Accept</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label><input type="radio" name="optradio" value="Decline" checked="checked"> Decline</label>  
					</p>

					<p class="contact-form">We will never sell your data or share it with any third parties.  </p>

					<p class="contact-form">From time to time we would like to contact you with information about services that may be of benefit to you.<br />
						<label><input type="radio" name="optradio2" value="Accept"> Accept</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label><input type="radio" name="optradio2" value="Decline" checked="checked"> Decline</label>  
					</p>

					<p class="contact-form">If you wish to see what data we hold on you or wish to have your data deleted please email us on: <a href="mailto:info@codesw.co.uk">info@codesw.co.uk</a></p>
				</div>
			</div>
            </form>
          </div>
        </div>
        </div>
      </div>
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
