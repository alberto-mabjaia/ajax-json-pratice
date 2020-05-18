<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Data from GitHub</title>
    <style>
        .user{
            display: flex;
            padding: 10px;
            background-color: silver;
            margin: 10px;

        }
        .user ul{
            list-style: none;
        }

        .user img{
            border-radius: 20px;
        }
    </style>
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
                    

                    var output = "";

                    for(var i in users){
                        output +=
                        '<div class = "user"> '+
                        '<img src = "'+users[i].avatar_url+'" width="70" height = "70">'+
                        '<ul>'+
                        '<li> ID do Usuario: "'+users[i].id+'"</li>'+
                        '<li> Login: "'+users[i].login+'"</li>'+
                        '</ul>'+
                        '</div>';

                    }

                    document.getElementById("users").innerHTML = output;
                    console.log(users);
                }else{
                    document.getElementById("users").innerHTML = "Algo Deu errado";
                }
            }

            xhr.send();
        }
    </script>

</body>
</html>