
          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Subjects</h5>
                      
                        <table class="responsive-table hoverable table-faculty">
                          <thead class="light-blue lighten-3">
                            <tr>
                              <th>Code</th>
                              <th>Description</th>
                              <th>Day(s)</th>
                              <th>Start</th>
                              <th>End</th>
                              <th>Professor</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php foreach ($loads as $load) {
                             ?>
                            <tr>
                              <td><?php echo $load['Subjectcode']?></td>
                              <td><?php echo $load['SubjectDescription']?></td>
                              <td><?php echo $load['dayCode']?></td>
                              <td><?php echo $load['timeStart']?></td>
                              <td><?php echo $load['timeEnd']?></td>
                              <td><?php echo $load['Firstname']." ".$load['Lastname'] ?></td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                    
                  </div>
                </div>
              </div>
                
          </main>
