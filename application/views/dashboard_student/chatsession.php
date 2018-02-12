 <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Chat Session</h5>
                    
                      
                       <div class="container">
                         <div class="card-for-chat">
                              <div class="navbar">

                                <nav class="navbar-for-chat">
                                  <div class="nav-wrapper">
                                      
                                     
                                      <a href="" class="session-no-class"><?=$name?></a>
                                      <a class="right" href="<?php echo base_url('Messages'); ?>"><i class="material-icons">close</i></a>
                                     
                                      
                                    </div>
                                </nav>
                            </div>


                            <div class="row row-for-chat" id="">

                                <div id="live-chat">
                                  
                                </div>

                             <!--  <div class="col s12 col-right animated bounceIn ">
                                <div class="card-for-chat-1  green accent-2">
                                  <p>Hi there how are you?</p>
                                </div>
                              </div>

                              <div class="col s12 col-left animated bounceIn">
                                <div class=" card-for-chat-3 black-text  grey lighten-2">
                                  <p>How are you guyz ?</p>
                                </div>
                              </div> -->

                            
                            </div>

          
    
                            <div class=" footer-for-chat">

                                <div class="container-fluid">
                                          <div class="row row-1">
                                            <div class="col s10 l11 column-for-chat">
                                              <div class="input-field send-field">
                                                <input id="chatInput" type="text"  name="text-area" placeholder="This is a message" class="materialize-textarea" required="">
                                            </div>
                                            </div>
                                              <div class="col s2 l1 col-for-send"> <a href="" onclick="return send()"><i class="large material-icons material-send">send</i></a></div>
                                          </div>
                                    </div>    
                            </div>
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
              
                          $(document).ready(function(){  
                               setInterval(function(){
                                  $('#live-chat').load('<?php echo base_url('chat/get_message/').$id ?>');
                                },2000);
                              }); 
                              $(document).on('click', '#btn_send', function(){  
                                var chatInput = $('#chatInput').val();  
                                $.ajax({  
                                  url:'<?php echo base_url() ?>chat/send_message',  
                                  method:"POST",  
                                  data:"message="+ chatInput,  
                                  dataType:"text",  
                                  success:function(data)  
                                  {  


                                  }  
                                })  


                              }); 
                              function send()
                              {
                                var chat = document.getElementById('chatInput').value;
                                $.ajax({
                                  type:'POST',
                                  url:'<?php echo base_url('chat/send_message/').$id ?>',
                                  data:"message="+ chat,  
                                  dataType:"dataString", 
                                  cache:false,
                                })
                                document.getElementById("chatInput").value=" ";
                                return false;
                              }

          </script>