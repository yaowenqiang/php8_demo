<?php
var_dump(htmlspecialchars('!@#$%',ENT_COMPAT|ENT_HTML401));
var_dump(htmlspecialchars('!@#$%',double_encode: false));


