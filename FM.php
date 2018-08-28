<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha382-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg2Va+PmSTsz/K68vbdEjh2u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha382-rHyoN1iRsVXV2nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="fbn.css" type="text/css" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha382-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<title>Document</title>
</head>
<body>
  <div class="main">
                <nav  class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="#">FBN Mortgage</a>
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                          <li><a class="active" href="FM.html">Home</a></li>
                          <li><a href="#page1">Page 1</a></li> 
                          <li><a href="#page2">Page 2</a></li> 
                          <li><a href="#page3">Page 3</a></li> 
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <section>
<form class="form-inline" method="POST" enctype="multipart/form-data">
    <div style="margin: 20px 0 0 0;" class="col-sm-12 col-lg-12">
            <div  class="form-group col-lg-offset-10">
            <input style=" background: #fff; width: 100px; height: 1000x; outline: 2px solid #ccc; padding: 50px 5px;" type= "file" value="upload passport">
            <p style="color: blue;">Upload Passport</p>
            </div>
            </div>
            <h3 class="text-center" style=" padding: 5px;">HOME OWNERSHIP OF MORTGAGE LOAD APLLICATION FORM </h3>
            <strong id="page1" style="background: blue; padding: 5px; color: #fff">SECTION A: PARTICULARS OF BORROWER: </strong><br><br>
