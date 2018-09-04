
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
		   <li class='nav-item'>
            <a class='step nav-link js-scroll-trigger' href='#c'>3</a>
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

<form id="regForm" action="#">
<div style="overflow:auto;">
    <div style="">
      <button class="col-sm-5 btn btn-success btn-lg" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button class="col-sm-5 btn btn-success btn-lg" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <div class="form-group tab">
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Branch:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
<div id="a" class="col-12 p-3" style=" background: blue; color: #fff;"> APPLICATION TO OPEN A CORPORATE ACCOUNT </div>
    <div class="form-group mb-2 mr-sm-2 pt-3 ">
    <label for="email2" class="mb-2 mr-sm-2">Account No.(Official use only):</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="col-12 p-3" style="text-transform:uppercase; background: blue; color: #fff;"> Companies Details
     (Please complete in BLOCKED LETTERS and tick where necessary)</div>
     <strong class="pt-2">Account Type :</strong>
  
    <div class="row col-12">
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox"> Comp-Limited Liability
      </label>
    </div> 
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label">
        <input class="form-group-input "type="checkbox">Society/Club
      </label>
    </div> 
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label">
        <input class="form-group-input "type="checkbox">Association Partnership
      </label>
      </div>
      <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label">
        <input class="form-group-input "type="checkbox">Partnership
      </label>
      </div>
      <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label">
        <input class="form-group-input "type="checkbox">NGO
      </label>
    </div> 
    </div>

<div class="form-group mb-2 mr-sm-2">
    <label for="email2" class="mb-2 mr-sm-2">Company Name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2">
    <label for="email2" class="mb-2 mr-sm-2">Certificate of Incorporation Number:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>

<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Date of Incorporation:</label>
    <input type="date" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
 </div>
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Type of Business:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Operating Business Area:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Corporate Business Address/ Registered Office (if different from above):</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Email Address :</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Website (if any) :</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>

<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Phone Number:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
 </div>
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Phone Number(2):</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Tax Identification text(TIN):</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
	</div>

  <div class="form-group tab">
  <div id="b" class="col-12 p-3" style="width: 100%; padding: 10px; background: blue; color: #fff;">ANNUAL TURNOVER</div>
<div class="col-12"> Type: </div>
<div class="row col-12">
    <div class="form-group mb-2 mr-sm-2">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox"> N5 Billion - Above
      </label>
    </div> 
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox"> 4.99 Billion - N500 Million
      </label>
    </div> 
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox"> N499.9Million- N50 Million
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">N49.9 Million
      </label>
    </div> 
    </div>

	

<div class="p-2 col-12"> 
Is Your Company Quoted On the Stock Exchange ?
<div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">YES
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">NO
      </label>
    </div> 
    </div> 

<div class="col-12 p-2" style=" background: blue; color: #fff;">ACCOUNT SERVICE(S) REQUIRED (Please check option below)</div>

<div><u> Card </u></div>
<div class="col-12 row">
<div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Verve [Sole Proprietorship only]
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Naira Master Card
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Visa
      </label>
    </div>
    </div>
 

<div> Cheque Book <i>(fees apply)</i></div>
<div class="col-12 row">
<div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">50 leaves
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">100 leaves
      </label>
    </div>
    </div>
	
<div><u> Alert </u></div>
<div class="col-12 row">
<div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Email
      </label>
    </div>
    </div>
    <div class="col-12 row">
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">SMS <i>(fees apply)</i>
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Credit Only 
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Debit only
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Both
      </label>
    </div>
    </div>
  
<div><u>  Statement (Frequency Email only)</u></div>
<div class="col-12 row">
<div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Monthly
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Quartely
      </label>
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox">Semi Quartely
      </label>
    </div>
    </div>
  <p> To enroll for internet Banking (First Online), please request for the form.</p>


<div id="c" class="col-12 p-3" style=" background: blue; color: #fff;">CHEQUE CONFIRMATION THRESHOLD.</div>
<div class="p-2"> You will be required to pre-confirm 
any cheque N200,000.00 and above. If you would like to have a higher threshold for pre-confirmation,
 Please specify the amount (i.e threshold above N200,000)</div>
 <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2"></label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
</div>
<div class="tab">
<h3 class="text-center"> Thanks for filing the form </h3>
  </div>
  <!-- Circles which indicates the steps of the form: -->
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
    document.getElementById("nextBtn").innerHTML = "That's the end of this form"";
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
