<?php
  require('assets/vendor/autoload.php');

  $options = array(
    'cluster' => 'ap2',
    'encrypted' => true
  );
  $pusher = new Pusher\Pusher(
    'e3ee61406ce197747383',
    '84113b45180a7a4552dd',
    '440581',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>


<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('e3ee61406ce197747383', {
      cluster: 'ap2',
      encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(data.message);
    });
  </script>
</head>