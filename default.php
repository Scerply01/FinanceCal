<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <h1>Simple Finance Calculator (Work In Progress)</h1>
  <dev class="container">
    <form class = "Basic" action="public.htm" method="post">
      <!--Gather Income, Yearly for now (Add other options later on)-->
      <h4>Income Information</h4>
      <p>The below information is based on "Yearly" earnings</p>
      <div class="form-row">
        <div class="form-group col-md-1">
          <label for="YearlyIncome">Yearly Income</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="year_inc" placeholder="100,000" autocomplete="disabled"/>
          </div>
        </div>
        <div class="form-group col-md-1">
            <label for="OtherIncome1">Other Income 1</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">$</div>
              </div>
              <input class="form-control" type="text" name="other_inc" placeholder="50,000" autocomplete="disabled"/>
            </div>
        </div>
        <div class="form-group col-md-1">
            <label for="OtherIncome2">Other Income 2</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">$</div>
              </div>
              <input class="form-control" type="text" name="other_inc" placeholder="70,000" autocomplete="disabled"/>
            </div>
        </div>
        <div class="form-group col-md-1">
            <label for="OtherIncome3">Other Income 3</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">$</div>
              </div>
              <input class="form-control" type="text" name="other_inc" placeholder="60,000" autocomplete="disabled"/>
            </div>
        </div>
      </div>
      <hr />

      <!--Gather monthly's, we're talking about CC's, Mortgage, Car Payment, etc-->
      <h4>Home/Utilities Information</h4>
      <p>The below information is based on "Monthly" payments</p>
      <div class="form-row">
        <div class="form-group col-md-1">
          <label for="mortgage">Mortgage/Rent</label>
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="mortgage" placeholder="2,000" autocomplete="disabled"/>
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="electric">Electric Bill</label>
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="electric" placeholder="300" autocomplete="disabled"/>
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="water">Water Bill</label>
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="water" placeholder="200" autocomplete="disabled"/>
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="gas">Gas</label>
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="gas" placeholder="100" autocomplete="disabled"/>
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="internet">Internet</label>
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="internet" placeholder="50" autocomplete="disabled"/>
          </div>
        </div>
      </div>
      <hr />

      <!--Perhaps add toggle functionality?-->
      <h4>Car Expenses</h4>
      <p>The below information is based on "Monthly" payments</p>
      <div class="form-row">
        <div class="form-group col-md-1">
          <label for="car_gas">Gas</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="Car_gas" placeholder="200" autocomplete="disabled"/>
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="AutoInsurance">Insurance</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="auto" placeholder="1,000" autocomplete="disabled"/>
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="LoanPayment">Auto Payment</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="auto_loan" placeholder="500" autocomplete="disabled"/>
          </div>
        </div>
      </div>
      <hr />

      <h4>Other Expenses</h4>
      <p>The below information is based on "Monthly" payments</p>
      <div class="form-row">
        <div class="form-group col-md-1">
          <label for="">Cell Phone Bill</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="cellphone" placeholder="100" autocomplete="disabled"/>
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="CC1">CC#1</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="cc1" placeholder="150" />
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="CC2">CC#2</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="cc2" placeholder="80" />
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="CC3">CC#3</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="cc3" placeholder="50" />
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="CC4">CC#4</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="cc4" placeholder="264" />
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-1">
          <label for="CC4">CC#5</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="cc5" placeholder="264" />
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="CC4">CC#6</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="cc6" placeholder="139" />
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="tv">TV</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="tv" placeholder="40" />
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="loan1">Loan 1</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="loan1" placeholder="100" />
          </div>
        </div>
        <div class="form-group col-md-1">
          <label for="loan1">Loan 2</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input class="form-control" type="text" name="loan2" placeholder="150" />
          </div>
        </div>
      </div>
      <input class="btn btn-primary" type="submit" value="Submit">
    </form>
  </dev>
</body>
