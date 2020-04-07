<?php
if(isset($_GET) AND !empty($_GET)){
        extract($_GET);
        debug($_GET);
        die();
        header("location:../print/index.php?cid='$cid'?'ref=$ref");
    }
    