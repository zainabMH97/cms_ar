<!-- ? Main Carousel -->
<div
        id="mainMOHESRcarousel"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#mainMOHESRcarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>

          <button
            type="button"
            data-bs-target="#mainMOHESRcarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#mainMOHESRcarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <!-- end of indicators -->
        <div class="carousel-inner">
          <!-- ? Slide #1 -->
          <div class="carousel-item active">
            <!-- ? CHANGE video HERE -->
            <!-- <video
              src="<?php //echo base_url();?>assets/img/news/<?php //echo $bg_1 ;?>"
              class="background-video"
              muted
              loop
              autoplay
            ></video> -->

            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $bg_1;?>?playlist=<?php echo $bg_1;?>&loop=1&controls=0&autoplay=1&mute=1&rel=0&showinfo=0" allow ='autoplay' id= "video_test" frameborder="0" class ="background-video" allowfullscreen></iframe>
            <!-- end of img -->
            <div class="overlay"></div>
            
            <div class="decoration">
            <img
                class="decoration-img"
                src="<?php echo base_url();?>assets/viewApp/imgs/decoration/decoration_light.svg"
            />
            
            </div>
           
            <!-- ? SHOWCASE -->
            <div class="carousel-showcase">
              <div class="container">
                <div class="row justify-content-between">
                  <div class="col-xl-6 right-caption">
                    <div class="text">
                      <div class="highlight">
                        <?php echo $slider_one_title ; ?>
                      </div>
                      <div class="caption">
                        <?php echo $slider_one_caption ; ?> 
                      </div>
                    </div>
                    <!-- end of text -->
                    <div class="double-btns hovered">
                      <button onclick='function_mynews()' class="fixed-width">عرض الاخبار</button>
                      <button onclick='function_myfunction()' class="fixed-width Thunderbird" >
                        البوابات الالكترونية
                      </button>
                    </div>
                    <!-- end buttons -->
                    <div class="social-media-dashboard less-opacity">
                      <ul>
                        <!-- Facebook -->
                        <li>
                          <a
                            href="https://www.facebook.com/Ministry.Official.Page"
                            target="_blank"
                          >
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <!-- twitter -->
                        <li>
                          <a
                            href="https://twitter.com/mohesr_gov_iq"
                            target="_blank"
                          >
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <!-- Instagram -->
                        <li>
                          <a
                            href="https://www.instagram.com/ministry.official.page/"
                            target="_blank"
                          >
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <!-- Youtube -->
                        <li>
                          <a
                            href="https://www.youtube.com/channel/UCwo-RkV2QvzQTewWICpE7KA"
                            target="_blank"
                          >
                            <i class="fab fa-youtube"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- end of right-caption col -->
                  <div
                    class="col-xl-5 d-h530-none justify-content-center d-flex align-items-start"
                  >
                    <div class="video">
                        <div class="play-btn">
                          <a href="#">
                            <div class="outer-circle">
                              <i class="fas fa-play"></i>
                            </div>
                          </a>
                        </div>

                        <div class="video-container">
                          <!-- <video
                          id="showcase-video"
                          class="showcase-video"
                          src="<?php //echo site_url(); ?>assets/img/news/<?php //echo $slider_one_media;?>" 
                          poster = "<?php //echo site_url(); ?>assets/img/news/poster.jpg"
                          >
                          </video> -->
                          <embed type="video/mp4" id="showcase-video" class = "showcase-video" src="https://www.youtube.com/embed/<?php echo $slider_one_media;?>?playlist=<?php echo $slider_one_media;?>&loop=1&controls=0&mute=1&rel=0&showinfo=0">
                          <div class="close-vbtn">
                            <i class="fal fa-times"></i>
                          </div>
                        </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of caption -->
          </div>
          <!-- ? END OF Slide #1 -->
          <!-- ? Slide #2 -->
          <div class="carousel-item">
            <!-- ? CHANGE IMG HERE -->
             <img src="<?php echo base_url();?>assets/img/news/<?php echo $bg_2;?>" class="main-img" />
            <!-- end of img -->
            <div class="overlay"></div>
            <div class="decoration">
              <img
                class="decoration-img"
                src="<?php echo base_url();?>assets/viewApp/imgs/decoration/decoration_light.svg"
              />
            </div>
            <!-- ? SHOWCASE -->
            <div class="carousel-showcase">
              <div class="container">
                <div class="row justify-content-between">
                  <div class="col-xl-7 right-caption">
                    <div class="text">
                      <div class="highlight">
                        <?php echo $slider_two_title ; ?>
                      </div>
                      <div class="caption">
                        <?php echo $slider_two_caption ; ?>
                      </div>
                    </div>
                    <!-- end of text -->
                    <div class="double-btns hovered">
                      <button onclick='function_mynews()' class="fixed-width">عرض الاخبار</button>
                      <button onclick='function_myfunction()'  class="fixed-width Thunderbird">
                        البوابات الالكترونية
                      </button>
                    </div>
                    <!-- end buttons -->
                  </div>
                  <!-- end of right-caption col -->
                  <div
                    class="col-xl-5 d-h530-none justify-content-center d-flex align-items-start"
                  >
                    <div class="photo">
                      <div class="square"></div>
                      <img
                        class="thmubnail"
                        src="<?php echo base_url();?>assets/img/news/<?php echo $slider_two_media;?>"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- end of SHOWCASE -->
          </div>
          <!-- ? END OF Slide #2 -->
          <!-- ? Slide #3 -->
          <div class="carousel-item">
            <!-- ? CHANGE IMG HERE -->
                <img src="<?php echo base_url();?>assets/img/news/<?php echo $bg_3;?>" class="main-img" /> 
            <!-- end of img -->
            <div class="overlay"></div>
            <div class="decoration">
              <img
                class="decoration-img"
                src="<?php echo base_url();?>assets/viewApp/imgs/decoration/decoration_light.svg"
              />
            </div>
            <!-- ? SHOWCASE -->
            <div class="carousel-showcase">
              <div class="container">
                <div class="row justify-content-between">
                  <div class="col-xl-7 right-caption">
                    <div class="text">
                      <div class="highlight">
                        <?php echo $slider_three_title ;?>
                      </div>
                      <div class="caption">
                        <?php echo $slider_three_caption ;?>
                      </div>
                    </div>
                    <!-- end of text -->
                    <div class="double-btns hovered">
                      <button onclick='function_mynews()' class="fixed-width">عرض الاخبار</button>
                      <button  onclick='function_myfunction()' class="fixed-width Thunderbird">
                        البوابات الالكترونية
                      </button>
                    </div>
                    <!-- end buttons -->
                  </div>
                  <!-- end of right-caption col -->
                  <div
                    class="col-xl-5 d-h530-none justify-content-center d-flex align-items-start"
                  >
                    <div class="photo">
                      <div class="square"></div>
                      <img
                        class="thmubnail"
                        src="<?php echo base_url();?>assets/img/news/<?php echo $slider_three_media;?>"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of SHOWCASE -->
          </div>
          <!-- ? END OF Slide #3 -->
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#mainMOHESRcarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#mainMOHESRcarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- ? === End of Main Carousel === -->
      <div class="scroll-hint">
        <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/mouse.svg" alt="" />
        <span>تصفح المزيد</span>
      </div>
    </section>
    <!--? ==== end of main section -->
    <script>
         
     function function_myfunction(){
        document.documentElement.scrollTop = document.body.scrollTop = 1795;
     }

     function function_mynews(){
        document.documentElement.scrollTop = document.body.scrollTop = 900;
     }
   
    </script>