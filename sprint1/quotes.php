<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 3-2-2018
 * Time: 13:18
 */

echo <<<MR
<p>
<em>Single quoted strings</em> will display things almost completely "as is." Variables and most escape sequences will not be interpreted. <br>
<em>Double quote strings</em> will display a host of escaped characters (including some regexes), and variables in the strings will be evaluated.<br>
<br>For example:<br>
If we have a variable with the name naam that contains the value Jan<br>
echo 'De naam is $naam' will be displayed as De naam is \$naam<br>
echo "De naam is $naam" will be displayed as De naam is Jan<br>
</p>
MR;
