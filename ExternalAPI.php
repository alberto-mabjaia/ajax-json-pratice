<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Data from GitHub</title>
</head>
<body>
    <h1>Get Data From GitHub using Githum API</h1>
    
    <hr>
    <h2>Github users</h2>
    <button id="button">Get Users</button><br>
    <div id="users"></div>

    <script>
        document.getElementById("button").addEventListener("click", loadUsers);

        // load Github users

        function loadUsers(){
            xhr = new XMLHttpRequest();

            xhr.open('GET', 'https://api.github.com/users', true);
            xhr.onload = function(){
                if(xhr.status == 200){
                    var users = JSON.parse(xhr.responseText);
                    console.log(users);
                }
            }

            xhr.send();
        }
    </script>

</body>
</html>