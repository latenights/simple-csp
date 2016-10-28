<?php

$string = "alert('Hello, world!');";
echo base64_encode(hash('sha256', $string, true));