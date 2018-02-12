
          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Activities/Quizzes/Lectures</h5>
                      
                            <div class="row">
                              

                              <?php foreach ($upload_data as $item) { ?>

                              <div class="col s12 l6">
                                <div class="card-works">
                                  <a class="black-text h6-for-schoolworks" href="<?php echo site_url('/uploads/') .$item['SchoolWorksFile']?>" target="_blank"><?php echo $item['SchoolWorksFile'] ?></a><br>
                                  <small><?php echo $item['SchoolWorksDate'] ?></small>
                                  <p><?php echo $item['SchoolWorksContent'] ?></p>
                                  <div class="divider"></div>
                                  <p class="p-text-schoolworks"><?php echo $item['SubjectDescription'] ?></p>
                                </div>
                              </div>

                              <?php } ?>

                            </div>
                      
                  </div>
                </div>
              </div>
                
          </main>
