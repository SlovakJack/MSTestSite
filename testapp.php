<?php

    $aid = $_POST["AID"];
    $apiToken = $_POST["apiToken"];
    $privateKey = $_POST["privateKey"];
    $setUseTinypassAccounts = $_POST["tpAccounts"];
    
    $sandbox = $_POST["sandbox"];
    


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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GETTING STARTED</title>
        <meta name="description" content="Managed Services test Site">
        
        <script>
        tp = window["tp"] || [];
        tp.push(["setAid", "<?= $aid ?>"]);
        tp.push(["setUseTinypassAccounts", 
                 <?php 
                    if ($setUseTinypassAccounts) { 
                        echo "true";
                    } else {
                        echo "false";
                    } ?>]);
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
            
            document.getElementById('history').innerHTML = "TemplateID:" + document.getElementById('TemplateOnlyID').value + "<br>" + document.getElementById('history').innerHTML;
                
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
        <h1>This is a test page to pop up templates and offers for Managed Services <?= $aid?> Production </h1>
        
        <table border=1>
            <tr>
                <th>Login Info</th>
            </tr>
            <tr>
                <td id="loginActive"><a onclick="tp.user.showLogin({loginSuccess: function() { location.reload(); } });" href="#">Login</a></td>
                <td id="logoutActive"><a onclick='tp.user.logout();' href=''>Logout</a></td>
            </tr>
        </table>
        <br>
        <table border=1>
            <tr>
                <td colspan="3">
                    Template ID: <input type="text" id="TemplateID" value="XXX"><br>
                    OfferID: <input type="text" id="OfferID" value="XXX"><br>
                    <a href="#" onclick='javascript:ShowTestOffer();'>Show Offer/Template</a>
                </td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">
                    Template ID: <input type="text" id="TemplateOnlyID" value="XXX"><br>
                    <a href="#" onclick='javascript:ShowTestTemplate();'>Show Template</a>
                </td>
            </tr>
            <tr>
                <td>
                    History
                    <div id="history"></div> 
                </td>
            </tr>
        </table>
        <br>
    </body>
</html>