   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    
    
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- jquery validation -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<!-- boootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
   
    <div class="cointainer m-5 p-3 border border-danger">

    <!--*********************START HARE********************-->
 <form action="insert-data.php" method="POST" id="form" name="form" onsubmit="return validateForm()" >
 
     <div class="form-roup row">
         <div class="col-sm-6 col-lg-3">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter Your Name" class="form-control"><br>
    
        </div>
        <div class="col-sm-6 col-lg-3">
            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter Your Email"class="form-control"><br>
            
        </div>
        
        <div class="col-sm-6 col-lg-3">
            <label for="number">Mobile Number:</label><br>
            <input type="number" id="number" name="number" placeholder="Entaer your Mobile Number" class="form-control"><br>
           
        </div>
        
        <div class="col-sm-6 col-lg-3">
            <label for="date">Select Date of Birth</label><br>
             <input type="date"id="date" name="date" id="date" class="form-control"><br>
        
          </div>
      </div>

    <div class=" row">
        <div class="col-sm-6 col-lg-3">
                <label for="listbox">Year Of Study</label><br>
                <select Name="listbox" id="listbox" class="form-control">  <br>
                    <option> 1st Year </option>  
                    <option> 2nd Year  </option>  
                    <option> 3rd Year  </option>  
                    <option> Last Year </option>  
                </select> <br> 
            </div>
      

         <div class="form-check col-sm-6 col-lg-3 ml-3">

                <label for="radio">Select Gender:</label><br>
                <input type="radio" name="gender" id="male" name="gender" value="male" class="form-check-input" checked >
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female" class="form-check-input">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other" class="form-check-input">
                <label for="other">Other</label><br>
            </div>
        
        <div class=" form-check col-sm-6 col-lg-3 ml-3">
            <label for="checkbox">Select Your Subjects</label><br>
            <input type='checkbox' id="checklist1" name='check_list[]' value='java' checked class="form-check-input">Java<br>
            <input type='checkbox' id="checklist2" name='check_list[]' value='php'class="form-check-input">PHP<br>
            <input type='checkbox' id="checklist3" name='check_list[]' value='python'class="form-check-input">Python<br>
            
        </div>

    </div>
        
        <label for="address">Address: </label><br> 
        <div class="input-group">
            <textarea name="address" id="address" rows="5"  class="form-control" placeholder="Enter Your Address"></textarea><br>  
           
        </div>
        
        
        <div>
            <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg">
            <input type="reset" name="reset" id="reset" class="btn btn-danger btn-lg" style="">   
            <a href ="retrive-data.php" class="btn btn-info btn-lg" >View all data</a>
        </div>
    
    </form>

   
    
    <!--*********************End HARE********************-->
</div>

    <div class="cointainer margin-bottom: 500px">
        
    </div>
    <script>
            function validateForm() {
        
            if ( document.forms["form"]["name"].value.trim()=="" ) {
                alert("Enter Name Please! ");
                document.getElementById("name").focus();
                return false;
            }
            else if ( document.forms["form"]["email"].value.trim()== "" ) {
                alert("Enter Valid Email");
                document.getElementById("email").focus();
                return false;
            }
            else if ( document.forms["form"]["number"].value <10 ) {
                alert("Enter Valid Mobile Number");
                document.getElementById("number").focus();
                return false;
            }
            else if ( document.forms["form"]["date"].value== "" ) {
                alert("date must be filled out");
                document.getElementById("date").focus();
                return false;
            }
            else if ( document.getElementById('checklist1').checked ==false &&document.getElementById('checklist2').checked ==false &&document.getElementById('checklist3').checked ==false) {
                alert("checklist must be filled out");
     
                return false;
            }
            else if ( document.forms["form"]["address"].value<10 ) {
                alert("Enter Valid Address");
                document.getElementById("address").focus();
                return false;

                
            }else{
                window.confirm("Sure to Submit");
            }
        }
      
        
    </script>
    
</body>
</html>