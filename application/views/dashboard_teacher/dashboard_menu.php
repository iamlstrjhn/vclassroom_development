

          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Teacher's Dashboard (Version 7)</h5>
                    
                      <div class="row">
                          <div class="col s12 l4">
                            <div class="card-for-dashboard">
                             <div class=" box-d">
                               <img class="responsive-img left images-for-dashboard" src="images/team.png">
                              <h5>Total Students</h5>
                              <h4 class="align-right">
                               <h5 style="color: #0097a7; font-weight: 600;">3</h5>
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
                                  <h5 style="color: #0097a7; font-weight: 600;">4</h5>
                                  </h4>
                              </div>
                            </div>
                          </div>

                          <div class="col s12 l4">
                            <div class="card-for-dashboard">
                               <div class=" box-d">
                                 <img class="responsive-img left images-for-dashboard" src="images/approve.png">
                                 <h5>Finished Activities</h5>
                                  <h4 class="align-right">
                                 <h5 style="color: #0097a7; font-weight: 600;">3</h5>
                                  </h4>
                              </div>
                            </div>
                          </div>

                      </div>

                      <div class="divider"></div>

                        <div class="card-for-recentactivity">
                          <h5 style="margin-bottom: 20px; color: #0097a7; font-weight: 300;">Recent Student's Activities</h5>
                            <table class="responsive-table" style="border: 1px solid #E1E1E1;">
                              <thead style="background: #eaedf1; color: #2c2c2c;">
                                <tr>
                                  <th>ID Number</th>
                                  <th>Student Name</th>
                                  <th>Course</th>
                                  <th>File</th>
                                  <th>Time Sent</th>
                                  <th>Options</th>
                                </tr>
                              </thead>
                              <tbody>

                                <?php foreach ($uploaded_file as $file_uploaded) { ?>
                                    
                                    <tr>
                                      <td class="td-custom-table"><?php echo $file_uploaded['Studentnumber'] ?></td>
                                      <td class="td-custom-table"><?php echo $file_uploaded['Firstname']." ".$file_uploaded['Lastname'] ?></td>
                                      <td class="td-custom-table"><?php echo $file_uploaded['Course'] ?></td>
                                      <td class="td-custom-table"><?php echo $file_uploaded['SchoolWorksFile'] ?></td>
                                      <td class="td-custom-table"><?php echo $file_uploaded['SchoolWorksDate'] ?></td>
                                      <td><a class="btn btn-username cyan" href=""><i class="material-icons">cloud_download</i></a></td>
                                  </tr>

                                <?php } ?>
                               
                              </tbody>
                            </table>
                        </div>
                    
                  </div>

                    
                </div>
              </div>
                
          </main>
