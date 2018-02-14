

          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Live chat session</h5>
                      <a href="#modal3" class="btn-live-chat btn cyan btn-username modal-trigger" >START A SESSION</a>
                      <div id="modal3" class="modal">
                            <div class="modal-content modal-add-livechat">
                                <h5>SET SCHEDULE FOR LIVE CHAT</h5>
                                <div class="line" style="border:2px solid #00bcd4!important; margin:30px 0 10px 0;"></div>
                                <form action="<?php echo base_url('Teacherlivechat/setlivechat') ?> " method="POST">
                                  <div class="row">
                                      <div class="col s12">
                                          <div class="input-field">
                                            <input type="text" class="validate" name="topic">
                                            <label >Topic</label>
                                          </div>
                                      </div>

                                      <div class="col s12">
                                          <div class="input-field">
                                            <input type="text" class="validate" name="overview">
                                            <label >Overview</label>
                                          </div>
                                      </div>

                                     <div class="col s12">
                                          <div class="input-field">
                                            <input type="text" class="datepicker" name="sched">
                                            <label >Enter the date</label>
                                          </div>
                                      </div>
                                    </div>

                                    <button class="waves-effect btn cyan btn-username right" type="submit" value="submit" style="margin-top: 78px;">SUBMIT </button>
                                </form>
                                
                            </div>
                            
                        </div>


                      <div class="row">

                          <?php foreach ($videochat as $livechat){ ?>
                              <div class="col s12 m7 l7">
                                <div class="card-live-chat">
                                  <h6 class="h6-schedule"><?php echo $livechat['VideochatTopic'] ?> 
                                        <a class="right dropdown-button" href="#" data-beloworigin="true" data-activates="dropdownlivechat<?php echo $livechat['VideochatID'] ?>"><i class="material-icons material-details">more_horiz</i></a>
                                  </h6>

                                    <!-- content of dropdown -->
                                      <ul id='dropdownlivechat<?php echo $livechat['VideochatID'] ?>' class='dropdown-content' style="font-weight: 400!important;">
                                        <li><a href="#modaledit<?php echo $livechat['VideochatID'] ?>" class="modal-trigger"><i class="material-icons">edit</i>EDIT</a></li>
                                        <li><a href="<?php echo base_url('Teacherlivechat/remove_livechat')."/".$livechat['VideochatID']; ?>" class="remove"><i class="material-icons">delete</i>REMOVE</a></li>
                                      </ul>
                                    <!-- end of content of dropdown -->

                                    <!-- this is the modal part for edit -->
                                    <!-- modal part -->
                                      <div id="modaledit<?php echo $livechat['VideochatID'] ?>" class="modal">
                                          <div class="modal-content modal-add-schedules">
                                                <h5>Edit Livechat content</h5>
                                                <div class="line" style="border:2px solid #00bcd4!important; margin:30px 0 10px 0;"></div>

                                                <form action="<?php echo base_url('Teacherlivechat/updatelivechat') ?>" method=POST>
                                                <input type="hidden" name='id' value="<?php echo $livechat['VideochatID'] ?>">
                                                  <div class="row">
                                                      <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="validate" name="topic" value="<?php echo $livechat['VideochatTopic'] ?>">
                                                            <label>Title</label>
                                                          </div>
                                                      </div>

                                                      <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="validate" name="overview" value="<?php echo $livechat['VideochatOverview'] ?>">
                                                            <label>Content</label>
                                                          </div>
                                                      </div>

                                                     <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="datepicker" name="sched" value="<?php echo $livechat['VideochatSched'] ?>">
                                                            <label>Date</label>
                                                          </div>
                                                      </div>
                                                    </div>

                                                    <button class="waves-effect btn cyan btn-username right" type="submit" value="submit" style="margin-top: 78px;">SUBMIT </button>
                                                    </form>
                                                
                                            </div>
                                      </div>


                                  <p><b class="sched-bold-text"><?php echo $livechat['Firstname'].' '.$livechat['Lastname']?></b>&ensp;<i><?php echo $livechat['VideochatSched'] ?></i></p>
                                  <p><?php echo $livechat['VideochatOverview'] ?></p>
                                  <a class="btn btn-username cyan" href="https://www.gruveo.com/ccvirtualclassroom" target="_blank">START</a>
                                </div>
                              </div>
                          <?php } ?>

                            
                      </div> 

                     

                    
                  </div>
                </div>
              </div>
                
          </main>

     