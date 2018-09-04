
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FBN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

</head>
<body>
<style>
body{font-family:'Open Sans',serif;padding-top:24px;color:#868e96}@media (min-width:900px){body{padding-top:0;padding-left:8rem}}h1,h2,h3,h4,h5,h6{font-family:'Saira Extra Condensed',serif;font-weight:700;text-transform:uppercase;color:#343a40}h1{font-size:6rem;line-height:5.5rem}h2{font-size:3.5rem}#sideNav .navbar-nav .nav-item .nav-link{font-weight:600;text-transform:uppercase}@media (min-width:900px){#sideNav{text-align:left;position: fixed;top:0;left:0;display:flex;flex-direction:column;width:11rem;height:100vh}#sideNav .navbar-brand{display:flex;}#sideNav #navbarcollapse{display:flex;align-items:flex-start;flex-grow:0;width:100%;}#sideNav #navbarcollapse .navbar-nav{flex-direction:column;width:100%}#sideNav #navbarcollapse .navbar-nav .nav-item{display:block}#sideNav #navbarcollapse .navbar-nav .nav-item .nav-link{margin: 0 40px 0px 0; display:block; padding: 60px; }}.bg-primary{height: 60px; background-color:#47559b!important}.text-primary{color:#bd5d38!important}a{color:#bd5d38}a:active,a:focus,a:hover{color:#824027} #navbarcollapse .navbar-nav .nav-item .nav-link{display: inline; margin-right: 3px;  padding: 10px;  } #navbarcollapse .navbar-nav{display: inline; width:100%; margin-right: 3px;  padding: 10px ;} #navbarcollapse .navbar-nav .nav-item{display:inline; margin-right: 3px;  padding: 10px ;}
#navbarcollapse{display: inline; width:100%;margin-bottom:auto}
</style>
<div id="sideNav">
<nav class='navbar navbar-expand-lg navbar-dark bg-primary fixed-top' id='sideNav'>
      <a class='navbar-brand js-scroll-trigger' href='#page-top'>
        
      </a>
     
      <div class='' id='navbarcollapse'>
      
        <ul class='navbar-nav'>
       
          <li class='nav-item'>
            <a class='step nav-link js-scroll-trigger' href='#a'>1</a>
          </li>
          <li class='nav-item'>
            <a class='step nav-link js-scroll-trigger' href='#b'>2</a>
          </li>
        
        </ul>
      </div>
    </nav>
</div>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 10px auto;
  font-family: Raleway;
  padding: 30px;
  width: 90%;
  
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #e80b0b;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  outline: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.6;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  padding: 20px;
  margin: 0 2px;
  color: coral;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: coral;

}
@media screen and (max-width: 600px) {
  #nextBtn{
    margin-top: 10px;
  }
}
</style>
<form id="regForm" action=" ">
	  <div style="overflow:auto;">
    <div style="">
      <button class="col-sm-5 btn btn-success btn-lg" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button class="col-sm-5 btn btn-success btn-lg" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <div class="col-12">CONFIDENTIAL </div>
  <div class="form-group tab">

<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Account Number:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Account Name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Name of Signatory:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Profession/Occupation:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Telephone Number:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Mandate/Instruction:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
  
    <div class="form-group mb-2 mr-sm-2">
    <label for="email2" class="mb-2 mr-sm-2">Signature:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
   </div>
    <div class="form-group mb-2 mr-sm-2">
    <label for="email2" class="mb-2 mr-sm-2">Authorizing Officer's Name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
   
    <div class="form-group mb-2 mr-sm-2">
    <label for="email2" class="mb-2 mr-sm-2">Authorizing Officer's Signature:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2">
    <label for="email2" class="mb-2 mr-sm-2">Date:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
 	</div>

  <div class="form-group tab">
   
<div class=" p-2 mb-2 row">
 <div class="circle p-image">
                 
	
	 <!--<img class="profile-pic" src="https://images.pexels.com/photos/109919/pexels-photo-109919.jpeg?auto=compress&cs=tinysrgb&h=350">
			-->
       <i style="position: absolute; cursor:pointer; color: #838383; margin: 10px 10px 0 0" class="fa fa-camera fa-2x upload-button"></i>
       <i style="position: relative; margin: 16px 0 0 21px;"class="p-4 fa fa-user fa-5x text-center"></i>
        <input class="file-upload" type="file" accept="image/*"/>
     </div>
 </div>
 
 <style>
 .circle {
   height: 170px;
   width: 170px;
   border-radius: 50%;
   border: 5px solid #838383;
   position:relative;
 }
 .file-upload {
    display: none;
}
img {
position: absolute;
height: 170px;
   width: 170px;
   border-radius: 50%;
}
 </style>
<script>
$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

           reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
</script>

<p id="b" class="col-lg-12" style="width: 100%; background: blue; color: #fff; padding: 10px; text-transform: uppercase; font-weight: 500;"> Signature Card (Individual Current/Savings/Joint & Domiciliary Accounts)</p>
<div  class="form-group">
<label for="n">Account Number</label>
<input style="margin: 10px 0; width: 100%;" type="text" class="form-control" id="n">
</div>
<div  class="form-group">
<label for="n">Account Name</label>
<input style="margin: 10px 0; width: 100%;" type="text" class="form-control" id="n">
</div>
<div  class="form-group">
<label for="n">Name of Signatory</label>
<input style="margin: 10px 0; width: 100%;" type="text" class="form-control" id="n">
</div>
<div  class="form-group">
<label for="n">Profession/Occupation</label>
<input style="margin: 10px 0; width: 100%;" type="text" class="form-control" id="n">
</div>
<div  class="form-group">
<label for="n">Telephone Number</label>
<input style="margin: 10px 0; width: 100%;" type="number" class="form-control" id="n">
</div>
<div  class="form-group">
<label for="n">Mandate/Instruction</label>
<input style="margin: 10px 0; width: 100%;" type="number" class="form-control" id="n">
</div>

<div  class="form-group">
<label for="n">Signature </label>
<input style="margin: 10px 0; width: 100%;" type="number" class="form-control" id="n">
</div>
<div  class="form-group ">
<label for="n"> Authorizing Officer's Name</label>
<input style="margin: 10px 0; width: 100%;" type="number" class="form-control" id="n">
</div>
<div  class="form-group">
<label for="n">Authorizing Officer's Signature</label>
<input style="margin: 10px 0; width: 100%;" type="number" class="form-control" id="n">
</div>
<div  class="form-group">
<label for="n">Date</label>
<input style="margin: 10px 0; width: 100%;" type="date" class="form-control" id="n">
</div>

<div class=" p-2 mb-2 row">
                  <div class="circle p-image">
                 
	
	 <!--<img class="profile-pic" src="https://images.pexels.com/photos/109919/pexels-photo-109919.jpeg?auto=compress&cs=tinysrgb&h=350">
			-->
       <i style="position: absolute; cursor:pointer; color: #838383; margin: 10px 10px 0 0" class="fa fa-camera fa-2x upload-button"></i>
       <i style="position: relative; margin: 16px 0 0 21px;"class="p-4 fa fa-user fa-5x text-center"></i>
        <input class="file-upload" type="file" accept="image/*"/>
     </div>
 </div>
 </div>
<div class="tab">
<h2 class="text-center"> Thanks for filing the form </h2>
  </div>
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
	<span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "That's the end of the form";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += "";
      // and set the current valid status to false
      valid = true;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
