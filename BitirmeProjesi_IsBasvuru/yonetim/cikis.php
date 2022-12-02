<?php

    setcookie("user","",time()-4200);
    session_unset();
    echo "<script>
    window.location.href='login.php';
    </script>";
