<?php

foreach($_POST as $key => $val){
    echo "key ".htmlspecialchars($key)." value ".htmlspecialchars($val);
}
?>