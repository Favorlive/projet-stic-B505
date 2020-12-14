<?php

function echoPostValueIfSet($value)
{
    if (isset($_POST[$value])) {
        echo $_POST[$value];
    }
}

function echoIfCountrySelected($country)
{
    if (isset($_POST['country']) && $_POST['country'] == $country) {
        echo 'selected';
    }
}

function echoIfSexSelected($sex)
{
    if (isset($_POST['sex']) && $_POST['sex'] == $sex) {
        echo 'selected';
    }
}

?>