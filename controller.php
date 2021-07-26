<?php

class Charge
{
    public $isCharged = 0;
    public $info = 'abcxyz';

    function changeStatus() {
        if ($this->isCharged) {
            $this->isCharged = 1;
        }
    }
}

$charge = new Charge();
if ($_POST['id']) {
    if (!in_array($_POST['id'], range(100, 599))) {
        header('Location: ' . 'error.html');
    } else {
        $charge->changeStatus();
        $_SESSION["result"] = json_encode($charge);
        header('Location: ' . 'success.php');
    }
}