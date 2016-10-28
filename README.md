# simple-csp
Simple Content Security Policy example

## Using "simple-csp" on your own site:
Set 
<pre>
define('ENVIROMENT', 'test'); // live, test
</pre>

Include 
<pre>
require_once('csp/directives.php')
</pre>

and watch how it works.

### Directives can be set in
<pre>
csp/directives.php
</pre>

### Report
Any violation is pushed to
<pre>
csp/violations.txt
</pre>

### Enviroment
Enviroment determines which policy mode is used.

__Test__ - _won't output not allowed resources_

__Live__ - _will output all resources, even not allowed._

***
More info about Content Security Policy: https://content-security-policy.com/