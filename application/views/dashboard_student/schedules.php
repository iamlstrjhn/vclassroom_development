
          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">
                    <h5>Schedules</h5>
                      <div class="row">

                         <?php foreach ($announcement as $announcements) { ?>
                                
                              
                              <div class="col s12 l6">
                                 <div class="card-schedule">
                                    <h6 class="h6-schedule"><?php echo $announcements['AnnouncementTitle'] ?></h6>
                                    <p><b class="sched-bold-text"><?php echo $announcements['Firstname']." ".$announcements['Lastname'] ?></b>&ensp;<i><?php echo $announcements['AnnouncementSched'] ?></i></p>
                                    <p><?php echo $announcements['AnnouncementContent'] ?></p>
                                  </div>
                              </div>
                              <?php } ?>
                  </div>
                </div>
              </div>
                
          </main>
