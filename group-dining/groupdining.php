<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
<!-- Mirrored from www.masala-restaurant.com/sanfrancisco/groupdining.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2015 07:36:45 GMT -->
<!-- Added by HTTrack -->
<!-- Mirrored from masalafresno.com/group-dining/groupdining.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2016 06:40:06 GMT -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Curry Express Indian Bistro</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link href="../css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/sf.css" rel="stylesheet" type="text/css" media="all" />
		
		
   	<link href="../css/datepicker3.css" rel="stylesheet" type="text/css" media="all" />
   	
    <!-- load jQuery and the plugin -->
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    
			<script src="../js/jquery.validate.html"></script>
			<script src="../js/bootstrap-datepicker.js"></script>
		
    <script type="text/javascript">
        
					$(document).ready(function() {
						$("#contactform").validate();
						
							$('#event_date').datepicker({keyboardNavigation: false, forceParse: false, autoclose: true});
						
						jQuery.validator.addMethod("lettersonly", function(value, element) {
								return this.optional(element) || /^[a-z]+$/i.test(value);
						}, "Letters only please");
					});
				
    </script>    
    <script type="text/javascript">
        $(function() {
            var biz_hours = [];
						var biz_days = [];
						var i =0;
				
						biz_hours[i] = "12:00 PM - 03:00 PM , 05:00 PM - 10:00 PM";
						biz_days[i] = "Sun";
						i = i + 1;
	
						biz_hours[i] = "11:30 AM - 02:30 PM , 05:00 PM - 10:00 PM";
						biz_days[i] = "Mon";
						i = i + 1;
	
						biz_hours[i] = "11:30 AM - 02:30 PM , 05:00 PM - 10:00 PM";
						biz_days[i] = "Tue";
						i = i + 1;
	
						biz_hours[i] = "11:30 AM - 02:30 PM , 05:00 PM - 10:00 PM";
						biz_days[i] = "Wed";
						i = i + 1;
	
						biz_hours[i] = "11:30 AM - 02:30 PM , 05:00 PM - 10:00 PM";
						biz_days[i] = "Thu";
						i = i + 1;
	
						biz_hours[i] = "11:30 AM - 02:30 PM , 05:00 PM - 10:30 PM";
						biz_days[i] = "Fri";
						i = i + 1;
	
						biz_hours[i] = "12:00 PM - 03:00 PM , 05:00 PM - 10:30 PM";
						biz_days[i] = "Sat";
						i = i + 1;
				
						var d = new Date();
						var today = d.getDay();
						var tomorrow = (today + 1)%7;
						var today_hours = biz_hours[today].split(',');
            var tom_hours = biz_hours[tomorrow].split(',');
            var th ="";
            var tmh = "";
            for(var i=0; i< today_hours.length; i++)
            {
              th += today_hours[i] + "<br/>";
            }
            for(var i=0; i< tom_hours.length; i++)
            {
              tmh += tom_hours[i] + "<br/>";
            }
						$("#biz-todays-hours").html("<b>" + biz_days[today] + " : </b>" + "<span style='font-size:90%'>" + th + "</span>");
						$("#biz-tomorrows-hours").html("<b>" + biz_days[tomorrow] + " : </b>" + "<span style='font-size:90%'>" + tmh + "</span>");
        });
    </script>
  </head>

  <body>
    
    <div class="header">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=" #bs-navbar-collapse-1" style="background-color:#7c1b0b"> 		<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="../homepage/index.html"><img src="../images/logo/restaurantlogo.jpg"/></a> </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-navbar-collapse-1" style="background-color:#C2C2A3;">
          <ul class="nav navbar-nav navbar-right" style="margin-top:2%;margin-right:2%;">
            <li > <a href="../homepage/index.html" class="active" style="color:#7c1b0b; font-size:26px;">Home</a> </li>
            <li > <a href="../menu/menu.html" style="color:#7c1b0b; font-size:26px;">Menu</a> </li>
            <li > <a href="../galleries/gallery.html" style="color:#7c1b0b; font-size:26px;">Gallery</a> </li>
           <!-- <li > <a href="groupdining.php" style="color:#7c1b0b; font-size:26px;text-decoration:underline;">Group Dining</a> </li>-->
            <li > <a href="../catering/catering.php" style="color:#7c1b0b; font-size:26px;">Catering</a> </li>
            <li > <a href="../contact/contact.php" style="color:#7c1b0b; font-size:26px;">Contact Us</a> </li>
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </div>
    
        <div class="container margin146" style="margin-top:-7%;">
    	<h1>PLAN YOUR NEXT  GROUP DINNER, BIRTHDAY, CORPORATE GATHERING OR ANNIVERSARY  at "Curry Express Indian Bistro"!</h1>
      <p align="justify">
