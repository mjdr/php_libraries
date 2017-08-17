<?php
 include "Matcher.php";
 
 $matcher = new Matcher("/([\d])+/","23 ad 34q");
 $ok = true; 
 $ok = $ok && $matcher->find();
 $ok = $ok && ($matcher->group(0) == '23');
 $ok = $ok && $matcher->find();
 $ok = $ok && ($matcher->group(0) == '34');
 $ok = $ok && !$matcher->find();

 echo "Test " . ($ok ? "PASSED" : "FAILED") . "\n";
?>
