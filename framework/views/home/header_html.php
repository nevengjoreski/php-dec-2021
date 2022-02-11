<?php

if(isset($_SESSION) && isset($_SESSION['message'])) {
    echo "
        <div 
        onclick='this.remove()'
        class=\"alert alert-{$_SESSION['message']['type']}\">
            {$_SESSION['message']['body']}
        </div>
    ";  

    unset($_SESSION['message']);
}