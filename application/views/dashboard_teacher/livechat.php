

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

                                <?php echo form_open('Teacherlivechat/setlivechat'); ?>
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

     