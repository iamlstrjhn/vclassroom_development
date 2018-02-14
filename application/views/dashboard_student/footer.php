    </div>
      </div>


          </div>
         </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js') ?>"></script>
      <script type="text/javascript">
         $(".button-collapse").sideNav();

          $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
          });

          $(document).ready(function() {
          $('select').material_select();


           $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrainWidth: false, // Does not change width of dropdown to that of the activator
              hover: true, // Activate on hover
              gutter: 0, // Spacing from edge
              belowOrigin: false, // Displays dropdown below the button
              alignment: 'left', // Displays dropdown with edge aligned to the left of button
              stopPropagation: false // Stops event propagation
            }
          );


        });
              
         $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15, // Creates a dropdown of 15 years to control year,
          today: 'Today',
          clear: 'Clear',
          close: 'Ok',
          closeOnSelect: false // Close upon selecting a date,
        });

         
      </script>
    </body>
  </html>
     



 		