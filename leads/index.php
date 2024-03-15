<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mittal Elanza</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <style type="text/css">
  	.form-control {
    display:initial;
    width: 30%;
}
  </style>
  <script>$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})</script>
<style>
 
  
 ul.tabs{
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul.tabs li{
			
    color: #222;
    display: inline-block;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 20px;
		}

		ul.tabs li.current{
		
			color: #222;
		}

		.tab-content{
			display: none;
			
			padding: 15px;
		}

		.tab-content.current{
			display: inherit;
		}
		
		img{
		    width:100%;
		}
  .form-control{
      margin:20px 0;
      width:100%;
  }

  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid mainnav">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/Website UI_Mittal Elanza-02.png"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">PROJECT</a></li>
      <li><a href="#amenities">AMENITIES</a></li>
      <li><a href="#neighbourhood">NEIGHBOURHOOD</a></li>
      <li><a href="#floorplans">FLOORPLANS</a></li>
      <li><a href="#gallery">GALLERY</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
    </div>
  </div>
</nav>
 <section> 
<div class="container-fluid"  style="background-image:url('images/Website UI_Mittal Elanza-09.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
         
             <div class="row" style="margin-top:20px;">
                 
  <div class="col-md-7">
    <img src="images/Website UI_Mittal Elanza-03.png" alt="img1" >
    <div class="row">
     <div class="col-md-4 col-xs-12" style="text-align:center;">
    <img class="imgx" src="images/Website UI_Mittal Elanza-04.png" alt="img1">
  </div>
  <div class="col-md-4 col-xs-12" style="text-align:center;">
    <img class="imgx" src="images/Website UI_Mittal Elanza-05.png" alt="img2">
  </div>
  <div class="col-md-4 col-xs-12" style="text-align:center;">
    <img class="imgx" src="images/Website UI_Mittal Elanza-06.png" alt="img3">
  </div>    
    </div>
  </div>
  <div class="col-md-5">
    <img src="images/Website UI_Mittal Elanza-07.png" alt="img2" >
  </div>
</div>
         
 </div>
 </section>      
<section style="background-color:whitesmoke;">
<div class="container">
    <div class="row">
    <form  action="sender.php" method="post" style="text-align:center; width:100%;">
     <div class="col-md-3"> <input type="text" name="name"  placeholder="Name" id="name" required="" class="form-control"></div>
  <div class="col-md-3"><input type="email" name="email"  placeholder="Email" id="email" required="" class="form-control"></div>
    <div class="col-md-3"><input type="tel"  placeholder="Mobile" id="mobile" required="" name="mobile" class="form-control"></div>
  
  <div class="col-md-3"><input type="submit" name="submit" class="btn btn-default"style="background: #bc2026;
    color: #fff; margin:20px 0;"></div>
</form>
</div>
</div>
</section>
<section id="" style="margin-top:50px;">
    <div class="container" style="text-align:center;">
        <div class="row">
            <div class="col-md-6">
                <h3><b>THERE IS MORE TO LIFE</b></h3>
                <p class="lifestyle" style="text-align:left;">Elanza enthralls you with its imposing structure, surreal façade, inviting homes, unmatched location and world-class amenities.<br><br>
The smart planning ensures optimum use of space, steady flow of natural light and breath-taking views of the locale from each and every one of the 2 & 3 BHK Flats in Yelahanka.</p>
            </div>
            <div class="col-md-6">
            <h3><b>IT'S A LIFESTYLE</b></h3>
            <p class="lifestyle" style="text-align:left;">We have always tried to create spaces that elevate your sense of living. From an infinity pool to beautifully landscaped sky garden to fully equipped gymnasium and club house, Mittal Elanza is where you can find it all. We also offer exclusive Co working facility to all Elanza residents. So step into your new home and live more</p>
        </div>
    </div>
    </div>
</section>
<section id="" style="background-image:url('images/Website UI_Mittal Elanza-12.png');background-position: center;background-repeat: no-repeat;background-size: cover; padding-bottom:50px; ">
    <div class="container" style="text-align:center;">
        <h2 style="color:#bc2026;margin-bottom:40px;margin-top:100px;"><b>OUR TEAM</b></h2>
        <img src="images/Website UI_Mittal Elanza-11.png">
        <div class="row" style="margin-top:40px;margin-bottom:40px;">
            <div class="col-md-4" style="text-align:left;">
        <ul class="list-inline">
        <li class="list-inline-item dot"><img src="images/Website UI_Mittal Elanza-10.png"></li>
        <li class="list-inline-item"><h4 style="color:#bc2026;">Design Architect</h4>
        <h4>Hafeez Contractor</h4>
        <h5>(Mumbai)</h5></li>
    </ul></div>
    <div class="col-md-4" style="text-align:left;">
        <ul class="list-inline">
        <li class="list-inline-item dot"><img src="images/Website UI_Mittal Elanza-10.png"></li>
        <li class="list-inline-item"><h4 style="color:#bc2026;">Interior Design Consultant </h4>
        <h4>Simone Dubash</h4>
        <h5>(Mumbai)</h5></li>
    </ul>
    </div>
    <div class="col-md-4" style="text-align:left;">
        <ul class="list-inline">
        <li class="list-inline-item dot"><img src="images/Website UI_Mittal Elanza-10.png"></li>
        <li class="list-inline-item"><h4 style="color:#bc2026;">Solicitors</h4>
        <h4>Anup S Shaw Law Firm </h4>

        <h5>(Bengaluru)</h5></li>
    </ul>
    </div>
    </div>
    <div class="row">
            <div class="col-md-4" style="text-align:left;">
        <ul class="list-inline">
        <li class="list-inline-item dot"><img src="images/Website UI_Mittal Elanza-10.png"></li>
        <li class="list-inline-item"><h4 style="color:#bc2026;">Structural Consultant
</h4>
        <h4>Mahimtura Consultants</h4>

       <h5>(Mumbai)</h5> </li>
    </ul></div>
    <div class="col-md-4" style="text-align:left;">
        <ul class="list-inline">
        <li class="list-inline-item dot"><img src="images/Website UI_Mittal Elanza-10.png"></li>
        <li class="list-inline-item"><h4 style="color:#bc2026;">MEP Consultant</h4>
        <h4>MAPLE Engg-Design</h4>
        <h5>Services Pvt. Ltd (Bengaluru)</h5>
</li>
    </ul>
    </div>
    <div class="col-md-4" style="text-align:left;">
        <ul class="list-inline">
        <li class="list-inline-item dot"><img src="images/Website UI_Mittal Elanza-10.png"></li>
        <li class="list-inline-item"><h4 style="color:#bc2026;">Landscape Consultant
</h4>
        <h4>Site Concepts</h4>


        <h5>International (Singapore)</h5>
</li>
    </ul>
    </div>
    </div>
    </div>
</section>
<section id="">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="background-color:#bc2026;color:white;height:180px;text-align:center;padding-top:40px;">
                <h2 style="font-size:35px;"><b>UNPARALLELED LEGACY</b></h2>
            </div>
            <div class="col-md-6" style="height:180px;color:black;padding:20px;">
                <p style="font-size:25px;">68+ years. Over 2000<br> completed projects.<br>More than 50 million sqft developed.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7" style="padding-left:0px;">
                <img src="images/Website UI_Mittal Elanza-13.png">
            </div>
            <div class="col-md-1 col-xs-hidden"></div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6 col-xs-6"><img src="images/Website UI_Mittal Elanza-14.png"></div>
                    <div class="col-md-6 col-xs-6"><img src="images/Website UI_Mittal Elanza-15.png"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-6"><img src="images/Website UI_Mittal Elanza-16.png"></div>
                    <div class="col-md-6 col-xs-6"><img src="images/Website UI_Mittal Elanza-17.png"></div>
                </div>
            </div>
        </div>
        
        
    </div>
</section>
<section id="" style="padding-top:50px;padding-bottom:50px;background-color:whitesmoke;">
    <div class="container">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/INVizqo_is0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<section id="amenities" style="background-image:url('images/Website UI_Mittal Elanza-23.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
    <div class="container" style="text-align:center;">
        <h2 style="padding-top:100px;color:#bc2026;padding-bottom:40px;font-size:35px;"><b>AMENITIES</b></h2>
     <div class="row"> 
	<div class="col-md-12" >
	 <ul class="tabs" id="menu" style="padding-bottom:40px;">
  <li class="tab-link current" data-tab="tab-1">CLUBHOUSE</li>
  <li class="tab-link" data-tab="tab-2">SKYGARDEN</li>
  <li class="tab-link" data-tab="tab-3">INFINITY POOL</li>
  <li class="tab-link" data-tab="tab-4">SECURITY</li>
</ul> </div></div>
    
   
    <div id="tab-1" class="tab-content current">
   
             <div class="container"><img class="img25" src="images/Website UI_Mittal Elanza-21.png" style=" width:auto;"></div>
            <div class="col-md-6 col-xs-12" style="padding-left:0px;">
                <img class="img" src="images/club house.jpg"style="margin-bottom:20px; width:auto;">
            </div>
            <div class="col-md-1 hidden-xs" style="background-color:darkred;height:332px;"></div>
            <div class="col-md-5 col-xs-12" style="text-align:center;background-color:#bc2026;color:white;height:332px;padding-top:70px;">
                <h5 style="font-size:25px!important;margin-bottom:20px;"><b>Club House</b></h5>
                <p style="font-size:14px;">You won’t have to travel an inch to mingle and be entertained. The rooftop clubhouse will become a standout feature to your social calendar with recreational facilities such as a health club, aerobics / yoga room, games room and spa. </p>
            </div>
                <div class="container" style="text-align:right;">
            <img  class="img26" src="images/Website UI_Mittal Elanza-22.png" style=" width:auto;"></div>
    </div>
     <div id="tab-2" class="tab-content">
    
     <div class="container"><img class="img25" src="images/Website UI_Mittal Elanza-21.png" style=" width:auto;"></div>
            
            <div class="col-md-6 col-xs-12" style="padding-left:0px;">
                <img class="img" src="images/sky garden.jpg" style="margin-bottom:20px; width:auto;">
            </div>
            <div class="col-md-1 hidden-xs" style="background-color:darkred;height:332px;"></div>
            <div class="col-md-5 col-xs-12" style="text-align:center;background-color:#bc2026;color:white;height:332px;padding-top:70px;">
                <h5 style="font-size:25px!important;margin-bottom:20px;"><b>Sky Garden</b></h5>
                <p style="font-size:14px;">Experience the rejuvenating ambience of the beautifully laid out landscape sky garden with the stars for the company. The sky garden offers an ideal setting for conversations, leisurely walks, a dip in the infinity swimming pool as well as a refreshing environment to unwind after a busy day.
</p>
            </div>
                <div class="container" style="text-align:right;">
            <img  class="img26" src="images/Website UI_Mittal Elanza-22.png" style=" width:auto;"></div>
    </div>
    
    <div id="tab-3" class="tab-content">
    
    
            
            <div class="col-md-6 col-xs-12" style="padding-left:0px;">
                <img class="img" src="images/Website UI_Mittal Elanza-24.png" style="margin-bottom:20px; width:auto;">
            </div>
            <div class="col-md-1 hidden-xs" style="background-color:darkred;height:332px;"></div>
            <div class="col-md-5 col-xs-12" style="text-align:center;background-color:#bc2026;color:white;height:332px;padding-top:70px;">
                <h5 style="font-size:25px!important;margin-bottom:20px;"><b>Infinity Pool</b></h5>
                <p style="font-size:14px;">Welcome to your paradise in the sky. A place where you can lounge with stars, indulge your love for the finer things in life, with a lavish pool offering you a stunning infinity view of the cityscape.</p>
            </div>
                <div class="container" style="text-align:right;">
            <img  class="img26" src="images/Website UI_Mittal Elanza-22.png" style=" width:auto;"></div>
    </div>
    
     <div id="tab-4" class="tab-content">
    
    
            
            <div class="col-md-6 col-xs-12" style="padding-left:0px;">
                <img class="img" src="images/security.jpg" style="margin-bottom:20px; width:auto;">
            </div>
            <div class="col-md-1 hidden-xs" style="background-color:darkred;height:332px;"></div>
            <div class="col-md-5 col-xs-12" style="text-align:center;background-color:#bc2026;color:white;height:332px;padding-top:70px;">
                <h5 style="font-size:25px!important;margin-bottom:20px;"><b>Security</b></h5>
                <p style="font-size:14px;">Security at Mittal Elanza is state-of-the-art designed to keep you and your loved ones safe. Trained personnel provide the complex with multi-level security. A gated entry system checks and monitors the arrival and departure of visitors. The property is also equipped with the latest firefighting equipment, smoke detectors, CCTV cameras and intercom systems.
</p>
            </div>
                <div class="container" style="text-align:right;">
            <img  class="img26" src="images/Website UI_Mittal Elanza-22.png" style=" width:auto;"></div>
    </div>
    
    </div>
        
    <img src="images/Website UI_Mittal Elanza-25.png">
   </section>
   <section style="margin-top: -150px;">
   <div class="container" id="neighbourhood" style="background-color:whitesmoke;z-index:99;opacity:0.8;text-align:center;">
      <h2 style="font-size:35px!important;color:#bc2026;"><b>NEIGHBOURHOOD</b></h2> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="container">
      <div class="row">
          <div class="col-md-6 neighbour">
              <img src="images/Website UI_Mittal Elanza-26.png" style="width:auto;">
              <h3><b>NH7 ELEVATED HIGHWAY</b></h3>
              <p>2 Mins to Signal-free corridor comprising a stretch of 6 lanes elevated expressway, connecting Hebbal flyover to the Kempegowda International Airport Bengaluru within 20 mins.
</p>
          </div>
        <div class="col-md-6 neighbour">
              <img src="images/Website UI_Mittal Elanza-27.png" style="width:auto;">
              <h3><b>HOSPITALS</b></h3>
              <p>5-10 mins from rare state of the art modern hospitals such as Aster CMI and Columbia Asia hospital, Profile and Motherhood. </p>
        </div>
      </div>
      </div>
      </div>

      <div class="item">
                <div class="container">
      <div class="row">
          <div class="col-md-6 neighbour">
              <img src="images/Website UI_Mittal Elanza-26.png" style="width:auto;">
              <h3><b>ENTERTAINMENT</b></h3>
              <p>5-10 mins to Elements Mall and Garuda Yelahanka. which are abound with PVR and INOX cinema hall, hypermarket, lifestyle stores, fast food & fine dining and star rated hotels. 
</p>
          </div>
        <div class="col-md-6 neighbour">
              <img src="images/Website UI_Mittal Elanza-27.png" style="width:auto;">
              <h3><b>EDUCATIONAL INSTITUTION</b></h3>
              <p>Within 10-15 Mins to prominent national and International educational institutions like Vidhya Shilp, Vidhya Niketan, Delhi Public School, Mallya Aditi, Rayan International School, Canadian International School, Stone Hill, Presidency College, Euro Kids, Rashtrotthana Vidya Kendra
<p>

        </div>
      </div>
      </div>
      </div>
       <div class="item">
                <div class="container">
      <div class="row">
          <div class="col-md-6 neighbour">
              <img src="images/Website UI_Mittal Elanza-26.png" style="width:auto;">
              <h3><b>PUBLIC TRANSPORT</b></h3>
              <p><strong>Bengaluru Metro:</strong> 2 kms to proposed Metro rail station, that gives you a great connectivity to any part of Bengaluru city. 
<strong>Bus Stop:</strong> 100 meters away from Kogilu Bus Stop. 
<strong>Airport Shuttle:</strong> 2 mins to the Airport Shuttle Stop at Kogilu Cross. Reach the airport within 20 mins.

</p>
          </div>
        <div class="col-md-6 neighbour">
              <img src="images/Website UI_Mittal Elanza-27.png" style="width:auto;">
              <h3><b>IT PARKS</b></h3>
              <p>5 -10 Mins to Kirlosker Business Park and Manyata Tech Park which are home to many IT firms like IBM, Philips, Target, Cognizant, Aditi, Fidelity, Microsoft and mixed use office development with commercial amenities that include a retail wing with F&B outlets, shopping, health and fitness and a business centre.<p>

        </div>
      </div>
      </div>
      </div>
    
      
    </div>
    
      
          
<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> 
   
    <!-- Left and right controls --> 
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="previous"><img src="images/Website UI_Mittal Elanza-28.png" style="width:auto;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="next"><img src="images/Website UI_Mittal Elanza-29.png" style="width:auto;"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>
</div>
  </section>
<section id="#" style="text-align:center;background-color:whitesmoke;padding-top:90px;">
    <h2 style="margin-top:50px;margin-bottom:50px;color:#bc2026;"><b>LOCATION</b></h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15543.712680720862!2d77.6203367!3d13.1037369!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6798275f8e8e29d1!2sMittal%20Elanza!5e0!3m2!1sen!2sin!4v1598356027874!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <p style="padding-top:70px;padding-bottom:70px;"><b>Mittal Elanza</b> Survey No: 92/5A, 92/5B Kogilu Village, Yelahanka Hobli, Bengaluru (North Taluk)</p>
</section>
        <section id="floorplans" style="text-align:center;margin-bottom:140px;">
     <h2 style="margin-top:50px;margin-bottom:50px;color:#bc2026;font-size:35px!important;"><b>FLOORPLAN</b></h2>
     <div class="container">
         <div class="row">
             <div class="col-md-4" style="margin-bottom:10px;"><img src="images/Website UI_Mittal Elanza-30.png"></div>
             <div class="col-md-4" style="margin-bottom:10px;" ><img src="images/Website UI_Mittal Elanza-31.png"></div>
             <div class="col-md-4" style="margin-bottom:10px;"><img src="images/Website UI_Mittal Elanza-32.png"></div>
         </div>
     </div>
</section>
    <section id="gallery" style="background-image:url('images/Website UI_Mittal Elanza-40.png');background-position: center;background-repeat: no-repeat;background-size: cover; padding-top:50px;padding-bottom:50px;">
        <div class="container">
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <!--  <ol class="carousel-indicators indicate1">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <div class="container">
          <div class="row">
              <div class="col-md-8"><div class="row"><div class="col-md-8"><img src="images/Website UI_Mittal Elanza-33.png"></div><div class="col-md-4 col-xs-12"><img src="images/Website UI_Mittal Elanza-34.png"></div></div>
              <div class="row"><div class="col-md-4 col-xs-12"><img src="images/Website UI_Mittal Elanza-36.png"></div><div class="col-md-8"><img src="images/Website UI_Mittal Elanza-37.png"></div></div></div>
              <div class="col-md-4"><img src="images/Website UI_Mittal Elanza-35.png"></div>
  
</div>
</div>
      </div>

   
    </div>

    <!-- Left and right controls -->
  <!--  <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
<span class="previous1"><img src="images/Website UI_Mittal Elanza-38.png" style="width:auto;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
<span class="next1"><img src="images/Website UI_Mittal Elanza-39.png" style="width:auto;"></span>
      <span class="sr-only">Next</span> 
    </a>-->
  </div>
  

        </div>
    </section>

<section id="" style="text-align:center;margin-bottom:100px;">
    <div class="container">
    <h2 style="margin-top:100px;margin-bottom:100px;font-size:35px;color:#bc2026;"><b>ABOUT MITTAL</b></h2>
    <p>Since 1952, the Group's quest has been to bring about innovation, strong project execution and quality construction with redefined living - delivering cutting-edge practices at par with the best in the world. This spirit of true entrepreneurship has evolved Mittal Universal into a leading conglomerate which has constructed over 2,000 buildings across India<br><br>
    As part of this legacy; Mittal Universal has comprised a unique mix of forward thinkers and functional creators who strike a balance between local needs and global influences in the development of every property. Aware that knowledge is constantly evolving and critical to innovative growth, Mittal Universal believes in bringing together visionaries in order to implement an effective and time-tested combination of creativity and quality which culminates into landmark properties. This sharp understanding of market dynamics and latest construction trends has en-abled Mittal Universal to redesign and redefine the skyline of one of the fastest growing economies of the world.
    </p>
   <a href="https://www.mittaluniversal.com/bangalore-residential.html
" target='_blank'><img src="images/Website UI_Mittal Elanza-41.png" class="margin-top:20px;" style="width:auto;"></a>
    </div>
    <p></p>
</section>
<?php include "footer.php"; ?>