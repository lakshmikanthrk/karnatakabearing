<?php include 'header.php';?>
  <div class="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url()?>assets/images/slider/slider1.jpg">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/images/slider/slider2.jpg">
          </div>
   <div class="carousel-item">
      <img src="<?=base_url()?>assets/images/slider/slider3.jpg">
    </div> 
  </div>
<!--   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
</div>
   
    <!-- Header Area wrapper End -->
   
<!--    <div class="enquiry">
    <h3>Enquiry</h3>
    <div class="row">
      <div class="col-md-12">
        <form>
           <div class="form-group">
  
    <input type="text" class="form-control" placeholder="Name">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control"  placeholder="Email">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control"  placeholder="Mobile Number">
  </div>
  <div class="form-group">
    <textarea class="form-control"  rows="3" placeholder="Message"></textarea>
  </div>
  <button type="button" class="btn btn-warning" style="width: 100%">Submit</button>
        </form>
      </div>
    </div>
   </div> -->



    <!-- Features Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">About Us</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="abt-img">
              <img src="<?=base_url()?>assets/images/about.webp">
            </div>
          </div>
           <div class="col-md-6 abt-content">
             <p>Our Business
Karnataka Bearing Centre has been dedicated to provide  bearings and other assemblies with high quality products, competitive pricing and a level of service unmatched in the industry all under one roof.
</p>

<p>We have contributed greatly to the growth of many industries since 1989. With 30+ years of experience and an extensive line-up of products and services, we provide our customers with the right solutions for application requirements at the highest quality standards.</p>

