 
          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Student Dashboard</h5>
                      
                      <div class="row">
                          <div class="col s12 l4">
                            <div class="card-for-dashboard">
                             <div class=" box-d">
                               <img class="responsive-img left images-for-dashboard" src="images/professor.png">
                              <h5>Total Teachers</h5>
                              <h4 class="align-right">
                               <h5 style="color: #0097a7; font-weight: 600;"><?php print_r($count_teachers); ?></h5>
                              </h4>
                            </div>
                            </div>
                          </div>

                           <div class="col s12 l4">
                            <div class="card-for-dashboard">
                               <div class=" box-d">
                                 <img class="responsive-img left images-for-dashboard" src="images/agenda.png">
                                 <h5>Total Subjects</h5>
                                  <h4 class="align-right">
                                  <h5 style="color: #0097a7; font-weight: 600;"><?php print_r($count_registered_subjects); ?></h5>
                                  </h4>
                              </div>
                            </div>
                          </div>

                          <dixdv class="col s12 l4">
                            <div class="card-for-dashboard">
                               <div class=" box-d">
                                 <img class="responsive-img left images-for-dashboard" src="images/clipboards.png">
                                 <h5>Total Activities</h5>
                                  <h4 class="align-right">
                                 <h5 style="color: #0097a7; font-weight: 600;"><?php print_r($count_activities); ?></h5>
                                  </h4>
                              </div>
                            </div>
                          </div>
                    </div>

                    <div class="divider"></div>

                      <div class="row">
                            <h6 style="margin-top: 20px; color: #0097a7;"><b>Uploaded Requirements</b></h6>

                              <?php foreach ($insert_data as $data_insert) { ?>
                                  <div class="col s12 l6">
                                    <div class="card-works">
                                      <a class="black-text h6-for-schoolworks" href="#" target="_blank"><?= $data_insert['SchoolWorksFile']; ?></a><br>
                                      <small><?= $data_insert['SchoolWorksDate'] ?></small>
                                      <p><?= $data_insert['SchoolWorksContent']; ?></p>
                                      <div class="divider"></div>
                                      <p class="p-text-schoolworks"><?= $data_insert['SubjectDescription'] ?></p>
                                    </div>
                                  </div>
                                   <!-- end of foreach loop -->
                              <?php } ?>

                                  <!-- Modal for the uploading part -->
                                 <div id="modalforupload" class="modal">
                                    <div class="modal-content modal-add-works">
                                      <h5>Upload your requirements</h5>
                                         <?php echo form_open_multipart('Studentdashboard/upload_requirements'); ?>
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="input-field">
                                                      <input name="content" type="text" class="validate">
                                                      <label>Input message</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                              <div class="col s12">
                                                <div class="input-field">
                                                  <select name="load">
                                                    <option value="" disabled selected>List of subjects</option>
                                                    <?php foreach ($loads as $load) { ?>
                                                    <option value="<?php echo $load['FacultyLoadID'] ?>"><?php echo $load['SubjectDescription'] ?></option>
                                                    <?php } ?>
                                                  </select>
                                                  <label>Choose your subject</label>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="file-field input-field">
                                                <div class="btn btn-username cyan ">
                                                    <span>File</span>
                                                    <input type="file" name="userfile" size="20">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                          <button class="waves-effect btn cyan btn-username right" type="submit" value="upload" style="margin-top: 60px;">SUBMIT </button>
                                      </form>
                                    </div>
                                  </div>
                              <!-- End modal for upload file -->


                             
                              
                            <!-- closing tag of row -->
                        </div>
                          <!-- This is the floating button -->
                        <div class="fixed-action-btn vertical">
                          <a class="btn-floating btn-large orange lighten-1">
                            <i class="large material-icons">add</i>
                          </a>
                          <ul>
                            <li><a class="btn-floating blue lighten-1 modal-trigger" href="#modalforupload"><i class="material-icons">publish</i></a></li>
                          </ul>
                         </div>
                        <!-- This is the end of button -->
                          
                       
                    
                  </div>
                </div>
              </div>
                
          </main>

    