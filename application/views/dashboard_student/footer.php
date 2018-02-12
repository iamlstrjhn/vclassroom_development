    </div>
      </div>


          </div>
         </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="/assets/materialize/js/materialize.min.js"></script>
      <script type="text/javascript">
         $(".button-collapse").sideNav();

          $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
          });

          $(document).ready(function() {
          $('select').material_select();
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
     



 		