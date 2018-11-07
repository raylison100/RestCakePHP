<?php
    foreach ($phones as $phone) {
            unset($phone->generated_html);
        }
    echo json_encode(compact('phones'));
?>