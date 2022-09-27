<?php
$host = 'localhost';
$db = 'test';
$user = 'root';
$password = 'Qaz159';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
$pdo = new PDO($dsn, $user, $password);
if ($pdo) {
// echo "Connected to the $db database successfully!";
}
} catch (PDOException $e) {
echo $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajax Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <style>
    html {
      box-sizing: border-box;
    }
    *,
    *::before,
    *::after {
      box-sizing: inherit;
      margin: 0;
      padding: 0;
    }
    .row {
      display: flex;
    }
    .sep {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .sepText {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      flex: 1;
      color: #987cb9;
    }
    .sepText::before,
    .sepText::after {
      content: '';
      flex: 1;
      width: 1px;
      background: currentColor;
      /* matches font color */
      margin: .25em;
    }
  </style>
</head>
<body bg-lighter>
  <div class="container">
    <div class="row">
      <h1>Ajax Forms</h1>
      <div class="container">
        <div class="row bg-light round mb-5">
          <div class="col-md-5">
            <h2>Input Text</h2>
            <label for="inputText">Name</label>
            <input type="text" class=form-control id="inputText" placeholder="Enter Name">
            <button type="submit" class="btn btn-primary my-2" id="submitbtn">Submit</button>
            <hr style="border:3 double #987cb9" width="100%" color=#987cb9 SIZE=3>

            <h2>CheckBox</h2>
            <div>
              <input type="checkbox" class="form-check-input mx-2 my-2" id="inputCheckbox" value="Yes">
            </div>
            <button type="submit" class="btn btn-primary mt-5" id="submitbtn1">Submit</button>
            <hr style="border:3 double #987cb9" width="100%" color=#987cb9 SIZE=3>
            
            <h2>Radio</h2>
            <div>
              <input type="radio" name="radios" class="form-check-input mx-2 my-2" id="inputRadio1" value="Dog">
              <label for="inputRadio" class="ml-4">Dog</label>
            </div>
            <div>
              <input type="radio" name="radios" class="form-check-input mx-2 my-2" id="inputRadio2" value="Cat">
              <label for="inputRadio" class="ml-4">Cat</label>
            </div>
            <button type="button" class="btn btn-primary mt-2" id="submitbtn2">Submit</button>
            <hr style="border:3 double #987cb9" width="100%" color=#987cb9 SIZE=3>

            <h2>Select Option</h2>
            <select class="form-control" name="selectFood" id="selectFood">
              <option value="" selected="selected">Choose...</option>
              <option value="pizza">Pizza</option>
              <option value="hamburger">Hamburger</option>
              <option value="sandwich">Sandwich</option>
            </select>
            <button type="button" class="btn btn-primary mt-2" id="submitbtn3">Submit</button>
          </div>

          <div class="col-md-2 sep">
            <span class="sepText"></span>
          </div>

          <div class="col-md-5">
            <h2>File Update</h2>
            <label for="inputFile">File Input</label>
            <input type="file" class="form-control-file" id="inputFile">
            <button type="button" class="btn btn-primary my-2" id="submitbtn4">Submit</button>
            <hr style="border:3 double #987cb9" width="100%" color=#987cb9 SIZE=3>

            <h2 style="color:#4700b3;">Forms</h2>
            <div class="container">
              <div class="row bg-secondary round mb-5">
                <div class="col-md-12">
                  <div class="card my-2">
                    <div class="card-body">

                      <div class="form-group row">
                        <label for="formCustom" class="col-md-3 my-1">Custom : </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="formCustom" placeholder="Enter Custom">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="selectForm" class="col-md-3">Product : </label>
                        <select class="form-control col-md-8" name="selectMeal" id="selectMeal">
                          <option value="" selected="selected">Choose...</option>
                          <option value="spaghetti">Spaghetti</option>
                          <option value="pancake">Pancake</option>
                          <option value="steak">Steak</option>
                        </select>
                      </div>

                      <div class="form-group row">
                        <label for="formCheckbox" class="col-md-4 my-1">Tableware : </label>
                        <div class="col-md-1">
                          <input type="checkbox" class="form-check-input mx-2 my-2" id="formCheckbox1" value="spoon">
                        </div>
                        <label for="formCheckbox" class="col-md-3">Spoon</label>
                        <div class="col-md-1">
                          <input type="checkbox" class="form-check-input mx-2 my-2" id="formCheckbox2" value="fork">
                        </div>
                        <label for="formCheckbox" class="col-md-3">Fork</label>
                      </div>

                      <div class="form-group row mx-0">
                        <label for="formRadio" class="col-md-4 my-1">Size : </label>
                        <div>
                          <input type="radio" name="radios" class="form-check-input mx-2 my-2" id="formRadio1" value="small">
                          <label for="inputRadio" class="ml-4">Small</label>
                        </div>
                        <div>
                          <input type="radio" name="radios" class="form-check-input mx-2 my-2" id="formRadio2" value="medium">
                          <label for="inputRadio" class="ml-4">Medium</label>
                        </div>
                        <div>
                          <input type="radio" name="radios" class="form-check-input mx-2 my-2" id="formRadio3" value="large">
                          <label for="inputRadio" class="ml-4">Large</label>
                        </div>
                      </div>
                    
                      <div class="text-center">
                        <button type="button" class="btn btn-primary" id="submitbtn5">Submit</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <script>
    //TEXT
    $(document).ready(function () {
      $("#submitbtn").click(function () { 
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: {
            name:$("#inputText").val(),
          },
          dataType: "json",
          success: function (data) {
            $("#inputText").html(data);
          }
        });
      });
    });

    //CHECKBOX
    $(document).ready(function () {
      $("#submitbtn1").click(function () { 
        if($("#inputCheckbox").is(":checked")){
          var check = $("#inputCheckbox").val();
        } else {
          var check = '';
        }
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: {
            check:check,
          },
          dataType: "json",
          success: function (data) {
            $("#inputCheckbox").html(data);
          }
        });
        
      });
    });

    //RADIO
    $(document).ready(function () {
      $("#submitbtn2").click(function () { 
        if($("#inputRadio1").is(":checked")){
          var animal = $("#inputRadio1").val();
        } else {
          var animal = $("#inputRadio2").val();
        }
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: {
            animal:animal,
          },
          dataType: "json",
          success: function (data) {
            $("#inputRadio").html(data);
          }
        });
        
      });
    });

    //SELECT OPTION
    $(document).ready(function () {
      $("#submitbtn3").click(function () { 
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: {
            food:$("#selectFood").val(),
          },
          dataType: "json",
          success: function (data) {
            $("#selectFood").html(data);
          }
        });
        
      });
    });

    //FILE UPDATE
    $(document).ready(function () {
      $("#submitbtn4").click(function () { 
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: {
            file:$("#inputFile").val(),
          },
          dataType: "json",
          success: function (data) {
            $("#inputFile").html(data);
          }
        });
        
      });
    });

    //FORMS
    $(document).ready(function () {
      $("#submitbtn5").click(function () { 
        if($("#formCheckbox1").is(":checked")){
          var spoon = $("#formCheckbox1").val();
        }
        if($("#formCheckbox2").is(":checked")){
          var fork = $("#formCheckbox2").val();
        }
        if($("#formRadio1").is(":checked")){
          var size = $("#formRadio1").val();
        } else if ($("#formRadio2").is(":checked")){
          var size = $("#formRadio2").val();
        } else {
          var size = $("#formRadio3").val();
        }
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: {
            custom:$("#formCustom").val(),
            product:$("#selectMeal").val(),
            spoon:spoon,
            fork:fork,
            size:size,
          },
          dataType: "json",
          success: function (data) {
            //
          }
        });
        
      });
    });
  </script>
</body>
</html>