
          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Message Section</h5>
                      
                        <table class="responsive-table hoverable striped table-faculty">
                          <thead class="light-blue lighten-3">
                            <tr>
                              <th>Contacts</th>
                              <th>Options</th>
                            </tr>
                          </thead>

                         
                          <tbody>
                            <?php foreach ($loads as $load) { ?>
                                 <tr>
                                  <td><?php echo $load['Firstname']." ".$load['Lastname'] ?></td>
                                  <td><a href="<?php echo base_url('Messages/').$load['UserID'] ?>" id="submit" class="btn cyan darken-1 btn-username"><i class="material-icons">message</i></a></td>
                                </tr>
                            <?php } ?>
                          </tbody>

                        </table>
                    
                  </div>
                </div>
              </div>
                
          </main>

