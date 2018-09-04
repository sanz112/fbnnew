
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
		   <li class='nav-item'>
            <a class='step nav-link js-scroll-trigger' href='#d'>4</a>
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
  <div id="a" class="col-12 mb-2 p-2">SECTION A: PARTICULARS OF BORROWER: </div>
  <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
	<div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">FirstName:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">LastName:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Address: </label>
    <input type="address" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="">
    </div>
	<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Phone Number:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Date Of Birth:</label>
    <input type="date" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Sex: </label>
    <select class="form-control">
<option value="Male">Male</option>
<option value="Male">Female</option>
<option value="Male">Prefer Not to Say</option>
</select>
</div>
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Highest Educational Qualification:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div id="b" class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Profession:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="">
    </div>
<div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Name/Address of Employer(if less than three years, give name of previous employer:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Present Position:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Highest Educational Qualification:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Telephone Number:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Mobile Phone Number:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Profession:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Fax:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">E-mail:</label>
    <input type="email" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Years at current Employment:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Residential Address:</label>
    <input type="address" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Telephone Number:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
	</div>
  <div class="form-group tab">
	
    <div id="a" class="col-12 pt-2 mb-2"> Type </div>
    <div class="row col-12">
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label ">
        <input class="form-group-input "type="checkbox"> Owned
      </label>
    </div> 
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label">
        <input class="form-group-input "type="checkbox"> Rented
      </label>
    </div> 
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label">
        <input class="form-group-input "type="checkbox">others
      </label>
    </div> 
    </div>
    <div class="form-group mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Specify:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
   
    
    <div class="col-12 pt-4 mb-2">Marital Status:</div>
    <div class="row col-12">
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label">
        <input class="form-group-input "type="checkbox"> Married
      </label>
    </div> 
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label">
        <input class="form-group-input "type="checkbox"> Single
      </label>
    </div> 
    <div class="form-group mb-2 mr-sm-2 ">
      <label class="form-group-label">
        <input class="form-group-input "type="checkbox">Divorced/Seperated
      </label>
    </div> 
    </div>
    
    <div class=" form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Name of Spouse:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Annual Rent:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2"> Address:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Spouse's Employer:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Number of Years Employed:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Profession of Spouse:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Spouse Annual Income:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="col-12 mb-2 p-2"> Children/Other Dependents: </div>
<div class="table-responsive">          
<table class="table table-bordered">
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>Relationship</th>

</tr>
</thead>
<tbody>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>

</tr>

</tbody>
</table>
</div>
<div class="col-12 mb-2 p-3">Next-of-Kin:</div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Age:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Address:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div id="b" class="col-12 p-2">PERSONAL FINANCIAL INFORMATION</div>
    <div  class="col-12  pt-2">Employment Income</div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Total Annual Pay:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Monthly Gross Pay:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div id="b" style="font-weight: 700;" class="col-12 pt-4 mb-3">Other Periodic Pay from employment:</div>
    <div class="table-responsive">          
<table class="table table-bordered">
<thead>
<tr>
<th>Type</th>
<th>Amount(Naira)</th>
<th>Month</th>

</tr>
</thead>
<tbody>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td>  Total</td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>

</tbody>
</table>
</div>

<div style="font-weight: 700" class="col-12 pt-4 pd-3 mb-3">Other Source(s) of Income</div>
<div  class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th>Source</th>
<th>Amount/Year(N)</th>


</tr>
</thead>
<tbody>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
<tr>
<td>  Total</td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
</tbody>
</table>
</div>
</div>
  <div class="form-group tab">
    
<div style="font-weight: 700;" class="col-12 mb-3 pt-4"> Assets/ Investments Owed <i>(Real Estate, Equities, Bonds, Vehicles, etc):</i></div>
<div  class="table-responsive">          
<table class="table table-bordered">
<thead>
<tr>
<th>Type</th>
<th>Amount(Naira)</th>
<th>Month</th>

</tr>
</thead>
<tbody>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="2"></textarea></td>

</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td>  Total</td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
</tbody>
</table>
</div>

<div class="col-12 mb-3 p-4" style="font-weight: 700;"> Existing Obligations/Liabilities <em>(off payroll only)</em></div>
<div class="table-responsive">          
<table class="table table-bordered">
<thead>
<tr>
<th>Lender</th>
<th>Type</th>
<th>Outstanding Amount</th>
<th>Existing Periodic Repaymet</th>
<th>Frequency</th>

</tr>
</thead>
<tbody>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>


</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>


</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>


</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>


</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>


</tr>
<tr>
<td>  Total</td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>


</tr>
</tbody>
</table>
</div>
  </div>
  <div class="form-group tab">
  <div class="col-12 mb-3 p-4" style="font-weight: 700;"> Banking Details (Account Information) </div>
<div class="table-responsive">          
<table class="table table-bordered">
<thead>
<tr>
<th>Bank</th>
<th>Account No.</th>
<th>Account Type</th>
<th> Balance As At</th>


</tr>
</thead>
<tbody>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>



</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>


</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>



</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>



</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>



</tr>
<tr>
<td>  Total</td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>



</tr>
</tbody>
</table>
</div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Estimated Monthly Living Expenses:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div id="c" class="col-12 p-2"> SECTION C. PARTICULARS OF THE LOAN: </div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Total Financing Required:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Proposed Equity Contribution:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Loan Amount Required:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Tenor of Facility:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-group mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Frequency of installment Repayment:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>

    <div class="col-12 p-4 mb-3" style="font-weight: 700;"> Proposes Security for the Loan </div>
<div class="table-responsive">          
<table class="table table-bordered">
<thead>
<tr>
<th>Assest Type</th>
<th>Type of Charged</th>
<th>Valuation</th>

</tr>
</thead>
<tbody>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
<tr>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>

</tr>
<tr>
<td>  Total</td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea></td>
</tr>
</tbody>
</table>
</div>
    <div class="row">
    <div class="form-group  mb-3 ">
	
      <label class="form-group-label">Guarantee of Employer</label>
	  <input class="form-group-input" type="checkbox"> 
     </div> 
    <div class="form-group mb-3 ">
	
      <label class="form-group-label">Other Guarantee</label>
	  <input class="form-group-input "type="checkbox"> 
        </div>
    </div>
    <div id="d" class="col-12 p-2"><p> SECTION E. APPLICANT'S DECLARATION </p>
	<!--<div class="form-group  mb-3 ">
	<input style="float: left;" class="form-group-input" type="checkbox"> 
	</div>-->
    <p style="text-indent: 40px; font-style: oblique;"> I hereby declare that all information provided in this application are correct and that all documents submitted with this form are authetic. I agree that FBN mortgages could cross-check thae information provided above and may request for references from my employer and/or financial 
    institutions mentioned above. I therefore agree that any material misstatement discovered renders my application null and void.</p>
    </div>
    <div class="col-12 p-2 mb-2"><p>CHECKLIST OF REQUREMENT</p><br>
    <u> MORTGAGE LOAN </u></div>

    
<div class="table-responsive">          
<table class="table table-bordered">
<thead>
<tr>
<th></th>
<th>Yes</th>
<th>Deferred</th>
<th>Walved</th>
</tr>
</thead>
<tbody>
<tr>
<td>A letter of request for the facility</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>



</tr>
<tr>
<td>A daily completed Home Ownership Mortgage Loan application form</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>


</tr>
<tr>
<td>Copy of the title documents to the property(ownership must be in the name<br> of the vendor)</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>




</tr>
<tr>
<td>Copy of the approved building plan</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>



</tr>
<tr>
<td>Valuation report (including rental valuation if the property will be let)<br> on the property prepared by a register estate surveyor</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>



</tr>
<tr>
<td>A copy of the applicant's Tax Clearance Certificate for 3 years</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>
</tr>
<tr>
<td>Evidence of employment (for employees) and proof of employment<br> and other personal income (personal bank Statements and pay slips for 12 months)</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>
</tr>
<tr>
<td>If self employed, the following are needed:<br>
<ul>
<li> Company Profile</li>
<li>Company Bank Account Statement</li>
<li> 3 years audited accounts for the company</li>
</ul></td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>
</tr>
<tr>
<td>Security is a legal Mortgage on the property being financed</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>
</tr>
<tr>
<td>Deposit of non refundable fees for:
<ul>
<li>Valuation report fee</li>
<li>Legal Searches fee</li>
<li>Processing fee</li>
</ul>
</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>
</tr>
<tr>
<td>Deposit of cost of Legal documentation</td>
<td> <input type="checkbox" ></td>
<td><input type="checkbox" ></td>
<td><input type="checkbox" ></td>
</tr>
</tbody>
</table>
</div>
  </div>
  <div class="pt-3 form-group tab">
  <h3 class="text-center"> Thanks for filing the form </h3>
  </div>
  
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; 
showTab(currentTab); 

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
    document.getElementById("nextBtn").innerHTML = "That's the end of this form";
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