<p>We have been privileged to serve 1000+ satisfied customers. We continue to apply our focus on service and value as we look for newer, better ways to serve bearings and featured products as given throughout India.</p>
          </div>
        </div>
        
      </div>
    </section>
    <!-- Features Section End -->  



    <!-- Services Section Start -->
    <section id="services" class="section-padding" style="background-color: #d2d2d2;">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Bearings</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-3">
            <a href="<?=base_url('Welcome/deep_groove')?>"><div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="baring">
                <!-- <i class="fa fa-cogs"></i> -->
                <img src="<?=base_url()?>assets/images/bearing/deep_gorrve_ball_bearing.jpg">
              </div>
              <div class="services-content">
                <p>Deep Groove Ball Bearing</p>
              </div>
            </div></a>
          </div>
          <div class="col-md-3">
            <a href="<?=base_url('Welcome/angular')?>"><div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="baring">
                <!-- <i class="fa fa-cogs"></i> -->
                <img src="<?=base_url()?>assets/images/bearing/angular_contact_ball_bearing.jpg">
              </div>
              <div class="services-content">
                <p>Angular Contact Ball Bearing</p>
              </div>
            </div></a>
          </div>
          <div class="col-md-3">
           <a href="<?=base_url('Welcome/self_align')?>"> <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="baring">
                <!-- <i class="fa fa-cogs"></i> -->
                <img src="<?=base_url()?>assets/images/bearing/self_align_ball_bearing.jpg">
              </div>
              <div class="services-content">
                <p>Self Aligning Ball Bearing</p>
              </div>
            </div></a>
          </div>
          <div class="col-md-3">
           <a href="<?=base_url('Welcome/cylindrical_roller')?>"><div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="baring">
                <!-- <i class="fa fa-cogs"></i> -->
                <img src="<?=base_url()?>assets/images/bearing/cylindrical_roller.jpg">
              </div>
              <div class="services-content">
                <p>Cylindrical Roller Bearing</p>
              </div>
            </div></a>
          </div>
          <div class="col-md-3">
           <a href="<?=base_url('Welcome/needle_roller')?>"> <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="baring">
                <img src="<?=base_url()?>assets/images/bearing/needle_roller.jpg">
              </div>
              <div class="services-content">
                <p>Needle Roller Bearing</p>
              </div>
            </div></a>
          </div>
          <div class="col-md-3">
            <a href="<?=base_url('Welcome/tapered_roller')?>"><div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="baring">
                <img src="<?=base_url()?>assets/images/bearing/tapered_roller.jpg">
              </div>
              <div class="services-content">
                <p>Tapered Roller Bearing</p>
              </div>
            </div></a>
          </div>
          <div class="col-md-3">
            <a href="<?=base_url('Welcome/sperical_bearing')?>"><div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="baring">
                <img src="<?=base_url()?>assets/images/bearing/sperical_bearing.jpg">
              </div>
              <div class="services-content">
                <p>Spherical Roller Bearing</p>
              </div>
            </div></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->


     <!-- Services Section Start -->
    <section  class="section-padding">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Bearing Assemblies</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="container assemblies">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/assemblies/a1.webp" alt="1 slide"><p>Bearing Cover</p></div>
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/assemblies/a2.webp" alt="2 slide"><p>Bearing Rings</p></div>
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/assemblies/a3.webp" alt="3 slide"><p>Bearing Sleaves</p></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/assemblies/a4.webp" alt="4 slide"><p>Bearing Housing</p></div>
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/assemblies/a5.webp" alt="5 slide"><p>Roller Bearing Cup</p></div>
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/assemblies/a6.webp" alt="6 slide"><p>Bearing Cages</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
    <!-- Services Section End -->
 


    <!-- Testimonial Section Start -->
   <!--  <section class="testimonial section-padding">
      <div class="container">
         <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Testimonial</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <i class="fa fa-2x fa-user" aria-hidden="true"></i>
                  </div>
                  <div class="info">
                    <h2><a href="#">Kushal</a></h2>
                  </div>
                  <div class="content">
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    <div class="star-icon mt-3">
                      <span><i class="fa fa-star-o"></i></span>
                      <span><i class="fa fa-star-o"></i></span>
                      <span><i class="fa fa-star-o"></i></span>
                      <span><i class="fa fa-star-o"></i></span>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <i class="fa fa-2x fa-user" aria-hidden="true"></i>
                  </div>
                  <div class="info">
                    <h2><a href="#">Jyothi</a></h2>
                  </div>
                  <div class="content">
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    <div class="star-icon mt-3">
                      <span><i class="fa fa-star-o"></i></span>
                      <span><i class="fa fa-star-o"></i></span>
                      <span><i class="fa fa-star-o"></i></span>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <i class="fa fa-2x fa-user" aria-hidden="true"></i>
                  </div>
                  <div class="info">
                    <h2><a href="#">GuruPrasad</a></h2>
                  </div>
                  <div class="content">
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    <div class="star-icon mt-3">
                      <span><i class="fa fa-star-o"></i></span>
                      <span><i class="fa fa-star-o"></i></span>
                      <span><i class="fa fa-star-o"></i></span>
                      <span><i class="fa fa-star-o"></i></span>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <i class="fa fa-2x fa-user" aria-hidden="true"></i>
                  </div>
                  <div class="info">
                    <h2><a href="#">Lakshmi</a></h2>
                  </div>
                  <div class="content">
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    <div class="star-icon mt-3">
                      <span><i class="fa fa-star-o"></i></span>
                      <span><i class="fa fa-star-o"></i></span>
                      
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Testimonial Section End -->



     <!-- Services Section Start -->
   <!--  <section  class="section-padding">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Featurd Product</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="container pro">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/products/1.jpeg" alt="1 slide"><p>Bearing Cover</p></div>
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/products/2.jpeg" alt="2 slide"><p>Bearing Rings</p></div>
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/products/3.jpeg" alt="3 slide"><p>Bearing Sleaves</p></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/products/4.jpeg" alt="4 slide"><p>Bearing Housing</p></div>
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/products/5.jpeg" alt="5 slide"><p>Roller Bearing Cup</p></div>
                    <div class="col-sm"><img class="d-block" src="<?=base_url()?>assets/images/products/6.jpeg" alt="6 slide"><p>Bearing Cages</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section> -->
    <!-- Services Section End -->

    <!-- address start -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1944.1048532236998!2d77.58138720788999!3d12.958428834857934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae15e71080565f%3A0xb3e9d94ed83dd3c3!2sKarnataka%20Bearing%20Centre%2C%20%23135%2FA%2C%20Auto%20Tower%202nd%20floor%2C%20JC%20Rd%2C%20Bengaluru%2C%20Karnataka%20560002!3m2!1d12.959370999999999!2d77.5830979!5e0!3m2!1sen!2sin!4v1584724252912!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!-- address end -->


   

<?php include 'footer.php';?>