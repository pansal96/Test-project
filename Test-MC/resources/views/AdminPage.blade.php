<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       

    <style>  .form-popup {
        display: none;
        margin-left:10px;
        margin-top: 50px;
        bottom: 0;
        height:600px;
        border: 1px solid #fff;
        z-index: 9;
        }

        .tablepopup{
         display: none;
        margin-left:10px;
        margin-top: 50px;
        border: 1px solid #fff;
        z-index: 9;
        }
    </style>


</head>
<body>
    <div class="container-fluid mt-12">
    <div class="row">
        <div  class="col-sm-3 p-3 bg-dark text-white" style="height:720px;"    >

             <img style="width: 350px;height: 400px;margin-top: 10   0px;" src="{{url('images\hotel.png')}}"></br>
             </br>
             <div class='text-center'>
                 <button  type="button" class="btn btn-success btn-lg" onclick="openForm()">Add Hotels</button>  </br> 
             </div></br>
             <div class='text-center'>
                 <button  type="button" class="btn btn-success btn-lg" onclick="opentable()">view table</button>
             </div>
        </div>

                <script>
                    function openForm() {
                    document.getElementById("myForm").style.display = "block";
                    }

                    function closeForm() {
                    document.getElementById("myForm").style.display = "none";
                    }

                    function opentable() {
                    document.getElementById("table").style.display = "block";
                    }

                    function closetable() {
                    document.getElementById("table").style.display = "none";

                    
                    }

                </script>

        <div class="col-sm-9 p-3 bg-info text-white">

            <div class="form-popup" id="myForm">
                <form action="/savehotels" method="post" >
                    <div class="container">

                        <h1>Add Locations</h1>
                        <hr>
                    
                            <label for="name"><b>Location Name</b></label>
                            <input type="text" class="form-control" placeholder="Enter Hotel name" name="Hname" required></br>
                        
                            <label for="Desc"><b>Description</b></label>
                            <textarea class="form-control" placeholder="Enter Description" name="desc" style="height:20px;"></textarea></br>

                            <label for="img"><b>Near by Hotels</b></label>
                            <input type="text" class="form-control" placeholder="Enter hotels" name="NBH"></br>

                            <label for="img"><b>upload related images</b></label>
                            <input type="file" id="myFile" class="form-control" name="filename" multiple></br>
                        <hr>
                    
                        <button type="button" class="btn btn-primary btn-lg" onclick="closeForm()">Close</button>
                        <button type="submit" class="btn btn-success btn-lg" >SAVE</button>
                        <button type="reset" class="btn btn-warning btn-lg" >Reset</button>
                    
                    </div>
                </form>
            </div>

         <div class="tablepopup" id="table">

            <table class="table table-dark">
                <th>ID</ID>
                <th>Location Name</th>
                <th>Description</th>
                <th>Near by Hotels</th>
                <th>images</th>
                <th>Delete Or Update</th>
                  
                     <tr>
                     <td>1 </td>    
                     <td>sigiriya </td>
                     <td>sigiriya is very beautiful place</td>
                     <td></td> 
                     <td></td>  
                     <td>
                     <a href="#" class="btn btn-outline-danger"> delete</a>
                      <a href="#" class="btn btn-outline-warning"> Update</a>
                     </td>
                      
                     </tr>
              
                
            </table>
            <button type="button" class="btn btn-primary btn-lg" onclick="closetable()">Close</button>
        </div>

    </div>
</div>
</body>
</html>