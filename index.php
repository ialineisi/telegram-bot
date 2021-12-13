<?php
$input = file_get_contents('php://input');
$update = json_decode($input);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$token = '5023237329:AAGNIM7yMslc4SJFtzvI4r-vrr9DM5fGuac';
file_get_contents(
"https://api.telegram.org/
bot$token/sendMessage?chat_id=$chat_id&text=$text");
