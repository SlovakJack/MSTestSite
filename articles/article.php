<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GETTING STARTED WITH BERGEDORFER</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <script>
        tp = window["tp"] || [];
        tp.push(["setAid", "vvUv9Am1xe"]);
        tp.push(["setEndpoint", "sandbox.tinypass.com"]);
        tp.push(["setUseTinypassAccounts", true]);
        tp.push(["init", function() {
            tp.meter.init({
                paywallId: "41837382",
                trackPageview: true,
            });
        }]);
        tp.push(["setDebug", true]);
        </script>
        <script>(function(src){var a=document.createElement("script");a.type="text/javascript";a.async=true;a.src=src;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})("//sandbox.tinypass.com/api/tinypass.min.js");</script>
    </head>
    <body>
        This is a test page to make sure that Bergedorfer Sandbox is working
        
<table>
        <tr>
            <td>
                <a href="#" onclick='javascript:tp.push(["init", function() {
    tp.offer.show({
        offerId: "OFNVLBJMXU0Y",
        templateId: "OTN8JDJQLZWE",
        displayMode: "modal",
        loginRequired: function() {},
        close: function() {},
        complete: function(params) {},
        customEvent: function(params) {}
    });
}]);'>Show Bergedorfer Offer</a>
            </td>
            </tr>
        <tr>
            <td><a onclick="tp.user.showLogin({
    loginSuccess:function() { doSometingOnSuccess() } 
  });" href="">Login</a></td>
            <td><a onclick="tp.user.logout();" href="">Logout</a></td>    
        </tr>
            
            
        <tr>
            <td>
            Cookies
            </td>    
        </tr>
        <tr>
            <td>__tac</td>
            <td>
                <?php 

                    $cookie_exampleData = stripslashes($_COOKIE['__tac']);
                    /* Decode */

                    $cookie_exampleData_decoded = json_decode($cookie_exampleData);

                    /* Print */

                    //var_dump($cookie_exampleData_decoded);

                    echo $_COOKIE["__tac"];
                    //echo $cookie_exampleData_decoded;
                ?>
            </td>
            <td>
                <?php

                    /* Include Piano - make sure to use the correct path */
                            require_once ("php/TinypassClient.php");
                            $tinypassConfig = new TPConfig( "vvUv9Am1xe", "ddWVXpF8FigEHETtelmE6QxVdp7kjQJeHeGwsEZi", "BLJ8OVDJzmJi77EHCg1AK4Te4fo2LKcWPt93kCWB", "true" );
                            $tinypassClient = new TinypassClient($tinypassConfig);
                            /* Load the incoming request cookie header into AccessTokenStore, which will parse
                             * out the user access information
                             */
                            $rid1 = "RA7R0SC";
                            $store = new TPAccessTokenStore($tinypassConfig);
                            $store->loadTokensFromCookie($_COOKIE);
                            $token1 = $store->getAccessToken($rid1);
                            
                            $rid2 = "PW_41837382";
                            $store = new TPAccessTokenStore($tinypassConfig);
                            $store->loadTokensFromCookie($_COOKIE);
                            $token2 = $store->getAccessToken($rid2);

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

                    $cookie_exampleData = stripslashes($_COOKIE['__ut']);
                    /* Decode */

                    $cookie_exampleData_decoded = json_decode($cookie_exampleData);

                    /* Print */

                    //var_dump($cookie_exampleData_decoded);

                    echo $_COOKIE["__ut"];
                    //echo $cookie_exampleData_decoded;
                ?>
            </td>
            </tr>
        <tr>
            <td>umc_41837382</td>
            <td>
                <?php 

                    $cookie_exampleData = stripslashes($_COOKIE['umc_41837382']);
                    /* Decode */

                    $cookie_exampleData_decoded = json_decode($cookie_exampleData);

                    /* Print */

                    //var_dump($cookie_exampleData_decoded);

                    echo $_COOKIE["umc_41837382"];
                    //echo $cookie_exampleData_decoded;
                ?>
            </td>
            </tr>
             <tr>
                <td>
                <a href="../index.php">Return to home</a>
                </td>
            </tr>
        </table>
        
        <div id="#my-inline-offer">
        
        </div>
        
    </body>
</html>