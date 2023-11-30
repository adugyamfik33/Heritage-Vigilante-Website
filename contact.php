<!DOCTYPE html>
<html lang="en">

<head>

<?php include "includes/head.php" ?>

<body>

	<div class="body-inner">
	<?php include "includes/topbar.php" ?>
    <!--/ Topbar end -->

    <!-- Header start -->
    <?php include "includes/header.php" ?>
    <!--/ Header end -->

   <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner3.jpg)">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title">Contact</h1>
                     <ol class="breadcrumb">
                        <li>Home</li>
                        <li><a href="#">Contact</a></li>
                     </ol>
                  </div>
               </div><!-- Col end -->
            </div><!-- Row end -->
         </div><!-- Container end -->
      </div><!-- Banner text end -->
   </div><!-- Banner area end --> 


  <section id="main-container" class="main-container">
      <div class="container">

         <div class="row text-center">
            <h2 class="section-title">Reaching our Office</h2>
            <h3 class="section-sub-title">Find Our Location</h3>
         </div><!--/ Title row end -->

         <div class="row">
            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-map-marker"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Visit Our Office</h4>
                     <p>3rd Onyasia Lane, Roman Ridge</p>
                 </div>
               </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-envelope"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Email Us</h4>
                     <p>heritagevigilant@gmail.com</p>
                 </div>
               </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-phone-square"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Call Us</h4>
                     <p>(+233) 243-358-567 or (+233) 277-014-598</p>
                 </div>
               </div>
            </div><!-- Col 3 end -->

         </div><!-- 1st row end -->

         <div class="gap-60"></div>

         <!-- <div id="map" class="map"></div> -->

         <div class="gap-40"></div>

         <div class="row">

            <div class="col-md-12">
               
               <h3 class="column-title">Contact Us</h3>

               <form id="contact-form" action="contact-form.php" method="post" role="form">
                  <div class="error-container"></div>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Name</label>
                        <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Email</label>
                           <input class="form-control form-control-email" name="email" id="email" 
                           placeholder="" type="email" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Subject</label>
                           <input class="form-control form-control-subject" name="subject" id="subject" 
                           placeholder="" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Message</label>
                     <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                  </div>
                  <div class="text-right"><br>
                     <button class="btn btn-primary solid blank" type="submit">Send Message</button> 
                  </div>
               </form>
            </div>
         
         </div><!-- Content row -->
      </div><!-- Conatiner end -->
   </section><!-- Main container end -->
   <?php include "includes/footer.php" ?><!-- Footer end -->


  <!-- Javascript Files
================================================== -->

  <!-- initialize jQuery Library -->
  <?php include "includes/footerlink.php" ?>

</div><!-- Body inner end -->
</body>

</html>