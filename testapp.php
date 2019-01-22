<?php

    $aid = $_POST["AID"];
    $apiToken = $_POST["apiToken"];
    $privateKey = $_POST["privateKey"];
    $setUseTinypassAccounts = $_POST["tpAccounts"];
    $setUsePianoId = $_POST["pianoID"];
    
    $sandbox = $_POST["sandbox"];
    if ($sandbox) {
        $environment = "Sandbox";
    } else {
        $environment = "Production";
    }


    /*Include Piano - make sure to use the correct path */
    require_once ("php/TinypassClient.php");
    $tinypassConfig = new TPConfig( $aid, $apiToken, $privateKey, "true" );
    $tinypassClient = new TinypassClient($tinypassConfig);
?>


<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
        
        <script>
        tp = window["tp"] || [];
        tp.push(["setAid", "<?= $aid ?>"]);
        //Stop page tracking in AI
        tp.push(["setTrackPages", false]);
        <?php 
        /* Set Tinypass Account as needed */
        if (($setUseTinypassAccounts) && !($setUsePianoId)) { ?>
            tp.push(["setUseTinypassAccounts", 
                 <?php 
                    if ($setUseTinypassAccounts) { 
                        echo "true";
                    } else {
                        echo "false";
                    } ?>]);
        <?php }?>
        <?php 
        /* Use Piano ID accounts as needed */
        if ($setUsePianoId) { ?>
            tp.push(["setUsePianoIdUserProvider", true ]);
        <?php } ?>
        
        tp.push(["init", function() {
        }]);    
        tp.push(["setDebug", true]);
        <?php if ($sandbox) {
            echo 'tp.push(["setSandbox", true]);';
            }?>
        
            
        
        function ShowTestOffer () {
            
            document.getElementById('history').innerHTML = "OfferID: " + document.getElementById('OfferID').value + "   TemplateID:" + document.getElementById('TemplateID').value + "<br>" + document.getElementById('history').innerHTML;
                
            tp.push(["init", function() {
            tp.offer.show({
                offerId: document.getElementById('OfferID').value,
                templateId: document.getElementById('TemplateID').value, 
                displayMode: "modal",
                loginRequired: function() {},
                close: function() {},
                complete: function(params) {},
                customEvent: function(params) {}

                
            });
        }]);
            
        }
            
        function ShowTestTemplate () {
            
            document.getElementById('history').innerHTML = "TemplateOnlyID:" + document.getElementById('TemplateOnlyID').value + "<br>" + document.getElementById('history').innerHTML;
                
            tp.push(["init", function() {
            tp.template.show({
                offerId: "fakeOfferID",
                templateId: document.getElementById('TemplateOnlyID').value, 
                displayMode: "modal",
                loginRequired: function() {},
                close: function() {},
                complete: function(params) {},
                customEvent: function(params) {}

                
            });
        }]);
            
        }

        (function(src){var a=document.createElement("script");a.type = "text/javascript";a.async=true;a.src=src;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a, b)})("//cdn.tinypass.com/api/tinypass.min.js");
        
        </script>
    </head>
    <body>
        
        <table align="center"  width="30%" border=0>
            <tr>
                <td>
                    <h3>AID - <?= $aid?> in <mark class="text-danger"><?= $environment?></mark></h1>
        
                </td>
            </tr>
            <tr>
                <td>
                    <p class="lead">Using tinypass Accounts: <?= $setUseTinypassAccounts?></p>
                    
                    <?php 
                    if ($setUseTinypassAccounts) { 
                        ?>
                            <form class="form-horizontal">
                                <fieldset>

                                <!-- Form Name -->
                                <legend>Login Info</legend>

                                <!-- Button (Double) -->
                                <div class="form-group">

                                  <div class="col-md-8 text-center">
                                    <input type="button" id="loginIDbtn" name="loginIDbtn" class="btn btn-info" onclick="tp.user.showLogin({loginSuccess: function() { location.reload(); } });" value="Login">
                                    <input type="button" id="logoutIDbtn" name="logoutIDbtn" onclick='tp.user.logout();' class="btn btn-info" value="Logout"> 
                                  </div>
                                </div>

                                </fieldset>
                            </form>
                        <?php
                    } else if ($setUsePianoId) {
                        echo "<p class='text-danger'>Publisher uses Piano ID</p>";
                    } else {
                        echo "<p class='text-danger'>Publisher uses their own accounts</p>";
                    } ?>
                
                </td>
            </tr>
            <tr>
                <td>
                    
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Pop Template and Offer</legend>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="TemplateID">Template ID</label>  
                              <div class="col-md-4">
                              <input id="TemplateID" name="TemplateID" type="text" value="XXXXXX" class="form-control input-md">
                              <span class="help-block">Insert the Template ID</span>  
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="OfferID">Offer ID</label>  
                              <div class="col-md-4">
                              <input id="OfferID" name="OfferID" type="text" value="XXXXXX" class="form-control input-md">
                              <span class="help-block">Insert the Offer ID</span>  
                              </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                              <div class="col-md-4 text-center">
                                <input onclick='javascript:ShowTestOffer();' id="singlebutton" name="singlebutton" value="Show Offer" class="btn btn-info">
                              </div>
                            </div>
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            </tr>
            <tr>
                <td> 
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Pop just the Template</legend>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="TemplateOnlyID">Template ID</label>  
                              <div class="col-md-4">
                              <input id="TemplateOnlyID" name="TemplateOnlyID" type="text" value="XXXXXX" class="form-control input-md">
                              <span class="help-block">Insert the Template ID</span>  
                              </div>
                            </div>


                            <!-- Button -->
                            <div class="form-group">
                              <div class="col-md-4 text-center">
                                <input onclick='javascript:ShowTestTemplate();' id="singlebutton" name="singlebutton" value="Show Template" class="btn btn-info">
                              </div>
                            </div>
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <legend>Debug Help - run in the console of the developer tools in the browser</legend>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Command</th>
                          <th>Comment</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">tp;</th>
                          <td>Checks to make sure that the script is loaded and displays the AID etc</td>
                        </tr>
                        <tr>
                          <th scope="row">tp.userRef</th>
                          <td>Displays User Ref info</td>
                        </tr>
                        <tr>
                          <th scope="row">tp.customVariables</th>
                          <td colspan="1">Lists the loaded custom variables</td>
                        </tr>
                        <tr>
                          <th scope="row">tp.init();</th>
                          <td colspan="1">Initialises the script</td>
                        </tr>
                        <tr>
                          <th scope="row">tp.experience.execute();</th>
                          <td colspan="1">Executes the composer script</td>
                        </tr>
                        <tr>
                          <th scope="row"></th>
                          <td colspan="1">In the developer tools, find the Resources, Click on XHR and click on Execute to see all the information about the experiences that are running - meters/split tests etc</td>
                        </tr>
                      </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <legend>History</legend>
                    <div id="history"></div> 
                </td>
            </tr>
        </table>
        <br>
    </body>
</html>