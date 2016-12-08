<?php
    /* German Translated AID
    Include Piano - make sure to use the correct path */
    require_once ("php/TinypassClient.php");
    $tinypassConfig = new TPConfig( "zal9xGNryV", "aQW4efmp3oMTkiSP6XO12EJzSXrJPN6OyrD0Y38F", "jRhzgQbe7Oc8gXat31JDJX8ecqn7AUHXOQUeahuF", "true" );
    $tinypassClient = new TinypassClient($tinypassConfig);
    /* Load the incoming request cookie header into AccessTokenStore, which will parse
     * out the user access information
     */
    

/*$rid1 = "PW_74506194";
    $store = new TPAccessTokenStore($tinypassConfig);
    $store->loadTokensFromCookie($_COOKIE);
    $token1 = $store->getAccessToken($rid1);

    $rid2 = "BRLAURTS";
    $store = new TPAccessTokenStore($tinypassConfig);
    $store->loadTokensFromCookie($_COOKIE);
    $token2 = $store->getAccessToken($rid2);*/

    //$cookie_exampleData = stripslashes($_COOKIE['__ut']);
    /* Decode */

    //$cookie_exampleData_decoded = json_decode($cookie_exampleData);

    /* Print */

    //var_dump($cookie_exampleData_decoded);
    //$cookie_exampleData = stripslashes($_COOKIE['umc_41837382']);
    /* Decode */

    //$cookie_exampleData_decoded = json_decode($cookie_exampleData);

    /* Print */

    //var_dump($cookie_exampleData_decoded);
    //$cookie_exampleData = stripslashes($_COOKIE['__tac']);
    /* Decode */

    //$cookie_exampleData_decoded = json_decode($cookie_exampleData);

    /* Print */

    //var_dump($cookie_exampleData_decoded);



    //Check whether the user is logged in 

//if(isset($_COOKIE['__tac'])) {
//    $userLoggedIn = true;
//}
//?>