<div class="form-group col-lg-6 col-md-6">
<label for="n">Name</label>
<input style="width: 100%;" type="text" class="form-control" id="n">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="fn">FirstName:</label>
<input style="width: 100%;" type="text" class="form-control" id="fn">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="ln">LastName:</label>
<input style="width: 100%;" type="text" class="form-control" id="ln">
</div><br />
<div class="form-group col-lg-6 col-md-6">
<label for="txt">Address</label>
<textarea style="width: 100%;" id="txt" class="form-control" rows="5"></textarea>
</div> 
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Phone Number:</label>
<span class="form-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
<input style="width: 100%;" id="phn" type="number" class="form-control" name="phn" placeholder="PhoneNumber">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="ln">Date Of Birth:</label>
<input style="width: 100%;" type="date" class="form-control" id="ln" placeholder="DOB">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="slct">Sex</label>
<select style="width: 100%;" id="slct" class="form-control">
<option value="Male">Male</option>
<option value="Male">Female</option>
<option value="Male">Prefer Not to Say</option>
</select>
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="ln">Highest Educational Qualification</label>
<input style="width: 100%;" type="text" class="form-control" id="ln" placeholder="">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="ln">Profession</label>
<input style="width: 100%;" type="text" class="form-control" id="ln" placeholder="">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="txt">Name/Address of Employer(if less than three years, give name of previous employer</label>
<textarea style="width: 100%;" id="txt" class="form-control" rows="5"></textarea>
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="ln">Present Position</label>
<input style="width: 100%;" type="text" class="form-control" id="ln" placeholder="">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Telephone Number:</label>
<span class="form-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
<input style="width: 100%;" id="phn" type="number" class="form-control" name="phn" placeholder="PhoneNumber">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn"> Mobile Phone Number:</label>
<span class="form-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
<input style="width: 100%;" id="phn" type="number" class="form-control" name="phn" placeholder="PhoneNumber">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Fax</label>
<span class="form-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
<input style="width: 100%;" id="phn" type="number" class="form-control" name="phn" placeholder="PhoneNumber">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">E-mail</label>

<input style="width: 100%;" id="em" type="email" class="form-control" name="phn" placeholder="PhoneNumber">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Years at current Employment</label>

<input style="width: 100%;" id="em" type="number" class="form-control" name="phn" >
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Number of Years to Retirement</label>

<input style="width: 100%;" id="em" type="number" class="form-control" name="phn" >
</div>

<div class="form-group col-lg-6 col-md-6">
<label for="phn">Years at current Employment</label>

<input style="width: 100%;" id="em" type="number" class="form-control" name="phn" >
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="txt">Resedential Address</label>
<textarea style="width: 100%;" id="txt" class="form-control" rows="5"></textarea>
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Telephone Number</label>

<input style="width: 100%;" id="em" type="number" class="form-control" name="phn" >
</div><br><br>

<div style="margin: 10px 0;" class="form-group col-sm-12">  
<strong><p style="float: left;" for="phn">Type:</p></strong><br><br>

<div class="checkbox col-sm-4">
    <label><input type="checkbox" value="">Owned</label>
  </div>
<div class="checkbox col-sm-4">
    <label><input type="checkbox" value="">Rented</label>
  </div>
  <div class="checkbox col-sm-4">
    <label><input type="checkbox" value="">others</label>
  </div>
</div>
<hr>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Specify</label>

<input style="width: 100%;" id="em" type="text" class="form-control" name="phn" >
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Annual Rent</label>

<input style="width: 100%;" id="em" type="text" class="form-control" name="phn" >
</div>
<hr>
<div style="margin: 10px 0;" class="form-group col-sm-12">  
        <strong><p style="float: left;" for="phn">Marital Status</p></strong><br><br>
        
        <div class="checkbox col-sm-4">
            <label><input type="checkbox" value="">Married</label>
          </div>
        <div class="checkbox col-sm-4">
            <label><input type="checkbox" value="">Single</label>
          </div>
          <div class="checkbox col-sm-4">
            <label><input type="checkbox" value="">Divorced/Seperated</label>
          </div>
        </div>
<hr>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Name of Spouse</label>

<input style="width: 100%;" id="em" type="text" class="form-control" name="phn" >
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="txt"> Address</label>
<textarea style="width: 100%;" id="txt" class="form-control" rows="5"></textarea>

</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn"> Spouse's Employer</label>

<input style="width: 100%;" id="em" type="text" class="form-control" name="phn" >
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Number of Years Employed</label>

<input style="width: 100%;" id="em" type="text" class="form-control" name="phn" >
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn">Profesion of Spouse</label>

<input style="width: 100%;" id="em" type="text" class="form-control" name="phn" >
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="phn"> Spouse Annual Income</label>

<input style="width: 100%;" id="em" type="text" class="form-control" name="phn" >
</div>

<div style="padding: 20px;" class="table-responsive">          
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
<h3 for="n">Next-of-Kin</h3>
<div class="form-group col-lg-6">
<label for="n">Name</label>
<input style="width: 100%;" type="text" class="form-control" id="n">
</div>
<div class="form-group col-lg-6">
<label for="fn">Relationship:</label>
<input style="width: 100%;" type="text" class="form-control" id="fn">
</div>
<div class="form-group col-lg-12">
<label for="ln">Age:</label>
<input style="width: 100%;" style="margin: 10px 0; width: 100%;" type="number" class="form-control" id="ln">
</div><br>
<div style="margin: 10px 0; resize: none; width: 100%;" class="form-group">
<label for="ln">Address:</label>
<textarea rows="10" style="margin: 10px 0; resize: none; width: 100%;" type="text" class="form-control" id="ln"></textarea>
</div>
<br>
<strong id="page2" style="background: blue; padding: 5px; color: #fff">SECTION B. PERSONAL FINALCIAL INFORMATION </strong><br><br>
<div class="form-group">
<label for="n">Employment Income</label> <br>
<div class="form-group col-lg-6 col-md-6">
<label for="n">Total Annual Pay:</label>
<input style="width: 100%;" type="text" class="form-control" id="n">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="fn">Monthly Gross Pay</label>
<input style="width: 100%;" type="text" class="form-control" id="fn">
</div>
<div class="form-group col-lg-6 col-md-6">
<label for="ln">Monthly Net Pay:</label>
<input style="width: 100%;" type="text" class="form-control" id="ln">
</div>

</div>
<div>
<div style="padding: 20px;">
<p> Other Periodic Pay ffrom employment:</p>
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
</div>
<div style="padding: 20px;">
<p> Other Source(s) of Income</p>
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
<div style="padding: 20px;">
<p> Assets/ Investments Owed <i>(Real Estate, Equities, Bonds, Vehicles, etc):</i></p>
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
</div>
<div style="padding: 20px;">
<p> Existing Obligations/Liabilities <i>(off payroll only)</i></p>
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
<td><textarea name="" id="" style="outline: none; border: none; width: 100%;resize: none;" rows="1"></textarea>></td>
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
<div style="padding: 20px;">
<p> Banking Details (Account Information) </p>
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
</div>

<div class="form-group col-lg-12">
<label for="phn">Estimated Monthly Living Expenses </label>
<input style="width: 100%;" id="em" type="amount" class="form-control" name="phn" >
</div
<br>
<hr> 
<section>
<strong style="background: blue; padding: 5px; color: #fff"> SECTION C. PARTICULARS OF THE LOAN: </strong><br><br>
<div class="form-group col-lg-6">
<label for="phn">Total Financing Required </label>
<input style="width: 100%;" id="em" type="amount" class="form-control" name="phn" >
</div>
<div class="form-group col-lg-6">
<label for="phn">Proposed Equity Contribution </label>
<input style="width: 100%;" id="em" type="amount" class="form-control" name="phn" >
</div>
<div class="form-group col-lg-6">
<label for="phn">Loan Amount Required </label>
<input style="width: 100%;" id="em" type="amount" class="form-control" name="phn" >
</div> 
<div class="form-group col-lg-6">
<label for="phn">Tenor of Facility</label>
<input style="width: 100%;" id="em" type="amount" class="form-control" name="phn" >
</div> 
<div class="form-group col-lg-12">
<label for="phn">Frequency of installment Repayment </label>
<input style="width: 100%;"  id="em" type="amount" class="form-control" name="phn" >
</div> 
<br><br>
<div style="padding: 20px;">
<p> Proposes Security for the Loan </p>
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
</div>
<div style="margin: 10px 0;" class="form-group col-sm-12">  
        <div class="checkbox col-sm-6">
            <label><input type="checkbox" value="">Guarantee of Employer</label>
          </div>
          <div class="checkbox col-sm-6">
          <label><input type="checkbox" value="">Other Guarantee</label>
          <input style="width: 100%;" id="em" type="text" class="form-control" placeholder="Specify" name="phn">
           </div>
        </div>

</section> 
<br>
<hr>
<section>
<strong id="page3" style="background: blue; padding: 5px; color: #fff"> SECTION E. APPLICANT'S DECLARATION </strong><br><br>
<p style="text-indent: 20px"> I hereby declare that all information provided in this application are correct and that all documents submitted with this form are authetic. I agree that FBN mortgages could cross-check thae information provided above and may request for references from my employer and/or financial institutions mentioned above. I therefore agree that any material misstatement discovered renders my application null and void.</p><br >
<div class="form-group col-lg-6">
<label for="dt">Full Name</label>
<input style="width: 100%;" id="em" type="text" class="form-control" name="phn" placeholder="Full Name" >
</div> 

<div class="form-group col-lg-6">
<label for="dt">Date</label>
<input style="width: 100%;" id="em" type="date" class="form-control" name="phn" placeholder="Date" >
</div> 
</section>
<br><hr>
<section>
<strong>CHECKLIST OF REQUREMENT</strong>
<div style="padding: 20px;">
<u> MORTGAGE LOAN </u>
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
</section>
<section>
    <footer>
        <p style="text-align: center;"> Copyright &copy; 2018. Do not Use without Approval. All rights reserved. A product of <a href="#">Witt Technologies</a></p>
    </footer>
</section>
</form>

</body>
</html>