<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <link rel="stylesheet" href="view/css/foundation.min.css">
          <link rel="stylesheet" href="view/css/foundation.css">
          <link rel="stylesheet" href="view/css/main.css">
  
                                                                        


        <title>
        <?php print htmlentities($title) ?>
        </title>

        <script>    

      

        
            function customerChoice(divName) {

                document.getElementById('citizen').style.display = "none";
                document.getElementById('organisation').style.display = "none";
                document.getElementById('anonymous').style.display = "none";

                document.getElementById(divName).style.display = "";

            }

    
        </script>
            
    </head> 
    <body>
      
   

                <?php
        if ( $errors ) {
            print '<ul class="errors">';
            foreach ( $errors as $field => $error ) {
                print '<li>'.htmlentities($error).'</li>';
            }
            print '</ul>';
        }
        ?>
     

            <div class="row">
                
                            <div class="medium-12 columns" id="formWrapper">
                                    

                                            <div class="titleHeader"> <h2> New Customer</h2> </div>

                                                <div class="innerWrapper">

                                                       <form method="POST" action="">
                                                                <label for="name">Services:</label><br/>
                                                          

                                                                <input type="radio" name="services" value="housing" checked> Housing<br>
                                                                <input type="radio" name="services" value="benefits"> Benefits<br>
                                                                <input type="radio" name="services" value="Council tax"> Council Tax <br>
                                                                <input type="radio" name="services" value="fly_tipping"> Fly-tipping <br>
                                                                <input type="radio" name="services" value="missed_bin"> Missed Bin <br>
                                                                <br/>

                                                                 <select name="type" onChange="customerChoice(this.value);">

                                                                    <option default></option>

                                                                                <option value="citizen"  name="Citizen">citizen</option>
                                                                                <option value="organisation"  name="Organisation">organisation</option>
                                                                                <option value="anonymous"  name="anonymous">Anonymous</option>
                                                                                       

                                                                </select>
                                                               
                                                           


                                                         <div id="citizen" style="display:;">

                                                                <label for="titler">Title</label>
                                                                    <select name="titler">

                                                                            <option default></option>
                                                                            <option value="Mr."  name="Mr">Mr.</option>
                                                                            <option value="Mrs" name="Mrs">Mrs</option>

                                                                    </select>
                                                                    
                                                               
                                                                <label for="address">Firstname:</label><br/>
                                                                <input type="text" name="first_name">

                                                                <label for="address">Lastname:</label><br/>
                                                                <input type="text" name="last_name">


                                                        </div>


                                                        <div id="organisation" style="display: none;">

                                                            <label for="address">Organisation:</label><br/>
                                                            <input type="text" name="organisationer">

            
                                                        </div>

                                                        <div id="anonymous" style="display: none;">

                                                            
                                                                    
                                                        </div>
     
     
       
                                                                <br/>
                                                                <input type="hidden" name="form-submitted" value="1" />
                                                                <input type="submit" value="Submit" class="submitButton" />
                                                            </form>
                                                            



                                                </div>
                                            
                              

                            </div><!--formwrapper-->
                        


              </div>
      

            <!--Jquery Includes-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="main.js" type="text/javascript"></script>


</body>
</html>
