<?php 
$nonExistentVar = array();
if (empty($nonExistentVar)){
    echo "Variable tidak terdefinisi atau kosong.";
} else {
    echo "Variable terdefinisi dan tidak kosong.";
}
?>