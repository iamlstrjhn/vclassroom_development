

          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Announcements</h5>
                      
                       <a class="btn waves-effect cyan btn-add-schoolworks modal-trigger" href="#modal2">ADD NEW</a>

                         <div id="modal2" class="modal">
                            <div class="modal-content modal-add-schedules">
                                <h5>ADD A SCHEDULE</h5>

                                <div class="line" style="border:2px solid #00bcd4!important; margin:30px 0 10px 0;"></div>

                                <?php echo form_open('Teacherschedules/add_announcement'); ?>
                                  <div class="row">
                                      <div class="col s12">
                                          <div class="input-field">
                                            <input type="text" class="validate" name="title">
                                            <label>Input Title</label>
                                          </div>
                                      </div>

                                      <div class="col s12">
                                          <div class="input-field">
                                            <input type="text" class="validate" name="content">
                                            <label>Input Content</label>
                                          </div>
                                      </div>

                                     <div class="col s12">
                                          <div class="input-field">
                                            <input type="text" class="datepicker" name="sched">
                                            <label>Enter the date</label>
                                          </div>
                                      </div>
                                    </div>

                                    <button class="waves-effect btn cyan btn-username right" type="submit" value="submit" style="margin-top: 78px;">SUBMIT </button>
                                </form>
                                
                            </div>
                            
                        </div>

                            <div class="row">

                              <?php foreach ($announcement as $announcements) { ?>
                                
                              
                              <div class="col s12 l6">
                                 <div class="card-schedule">
                                    <a class="h6-schedule black-text"><?php echo $announcements['AnnouncementTitle'] ?></a>
                                    
                                    <a class="right dropdown-button" href="#" data-beloworigin="true" data-activates="dropdownsched<?php echo $announcements['AnnouncementID'];?>"><i class="material-icons material-details">more_horiz</i></a>

                                       <ul id='dropdownsched<?php echo $announcements['AnnouncementID'];?>' class='dropdown-content'>
                                        <li><a href="#modaledit<?php echo $announcements['AnnouncementID'];?>" class="modal-trigger"><i class="material-icons">edit</i>EDIT</a></li>
                                        <li><a href="#!" class="remove"><i class="material-icons">delete</i>REMOVE</a></li>
                                      </ul>

                                      <!-- modal part -->
                                      <div id="modaledit<?php echo $announcements['AnnouncementID'];?>" class="modal">
                                          <div class="modal-content modal-add-schedules">
                                                <h5>Edit the schedule</h5>
                                                <div class="line" style="border:2px solid #00bcd4!important; margin:30px 0 10px 0;"></div>
                                                <form action="Teacherschedules/update_announcement" method=POST>
                                                <input type="hidden" name='id' value="<?php echo $announcements['AnnouncementID'];?>">
                                                  <div class="row">
                                                      <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="validate" name="title" value="<?php echo $announcements['AnnouncementTitle'] ?>">
                                                            <label>Title</label>
                                                          </div>
                                                      </div>

                                                      <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="validate" name="content" value="<?php echo $announcements['AnnouncementContent'] ?>">
                                                            <label>Content</label>
                                                          </div>
                                                      </div>

                                                     <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="datepicker" name="sched" value="<?php echo $announcements['AnnouncementSched'] ?>">
                                                            <label>Date</label>
                                                          </div>
                                                      </div>
                                                    </div>

                                                    <button class="waves-effect btn cyan btn-username right" type="submit" value="submit" style="margin-top: 78px;">SUBMIT </button>
                                                    </form>
                                                
                                            </div>
                                      </div>
                                      <!-- end of modal for edit -->

                                    <p><b class="sched-bold-text"><?php echo $announcements['Firstname']." ".$announcements['Lastname'] ?></b>&ensp;<i><?php echo $announcements['AnnouncementSched'] ?></i></p>
                                    <p><?php echo $announcements['AnnouncementContent'] ?></p>
                                    <div class="divider"></div>
                                    <small><b style="color: #949494">POSTED ON <?php echo $announcements['AnnouncementDate'] ?></b></small>
                                  </div>
                              </div>
                              <?php } ?>

                            </div>
                      
                  </div>
                </div>
              </div>
                
          </main>

     