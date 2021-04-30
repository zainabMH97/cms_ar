
<section class="normal">
      <div class="container">
        <div class="section-header center">
          <div class="text">
            <div class="title"><?php echo $title_agent ;?></div>
          </div>
        </div>
        <!-- end section header -->
         
        <!-- ? === Profiles === -->
        <div class="profiles-grid">
          <div class="row">
          <?php foreach($agents as $agent) :?>
                <!-- ? = Card Profile COL -->
            <div class="col-sm-6 col-lg-4">
              <div class="profile-card">
                <img src="<?php echo base_url();?>assets/img/news/<?php echo $agent['tb_img'];?>" alt="" class="photo" />
                <!-- Middle -->
                <div class="middle">
                  <div class="name"><?php echo $agent['tb_name'];?></div>
                  <!-- end name -->
                  <div class="title"><?php echo $agent['tb_info'];?> عضو </div>
                  <!-- end title -->
                  <div class="action hovered">
                    <a 
                      <?php if(!empty($agent['tb_cv'])) : ?>
                        href = "<?php echo base_url(); ?>assets/img/agents_consultant/<?php echo $agent['tb_cv'];?>"
                      <?php else : ?>
                        href = "#"
                      <?php endif ; ?>
                     ><button class="Thunderbird small">السيرة الذاتية</button></a>
                    <!-- <select class="small dark" name="" id="">
                      <option value="1">الوكالات والإدارات التابعة</option>
                    </select> -->
                  </div>
                  <!-- end action -->
                </div>
                <!-- end of Middle -->

                <div class="quick-info">
                  <div class="phones">
                    <div class="no">
                      <i class="fas fa-phone-alt"></i>
                      <a href="tel:<?php echo $agent['tb_num1'];?>"><?php echo $agent['tb_num1'];?> </a>
                    </div>
                    <!-- end no1 -->
                    <div class="no">
                      <i class="fas fa-mobile"></i>
                      <a href="tel:<?php echo $agent['tb_num2'];?>"> <?php echo $agent['tb_num2'];?> </a>
                    </div>
                    <!-- end no2 -->
                  </div> 
                  <!-- end of phones -->
                  <div class="email">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?php echo $agent['tb_email'];?>"
                      ><?php echo $agent['tb_email'];?></a
                    >
                  </div>
                </div>
                <!-- end of quick-info -->
              </div>
              <!-- end profile card -->
              
          </div>
          <?php endforeach ; ?>
          <!-- end cards row -->
        </div>
        <!-- end profiles grid -->
        
      </div>
      
    </section>