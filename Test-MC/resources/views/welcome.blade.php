<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>welcome</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
       <style>  .form-popup {
            display: none;
            margin-left:450px;
            bottom: 0;
            width:400px;
            height:350px;
            border: 1px solid #fff;
            z-index: 9;
            }
        </style>
    
    </head>
    <body style="background-color:powderblue;">
    <div class='container'>
    <div  class='text-center'style="margin-top:100px;">  
        <h1 >Sri Lankan Tourism</h1>
</br>
       
</br>

<div class="form-popup" id="myForm">
      <form action="/loginaction" method="post" >
            <h1>Login</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
            </br>
            <label for="psw"><b>Password</b></label>
            <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
            </br>
            </br>
            <button type="submit" class="btn btn-primary" >Login</button>
            <button type="button"class="btn btn-primary" onclick="closeForm()">Close</button>
           </form>
</div>
</br>
        <button type="button" class="btn btn-primary btn-lg" onclick="openForm()">Admin login</button>
        <button type="button" class="btn btn-primary btn-lg">User login</button>

</br>
</br>        

                        <script>
                            function openForm() {
                            document.getElementById("myForm").style.display = "block";
                            }

                            function closeForm() {
                            document.getElementById("myForm").style.display = "none";
                            }
                        </script>
        
    </div>
    </div>
    </body>
</html>
