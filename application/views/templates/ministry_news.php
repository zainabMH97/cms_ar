<section class="normal">
      <div class="container">
        <div class="section-header center">
          <div class="text">
            <div class="title">اخبار الوزارة</div>
            <div class="underline">
              احدث الاخبار الخاصة بوزارة التعليم العالي والبحث العلمي
            </div>
          </div>
        </div> 
        <!-- end of section-header -->
        <!-- ? News Grid -->
        <div class="row news-grid">
        
          <div class="col-xl-6 px-xl-0 d-flex justify-content-center">
          
            <div class="news-card highlited">
              <div class="card-link">
              
                <div class="caption">
                  <div class="page-tag">
                    <a class="link" href="<?php echo base_url();?>homeNews/newsTerm/<?php echo $right_news_section_col['term_id'];?>"><?php echo $right_news_section_col['term_title'] ; ?></a>
                  </div>
                  <div class="title">
                    <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $right_news_section_col['post_slug'];?>"><?php echo $right_news_section_col['post_title']; ?></a>
                  </div>
                  <div class="underline">
                    <div class="views">
                      <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                      <span><?php echo $right_news_section_col['number_of_views'] ; ?></span>
                    </div>
                    <div class="date">
                      <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                      <span><?php echo date("d-m-Y", strtotime($right_news_section_col['post_date'])); ?></span>
                    </div>
                  </div>
                </div>
              </div>
              <img
                class="news-card-thumbnail"
                src="<?php echo base_url();?>assets/img/news/<?php echo $right_news_section_col['post_img'] ; ?>"
                alt=""
              />
            </div>
            
          </div>
          
          <!-- end right col -->
          <div class="col-xl-6">
            <div class="row">
            <?php foreach($news_left_section_col as $news) : ?>
              <div
                class="col-6 p-xl-0 justify-content-center justify-content-xl-end d-flex"
              >
                <div class="news-card">
                  <div class="card-link">
                    <div class="caption">
                      <div class="page-tag">
                        <a class="link" href="<?php echo base_url();?>homeNews/newsTerm/<?php echo $news['term_id'];?>"><?php echo $news['term_title'] ; ?></a>
                      </div>
                      <div class="title">
                        <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $news['post_slug'];?>"><?php echo $news['post_title']; ?></a>
                      </div>
                      <div class="underline">
                        <div class="views">
                          <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                          <span><?php echo $news['number_of_views']; ?></span>
                        </div>
                        <div class="date">
                          <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                          <span><?php echo date("d-m-Y", strtotime($news['post_date'])); ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <img
                    class="news-card-thumbnail"
                    src="<?php echo base_url();?>assets/img/news/<?php echo $news['post_img'] ; ?>"
                    alt=""
                  />
                </div>
              </div>
              <?php endforeach ;?>
              <!-- end small card col -->
            </div>
          </div>
          <!-- end left col -->
        </div>
        <!-- end of row -->
        <div class="show-more-btn hovered">
          <a href="<?php echo base_url();?>homeNews/newsTerm/6" ><button class="fixed-width Thunderbird">جميع الاخبار</button></a>
        </div>
      </div>
    </section>
    <!--? end of section -->