

          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Class Requirements</h5>

                  
                      <div class="row" style="margin-top: 20px;">
                        <div class="col l2">
                            <a class="btn waves-effect cyan btn-add-schoolworks modal-trigger" href="#modal1">ADD NEW</a>
                         <div id="modal1" class="modal">
                          <div class="modal-content modal-add-works">
                            <h5>ADD NEW SCHOOL WORKS</h5>

                            <?php echo form_open_multipart('Teacherschoolworks/post_content'); ?>
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
                                          <?php }?>
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
                              <button class="waves-effect btn cyan btn-username right" type="submit" value="upload" style="margin-top: 58px;">SUBMIT </button>
                          </form>

                        </div>
                      </div> 
                    </div>
                          <!-- this is for the filter part -->
                          <div class="col l10 m10 s12">
                             <a class='dropdown-button btn btn-filter orange lighten-2 right' href='#' data-activates='dropdown1'>filter</a>
                                <!-- Dropdown Structure -->
                                <ul id='dropdown1' class='dropdown-content'>
                                  <?php foreach ($loads as $load) { ?>
                                  <li><a href="?filter=<?php echo $load['SubjectDescription'] ?>" value="<?php echo $load['FacultyLoadID'] ?>"><?php echo $load['SubjectDescription'] ?></a></li>
                                  <?php }?>
                                  <li class="divider"></li>
                                  <li><a href="<?php echo base_url('Teacherschoolworks'); ?>">RESET</a></li>
                                  
                                </ul>
                              
                            <!-- end of div class col l10 tag -->
                          </div>
                          <!-- end of row tag -->
                      </div>

                     <!--  <a class="btn" href="?filter=Web Development">click me</a> -->
                    
                      
                    


                      <div class="row">

                        <?php foreach ($upload_data as $item) { ?>

                        <div class="col s12 l6">
                          <div class="card-works">
                            <a class="black-text h6-for-schoolworks" href="<?php echo site_url('/uploads/') .$item['SchoolWorksFile']?>" target="_blank"><?php echo $item['SchoolWorksFile'] ?></a>
                             <a class="right dropdown-button" href="#" data-beloworigin="true" data-activates="dropdown1<?php echo $item['SchoolworksID'] ?>"><i class="material-icons material-details">more_horiz</i></a>
                             <!-- dropdown content for this part -->
                               <ul id='dropdown1<?php echo $item['SchoolworksID'] ?>' class='dropdown-content'>
                                  <li><a href="#modalview<?php echo $item['SchoolworksID'] ?>" class="modal-trigger"><i class="material-icons">open_in_new</i>VIEW</a></li>
                                  <li><a href="#modaledit<?php echo $item['SchoolworksID'] ?>" class="modal-trigger"><i class="material-icons">edit</i>EDIT</a></li>
                                  <li><a href="#!" class="remove"><i class="material-icons">delete</i>REMOVE</a></li>
                              </ul>
                                <!-- this is for the modal part of view files -->
                                   <div id="modalview<?php echo $item['SchoolworksID'] ?>" class="modal modal-iframe-content">
                                      <div class="modal-content modal-iframe">
                                          <iframe src="https://docs.google.com/document/d/e/2PACX-1vSwv8X1MiHKmORiOao8LHT3tmIjiS4Rjh-JZ34mOyvg6QnQyIZmiBQy9xostfreBtVSyjXbRpEuycJB/pub?embedded=true" width="100%" height="600"></iframe>
                                      </div>
                                  </div>
                                  <!-- end of modal part -->

                                  <!-- Modal part of edit  -->
                                  <div id="modaledit<?php echo $item['SchoolworksID'] ?>" class="modal">
                                      <div class="modal-content modal-add-works">
                                        <h5>Edit the information given</h5>
                                          <?php echo form_open_multipart('Teacherschoolworks/edit_content'); ?>
                                              <input type="hidden" name='id' value="<?php echo $item['SchoolworksID'];?>">
                                              <div class="row">
                                                  <div class="col s12">
                                                      <div class="input-field">
                                                        <input name="content" type="text" class="validate" value="<?php echo $item['SchoolWorksContent'] ?>">
                                                        <label>Input message</label>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="row">
                                                <div class="col s12">
                                                  <div class="input-field">
                                                    <select name="load" <?php echo $item['SubjectDescription'] ?>>
                                                      <?php foreach ($loads as $load) { ?>
                                                      <option value="<?php echo $load['FacultyLoadID'] ?>"><?php echo $load['SubjectDescription'] ?></option>
                                                      <?php }?>
                                                    </select>
                                                    <label>Choose your subject</label>
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="file-field input-field">
                                                  <div class="btn btn-username cyan ">
                                                      <span>File</span>
                                                      <input type="file" name="userfile" size="20" value="<?php echo site_url('/uploads/') .$item['SchoolWorksFile']?>">
                                                  </div>
                                                  <div class="file-path-wrapper">
                                                      <input class="file-path validate" type="text" size="20" name="userfile" value="<?php echo site_url('/uploads/') .$item['SchoolWorksFile']?>">
                                                  </div>
                                              </div>
                                             <button class="waves-effect btn cyan btn-username right" type="submit" value="upload" style="margin-top: 60px;">SUBMIT </button>
                                        </form>

                                      </div>
                                  </div>
                                  <!-- End of modal for edit -->
                             <br>

                            <small>POSTED ON <?php echo $item['SchoolWorksDate'] ?></small>
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

          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          <script type="text/javascript" src="/assets/materialize/js/materialize.min.js"></script>
          <script type="text/javascript">
             $(document).ready(function() {
              $('select').material_select();
             });
          
          </script>