<?php
    $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin commodo pharetra faucibus. Quisque hendrerit lobortis dolor, tristique mollis nunc malesuada dictum. Aliquam molestie iaculis eros eu luctus. Aenean id leo libero. Donec est nibh, venenatis sed porttitor non, vulputate sit amet lacus. Praesent id turpis et est finibus vehicula non a quam. Ut et urna dignissim, laoreet tortor viverra, convallis quam. Nulla ac purus vel nibh porttitor elementum. Mauris porta, metus vitae facilisis feugiat, mauris sem consectetur metus, dignissim blandit est ante ut velit.";
    $array = explode(".",$string);

    for ($i=0; $i < sizeof($array); $i++) { 
        echo "<p>".$array[$i]."</p>";
    }
?>