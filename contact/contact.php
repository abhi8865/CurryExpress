<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
<!-- Mirrored from www.masala-restaurant.com/sanfrancisco/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2015 07:36:53 GMT -->
<!-- Added by HTTrack -->
<!-- Mirrored from masalafresno.com/contact/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2016 06:40:10 GMT -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Curry Express Indian Bistro</title>
    
<meta name="keywords" 
         content="indian, online,food,order online, fresno, restaurant, masala, vegetarian, nonvegetarian, south indian,biryani, naan, kheer, lassi, samosa, lunch,         dinner, panjabi, paneer, indian food,  chicken, rice, .">
	 <meta name="description" 
         content="  Welcome to "Masala Restaurant" 3209, W Shaw Ave, Suite 105, Fresno, CA. Come be our guest and let us take all of your                  senses on an exotic culinary journey.">
    <meta name="keywords" 
    	 content="indian restaurant, fresno indian restaurant, indian restaurant in fresno, masala indian restaurant, restaurant in                  fresno, indian food menu, indian food, online food in fresno, online food order, indian food, indian restaurant in fresno ca, indian food in fresno, best indian restraunt in fresno, best restraunt in fresno. ">
    <meta name="description" 
         contant="PLAN YOUR NEXT GROUP DINNER, BIRTHDAY, CORPORATE GATHERING OR ANNIVERSARY at Masala Restaurant!.">




    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link href="../css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/sf.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/responsivemobilemenu.css" type="text/css"/>
   <script src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        
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
         <!--   <li > <a href="../group-dining/groupdining.php" style="color:#7c1b0b; font-size:26px;">Group Dining</a> </li>-->
            <li > <a href="../catering/catering.php" style="color:#7c1b0b; font-size:26px;">Catering</a> </li>
            <li > <a href="contact.php" style="color:#7c1b0b; font-size:26px;text-decoration:underline;">Contact Us</a> </li>
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </div>
    
    
        <div class="container margin146" style="text-align:left;margin-top:-5%;">
      <div class="row">
        <div class="col-md-6">
          <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="480" height="443" src="https://maps.google.com/maps?hl=en&amp;q= 2014%20 South Goliad ,%20street 140%20Rockwall,%20 TX 75087&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"></iframe>
<br /><small><a href="https://www.google.co.in/maps/place/2014+S+Goliad+St,+Rockwall,+TX+75087,+USA/@32.9092179,-96.4540241,17z/data=!3m1!4b1!4m2!3m1!1s0x864eaa7e320cf003:0x68d54400556864f6?hl=en;source=embed" style="color:#0000FF;text-align:left" target="new">View  "Curry Express Indian Bistro" on Larger Map</a></small>
          <div class="row">
          	<div class="col-md-12"><br/>
				      <strong>WORKING HOURS</strong><br/>
				      <span><b>Tuesday - Sunday : 11:00 am - 2:30 pm</b></span><br/>
					<span><b>Tuesday - Thursday  : 5:00pm - 9:00pm</b></span></br>
					<span><b>Friday - Saturday  : 5:00pm - 9:30pm</b></span></br>
					<span><b>Sunday: 5:00pm - 8:00pm</b></span></br>
         					<span><b>Monday : Closed</b></span>
		        </div>
		        
          </div>
        </div>
        <div class="col-md-6" style="text-align:left">
        	<div class="row">
        		<div class="col-md-12">
		      		<strong>ADDRESS</strong>
				      <address>
				    2014 South Goliad ,<br/>
		       
		           street 140<br/>
		        Rockwall TX 75087
		        <br/>
		        Phone:(469) 264-7999<br/>
				      </address>
				  	</div>
          </div>
          <div class="row">
          	<div class="col-md-12">
		        	<h4>Do you have a request or comment?</h4>
		        	<p>Feel Free to Call us at <a href="#" class="btn-link"> (469) 264-7999</a> or<br/> Fill out the Form below.</p>
		        	<form class="form-vertical" name="contactform" id="contactform" method="post" action="#">
		        		<div class="form-group">
								  <label for="name">Name<span style="color:red">*</span></label>
								  <input type="text" class="form-control" id="name" name="name" required>
								</div>
								<div class="form-group">
								  <label for="phone">Phone<span style="color:red">*</span></label>
								  <input type="text" class="form-control" id="phone" name="phone" required>
								</div>
								<div class="form-group">
								  <label for="email">Email<span style="color:red">*</span></label>
								  <input type="email" class="form-control" id="email" name="email"required>
								</div>
								<div class="form-group">
								  <label for="message">Message</label>
								  <textarea rows="5" class="form-control" id="message" name="message"></textarea>
								</div>
								
								<div class="form-group" style="margin-left:30%">
								 <button type="submit" name="submit" class="btn btn-success btn-submit">Submit</button>
								 </div>
		        	</form>
							<?php include "mail4.php"?>	
								
          	</div>
          </div>          
        </div>
      </div></div></div>
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
        	<div align="center"style="margin-top:16%">
        	<p>
        		<a href="../menu/menu.html" style="color:#FFFFFF">Menu</a><br/>
        		<!--<a href="../group-dining/groupdining.php" style="color:#FFFFFF">Group Dining</a><br/>-->
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


<!-- Mirrored from masalafresno.com/contact/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2016 06:40:10 GMT -->
</html>