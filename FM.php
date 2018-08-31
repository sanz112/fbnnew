<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
body{font-family:'Open Sans',serif;padding-top:54px;color:#868e96}@media (min-width:900px){body{padding-top:0;padding-left:17rem}}h1,h2,h3,h4,h5,h6{font-family:'Saira Extra Condensed',serif;font-weight:700;text-transform:uppercase;color:#343a40}h1{font-size:6rem;line-height:5.5rem}h2{font-size:3.5rem}.subheading{text-transform:uppercase;font-weight:500;font-family:'Saira Extra Condensed',serif;font-size:1.35rem}.list-social-icons a{color:#495057}.list-social-icons a:hover{color:#bd5d38}.list-social-icons a .fa-lg{font-size:1.75rem}.list-icons{font-size:3rem}.list-icons .list-inline-item i:hover{color:#bd5d38}#sideNav .navbar-nav .nav-item .nav-link{font-weight:600;text-transform:uppercase}@media (min-width:900px){#sideNav{text-align:center;position:fixed;top:0;left:0;display:flex;flex-direction:column;width:10rem;height:100vh}#sideNav .navbar-brand{display:flex;margin:auto auto 0;padding:.5rem}#sideNav .navbar-brand .img-profile{max-width:10rem;max-height:10rem;border:.5rem solid rgba(255,255,255,.2)}#sideNav #navbarcollapse{display:flex;align-items:flex-start;flex-grow:0;width:100%;margin-bottom:auto}#sideNav #navbarcollapse .navbar-nav{flex-direction:column;width:100%}#sideNav #navbarcollapse .navbar-nav .nav-item{display:block}#sideNav #navbarcollapse .navbar-nav .nav-item .nav-link{display:block}}section.resume-section{border-bottom:1px solid #dee2e6;padding-top:5rem!important;padding-bottom:5rem!important}section.resume-section .resume-item .resume-date{min-width:none}.bg-primary{background-color:#47559b!important}.text-primary{color:#bd5d38!important}a{color:#bd5d38}a:active,a:focus,a:hover{color:#824027}  #navbarcollapse .navbar-nav .nav-item .nav-link{display: inline;  padding: 20px; } #navbarcollapse .navbar-nav{display: inline; width:100%} #navbarcollapse .navbar-nav .nav-item{display:inline;}
#navbarcollapse{display: inline; width:100%;margin-bottom:auto}
</style>
<nav class='navbar navbar-expand-lg navbar-dark bg-primary fixed-top' id='sideNav'>
      <a class='navbar-brand js-scroll-trigger' href='#page-top'>
        
      </a>
     
      <div class='' id='navbarcollapse'>
        <ul class='navbar-nav'>
        
          <li class='nav-item'>
            <a class='nav-link js-scroll-trigger' href='#a'>1</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link js-scroll-trigger' href='#b'>2</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link js-scroll-trigger' href='#c'>3</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link js-scroll-trigger' href='#d'>4</a>
          </li>
    
          <!--<li class='nav-item'>
            <a class='nav-link js-scroll-trigger' href='#awards'>Awards</a>
          </li>-->
        </ul>
      </div>
    </nav>
                  <div class="p-3 container">
                  <div> FBN MORTGAGE LIMITED </div>
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

  <div>HOME OWNERSHIP MORTGAGE LOAN APPLICATION FORM</div>
  
  <form class="form-inline" role="form">
  <div id="a" class="col-12 mb-2 p-2">SECTION A: PARTICULARS OF BORROWER: </div>
  <div class="form-check mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">FirstName:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">LastName:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Address: </label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Phone Number:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Date Of Birth:</label>
    <input type="date" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Sex: </label>
    <select class="form-control">
<option value="Male">Male</option>
<option value="Male">Female</option>
<option value="Male">Prefer Not to Say</option>
</select>
</div>
<div class="form-check mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Highest Educational Qualification:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Profession:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Name/Address of Employer(if less than three years, give name of previous employer:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Present Position:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Highest Educational Qualification:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Telephone Number:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Mobile Phone Number:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Profession:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Fax:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">E-mail:</label>
    <input type="email" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="email2" class="mb-2 mr-sm-2">Years at current Employment:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Residential Address:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Telephone Number:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    
    <div class="col-12 pt-2 mb-2"> Type </div>
    <div class="row col-12">
    <div class="form-check mb-2 mr-sm-2 ">
      <label class="form-check-label ">
        <input class="form-check-input "type="checkbox"> Owned
      </label>
    </div> 
    <div class="form-check mb-2 mr-sm-2 ">
      <label class="form-check-label">
        <input class="form-check-input "type="checkbox"> Rented
      </label>
    </div> 
    <div class="form-check mb-2 mr-sm-2 ">
      <label class="form-check-label">
        <input class="form-check-input "type="checkbox">others
      </label>
    </div> 
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Specify:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mb-2 mr-sm-2 ">
    <label for="pwd2" class="mb-2 mr-sm-2">Annual Rent:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    
    <div class="col-12 pt-4 mb-2">Marital Status:</div>
    <div class="row col-12">
    <div class="form-check mb-2 mr-sm-2 ">
      <label class="form-check-label">
        <input class="form-check-input "type="checkbox"> Married
      </label>
    </div> 
    <div class="form-check mb-2 mr-sm-2 ">
      <label class="form-check-label">
        <input class="form-check-input "type="checkbox"> Single
      </label>
    </div> 
    <div class="form-check mb-2 mr-sm-2 ">
      <label class="form-check-label">
        <input class="form-check-input "type="checkbox">Divorced/Seperated
      </label>
    </div> 
    </div>
    
    <div class=" form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Name of Spouse:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Annual Rent:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2"> Address:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Spouse's Employer:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
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
    <div style="font-weight: 700;" class="col-12 pt-4 mb-3">Other Periodic Pay from employment:</div>
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

<div style="style="font-weight: 700" class="col-12 pt-4 pd-3 mb-3">Other Source(s) of Income</div>
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
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Estimated Monthly Living Expenses:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div id="c" class="col-12 p-2"> SECTION C. PARTICULARS OF THE LOAN: </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Total Financing Required:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Proposed Equity Contribution:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Loan Amount Required:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
    <label for="pwd2" class="mb-2 mr-sm-2">Tenor of Facility:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="">
    </div>
    <div class="form-check mr-sm-2">
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
    <div class="row col-12">
    <div class="form-check mb-3 mr-sm-2">
      <label class="form-check-label">
        <input class="form-check-input "type="checkbox"> Guarantee of Employer
      </label>
    </div> 
    <div class="form-check mb-3 mr-sm-2">
      <label class="form-check-label">
        <input class="form-check-input "type="checkbox"> Other Guarantee
      </label>
    </div>
    </div>
    <div id="d" class="col-12 p-2"><p> SECTION E. APPLICANT'S DECLARATION </p><br>
    <p style="text-indent: 30px font-style: oblique;"> I hereby declare that all information provided in this application are correct and that all documents submitted with this form are authetic. I agree that FBN mortgages could cross-check thae information provided above and may request for references from my employer and/or financial 
    institutions mentioned above. I therefore agree that any material misstatement discovered renders my application null and void.</p>
    </div>
    <div class="col-12 p-3 mb-3"><p>CHECKLIST OF REQUREMENT</p><br>
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

    <footer>
        <p style="text-align: center;"> Copyright &copy; 2018. Do not Use without Approval. All rights reserved. A product of <a href="#">Witt Technologies</a></p>
    </footer>
 </form>
 </div>
</body>
</html>