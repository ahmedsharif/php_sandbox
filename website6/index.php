<!Doctype html>
<html>
<head>
    <title>Search User</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <script>
        function showSuggestion(str) {
            if(str.length == 0) {
                document.getElementById('output').innerHTML = '';
            } else {
                // AJAX request
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        console.log('this.reponsetext', this.responseText);
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();
            }
            console.log(str);
        }
    </script>
</head>
<body>
    <div class="container">
        <h1> Search Users </h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Search User: <input type='text' name='username' placeholder="Enter username" 
        class='form-control' onkeyup="showSuggestion(this.value)">
    </form>
    <p> Suggestions: <span id="output" style="font-weight:bold"><span></p>
    </div>
</body>
</html>