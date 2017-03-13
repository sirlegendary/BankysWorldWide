<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BankysWorldWide - Login</title>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
    

  </head>
  <body>

   
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<br/><br/>
<div class="box standard_panel">
  <h1>Login</h1>
<div class="Borders ">
<input type="text" id="txtEmail" onblur="ClickTxtBox(this,event,'lbExample');" onfocus="ClickTxtBox(this,event,'lbExample');" class="TxtBox" />
<label class="LBposition" id="lbExample" onclick="FocusThis('txtEmail')">Email</label>
 <br/><br/> 
<div>
  <div class="Borders">
<input id="txtpassword" type="password" onblur="ClickTxtBox(this,event,'lbExamplePass');" onfocus="ClickTxtBox(this,event,'lbExamplePass');" class="TxtBox" />
<label class="LBposition" onclick="FocusThis('txtpassword')" id="lbExamplePass">Password</label>
 <br/><br/> 
</div>

<div class="Borders">
<button type="submit" id="login-button">Login</button>
</div>
</div>
  



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript">
        function ClickTxtBox(Txt, evt,label){
              debugger;

              if(Txt.value.length ==0)
              {
                document.getElementById(label).className = evt.type == "focus" ? document.getElementById(label).className += " focusLb BlueME" : "LBposition";
               }
        }
            function FocusThis(ME)
            {
              document.getElementById(ME).focus();
            }
    </script>



  </body>
</html>