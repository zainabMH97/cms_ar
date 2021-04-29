<?php
 Header("Cache-Control: max-age=34400");
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, viewport-fit=cover"
    />
    <meta http-equiv="Cache-control" content="public">
    <script
      src="https://kit.fontawesome.com/c6b5187677.js"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap 5 local style -->
    <link
      rel="stylesheet"
      href="<?php echo base_url();?>assets/viewApp/styles/bootstrap.min.css"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <!-- special main style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/viewApp/styles/main.css" />
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/viewApp/imgs/mohser_logo/symbol.png" />
    <title>وزارة التعليم العالي والبحث العلمي</title>
  </head>
  <body>
    <section class="initial">
      <header>
        <div class="container">
          <div class="row header-row">
            <div class="col-5 col-lg-2">
              <div class="mohser-logo">
                <a href="<?php echo base_url();?>">
                  <img class="symbol" src="<?php echo base_url();?>assets/viewApp/imgs/mohser_logo/symbol.png" />
                  <img class="text" src="<?php echo base_url();?>assets/viewApp/imgs/mohser_logo/text.svg" />
                </a>
              </div>
              <!-- end of mohser-logo -->
            </div>
            <!-- end of mohser-logo col -->
            <!-- ? == NAVBAR == -->
            <div class="col-6 col-lg-10">
              <div class="main-navbar">
                <!-- Humburger Btn -->
                <div class="menu-btn">
                  <div class="menu-btn__burger"></div>
                </div>
                <!-- end of burger btn -->

                <nav>
                  <!-- when moble screen is active -->
                  <div class="mobile-search">
                    <form action="">
                      <input type="text" placeholder="بحث داخل الموقع" />
                      <button type="submit">
                        <i class="far fa-search"></i>
                      </button>
                    </form>
                  </div>
                  <ul>
                    <!-- ? parent link -->

                    <li class="active">
                      <a href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/home.svg" alt="" />
                      </a>
                    </li>
                    <!-- end of parent link -->
                    <!-- ? parent link -->
                    <!-- <li>
                      <a href=""> الوزارة </a>
                    </li> -->

                    <li id="expandable3" class="expandable">
                      الوزارة
                      <span class="menu-chevron-icon">
                        <i class="fal fa-chevron-down"></i>
                      </span>

                      <div id="sub-menu3" class="sub-menu"> 
                        <div class="sub-container">
                          <ul>
                            <li>
                              <a href="<?php echo base_url();?>home/about_ministry">عن الوزارة</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url();?>home/cv">الوزير</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/agents">الوكلاء</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/advisors">المستشارون</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/OpinionAutherity">هيئة الرأي</a>
                            </li>
                          </ul>
                        </div>
                      </div>

                    </li> 
                    <!-- end of parent link -->
                    <!-- ? parent link -->
                    <li id="expandable1" class="expandable">
                      دوائر الوزارة
                      <span class="menu-chevron-icon">
                        <i class="fal fa-chevron-down"></i>
                      </span>
                      <div id="sub-menu1" class="sub-menu">
                        <div class="sub-container">
                          <ul>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/ministrySection/%d8%ac%d9%87%d8%a7%d8%b2-%d8%a7%d9%84%d8%a7%d8%b4%d8%b1%d8%a7%d9%81-%d9%88%d8%a7%d9%84%d8%aa%d9%82%d9%88%d9%8a%d9%85-%d8%a7%d9%84%d8%b9%d9%84%d9%85%d9%8a"> جهاز الإشراف والتقديم العلمي </a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>%d8%a7%d9%84%d8%af%d8%b1%d8%a7%d8%b3%d8%a7%d8%aa-%d9%88-%d8%a7%d9%84%d8%aa%d8%ae%d8%b7%d9%8a%d8%b7-%d9%88-%d8%a7%d9%84%d9%85%d8%aa%d8%a7%d8%a8%d8%b9%d8%a9"> دائرة الدراسات والتخطيط والمتابعة </a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/ministrySection/%d8%af%d8%a7%d8%a6%d8%b1%d8%a9-%d8%a7%d9%84%d8%a8%d8%ad%d8%ab-%d9%88%d8%a7%d9%84%d8%aa%d8%b7%d9%88%d9%8a%d8%b1"> دائرة البحث والتطوير </a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/ministrySection/%d8%a7%d9%84%d8%a8%d8%b9%d8%ab%d8%a7%d8%aa-%d9%88%d8%a7%d9%84%d8%b9%d9%84%d8%a7%d9%82%d8%a7%d8%aa-%d8%a7%d9%84%d8%ab%d9%82%d8%a7%d9%81%d9%8a%d8%a9"> دائرة البعثات والعلاقات الثقافية </a>
                            </li>
                            
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/ministrySection/%d8%af%d9%88%d8%a7%d8%a6%d8%b1-%d8%a7%d9%84%d8%b9%d9%84%d9%88%d9%85-%d9%88-%d8%a7%d9%84%d8%aa%d9%83%d9%86%d9%88%d9%84%d9%88%d8%ac%d9%8a%d8%a7"> دوائر العلوم والتكنولوجيا </a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/ministrySection/%d8%a7%d9%84%d8%af%d8%a7%d8%a6%d8%b1%d8%a9-%d8%a7%d9%84%d9%85%d8%a7%d9%84%d9%8a%d8%a9"> الدائرة الإدارية والمالية </a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/ministrySection/%d8%a7%d9%84%d8%af%d8%a7%d8%a6%d8%b1%d8%a9-%d8%a7%d9%84%d9%82%d8%a7%d9%86%d9%88%d9%86%d9%8a%d8%a9-%d9%88%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d9%8a%d8%a9"> الدوائر القانونية </a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/ministrySection/'%d8%a7%d9%84%d8%a7%d8%b9%d9%85%d8%a7%d8%b1-%d9%88%d8%a7%d9%84%d9%85%d8%b4%d8%a7%d8%b1%d9%8a%d8%b9'"> دائرة الاعمار والمشاريع </a>
                            </li>
                            <li>
                              <a href="<?php echo base_url(); ?>navbar/ministrySection/ncamc"> المجلس الوطني لاعتماد كليات الطب </a>
                            </li>

                            <li>
                              <a href="<?php echo base_url(); ?>navbar/ministrySection/%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d8%a7%d8%b3%d8%aa%d8%b4%d8%a7%d8%b1%d9%8a"> المجلس الاستشاري </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <!-- end of parent link -->
                    <!-- ? parent link -->
                    <li id="expandable2" class="expandable">
                      الجامعات والكليات
                      <span class="menu-chevron-icon">
                        <i class="fal fa-chevron-down"></i>
                      </span>
                      <div id="sub-menu2" class="sub-menu">
                        <div class="sub-container">
                          <ul>
                            <li>
                              <a href=""> الجامعات الحكومية </a>
                            </li>
                            <li>
                              <a href=""> الجامعات الاهلية </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <!-- end of parent link -->
                    <!-- ? parent link -->
                    <li>
                      <a href=""> الهيئات والمراكز البحثية </a>
                    </li>
                    <!-- end of parent link -->
                    <!-- ? parent link -->
                    <li>
                      <a href=""> الملحقات الثقافية </a>
                    </li>
                    <!-- end of parent link -->
                    <!-- ? parent link -->
                    <li>
                      <a href=""> الجمعيات والمكاتب </a>
                    </li>
                    <!-- end of parent link -->
                    <!-- ? parent link -->
                    <li>
                      <a href="<?php echo base_url();?>home/contact_us"> اتصل بنا </a>
                    </li>
                    <!-- end of parent link -->
                    <!-- ? parent link -->
                    <li class="desktop-search">
                      <span class="desktop-search-icon">
                        <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/search.svg" alt="" />
                      </span>
                    </li>
                    <!-- end of parent link -->
                    <!-- ? parent link -->
                    <li class="switch-lang">
                      <a href=""> <img src="<?php echo base_url();?>assets/viewApp/imgs/icons/en.svg" alt="" /> </a>
                    </li>
                    <!-- end of parent link -->
                  </ul>
                </nav>
                <!-- desktop search -->
                <div class="search-slide">
                  <form action="">
                    <input type="text" placeholder="بحث داخل الموقع" />
                    <button type="submit">
                      <i class="fad fa-angle-double-right"></i>
                    </button>
                  </form>
                </div>
                <!-- end of desktop search -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- end of header -->