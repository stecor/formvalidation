<!doctype html>
<!-- StAuth10133: I Stefano Corra, 000351409 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
            
        </style>
        <script src="js/vendor/jquery-1.11.2.js"></script>  
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.validate.js"></script>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        
    </head>
    <body>
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       
            <div class="container">
                
                <h2  class="roundedBorder navbar-custom z-depth-5">Lab5: Form Validation with jQuery Validation Plugin</h2>
               
                <?
                if (isset($_POST['submit'])){
                    echo "<p class='success' style='text-align:center'>Thank you for your form submission<p>";
                }
                
                ?>
                    <form class="navbar-custom z-depth-5 roundedBorder" id="contactForm" method="post" action="/~000351409/private/10133/5/pluginformval.php">
                
                    <fieldset class="fsStyle">
			<legend class="legendStyle">
                            Contact Details
                        </legend>
                        
                        <div class="row collapse in" id="nameRow">
                            <div class="col-md-3 text-right title-l" >
                                <p class="field"></p>
                                <label for="name" class="labelStyle" >Name:</label>
                            </div>
                            <div class="col-md-6"  style="padding-left: 0px;">
                                <p class="error"></p>                            
                                <input name="name" id="name" size="45" class="textInput" value="" type="text" >
                            </div>
                            <div class="col-md-3 " >
                                <p class="field"></p>
                                <label  class="subtitle" >Your name</label>
                            </div>
                        </div>
                        
                        <div class="row collapse in" id="nameRow">
                            <div class="col-md-3 text-right title-l" >
                                <p class="field"></p>
                                <label for="sin" class="labelStyle" >Social Insurance No:</label>
                            </div>
                            <div class="col-md-6"  style="padding-left: 0px;">
                                <p class="error"></p>                            
                                <input name="social" maxlength="9" size="45" tabindex="1" value=""  class="textInput" id="social" type="text">
                            </div>
                            <div class="col-md-3 " >
                                <p class="field"></p>
                                <label  class="subtitle"  >(9 digits)</label>
                            </div>
                        </div>
                        
                        <div class="row collapse in" id="birthdayRow">
                            <div class="col-md-3 text-right title-l" >
                                <p class="field"></p>
                                <label for="birth" class="labelStyle" >Date of Birth:</label>
                            </div>
                            <div class="col-md-6"  style="padding-left: 0px;">
                                <p class="error"></p>                            
                                <input name="birth"  size="45"  value=""   class="textInput" id="birth" type="text" >
                            </div>
                            <div class="col-md-3 " >
                                <p class="field"></p>
                                <label  class="subtitle" >(YYYY-MM-DD)</label>
                            </div>
                        </div>
                        
                        <div class="row collapse in" id="GenderRow">
                            <div class="col-md-3 text-right title-l" >
                                <p class="field"></p>
                                <label for="gender" class="labelStyle" >Gender:</label>
                            </div>
                            <div class="col-md-6"  style="padding-left: 0px;">
                                <p class="error"></p>                            
                                <input name="gender"   value="male"  class="textInput"  type="radio" required>
                                <label for="male" class="labelStyle" style="padding-right: 5px;">Male</label>
                                <input name="gender" value="female"  class="textInput"  type="radio"required >
                                <label for="female" class="labelStyle">Female</label>
                            </div>
                            <div class="col-md-3" >
                                <p class="field"></p>
                                <label  class="subtitle" > </label>
                            </div>
                        </div>
   
                        <div class="row collapse in" id="provinceRow" >
                                <div class="col-md-3 text-right title-l">
                                    <p class="field"></p>
                                    <label for="province" class="labelStyle" >Province:</label>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;">
                                    <p class="error"></p> 
                                    <select id="province" name="province"  >
                                        <option value="" >Select One</option>
                                            <option value="AB">Alberta</option>
                                            <option value="BC">British Columbia</option>
                                            <option value="MB">Manitoba</option>
                                            <option value="NB">New Brunswick</option>
                                            <option value="NL">Newfoundland and Labrador</option>
                                            <option value="NS">Nova Scotia</option>
                                            <option value="ON">Ontario</option>
                                            <option value="PE">Prince Edward Island</option>
                                            <option value="QC">Quebec</option>
                                            <option value="SK">Saskatchewan</option>
                                            <option value="NT">Northwest Territories</option>
                                            <option value="NU">Nunavut</option>
                                            <option value="YT">Yukon</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <p class="field"></p>
                                </div>
                            </div>
                            
                            <div class="row collapse in" id="postalRow">
                                <div class="col-md-3 text-right title-l">
                                    <p class="field"></p>
                                    <label for="postal" class="labelStyle" >Postal Code:</label>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;padding-right:0px;">
                                    <p class="error"></p>
                                    <input name="postal" maxlength="30" size="45" tabindex="1" value=""  class="textInput" id="postal" type="text" >
                                </div>
                                 <div class="col-md-3 text text-left subtitle" >
                                    <p class="field"></p>
                                    <label for="postal" class="subtitle">(Ex: L8S5CR)</label>
                                </div>
                            </div>
                            
                            <div class="row collapse in" id="telRow">
                                <div class="col-md-3 text-right title-l">
                                    <p class="field"></p>
                                    <label for="phone" class="labelStyle" >Telephone Number:</label>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;">
                                    <p class="error"></p>
                                    <input name="phone" maxlength="30" size="45" tabindex="1" value=""  class="textInput" id="phone" type="text" >
                                </div>
                                 <div class="col-md-3 text text-left subtitle" >
                                    <p class="field"></p>
                                    <label for="phone" class="subtitle">(Ex: 905-321-4587)</label>
                                </div>
                            </div>
                         
                            <div class="row collapse in" id="emailRow">
                                <div class="col-md-3 text-right title-l">
                                    <p class="field"></p>
                                    <label for="email" class="labelStyle" >Email:</label>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;">
                                    <p class="error"></p>
                                    <input name="email" maxlength="30" size="28" tabindex="1" value=""  class="textInput" id="email" type="email" >
                                </div>
                                <div class="col-md-3">
                                    <p class="field"></p>
                                </div>   
                            </div>
                              <div class="row collapse in" id="submitRow">
                                <div class="col-md-3"></div>
                                <div class="col-md-6" style="padding: 10px 0 10px 0;">
                                    <input name="submit"   value="Submit Form" class="btn btn-sample btn-xs submit"  id="submit" type="submit">
                                    <a href="/~000351409/private/10133/5/pluginformval.php" class="resetpg" id="reset" style="padding-left: 5px;">Reset Page</a>
                                </div>
                                <div class="col-md-3"></div>   
                            </div>  
                    </fieldset>
                   </form>    
              
            </div><!-- /.container -->
        <script>
            $(document).ready(function(){
                
             var options = {
				errorElement: "em",
				errorPlacement: function(error, element) {
                                    //error.insertBefore(element.parent().next('') );
                                    element.prev().html(error);
								},
				success: function(label) {
							label.text("ok!").addClass("success");
						},                
				rules: {
					name:       {required:true},
                                        social:     {required:true, digits:true, ninedigits:true},
                                        birth:      {required:true, birthdate:true},
                                        gender:     {required:true},
                                        province:   {required:true},
                                        postal:     {required:true, postalcode:true},
                                        phone:      {required:true, phonenumber:true},
                                        email:      {required:true}
 				},
                                messages: {
                                        name:    {required:'This field is required.'},
                                        social:  {required:'A Valid S.I.N. has 9 digits.',digits:'No characters allowed.Please enter only digits.'},
                                        birth:   {required:'Please enter a valid birth date.'},
                                        gender:  {required:'Please select your gender.'},
                                        province:{required:'Please select a province.'},
                                        postal:  {required:'Cdn Postal Code Example: L8S4C6.'},
                                        phone:   {required:'Must be XXX-XXX-XXXX.'},
                                        email:   {required:'Please enter a valid email address.'}
                                }
			};
			
                var validator = $("#contactForm").validate(options);
                
              
                
               // method for social insurance - digits
               jQuery.validator.addMethod("ninedigits", function(value, element) 
                {
                 return this.optional( element ) || /^\d{9}$/.test( value );
                }, 'A Valid S.I.N. has 9 digits.');
                
                
                
                // method for birth date
               jQuery.validator.addMethod("birthdate", function(value, element) 
                {
                 return this.optional( element ) || /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.test( value );
                }, 'Please enter a valid birth date.');
                
                 // method for postal code
               jQuery.validator.addMethod("postalcode", function(value, element) 
                {
                 return this.optional( element ) || /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/.test( value );
                }, 'Cdn Postal Code Example: L8S4C6.');
                
                // method for a phone number
                jQuery.validator.addMethod("phonenumber", function(value, element) 
                {
                 return this.optional( element ) || /^([0-9]{3})-([0-9]{3})-([0-9]{4})$/.test( value );
                }, 'Must be XXX-XXX-XXXX.');
               
               // datepicker
               $( function() {
                    $("#birth").datepicker({ 
                        dateFormat: "yy-mm-dd" }).val();
                });
           
               
            });
            
            
        </script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>