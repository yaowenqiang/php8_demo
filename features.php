<?php
var_dump(htmlspecialchars('!@#$%',ENT_COMPAT|ENT_HTML401));
var_dump(htmlspecialchars('!@#$%',double_encode: false));
echo match(8.0) {
    "8.0" => "hello",
    8.0 => "888",
};
