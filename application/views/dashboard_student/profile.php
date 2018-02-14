

          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

         <?php foreach ($profile as $profiles) { ?>           
                    
                    <div class="row">
                      <div class="col s12">
                        <div class="card-for-profile">
                            <div class="row row-for-card-profile">
                                <div class="col l1">
                                  <img class="responsive-img" src="<?php echo site_url('/uploads/') .$profiles['Photo']?>">
                                </div>

                                <div class="col l10 name-user">
                                  <h5><b><?php echo $profiles['Firstname'].' '.$profiles['Middlename'].' '.$profiles['Lastname'] ?></b></h5>
                                  <p>STUDENT</p>
                                </div>

                                  <div class="col l1">
                                   <!-- dropdown button -->
                                      <a class="right dropdown-button" href="#" data-beloworigin="true" data-activates="dropdown2<?php echo $profiles['StudentID'];?>"><i class="material-icons material-detail-profile">more_horiz</i></a>
                                    <!-- end of dropdown button -->
                                    <!-- dropdown content for this part -->
                                     <ul id='dropdown2<?php echo $profiles['StudentID'];?>' class='dropdown-content dropdown-content-photo'>
                                        <li><a href="#modaledit<?php echo $profiles['StudentID'];?>" class="modal-trigger"><i class="material-icons">edit</i>EDIT</a></li>
                                    </ul>
                                      <!-- this is for the modal part of view files -->
                                       <div id="modaledit<?php echo $profiles['StudentID'];?>" class="modal modal-iframe-content">
                                          <div class="modal-content">
                                            <?php echo form_open_multipart('Studentprofile/update_photo'); ?>
                                            <input type="hidden" name='id' value="<?php echo $profiles['StudentID'];?>">
                                                  <div class="file-field input-field">
                                                        <div class="btn btn-username cyan ">
                                                            <span>PHOTO</span>
                                                              <input type="file"  name="userfile" size="20" value="<?php echo site_url('/uploads/') .$profiles['Photo']?>">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                              <input class="file-path validate" type="text" placeholder="Add your photo here.." value="<?php echo site_url('/uploads/') .$profiles['Photo']?>">
                                                        </div>
                                                  </div>
                                                  <button class="waves-effect btn cyan btn-username right" type="submit" value="submit" style="margin: 20px 0;">SUBMIT </button>
                                            </form>
                                          </div>
                                      </div>
                                      <!-- end of modal part -->
                                </div>

                            </div>
                                <center>
                                <div class="border-top"></div>
                                </center>

                                <!-- start of the table -->
                                
                                  
                                    <div class="row row-for-table-profile">
                                        <div class="row">
                                            <div class="col l9">
                                              <h5>MY PROFILE</h5>
                                            </div>
                                            <div class="col l3">
                                              <a href="#modal-edit-student<?php echo $profiles['StudentID']?>" class="btn cyan btn-username btn-edit modal-trigger">EDIT profile<i class="material-icons edit">edit</i></a>
                                                <div id="modal-edit-student<?php echo $profiles['StudentID']?>" class="modal">
                                                    <div class="modal-content modal-edit-profile">
                                                        <h5>EDIT PROFILE</h5>
                                                        <div class="line" style="border:3px solid #00bcd4!important; margin: 25px 0;"></div>
                                                        <form action="Studentprofile/update_profile" method="POST">
                                                        <input type="hidden" name='id' value="<?php echo $profiles['StudentID'];?>">
                                                          <div class="row">

                                                              <div class="row">
                                                                <div class="col s4">
                                                                    <div class="input-field input-for-edit">
                                                                      <input type="text" name="firstname" value="<?php echo $profiles['Firstname'] ?>" >
                                                                      <label>Firstname</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col s4">
                                                                    <div class="input-field input-for-edit">
                                                                      <input type="text" name="middlename" value="<?php echo $profiles['Middlename'] ?>" >
                                                                      <label>Middlename</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col s4">
                                                                    <div class="input-field input-for-edit">
                                                                      <input type="text" name="lastname" value="<?php echo $profiles['Lastname'] ?>" >
                                                                      <label>Lastname</label>
                                                                    </div>
                                                                </div>
                                                              </div>

                                                             <div class="col s12">
                                                                  <div class="input-field input-for-edit">
                                                                    <input name="course" type="text" value="<?php echo $profiles['Course'] ?>">
                                                                    <label>Course</label>
                                                                  </div>
                                                              </div>

                                                              <div class="col s12">
                                                                  <div class="input-field input-for-edit">
                                                                    <input name="email" type="text" value="<?php echo $profiles['Email'] ?>">
                                                                    <label>Email</label>
                                                                  </div>
                                                              </div>

                                                              <div class="col s12">
                                                                  <div class="input-field input-for-edit">
                                                                    <input name="address" type="text" value="<?php echo $profiles['Address'] ?>">
                                                                    <label>Current Address</label>
                                                                  </div>
                                                              </div>
                                                              <div class="col s12">
                                                                  <div class="input-field input-for-edit">
                                                                    <input name="contact" type="text" value="<?php echo $profiles['Contact'] ?>">
                                                                    <label>Contact Number</label>
                                                                  </div>
                                                              </div>

                                                            </div>

                                                             <button class="waves-effect btn cyan btn-username right" type="submit" value="submit">SUBMIT </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                              

                                          <table class="responsive-table hoverable striped table-for-profile">
                                            <tr>
                                              <th class="deep-purple lighten-5">NAME</th>
                                              <th class="deep-purple lighten-5">:</th>
                                              <td><?php echo $profiles['Firstname'].' '.$profiles['Middlename'].' '.$profiles['Lastname'] ?></td>
                                            </tr>
                                            <tr>
                                              <th class="deep-purple lighten-5">COURSE</th>
                                              <th class="deep-purple lighten-5">:</th>
                                              <td><?php echo $profiles['Course'] ?></td>
                                            </tr>
                                            <tr>
                                              <th class="deep-purple lighten-5">EMAIL</th>
                                              <th class="deep-purple lighten-5">:</th>
                                              <td><?php echo $profiles['Email'] ?></td>
                                            </tr>
                                            <tr>
                                              <th class="deep-purple lighten-5">ADDRESS</th>
                                              <th class="deep-purple lighten-5">:</th>
                                              <td><?php echo $profiles['Address'] ?></td>
                                            </tr>
                                            <tr>
                                              <th class="deep-purple lighten-5">CONTACT</th>
                                              <th class="deep-purple lighten-5">:</th>
                                              <td><?php echo $profiles['Contact'] ?></td>
                                            </tr>
                                          </table>

                                    </div>
                                    <!-- end of the table -->
                            <?php } ?>


                        </div>
                        <!-- closing tag for card profile -->

                        <div class="divider"></div>

                        <?php foreach ($account as $accounts) { ?>
                              
                              <a class="btn btn-username deep-purple modal-trigger" style="margin-top: 20px;" href="#modal1"><i class="material-icons edit">settings</i>ACCOUNT SETTINGS</a>
                               <div id="modal1" class="modal">
                                <div class="modal-content modal-edit-profile">
                                  <h5>Change account settings</h5>
                                    <form action="Studentprofile/update_student_account" method="POST">
                                      <input type="hidden" name='id' value="">
                                      <div class="col s12">
                                            <div class="input-field input-for-edit">
                                                <input name="username" type="text" value="<?php echo $accounts['username'] ?>">
                                                  <label>Username</label>
                                            </div>
                                      </div>

                                      <div class="col s12">
                                            <div class="input-field input-for-edit">
                                                <input name="password" type="password" value="<?php echo $accounts['password'] ?>">
                                                  <label>Password</label>
                                            </div>
                                      </div>

                                      <button class="waves-effect btn cyan btn-username right" type="submit" value="submit" style="margin: 40px 0 20px 0;">SUBMIT </button>
                                    </form>
                                </div>
                              </div>

                        <?php } ?>
                          

                         
                          

                      </div>
                      <!-- closing tag for col s12 -->



                    </div>

                  </div>
                </div>
              </div>
                
          </main>


