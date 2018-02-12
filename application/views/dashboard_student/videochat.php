
          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Live Chat Sessions</h5>
                    
                        <div class="row">

                            <?php foreach ($videochat as $livechat){ ?>
                              <div class="col s12 m7 l7">
                                <div class="card-live-chat">
                                  <h6 class="h6-schedule"><?php echo $livechat['VideochatTopic'] ?></h6>
                                  <p><b class="sched-bold-text"><?php echo $livechat['Firstname'].' '.$livechat['Lastname']?></b>&ensp;<i><?php echo $livechat['VideochatSched'] ?></i></p>
                                  <p><?php echo $livechat['VideochatOverview'] ?></p>
                                  <button class="btn btn-username cyan">Start</button>
                                </div>
                              </div>
                          <?php } ?>

                        </div>
                    
                  </div>
                </div>
              </div>
                
          </main>
