<?php

$data = [
    'Doug'
];
foreach ($_POST as $key => $value) {
    print_r(json_encode($key));
}

