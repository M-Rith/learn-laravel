<?php

$abc = null;

var_dump(
    null == null,
    null == false,
    null == 0,
    null == "",
    null == [],
    $abc,
    isset($abc),
    is_null($abc),
);
?>
