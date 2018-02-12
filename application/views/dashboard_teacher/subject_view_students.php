  <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">
                    <h5><?php echo $load_details['SubjectDescription'] ?></h5>
                    <a href="<?php echo base_url('Teachersubjects') ?>" class="btn btn-username cyan btn-add-subject "><i class="material-icons">arrow_back</i></a>

                    <a href="#modal1" class="btn btn-username cyan btn-add-subject right modal-trigger"><i class="material-icons">person_add</i></a>

                    <!-- Modal for register student -->
                    <div id="modal1" class="modal">
                        <div class="modal-content modal-add-student">
                         <h5>Add a student</h5> 
                         <!-- form start -->
                            <?php echo form_open('Teachersubjects/save'); ?>
                            <input type="hidden" name="faculty_load" value="<?php echo  $load_details['FacultyLoadID'] ?>">
                                      <div>
                                        <select data-placeholder="Select a student" multiple class="chosen-select" name="student[]">
                                              <optgroup label="Choose a student">
                                                <?php foreach ($addstudent as $addstud): ?>
                                                  <option value="<?php echo $addstud['StudentID'] ?>"><?php echo $addstud['Firstname'] ?> <?php echo $addstud['Lastname'] ?></option>
                                                <?php endforeach ?>
                                              </optgroup>
                                        </select>
                                      </div>
                                
                             <!-- <div class="chips chips-autocomplete" name="student" value="student"></div> -->
                              
                            <input class="waves-effect btn cyan btn-username right" style="margin:20px 0;" type="submit" value="submit">
                          
                       </form>
                        <!-- end of form -->
                        </div>
                      </div>
                      <!-- End for add student -->


                       <div class="row" style="margin-top:25px!important;">
                          <div class="col s12">
                            <ul class="tabs tabs-style">
                              <li class="tab col s6"><a href="#test1"><b>STUDENTS</b></a></li>
                              <li class="tab col s6"><a href="#test2"><b>FILES</b></a></li>
                            </ul>
                          </div>

                           <!-- Tab number 2 -->
                      <div id="test1" class="col s12">
                        <div class="container container-tabs">
                          <h6>List of students</h6>

                            <!-- this is for the table -->

                                 <table class="responsive-table hoverable striped table-faculty">
                                <thead class="light-blue lighten-3">
                                  <tr>
                                    <th>Student Names</th>
                                    <th>Options</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($load_students as $load_student) { ?>
                                      <tr>
                                        <td><?php echo $load_student['Firstname'] ?> <?php echo $load_student['Lastname'] ?></td>
                                        <td><a class="btn cyan btn-username modal-trigger" href="#modalviewstudents<?php echo $load_student['StudentID'] ?>"><i class="material-icons">visibility</i></a></td>

                                          <div id="modalviewstudents<?php echo $load_student['StudentID'] ?>" class="modal">
                                            <div class="modal-content">
                                              <h5><?php echo $load_student['Firstname'] ?> <?php echo $load_student['Lastname'] ?></h5>
                                              <h6>STUDENT</h6>
                                              <div class="line" style="border:3px solid #00bcd4!important;margin: 25px 0;"></div>
                                              <p><b>EMAIL:</b>&ensp;<?php echo $load_student['Email'] ?></p>
                                              <p><b>ADDRESS:</b>&ensp;<?php echo $load_student['Address'] ?></p>
                                              <p><b>CONTACT:</b>&ensp;<?php echo $load_student['Contact'] ?></p>
                                            </div>
                                          </div>
                                      </tr>
                                  <?php } ?>
                                  

                                </tbody>
                              </table>

                          
                        </div>
                      </div>


                          <!-- Tab number 1 -->
                        <div id="test2" class="col s12">
                          <div class="container container-tabs">
                            <h6>Uploaded files of students</h6>

                              <?php foreach ($uploaded_file as $file_upload) { ?>
                                  <div class="col s12 l6">
                                    <div class="card-works">
                                      <a class="black-text h6-for-schoolworks" href="#" target="_blank"><?php echo $file_upload['SchoolWorksFile'] ?></a><br>
                                      <small><?php echo $file_upload['SchoolWorksDate']?></small>
                                      <p><?php echo $file_upload['SchoolWorksContent'] ?></p>
                                      <div class="divider"></div>
                                      <p class="p-text-schoolworks"><?php echo $file_upload['Firstname']." ".$file_upload['Lastname'] ?></p>
                                    </div>
                                  </div>
                              <?php } ?>
                          </div>
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
              $('select').material_select('destroy');

              $('ul.tabs').tabs('select_tab', 'tab_id');
             });
          
          </script>