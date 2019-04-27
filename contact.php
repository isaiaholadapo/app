
    <?php include "includes/header.php"; ?>    


    <div class="site-main">

        <!--================ Left Area =================-->
        <div class="right_fix_bar">
            <div class="d-flex">

                <div class="social_area">
                    <h4>
                        <a href="#">Instagram</a>
                    </h4>
                    <h4>
                        <a class="twitter" href="#">Twitter</a>
                    </h4>
                    <h4>
                        <a class="facebook" href="#">Facebook</a>
                    </h4>
                </div>
            </div>
        </div>
        <!--================ Left Area =================-->

           <!--================Header Menu Area =================-->
           <?php include "includes/menu.php" ; ?>
            <!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Contact us</h2>
              <p>Customer satisfaction is our fundamental objective, <br> while our employees are our greatest assets.</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="contact.html">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
           
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm">Send Message</button>
                        </div>
                    </form>


                </div>

                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>No 54, Khalid Isaah Crescent, Kafe District,</h3>
                            <p>Gwarimpa Abuja</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:454545654">08012345678</a></h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:info@amarchy.com">info@amarchy.com</a></h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
    

    <!-- ================ start footer Area ================= -->
    <?php include "includes/footer.php"; ?>
    <!-- ================ End footer Area ================= -->