<?php
require ('includes/core.inc.php');

if(isset($_POST['send'])){
    if (send_msg($_POST['sender'], $_POST['message'])){
        echo 'Message Sent';
    } else {
        echo 'Message Failed to sent';
    }
}
?>

<div id="messages">
    <?php
        $messages = get_msg();
        if (is_array($messages))
        foreach ($messages as $message){
            echo '<strong>'.$message['sender'].' Sent</strong><br />';
            echo $message['message'].'<br /><br />';
        }
    ?>
</div>  <!-- Message -->

<form action="index.php" method="post">
    <label>Enter Name: <input type="text" name="sender" /></label>
    <label>Enter Message:<input type="text" name="message" /> </label>
    <input type="submit" name="send" value="Send Message" />
</form>