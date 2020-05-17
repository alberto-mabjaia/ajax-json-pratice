<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax 2 - Local Json</title>
</head>
<body>
    <h1>Fetching data from Json using Ajax</h1>
    <button id="button">Get User</button>
    <button id="button1">Get Users</button>

    <br>

    <h2>User</h2>
    <div id="user"></div>
    <h2>Users</h2>
    <div id="users"></div>
    
    <script>
        var xhr = new XMLHttpRequest();

        
        document.getElementById("button").addEventListener("click", loadUser);
        document.getElementById("button1").addEventListener("click", loadUsers);
        
        
        function loadUser(){
            xhr.open('GET', 'user.json', true);
            xhr.onreadystatechange = function(){
                if(xhr.readyState && xhr.status == 200){
                    console.log(xhr.responseText);
                    var user = JSON.parse(xhr.responseText);

                    var output = "";

                    output += "<ul>" +
                    "<li> ID: " +user.id+"</li>"+
                    "<li> name: " +user.name+"</li>"+
                    "<li> email: " +user.email+"</li>"+
                    "</ul>";

                    document.getElementById('user').innerHTML = output;
                }
            }

            xhr.send();
            activeBottom();
        }


        function loadUsers(){
            
            xhr.open('GET', 'users.json',true);

            xhr.onload = function(){
                if( xhr.status == 200){
                var users = JSON.parse(xhr.responseText);
                var output = "";
                    for(var i in users){
                    

                    output += "<ul>" +
                    "<li> ID: " +users[i].id+"</li>"+
                    "<li> name: " +users[i].name+"</li>"+
                    "<li> email: " +users[i].email+"</li>"+
                    "</ul>";

                    }

                    document.getElementById('users').innerHTML = output;
                    
                }
            }

            xhr.send();
            activeBottom();
        }

        function activeBottom(){
            var show;

            document.getElementById("button").onclick = function(){
                
                    var users = document.getElementById("users");
                    users.style.display = "none";
                    user.style.display = "block";
                    

                
            }

            document.getElementById("button1").onclick = function(){
                var user = document.getElementById("user");
                user.style.display = "none";
                users.style.display = "block";
                

            }


            
        }

    </script>
</body>
</html>