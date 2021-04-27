   <!-- ? ========= SIDE col -->
   <div class="col-lg-3 px-4 px-sm-3 px-lg-0 mt-4rem">
              <!-- ? side gate header -->
              <div class="col-side-header">البوابات الالكترونية</div>
              <!-- ? === Side Gates -->
              <div class="row side gates-grid">
                <!-- ? New Gate -->
                <div class="col-6 col-md-4 col-xl-3 gate">
                  <a href="http://www.ca.iq/">
                    <div class="title">حكومة المواطن الالكتروني</div>
                    <div class="icons">
                      <div class="main">
                        <i class="fal fa-cog"></i> 
                      </div>
                      <div class="arrow">
                        <i class="fal fa-long-arrow-left"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- end of gate -->
                <!-- ? New Gate -->
                <div class="col-6 col-md-4 col-xl-3 gate">
                  <a href="#">
                    <div class="title">
                      البوابة الالكترونية لدائرة الدراسات والتخطيط والمتابعة
                    </div>
                    <div class="icons">
                      <div class="main">
                        <i class="fal fa-book-alt"></i>
                      </div>
                      <div class="arrow">
                        <i class="fal fa-long-arrow-left"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- end of gate -->
                <!-- ? New Gate -->
                <div class="col-6 col-md-4 col-xl-3 gate">
                  <a href="https://www.pe-gate.org/">
                    <div class="title">
                      البوابة الالكترونية لدائرة التعليم الجامعي الاهلي
                    </div>
                    <div class="icons">
                      <div class="main">
                        <i class="fal fa-school"></i>
                      </div>
                      <div class="arrow">
                        <i class="fal fa-long-arrow-left"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- end of gate -->
                <!-- ? New Gate -->
                <div class="col-6 col-md-4 col-xl-3 gate">
                  <a href="<?php echo base_url(); ?>post/%d8%ac%d9%87%d8%a7%d8%b2-%d8%a7%d9%84%d8%a7%d8%b4%d8%b1%d8%a7%d9%81-%d9%88%d8%a7%d9%84%d8%aa%d9%82%d9%88%d9%8a%d9%85-%d8%a7%d9%84%d8%b9%d9%84%d9%85%d9%8a">
                    <div class="title">
                      البوابة الالكترونية لجهاز الاشراف والتقويم العلمي
                    </div>
                    <div class="icons">
                      <div class="main">
                        <i class="fal fa-atom-alt"></i>
                      </div>
                      <div class="arrow">
                        <i class="fal fa-long-arrow-left"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- end of gate -->
                <!-- ? New Gate -->
                <div class="col-6 col-md-4 col-xl-3 gate">
                  <a href="https://scrdgate.scrdiraq.gov.iq/">
                    <div class="title">
                      البوابة الالكترونية لدائرة البعثات والعلاقات الثقافية
                    </div>
                    <div class="icons">
                      <div class="main">
                        <i class="fal fa-user-friends"></i>
                      </div>
                      <div class="arrow">
                        <i class="fal fa-long-arrow-left"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- end of gate -->
                <!-- ? New Gate -->
                <div class="col-6 col-md-4 col-xl-3 gate">
                  <a href="<?php echo base_url(); ?>post/%d8%af%d8%a7%d8%a6%d8%b1%d8%a9-%d8%a7%d9%84%d8%a8%d8%ad%d8%ab-%d9%88%d8%a7%d9%84%d8%aa%d8%b7%d9%88%d9%8a%d8%b1">
                    <div class="title">
                      البوابة الالكترونية لدائرة البحث والتطوير
                    </div>
                    <div class="icons">
                      <div class="main">
                        <i class="fal fa-bookmark"></i>
                      </div>
                      <div class="arrow">
                        <i class="fal fa-long-arrow-left"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- end of gate -->
                <!-- ? New Gate -->
                <div class="col-6 col-md-4 col-xl-3 gate">
                  <a href="<?php echo base_url();?>post/%d8%a7%d9%84%d8%b4%d9%83%d8%a7%d9%88%d9%89-%d9%88%d8%a7%d9%84%d9%85%d9%82%d8%aa%d8%b1%d8%ad%d8%a7%d8%aa">
                    <div class="title">الشكاوي والمقترحات</div>
                    <div class="icons">
                      <div class="main">
                        <i class="fal fa-info"></i>
                      </div>
                      <div class="arrow">
                        <i class="fal fa-long-arrow-left"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- end of gate -->
                <!--  Last Gate -->
                <!-- <div class="col-6 col-md-4 col-xl-3 gate last">
                  <a href="#">
                    <div class="more-gates">المزيد</div>
                  </a>
                </div> -->
                <!-- end of gate -->
              </div>
              <!-- ? === end of Side Gates -->

              <!-- ? === most-read News === -->
              <div class="side-most-read-news">
                <!-- ? side most-read News header -->
                <div class="col-side-header">اخر الاخبار</div>

                <!--? news horizontal card UL -->
                <ul>
                  <!-- ? H-Card -->
                  <?php foreach($latest_news as $last) :?>
                  <li> 
                    <a class="_link" href="<?php echo base_url();?>/post/<?php echo $last['post_slug'];?>">
                    <?php if(stripos($last['post_img'],'http:') !== false) : ?>
                      <img
                        class="thumbnail"
                        src="<?php echo $last['post_img'];?>"
                        alt=""
                      />
                      <?php else : ?>
                        <img
                        class="thumbnail"
                        src="<?php echo base_url();?>assets/img/news/<?php echo $last['post_img'];?>"
                        alt=""
                      />

                      <?php endif ; ?>
                      <div class="text">
                        <div class="title">
                          <?php echo $last['post_title'];?>
                        </div>
                        <!-- end news title -->
                        <div class="details">
                          <div class="office-name">
                            <?php echo $last['term_title']; ?>
                          </div>
                          <!-- end of office-name -->
                          <div class="post-views">
                            <div class="views">
                              <i class="fas fa-eye"></i>
                              <span><?php echo $last['number_of_views']; ?></span>
                            </div>
                            <div class="date">
                              <i class="fas fa-calendar-alt"></i>
                              <span><?php echo date("d-m-Y", strtotime($last['post_date'])); ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end H-Card -->
                  <?php endforeach ; ?>
                  
                </ul>
              </div>
              <!-- ? === end of most-read News === -->

              <!-- ? = Hashtags = -->
              <div class="hashtags">
                <!-- ? side most-read News header -->
                <div class="col-side-header">الوسوم</div>

                <!-- Hashtags pills -->
                <ul>
                  <!-- # -->
                  <?php foreach($side_term as $term):?>
                  <li>
                    <a href="<?php echo base_url();?>homeNews/newsTerm/<?php echo $term['term_id'];?>"> <?php echo $term['term_title'];?> </a>
                  </li>
                  <?php endforeach ; ?>
                </ul>
              </div>
              <!-- ? = end of Hashtags = -->
            </div>
            <!-- ? END OF SIDE COL -->
          </div>
          <!-- ? END OF MAIN ROW -->
        </div>
      </div>
    </section>