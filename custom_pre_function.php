<?php

function custom_pre($variable){
    echo "<pre>";
        return print_r($variable);
    echo "</pre>";
}