<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GETTING STARTED</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        
        <!-- <script>(function(src){var a=document.createElement("script");a.type="text/javascript";a.async=true;a.src=src;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})("//experience.tinypass.com/xbuilder/experience/load?aid=auRyMIR0sY");</script>
        -->
        
        <script>
        tp = window["tp"] || [];
        tp.push(["setAid", "zal9xGNryV"]);
        //tp.push(["setSandbox", true]);
        tp.push(["setUseTinypassAccounts", true]);
        tp.push(["init", function() {
        }]);
            
            
        function ShowTestOffer () {
            tp.push(["init", function() {
            tp.offer.show({
                offerId: document.getElementById('OfferID').value,
                templateId: document.getElementById('TemplateID').value,
                displayMode: "modal",
                //containerSelector: "#my-inline-offer",
                //termIds: [ "T1234", "T2345" ],
                loginRequired: function() {tp.user.showLogin({loginSuccess: function() {} }); 

                                             },
                close: function() {

                                             tp.api.callApi("/access/check", { rid: "RA7R0SC" }, function(response) {
                                if (response.access && response.access.granted) {
                                    // the user has access

                                    document.getElementById("AccessDef1").innerHTML = "User closed offer";
                                }
                                else {
                                    // the user does not have access
                                    document.getElementById("AccessDef1").innerHTML = "No Access to resource and closed the offer";
                                }
                            });

                                             },
                close: function() {},
                complete: function(params) {},
                customEvent: function(params) {}

                
            });
        }]);
            
        }
        function ShowMyAccount () {
                tp.push(["init", function() {
                        tp.myaccount.show({
                            displayMode: "inline",
                            containerSelector: "#my-inline-offer"
                        });
                }]);
        }

        (function(src){var a=document.createElement("script");a.type = "text/javascript";a.async=true;a.src=src;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a, b)})("//cdn.tinypass.com/api/tinypass.min.js");
        
        </script>
    </head>
    <body>
        <h1>This is a test page to pop up templates and offers for Managed Services Production Accounts</h1>
        
        <table border=1>
            <tr>
                <th>Login Info</th>
            </tr>
            <tr>
                <td id="loginActive"><a onclick="tp.user.showLogin({loginSuccess: function() { location.reload(); } });" href="#">Login</a></td>
                <td id="logoutActive"><a onclick="tp.user.logout();" href="">Logout</a></td>
            </tr>
            <tr>
                <td>User is:</td>
                <td id="userstate">
                </td> 
            </tr>
            <tr>
                <td><a href="http://www.tinypass.com" target="_new">My account?</a></td>
            </tr>
        </table>
        <br>
        <table border=1>
            <tr>
                <td colspan=2>Offers</td>
            </tr>
            <tr>
                <td>Div ID="my-inline-offer</td>
            </tr>
            <tr>
                <td>
                    <div id="my-inline-offer"></div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Template ID: <input type="text" id="TemplateID" value="XXX"><br>
                    OfferID: <input type="text" id="OfferID" value="XXX"><br>
                    <a href="#" onclick='javascript:ShowTestOffer();'>Show Test Offer</a>
                </td>
            </tr>
        </table>
        <br>
        <table border=1>
            <tr>
                <td>Metering Information</td>
            </tr>
            <tr>
                <td>Views Left: 
                    <div id="viewsleft">
                    </div>  
                </td>
            </tr>
        </table>
        <br>
        <table border=1>
            <tr>
                <td>Purchase Information</td>
            </tr>
            <tr>
                <td>
                    ID="conversionCompleted"
                </td>
                <td> 
                    <div id="conversionCompleted">
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <table border=1>
            <tr>
                <td>Access Details</td>
            </tr>
            <tr>
                <td>
                    Resource 1:
                </td>
                <td>
                    <div id="AccessDef1">
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    Resource 2:
                </td>
                <td>
                    <div id="AccessDef2">
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    Resource 3:
                </td>
                <td>
                    <div id="AccessDef3">
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    Resource 4:
                </td>
                <td>
                    <div id="AccessDef4">
                    </div>
                </td>

            </tr>
        </table>
        <br>
        <table border=1>   
            <tr>
                <td>
                Cookies
                </td>    
            </tr>
            <tr>
                <td>__tac</td>
                <td>
                    <?php 
                        echo $_COOKIE["__tac"]; 
                    ?>
                </td>
                <td>
                    <?php

                                if($token1->isAccessGranted()) {
                                     echo "User has access to: ".$rid1."<br>";
                                } 
                                if($token2->isAccessGranted()) {
                                     echo "User has access to: ".$rid2;
                                } 
                    ?>
                </td>
                </tr>
            <tr>
                <td>__ut</td>
                <td>
                    <?php 
                        echo $_COOKIE["__ut"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>umc_74506194</td>
                <td>
                    <?php 
                        echo $_COOKIE["umc_74506194"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                <a href="articles/article1.php">Article 1</a>
                </td>
            </tr>
        </table>
         <?php

if ($userLoggedIn) {
    $qT = "'";
    $updateElementText = $qT.'<p style="background:red;"><a onclick="tp.user.logout();" href="">Logout</a></p>'.$qT;
    echo "
        <script> 
            document.getElementById('logoutActive').innerHTML = $updateElementText;
            document.getElementById('userstate').innerHTML = 'User is Logged in';
        </script>
    "; 
} else {
    $qT = "'";
    $updateElementText = $qT.'<p style="background:red;"><a onclick="tp.user.showLogin({loginSuccess: function() { location.reload(); } });" href="#">Login</a></p>'.$qT;
   echo "
        <script> 
            document.getElementById('loginActive').innerHTML = $updateElementText;
            document.getElementById('userstate').innerHTML = 'User is Logged out';
        </script>";
    
}
                        
                    ?>  
        
        
    </body>
</html>