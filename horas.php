<?php 

    echo 'horario gringo <br/>';
    echo date('Y-m-d H-i-s');
    
    date_default_timezone_set('Asia/Tokyo');

    echo '<br/>' .'horario do casal <br/>' ;
    echo date('d-m-Y H:i');

    echo date('d-D-h-y'); 

?>