<?php
 
var $a = $_GET['a'];
echo "here".$a;    
if (is_numeric((int)$a)) {
    $a = (int)$a + 1;
    
} else {
    $a = 0;
}
?>

<html>
<head>

<script src="http://s.ppjol.net/lightbox/pp4.js"></script>
<script>
    var pp = {
        client: {
            config: {
                'zone': "0zKVOZwjFV2rjkdpRVy2r-",
                'mode': "meter",
                'debug': 1,
                'precheck': function () {
                    return 1;
                }
            }
        }
    };
</script>
</head>
<body>

<h1>Hi</h1>

<a href="#" onclick="$.pressplus.f.pop('plans');">Click me to pop lightbox</a>

<hr size="1"/>

<a href="?a=<?= $a ?>">Increment</a> | 
<a href="#ppClearU" >Click me to clear pressplus </a> or 
<a href="#" onClick="$.pressplus.f.clearU();">Click me to clear pressplus </a> or
<a href="/empty/">reload page</a>
<hr size="1"/>
</body>
</html>
