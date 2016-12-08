<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Managed Services Simple Test Site</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head> 
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <form class="form-horizontal" method="post" action="testapp.php" target="_blank">
        <fieldset>

        <!-- Form Name -->
        <legend>Application Config</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="AID">AID</label>  
          <div class="col-md-4">
          <input id="AID" name="AID" type="text" placeholder="placeholder" class="form-control input-md" required="">
          <span class="help-block">Insert the Application ID</span>  
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="apiToken">API Token</label>  
          <div class="col-md-4">
          <input id="apiToken" name="apiToken" type="text" placeholder="placeholder" class="form-control input-md" required="">
          <span class="help-block">Insert API Token</span>  
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="privateKey">Private Key</label>  
          <div class="col-md-4">
          <input id="privateKey" name="privateKey" type="text" placeholder="placeholder" class="form-control input-md" required>
          <span class="help-block">Insert the Private Key</span>  
          </div>
        </div>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="tpAccounts">SetUseTinypassAccounts</label>
          <div class="col-md-4"> 
            <label class="radio-inline" for="tpAccounts-0">
              <input type="radio" name="tpAccounts" id="tpAccounts-0" value=1 checked="checked">
              True
            </label> 
            <label class="radio-inline" for="tpAccounts-1">
              <input type="radio" name="tpAccounts" id="tpAccounts-1" value=0>
              False
            </label>
            <span class="help-block">Choose whether we are using Tinypass Accounts (Mode 5 = True, Mode 2 = False)</span> 
          </div>
        </div>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="sandbox">Set Sandbox</label>
          <div class="col-md-4"> 
            <label class="radio-inline" for="sandbox-0">
              <input type="radio" name="sandbox" id="sandbox-0" value=1 checked="checked">
              True
            </label> 
            <label class="radio-inline" for="sandbox-1">
              <input type="radio" name="sandbox" id="sandbox-1" value=0>
              False
            </label>
            <span class="help-block">Choose whether we are using Sandbox or Production AID</span> 
          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submitButton"></label>
          <div class="col-md-4">
            <button id="submitButton" name="submitButton" class="btn btn-primary" type="submit">Submit</button>
          </div>
        </div>
        
        </fieldset>
      </form>

    </body>
</html>