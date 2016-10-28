<?php
define('ENVIROMENT', 'test'); // live, test
require_once('csp/directives.php')
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Simple CSP example</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <style nonce="hiddendiv" type="text/css">
        .hidden-div {
            display: block;
        }
    </style>
    <!-- Internet Explorer HTML5 enabling code: -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<h1>This is heading</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus quam quis nibh fringilla sit
    amet consectetur lectus malesuada. Sed nec libero erat. Lorem ipsum dolor sit amet, consectetur
    adipiscing elit. Nunc mi nisi, rhoncus ut vestibulum ac, sollicitudin quis lorem. Duis felis dui,
    vulputate nec adipiscing nec, interdum vel tortor. Sed gravida, erat nec rutrum tincidunt, metus
    mauris imperdiet nunc, et elementum tortor nunc at eros. Donec malesuada congue molestie.
    Suspendisse potenti. Vestibulum cursus congue sem et feugiat. Morbi quis elit odio. </p>

<h2>Some pictures</h2>
<h3>Local picture</h3>
<div class="image">
    <img src="images/picture-386745_1280.jpg" alt="Local picture" title="Local picture"/>
</div>
<h3>Remote picture 1</h3>
<div class="image">
    <img src="https://scontent-vie1-1.xx.fbcdn.net/t31.0-8/14500437_10153973092843951_3267997816895492493_o.jpg"
         alt="Remote picture 1" title="Remote picture 1"/>
</div>
<h3>Remote picture 2</h3>
<div class="image">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Hopetoun_falls.jpg/1280px-Hopetoun_falls.jpg"
         alt="Remote picture 2" title="Remote picture 2"/>
</div>
<div class="hidden-div">
    <h4>This is hidden div!</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus quam quis nibh fringilla sit
        amet consectetur lectus malesuada. Sed nec libero erat. Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Nunc mi nisi, rhoncus ut vestibulum ac, sollicitudin quis lorem. Duis felis dui,
        vulputate nec adipiscing nec, interdum vel tortor. Sed gravida, erat nec rutrum tincidunt, metus
        mauris imperdiet nunc, et elementum tortor nunc at eros. Donec malesuada congue molestie.
        Suspendisse potenti. Vestibulum cursus congue sem et feugiat. Morbi quis elit odio. </p>
</div>
<!-- JavaScript Includes -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script nonce="salutation" type="text/javascript">
    console.log('Hi, how are you?');
</script>
<script nonce="hello">
    console.log('Hello, world!');
</script>
<script nonce="directives">
    console.log(<?= json_encode($directives); ?>);
</script>
</body>
</html>

