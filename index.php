<?php
?>

<html>
<head>
    <title> Chat Box </title>
    <script>
        function submitChat() {
            if(form1.uname.value == '' || form1.msg.value == ''){
                alert('ALL FIELDS ARE MANDATORY');
                return;
            }
            var uname = form1.uname.value;
            var msg = form1.msg.value;
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open('GET', 'insert.php?uname='+uname+'&msg='+msg, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
<form name="form1">
    Enter your chat name: <input type="text" name="uname" /> <br />
    Your message: <br />
    <textarea name="msg"></textarea> <br />
    <a href="#" onclick="submitChat()"> Send </a><br/><br/>
    <div id="chatlogs">
        LOADING CHAT LOGS PLEASE WAIT...
    </div>
</form>
</body>
</html>
