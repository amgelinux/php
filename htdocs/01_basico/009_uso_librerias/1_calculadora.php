<?php
require "./libreria.php";
/*
 * Dependiendo de si usamos include, require o require_once
 *
 */
if ($operacion == "resta") {
    echo suma(4, 6);
} else {
    echo resta (10,8);
}