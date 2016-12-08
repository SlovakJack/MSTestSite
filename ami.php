<?php
    /*Include Piano - make sure to use the correct path */
    require_once ("php/TinypassClient.php");
    $tinypassConfig = new TPConfig( "xm5BTZuwPt", "YiNexqa5HyboIEmpuyrF7Anq9NcOIIUnSXOee966", "4V2Mg704i13IhuTqHs8kPEiXqIZ4W2dS1GxeGKks", "true" );
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
        tp.push(["setAid", "xm5BTZuwPt"]);
        //tp.push(["setUseTinypassAccounts", true]);
        tp.push(["init", function() {
        }]);    
            
            
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

        (function(src){var a=document.createElement("script");a.type = "text/javascript";a.async=true;a.src=src;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a, b)})("//cdn.tinypass.com/api/tinypass.min.js");
        
        </script>
    </head>
    <body>
        <h1>This is a test page to pop up templates and offers for Managed Services AMI Production </h1>
        
        <br>
        <table border=1>
            <tr>
                <td colspan="3">
                    Template ID: <input type="text" id="TemplateID" value="XXX"><br>
                    OfferID: <input type="text" id="OfferID" value="XXX"><br>
                    <a href="#" onclick='javascript:ShowTestOffer();'>Show template</a>
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