"Curry Express Indian Bistro"  elegant,vibrant and versatile space could be utilized to suit a  wide array of events from casual family dinner to formal wedding receptions or a corporate gathering. Depending on your preferences, group needs, and the number of guests, we offer many flexible dining and event options that can be easily customized for groups as small as 10 to as large as 50 people!
        <br />
        <br />
			</p>
			<p align="justify">
        Our Restaurant Manager will assist  you  to create an enjoyable, personalized and successful event. Get in touch with him for  pricing and services for buy outs, group dining & catering at Masala Restaurant Fresno, you can reach through phone at (469) 264-7999
        <br />
        <br />

        Please send us your details so that we can contact you.     
      </p>
      <form class="form-horizontal" style="margin-left:20%" role="form" name="contactform" id="contactform" method="POST" action="#">
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Name<span style="color:red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="firstname" placeholder="First name" name="first_name" required><br/>
						<input type="text" class="form-control" id="lastname" name="last_name" placeholder="Last name">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-3 control-label">Email<span style="color:red">*</span></label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email" placeholder="" name="email" required>
					</div>
				</div>
				<div class="form-group">
					<label for="phone" class="col-sm-3 control-label">Phone<span style="color:red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="phone" placeholder="" name="phone" required>
					</div>
				</div>
				<div class="form-group">
					<label for="phone" class="col-sm-3 control-label">How would you prefer to be contacted?</label>
					<div class="col-sm-4">
						<label class="checkbox-inline pull-left">
							<input type="checkbox" id="phone_contact" value="phone" name="contact_phone"> Phone
						</label>
						<label class="checkbox-inline pull-left">
							<input type="checkbox" id="email_contact" value="email" name="contact_email">Email
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="company" class="col-sm-3 control-label">Company</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="company" placeholder="" name="company">
					</div>
				</div>
				<div class="form-group">
					<label for="event" class="col-sm-3 control-label">Your event details</label>
					<div class="col-sm-4">
						<textarea name="event_details" rows="6" class="form-control" id="event_details" placeholder="Nature of this Event (e.g. Birthday Party or Business Dinner)"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="event_date" class="col-sm-3 control-label">Event Date<span style="color:red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="event_date" placeholder="" name="date" required>
					</div>
				</div>
				<div class="form-group">
					<label for="start_time" class="col-sm-3 control-label">Event Time</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="start_time" placeholder="Start Time" name="start_time"><br/>
						<input type="text" class="form-control" id="start_time" placeholder="End Time" name="end_time">
					</div>
				</div>
				<div class="form-group">
					<label for="no_of_people" class="col-sm-3 control-label">Number of people</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="no_of_people" placeholder="" name="guests">
					</div>
				</div>
				<div class="form-group">
					<label for="msg_to_amber" class="col-sm-3 control-label">Message to Curry Express Indian Bistro<span style="color:red">*</span></label>
					<div class="col-sm-4">
						<textarea name="msg_to_amber" rows="6" class="form-control" id="msg_to_amber" placeholder="Is there any additional information you would like to add?" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-4">
						<button type="submit" name="submit" class="btn btn-success pull-left btn-submit">Submit</button>
					</div>
				</div>
			</form>
             <?php include "mail2.php"?>
    </div>

<div id="footer-wrapper">
      <div class="row">
        <div class="col-md-3" >
        <div class="footer-part">
        	<h3>SOCIAL MEDIA</h3>
        	<br><br>
        	<div align="center">
        	<p>
        		<a href="#" style="color:#FFFFFF"><img src="../images/facebook-icon.png" height="30" width="30" target="_blank"></a>&nbsp;&nbsp;&nbsp;
        		<a href="#" style="color:#FFFFFF"><img src="../images/Twitter-icon-4.png" height="30" width="30" target="_blank"></a>&nbsp;&nbsp;&nbsp;
        		<a href="#" style="color:#FFFFFF"><img src="../images/yelp32px.png" height="30" width="30" target="_blank"></a>
        	</p></br></br>
            <a href="http://www.emenglobal.com" style="color:#000000;font: italic bold 12px/30px Georgia, serif;">© 2016 eMeN Global Solutions ALL RIGHTS RESERVED.</a>
        	
        	</div>
        	</div>
        	
        </div>
        
        <div class="col-md-3">
        	<div class="footer-part">
        	<h3>Site Map</h3>
        	<div align="center" style="margin-top:16%">
        	<p>
        		<a href="../menu/menu.html" style="color:#FFFFFF">Menu</a><br/>
        		<!--<a href="groupdining.php" style="color:#FFFFFF">Group Dining</a><br/>-->
        		<!--<a href="../online-order/onlineorder.php"  style="color:#FFFFFF">Order Online</a><br/>-->
        		<a href="../catering/catering.php" style="color:#FFFFFF">Catering Order</a><br/>
        		
        		
        	<a href="../table-reservation/bookmytable.php" style="color:#FFFFFF">Reservation</a><br/>
        		</a><br/>
        	</p>
        	
        	</div>
        	</div>
        </div>
         <div class="col-md-3"  >
        <div class="footer-part">
         <h3>Working Hours</h3>
      
        <div  align="center" style="margin-top:0%;text-alignment:center">
            LUNCH HOURS
         <p style="font-size:15px;margin-top:0%;">Tuesday- Sunday : 11:00am - 2:30pm
          </p>
		 <div  align="center" style="margin-top:0%;text-alignment:center">
         DINNER HOURS
            <p style="font-size:15px;margin-top:0%";>
            Tuesday - Thursday  : 5:00pm - 9:00pm</br>

			Friday - Saturday  : 5:00pm - 9:30pm</br>
			Sunday: 5:00pm - 8:00pm</br>
             <b>Monday: Closed</b>
          </p>	


</div>
</div>
</div>
</div>





<div class="col-md-3" style="text-align:left">
        	<div class="footer-part">
          <h3>Contact Info</h3>
          <div align="center">
              <p >
		    2014 South Goliad ,<br/>
		       
		           street 140<br/>
		        Rockwall TX 75087
		        <br/>
		        Phone:(469) 264-7999<br/><br/>
          </p>
          </div>
           </div>
        </div>
      </div>
    </div>
    
    
  </body>


<!-- Mirrored from masalafresno.com/group-dining/groupdining.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2016 06:40:10 GMT -->
</html>