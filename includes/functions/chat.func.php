<?php
function get_msg()
{
    $conn = mysqli_connect('localhost', 'root', '');
    $run = mysqli_query($conn, "SELECT 'Sender', 'Message' FROM 'chat'.'chat' ");
    $messages = array();
    if ($run) {
        while ($message = mysqli_fetch_assoc($run)) {
            $messages[] = array('sender' => $message['Sender'],
                'message' => $message['Message']);
        }
        return $messages;
    }
}
function send_msg($sender, $message){

    if(!empty($sender) && !empty($message)){
        $sender = mysqli_real_escape_string($sender);
        $message = mysqli_real_escape_string($message);

        $query = "INSERT INTO 'chat'.'chat' VALUES (null, '{$sender}', '$message')";
    }else {
        return false;
    }
}
?>