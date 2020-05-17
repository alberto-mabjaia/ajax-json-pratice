<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajax Refresh</h1>
    <button id="button">Get Text</button>
    <div id="text"></div>
    <script>
        document.getElementById("button").addEventListener("click", loadText);

        function loadText(){
            // create XHR object
            var xhr = new XMLHttpRequest();

            // Open - it takes 3 param(type, url, async)
            xhr.open('GET', 'sample.txt', true);


            // Way to request using ONLOAD 

            /*xhr.onload = function(){
                // check the status 
                if(xhr.status == 200){
                    console.log(xhr.responseText);
                }
            }
            */
            

            // way to request using ONREADYSTATE
            xhr.onreadystatechange = function(){
                if(xhr.readyState && xhr.status == 200){
                    document.getElementById('text').innerHTML = xhr.responseText;
                }else if(xhr.status == 404){
                    document.getElementById('text').innerHTML = "Oops, nao encontrado";
                }
            }


            // Optiional - used for Loaders

            xhr.onprogress = function(){
                console.log()
            }
           
           //send request
           xhr.send();
        }





        // readState Values
        // 0: request not initialized
        // 1: server connection established
        // 2: request received


    </script>
</body>
</html>