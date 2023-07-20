<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="myform">
        <input type="text" name="prompt" id="prompt">
        <input type="submit" value="submit" id= >
    </form>
    <br><br>
    <textarea id="response" >
    </textarea>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
        // script.js
$(document).ready(function () {
    $("#myform").submit(function (event) {
        event.preventDefault();
        let ip = $("#prompt").val();
        //$("#response").val("Your Response\n");
        document.getElementById("response").value="";
        dataToSend = {};
        dataToSend.prompt=ip;
        $.ajax({
            url: "chatgpt.php", // URL of the PHP file
            type: "POST", // HTTP method
            dataType: "json", // Data type to expect from the server
            success: function (data) {
                // On success, update the result div with the received data
                let res = JSON.parse(data);
                let response = res.choices[0].text.trim();


                let i=0;
                let txt = response;
                let speed = 50;
                function typeWriter(){
                    if(i<txt.length){
                        document.getElementById("response").value += txt.charAt(i);
                        console.log(txt.charAt(i));
                        i++;
                        setTimeout(typeWriter, speed);
                    }
                }
                typeWriter();
            },
            error: function () {
                // On error, display an error message
                $("#response").val("Error fetching data from PHP.");
            }
        });
    });
});

    </script>
</body>

</html>