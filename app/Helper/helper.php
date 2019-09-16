<?php
    use Pusher\Pusher;
function sendNotify($schanel , $event , $data){
    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
    );
    $pusher = new Pusher(
        '903304e8272a350117df',
        'd2e3ec9b7b9640c87ead',
        '859931',
        $options
    );

    // $data['message'] ;
    $pusher->trigger($schanel, $event, $data);
}

