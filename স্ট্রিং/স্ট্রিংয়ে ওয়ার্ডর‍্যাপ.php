<?php

$string = "Lorem ipsum dolor sit amet consectetur, adipiscingrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr elit. Fusce maximus leo sollicitudin condimentum porttitor pellentesque pretium venenatis elit ac luctus nullam sodales mattis malesuada";
echo wordwrap($string, 26,"\n", true);
//for webpage use <br/>