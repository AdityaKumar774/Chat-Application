<?php
$con  = mysqli_connect('localhost', 'root', '');
mysqi_select_db('chatbox', $con);
$result1 = mysqli_query("SELECT * FROM logs ORDER by id DESC");
while($extract = mysqli_fetch_array($result1)){
    echo "<span class='uname'>" . $extract['username'] . "</span>: <span class='msg'>" . $extract['msg'] . "</span><br />";
}
?>