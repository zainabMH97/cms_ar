
    <!-- ? === NORMAL SECTIONS === -->
    <section class="normal">
      <div class="container">
        <div class="section-header">
          <div class="text">
            <div class="title">اخبار الوزارة</div>
            <div class="underline">
              احدث الاخبار الخاصة بوزارة التعليم العالي والبحث العلمي
            </div>
          </div>
          <div class="ad-header">
            <a href="#normal"> مساحة اعلانية </a>
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

    <!--? ==== Gates ==== -->
    <section class="normal">
      <div class="container">
        <div class="section-header">
          <div class="text">
            <div class="title">البوابــــات الالكترونيــــة</div>
            <div class="underline">
              الخدمات الالكترونية الخاصة بوزارة التعليم العالي والبحث العلمي
            </div>
          </div>
        </div>
        <!-- end of header -->
        <div class="row gates-grid">
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
            <a href="https://www.dirasat-gate.org/">
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
              <div class="title">البوابة الالكترونية لدائرة البحث والتطوير</div>
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
          <!-- ? Last Gate -->
          <div class="col-6 col-md-4 col-xl-3 gate last">
            <a href="<?php echo base_url();?>homeNews/newsTerm/52">
              <div class="more-gates">المزيد</div>
            </a>
          </div>
          <!-- end of gate -->
        </div>
        <!--? ===== end of gates grid -->
      </div>
    </section>
    <!--? end of section -->

    <section class="normal">
      <div class="container">
        <div class="section-header">
          <div class="text">
            <div class="title">اخبـار الجـامعـات</div>
            <div class="underline">
              احدث الاخبار الخاصة بالجامعات والكليات الاهلية
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
                    <a class="link" href="<?php echo base_url();?>homeNews/newsTerm/<?php echo $right_university_section_col['term_id'];?>"><?php echo $right_university_section_col['term_title'];?></a>
                  </div>
                  <div class="title">
                    <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $right_university_section_col['post_slug'];?>"><?php echo $right_university_section_col['post_title']; ?></a>
                  </div>
                  <div class="underline">
                    <div class="views">
                      <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                      <span><?php echo $right_university_section_col['number_of_views'];?></span>
                    </div>
                    <div class="date">
                      <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                      <span><?php echo date("d-m-Y", strtotime($right_university_section_col['post_date'])); ?></span>
                    </div>
                  </div>
                </div>
              </div>
              <img
                class="news-card-thumbnail"
                src="<?php echo base_url();?>assets/img/news/<?php echo $right_university_section_col['post_img'] ; ?>"
                alt=""
              />
            </div>
          </div>
          <!-- end right col -->
          <div class="col-xl-6">
            <div class="row">
            <?php foreach($left_university_section_col as $news) : ?>
              <div
                class="col-6 p-xl-0 justify-content-center justify-content-xl-end d-flex"
              >
                <div class="news-card">
                  <div class="card-link">
                    <div class="caption">
                      <div class="page-tag">
                        <a class="link" href="<?php echo base_url();?>homeNews/newsTerm/<?php echo $news['term_id'];?>"><?php echo $news['term_title'];?></a>
                      </div>
                      <div class="title">
                        <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $news['post_slug'];?>"><?php echo $news['post_title']; ?></a>
                      </div>
                      <div class="underline">
                        <div class="views">
                          <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                          <span><?php echo $news['number_of_views'];?></span>
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
              <!-- end small card col -->
              <?php endforeach ; ?>
            </div>
          </div>
          <!-- end left col -->
        </div>
        <!-- end of row -->
        <div class="show-more-btn hovered">
          <a href="<?php echo base_url();?>homeNews/newsTerm/55" ><button class="fixed-width Thunderbird">جميع الاخبار</button></a>
        </div>
      </div>
    </section>
    <!--? end of section -->

    <!-- ? Minister bio -->
    <section class="decoration-bg">
      <div class="container">
        <div class="row minister-bio">
          <div class="col-md-6 col-lg-6 col-xl-7">
            <div class="text">
              <div class="overline">
                الأستاذ الدكتور المهندس نبيل كاظم عبد الصاحب
              </div>
              <div class="highlight">وزير التعليم العالي والبحث العلمي</div>
              <div class="brief">
                <p>
                  إن وزارة التعليم العالي والبحث العلمي تهدف إلى إجراء تغييرات
                  كميه ونوعيه في الحركة العلمية والتقنية والثقافية في العراق،
                  وتقوم بتوجيه المؤسسات العلمية والبحثية لتتولى عملية خلق جيل
                  جديد مزود بالعلم والمعرفة، لتكون هذه المؤسسات قوة فاعلة ومؤثرة
                  في المجتمع العراقي.
                </p>
                <p>
                  كما تهدف الوزارة إلى تطوير العلاقات العلمية والثقافية وتوسيع
                  العلاقات الودية في هذه المجالات مع الدول الأخرى والمنظمات
                  العلمية والأكاديمية المختلفة في جميع أنحاء العالم من أجل تحقيق
                  الانسجام والتكامل في مجالات العلم والمعرفة
                </p>
              </div>
            </div>
            <div class="double-btns hovered">
              <button class="fixed-width" href="">عن الوزارة</button>
              <a href="<?php echo base_url();?>home/cv">
                <button class="fixed-width Thunderbird" >
                  السيرة الذاتية
                </button>
              </a>
            </div>
          </div>
          <!-- end of right col -->
          <div class="col-md-5 col-lg-5 col-xl-4">
            <div class="minister-photo">
              <img src="<?php echo base_url();?>assets/viewApp/imgs/photos/minister.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--? end of section -->

    <!--? ==== Quick rectangular links ==== -->
    <section class="normal">
      <div class="container">
        <div class="section-header v2">
          <div class="text">
            <div class="title red-border">أدلة وملفات إرشادية</div>
          </div>
        </div>
        <!-- end of header --> 
        <div class="row gates-grid">
          <!-- ? New Gate -->
          <div class="col-6 col-md-4 col-xl-3 gate">
            <a href="<?php echo base_url();?>homeNews/newsTerm/77">
              <div class="title">دليل الطالب للقبول المركزي</div>
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
            <a href="<?php echo base_url();?>post/%d8%a7%d9%84%d8%aa%d8%b9%d9%84%d9%8a%d9%85-%d8%aa%d8%b9%d9%84%d9%86-%d9%82%d8%a8%d9%88%d9%84-%d8%a3%d9%83%d8%ab%d8%b1-%d9%85%d9%86-%d9%85%d8%a6%d8%aa%d9%8a%d9%86-%d9%88%d8%a7%d8%ad%d8%af-%d8%b9%d8%b4">
              <div class="title">نتائج القبول المركزي</div>
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
            <a href="<?php echo base_url(); ?>post/%d8%af%d9%84%d9%8a%d9%84%d8%a5%d8%ac%d8%b1%d8%a7%d8%a1%d8%a7%d8%aa-%d8%b4%d8%a4%d9%88%d9%86-%d8%a7%d9%84%d8%b7%d9%84%d8%a8%d8%a9-2020-2021">
              <div class="title">دليل إجراءات شؤون الطلبة</div>
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
          <!-- ? Last Gate -->
          <div class="col-6 col-md-4 col-xl-3 gate last">
            <a href="<?php echo base_url(); ?>homeNews/newsTerm/78">
              <div class="more-gates">المزيد</div>
            </a>
          </div>
          <!-- end of gate -->
        </div>
        <!--? ===== end of gates grid == #1 -->
        <!--? ==== Gates #2 ==== -->
        <div class="section-header v2 mt5">
          <div class="text">
            <div class="title blue-border">قوانين وقرارات</div>
          </div>
        </div>
        <!-- end of header -->
        <div class="row gates-grid blue-style">
          <!-- ? New Gate -->
          <div class="col-6 col-md-4 col-xl-3 gate">
            <a href="<?php echo base_url(); ?>post/%D8%A7%D9%84%D9%82%D9%88%D8%A7%D9%86%D9%8A%D9%86">
              <div class="title">القوانين</div>
              <div class="icons">
                <div class="main">
                  <i class="fal fa-check-square"></i>
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
            <a href="<?php echo base_url(); ?>post/%d9%82%d8%b1%d8%a7%d8%b1%d8%a7%d8%aa-%d8%a7%d9%84%d8%b7%d9%84%d8%a8%d8%a9-%d8%a7%d9%84%d9%86%d8%a7%d8%b2%d8%ad%d9%8a%d9%86">
              <div class="title">قرارات الطلبة النازحين</div>
              <div class="icons">
                <div class="main">
                  <i class="fal fa-truck"></i>
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
            <a href="<?php echo base_url();?>post/%D8%A7%D9%84%D8%A5%D9%8A%D9%81%D8%A7%D8%AF%D8%A7%D8%AA-%D8%A7%D9%84%D8%B1%D8%B3%D9%85%D9%8A%D8%A9">
              <div class="title">قرارات الدراسات العليا</div>
              <div class="icons">
                <div class="main">
                  <i class="fal fa-graduation-cap"></i>
                </div>
                <div class="arrow">
                  <i class="fal fa-long-arrow-left"></i>
                </div>
              </div>
            </a>
          </div>
          <!-- end of gate -->
          <!-- ? Last Gate -->
          <div class="col-6 col-md-4 col-xl-3 gate last">
            <a href="<?php echo base_url(); ?>homeNews/newsTerm/79">
              <div class="more-gates">المزيد</div>
            </a>
          </div>
          <!-- end of gate -->
        </div>
        <!--? ===== end of gates grid -->
      </div>
    </section>
    <!--? end of section -->

    <!--? ==== Activities ====  -->
    <section class="normal">
      <div class="container no-padding-mobile">
        <div class="section-header center">
          <div class="text">
            <div class="title">الانشطة والفعاليات</div>
            <div class="underline">
              ابرز الأنشطة والفعاليات الخاصة بالجامعات والكليات
            </div>
          </div>
        </div>
        <!-- end of section-header -->
        <!-- ? == Activities Carousel == -->
        <div
          id="activitesCarousel"
          class="carousel slide activitesCarousel"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <!-- ? Slide #1 -->
            <div class="carousel-item active" data-bs-interval="20000">
              <svg
                class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
                xmlns="http://www.w3.org/2000/svg"
                role="img"
                aria-label="Placeholder: First slide"
                preserveAspectRatio="xMidYMid slice"
                focusable="false"
              >
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777"></rect>
              </svg>
              <!-- end bg-white -->
              <div class="activities-card">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-6 p-0">
                      <div class="big-rect">
                        <div class="caption">
                          <div class="caption-link">
                            <div>
                              <div class="page-tag dark"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80" ><?php echo $activity_section_one['term_title'] ; ?></a></div>
                              <div class="title">
                                <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_one['post_slug'];?>"><?php echo $activity_section_one['post_title'] ; ?></a>
                              </div>
                            </div>
                            <!-- end of titel -->
                            <div class="card-info">
                              <div class="views">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                                <span> <?php echo $activity_section_one['number_of_views'] ; ?></span>
                              </div>
                              <div class="date">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                                <span><?php echo date("d-m-Y", strtotime($activity_section_one['post_date'])); ?></span>
                              </div>
                            </div>
                            <!-- end of info -->
                          </div>
                        </div>
                        <img
                          class="rect-img"
                          src="<?php echo base_url();?>assets/img/news/<?php echo $activity_section_one['post_img'] ; ?>"
                          alt=""
                        />
                      </div>
                      <!-- end of first big-rect card -->

                      <div class="horizontal-rect">
                        <div class="caption">
                          <div class="title">
                            <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_two['post_slug'];?>"><?php echo $activity_section_two['post_title'] ; ?></a>
                          </div>
                          <div class="page-tag red mt-3"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80" ><?php echo $activity_section_two['term_title'] ; ?></a></div>
                        </div>
                        <img
                          class="horizontal-img"
                          src="<?php echo base_url();?>assets/img/news/<?php echo $activity_section_two['post_img'] ; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <!--? end of right col -->
                    <!-- ? ==Middle Vertical cards==-->
                    <div class="col-lg-3 p-0">
                      <div class="double-vcards">
                        <div class="vertical-card">
                          <div class="caption">
                            <div>
                              <div class="page-tag red"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80"><?php echo $activity_section_three['term_title'] ; ?></a></div>
                              <div class="title">
                                <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_three['post_slug'];?>"><?php echo $activity_section_three['post_title'] ; ?></a>
                              </div>
                            </div>
                            <!-- end of titel -->
                            <div class="card-info">
                              <div class="views">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                                <span><?php echo $activity_section_three['number_of_views'] ; ?></span>
                              </div>
                              <div class="date">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                                <span><?php echo date("d-m-Y", strtotime($activity_section_three['post_date'])); ?></span>
                              </div>
                            </div>
                            <!-- end of info -->
                          </div>
                          <img
                            class="vartical-img"
                            src="<?php echo base_url();?>assets/img/news/<?php echo $activity_section_three['post_img'] ; ?>"
                            alt=""
                          />
                        </div>
                        <!-- end top card -->
                        <div class="vertical-card bg-23c">
                          <div class="caption">
                            <div>
                              <div class="page-tag red"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80"><?php echo $activity_section_foure['term_title'] ; ?></a></div>
                              <div class="title">
                                <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_foure['post_slug'];?>"><?php echo $activity_section_foure['post_title'] ; ?></a>
                              </div>
                            </div>
                            <!-- end of titel -->
                            <div class="card-info">
                              <div class="views">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                                <span><?php echo $activity_section_foure['number_of_views'] ; ?></span>
                              </div>
                              <div class="date">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                                <span><?php echo date("d-m-Y", strtotime($activity_section_foure['post_date'])); ?></span>
                              </div>
                            </div>
                            <!-- end of info -->
                          </div>
                        </div>
                        <!-- end bottom card -->
                      </div>
                    </div>
                    <!-- end of middle cards -->
                    <!-- ? ==Last Vertical cards==-->
                    <div class="col-lg-3 p-0 card-last-col">
                      <div class="vertical-card">
                        <div class="caption">
                          <div>
                            <div class="page-tag red"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80"><?php echo $activity_section_five['term_title'] ; ?></a></div>
                            <div class="title">
                                <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_five['post_slug'];?>"><?php echo $activity_section_five['post_title'] ; ?></a>
                              </div>
                          </div>
                          <!-- end of titel -->
                          <div class="card-info">
                            <div class="views">
                              <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                              <span><?php echo $activity_section_five['number_of_views'] ; ?></span>
                            </div>
                            <div class="date">
                              <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                              <span><?php echo date("d-m-Y", strtotime($activity_section_five['post_date'])); ?></span>
                            </div>
                          </div>
                          <!-- end of info -->
                        </div>
                        <img
                          class="vartical-img"
                          src="<?php echo base_url();?>assets/img/news/<?php echo $activity_section_five['post_img'] ; ?>"
                          alt=""
                        />
                      </div>
                      <!-- end top card -->
                      <div class="more-actv-btn">
                        <a href="<?php echo base_url();?>homeNews/newsTerm/80"> جميع الأنشطة والفعاليات </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide -->
            <!-- ? Slide #2 -->
            <div class="carousel-item" data-bs-interval="20000">
              <svg
                class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
                xmlns="http://www.w3.org/2000/svg"
                role="img"
                aria-label="Placeholder: First slide"
                preserveAspectRatio="xMidYMid slice"
                focusable="false"
              >
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777"></rect>
              </svg>
              <!-- end bg-white -->
              <div class="activities-card">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-6 p-0">
                      <div class="big-rect">
                        <div class="caption">
                          <div class="caption-link">
                            <div>
                              <div class="page-tag dark"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80" ><?php echo $activity_section_six['term_title'] ; ?></a></div>
                              <div class="title">
                                <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_six['post_slug'];?>"><?php echo $activity_section_six['post_title'] ; ?></a>
                              </div>
                            </div>
                            <!-- end of titel -->
                            <div class="card-info">
                              <div class="views">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                                <span><?php echo $activity_section_six['number_of_views'] ; ?></span>
                              </div>
                              <div class="date">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                                <span><?php echo date("d-m-Y", strtotime($activity_section_six['post_date'])); ?></span>
                              </div>
                            </div>
                            <!-- end of info -->
                          </div>
                        </div>
                        <img
                          class="rect-img"
                          src="<?php echo base_url();?>assets/img/news/<?php echo $activity_section_six['post_img'] ; ?>"
                          alt=""
                        />
                      </div>
                      <!-- end of first big-rect card -->

                      <div class="horizontal-rect">
                        <div class="caption">
                          <div class="title">
                            <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_seven['post_slug'];?>"><?php echo $activity_section_seven['post_title'] ; ?></a>
                          </div>
                          <div class="page-tag red mt-3"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80" ><?php echo $activity_section_seven['term_title'] ; ?></a></div>
                        </div>
                        <img
                          class="horizontal-img"
                          src="<?php echo base_url();?>assets/img/news/<?php echo $activity_section_seven['post_img'] ; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <!--? end of right col -->
                    <!-- ? ==Middle Vertical cards==-->
                    <div class="col-lg-3 p-0">
                      <div class="double-vcards">
                        <div class="vertical-card">
                          <div class="caption">
                            <div>
                              <div class="page-tag red"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80" ><?php echo $activity_section_eight['term_title'] ; ?></a></div>
                              <div class="title">
                                <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_eight['post_slug'];?>"><?php echo $activity_section_eight['post_title'] ; ?></a>
                              </div>
                            </div>
                            <!-- end of titel -->
                            <div class="card-info">
                              <div class="views">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                                <span><?php echo $activity_section_eight['number_of_views'] ; ?></span>
                              </div>
                              <div class="date">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                                <span><?php echo date("d-m-Y", strtotime($activity_section_eight['post_date'])); ?></span>
                              </div>
                            </div>
                            <!-- end of info -->
                          </div>
                          <img
                            class="vartical-img"
                            src="<?php echo base_url();?>assets/img/news/<?php echo $activity_section_eight['post_img'] ; ?>"
                            alt=""
                          />
                        </div>
                        <!-- end top card -->
                        <div class="vertical-card bg-23c">
                          <div class="caption">
                            <div>
                              <div class="page-tag red"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80" ><?php echo $activity_section_nine['term_title'] ; ?></a></div>
                              <div class="title">
                                <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_nine['post_slug'];?>"><?php echo $activity_section_nine['post_title'] ; ?></a>
                              </div>
                            </div>
                            <!-- end of titel -->
                            <div class="card-info">
                              <div class="views">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                                <span><?php echo $activity_section_nine['number_of_views'] ; ?></span>
                              </div>
                              <div class="date">
                                <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                                <span><?php echo date("d-m-Y", strtotime($activity_section_nine['post_date'])); ?></span>
                              </div>
                            </div>
                            <!-- end of info -->
                          </div>
                        </div>
                        <!-- end bottom card -->
                      </div>
                    </div>
                    <!-- end of middle cards -->
                    <!-- ? ==Last Vertical cards==-->
                    <div class="col-lg-3 p-0 card-last-col">
                      <div class="vertical-card">
                        <div class="caption">
                          <div>
                            <div class="page-tag red"><a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>homeNews/newsTerm/80" ><?php echo $activity_section_ten['term_title'] ; ?></a></div>
                            <div class="title">
                                <a style="text-decoration:none ; color:white;" href="<?php echo base_url();?>post/<?php echo $activity_section_ten['post_slug'];?>"><?php echo $activity_section_ten['post_title'] ; ?></a>
                              </div>
                          </div>
                          <!-- end of titel -->
                          <div class="card-info">
                            <div class="views">
                              <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/eye.svg" alt="" />
                              <span><?php echo $activity_section_ten['number_of_views'] ; ?></span>
                            </div>
                            <div class="date">
                              <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/calendar.svg" alt="" />
                              <span><?php echo date("d-m-Y", strtotime($activity_section_ten['post_date'])); ?></span>
                            </div>
                          </div>
                          <!-- end of info -->
                        </div>
                        <img
                          class="vartical-img"
                          src="<?php echo base_url();?>assets/img/news/<?php echo $activity_section_ten['post_img'] ; ?>"
                          alt=""
                        />
                      </div>
                      <!-- end top card -->
                      <div class="more-actv-btn">
                        <a href="<?php echo base_url();?>homeNews/newsTerm/80"> جميع الأنشطة والفعاليات </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide -->
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#activitesCarousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#activitesCarousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!--? ==== Quick iconic links ==== -->
    <section class="decoration-bg">
      <div class="container">
        <div class="row iconic-links-grid">
          <!-- new icon -->
          <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <a href="<?php echo base_url(); ?>post/%d8%af%d9%84%d9%8a%d9%84-%d8%a7%d9%84%d8%ac%d8%a7%d9%85%d8%b9%d8%a7%d8%aa-%d9%84%d9%84%d8%b7%d9%84%d8%a8%d8%a9-%d8%a7%d9%84%d8%af%d8%a7%d8%b1%d8%b3%d9%8a%d9%86-%d8%ae%d8%a7%d8%b1%d8%ac-%d8%a7%d9%84" class="icon-link blue">
              <div class="icon-spot">
                <i class="far fa-university"></i>
              </div>
              <span>الجامعات الرصينة</span>
            </a>
          </div>
          <!-- end icon -->
          <!-- new icon -->
          <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <a href="<?php echo base_url(); ?>post/%d8%af%d9%84%d9%8a%d9%84-%d8%a7%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d8%a7%d9%85%d8%aa%d8%ad%d8%a7%d9%86%d8%a7%d8%aa-%d8%a7%d9%84%d8%ac%d8%a7%d9%85%d8%b9%d9%8a%d8%a9" class="icon-link pink">
              <div class="icon-spot">
                <i class="far fa-list"></i>
              </div>
              <span>دليل إدارة الامتحانات الجامعية</span>
            </a>
          </div>
          <!-- end icon -->
          <!-- new icon -->
          <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <a href="<?php echo base_url();?>post/%D8%A7%D9%84%D8%A5%D9%8A%D9%81%D8%A7%D8%AF%D8%A7%D8%AA-%D8%A7%D9%84%D8%B1%D8%B3%D9%85%D9%8A%D8%A9" class="icon-link green-bg">
              <div class="icon-spot">
                <i class="far fa-check-square"></i>
              </div>
              <span>الإيفادات الرسمية</span>
            </a>
          </div>
          <!-- end icon -->
          <!-- new icon -->
          <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <a href="<?php echo base_url();?>post/ncamc" class="icon-link yellow">
              <div class="icon-spot">
                <i class="far fa-user-tie"></i>
              </div>
              <span>مجلس اعتماد كليات الطب</span>
            </a>
          </div>
          <!-- end icon -->
          <!-- new icon -->
          <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <a href="<?php echo base_url();?>post/%d8%a7%d9%84%d8%af%d9%84%d9%8a%d9%84-%d8%a7%d9%84%d8%a7%d8%b3%d8%aa%d8%b1%d8%b4%d8%a7%d8%af%d9%8a-%d9%84%d9%84%d8%b7%d9%84%d8%a8%d8%a9" class="icon-link royal">
              <div class="icon-spot">
                <i class="far fa-bookmark"></i>
              </div>
              <span>الدليل الاسترشادي</span>
            </a>
          </div>
          <!-- end icon -->
          <!-- new icon -->
          <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <a href="<?php echo base_url();?>post/%d8%aa%d8%b5%d9%86%d9%8a%d9%81-%d8%ac%d9%88%d8%af%d8%a9-%d8%a7%d9%84%d9%85%d8%ae%d8%aa%d8%a8%d8%b1%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d8%b9%d9%84%d9%8a%d9%85%d9%8a%d8%a9" class="icon-link green">
              <div class="icon-spot">
                <i class="far fa-check-square"></i>
              </div>
              <span>تصنيف جودة المختبرات التعليمية</span>
            </a>
          </div>
          <!-- end icon -->
          <!-- new icon -->
          <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <a href="<?php echo base_url();?>post/%d8%a7%d9%84%d8%b4%d9%83%d8%a7%d9%88%d9%89-%d9%88%d8%a7%d9%84%d9%85%d9%82%d8%aa%d8%b1%d8%ad%d8%a7%d8%aa" class="icon-link yellow">
              <div class="icon-spot">
                <i class="far fa-user-headset"></i>
              </div>
              <span>الشكاوي والمقترحات</span>
            </a>
          </div>
          <!-- end icon -->
          <!-- new icon -->
          <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <a href="#test" class="icon-link blue">
              <div class="icon-spot">
                <i class="far fa-angle-double-up"></i>
              </div>
              <span>المزايدات والمناقصات</span>
            </a>
          </div>
          <!-- end icon -->
        </div>
      </div> 
    </section>
    <!--? end of section -->
    
