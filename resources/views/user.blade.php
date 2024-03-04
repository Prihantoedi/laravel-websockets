<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>
</head>
<body>
    <button id="btn-send">Send Event</button>

    <script>

        const btnSend = document.getElementById('btn-send');

        btnSend.addEventListener('click', function(){
            let xhr = new XMLHttpRequest();

            xhr.onload = function(){
                if(xhr.status === 200){
                    const res = JSON.parse(xhr.responseText);
                    console.log(res);
                }
            };

            xhr.open('GET', 'http://127.0.0.1:8000/api/v1/sender');

            xhr.send();
            

        
        });
        

    </script>
</body>
</html>