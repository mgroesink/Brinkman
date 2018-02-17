<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 3-2-2018
 * Time: 13:18
 */

echo <<<MR
<p>
Een <em>lokale variabele</em> is een variabele die binnen een methode wordt aangemaakt en die 
buiten die methode niet bestaat.<br>
<br>
function showName() {<br>
   \$name = 'Jan';<br>
   print 'De naam is ' . \$name;<br>
   }<br>
   
</p>
<p>
Een <em>globale variabele</em> is een variabele die buiten een methode is aangemaakt en kan vanuit het hele 
script worden benaderd.<br>
<br>

   \$somevar = 15;<br>
   
   function addit() {<br>
      GLOBAL \$somevar;<br>
      \$somevar++;<br>
      
      print "Somevar is \$somevar";<br>
   }<br>
   <br>
   addit();<br>


</p>
MR;
