<?php

$db = json_decode(file_get_contents('../db/user.json'), true);

if (!isset($_POST['id'])) {
    http_response_code(400);
    echo 'Invalid data';
    die();
}


for ($i = 0; $i < count($db); $i++) {
    if ($db[$i]['id'] == $_POST['id']) {
        $db[$i]['poke_count'] = 0;
        file_put_contents('../db/user.json', json_encode($db));
        echo 'User was reset';
        die();
    }
}

http_response_code(400);
echo 'User was not found and not reset';
die();