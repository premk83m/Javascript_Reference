<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
   <?php include './navigation.php'?>
         <div class="container">
               <div class="row">
                  <div class="card w-100 mt-5 mb-5">
                     <h5 class="card-header">JavaScript Strings</h5>
                     <div class="card-body">
                       <!-- <p class="card-text">JavaScript variables can hold many data types: numbers, strings, objects and more:</p> -->
                       <p class="card-text">
<pre>
var carName1 = "Volvo XC60";
var carName2 = 'Volvo XC60';
var answer1 = "It's alright";             // Single quote inside double quotes
var answer2 = "He is called 'Johnny'";    // Single quotes inside double quotes
var answer3 = 'He is called "Johnny"';    // Double quotes inside single quotes
</pre>
                       </p>
                       <p class="card-text" id="demo"></p>
                       <p class="card-text" id="demo1"></p>
                       <p class="card-text" id="demo2"></p>
                       <p class="card-text" id="demo3"></p>
                       <p class="card-text" id="demo4"></p>
                     </div>
                  </div>
                  <script>
                    var carName1 = "Volvo XC60";
                    var carName2 = 'Volvo XC60';
                    var answer1 = "It's alright";             // Single quote inside double quotes
                    var answer2 = "He is called 'Johnny'";    // Single quotes inside double quotes
                    var answer3 = 'He is called "Johnny"';    // Double quotes inside single quotes
                     document.getElementById("demo").innerHTML = "The string value is: " + carName1;
                     document.getElementById("demo1").innerHTML = "The string value is: " + carName2;
                     document.getElementById("demo2").innerHTML = "The string value is: " + answer1;
                     document.getElementById("demo3").innerHTML = "The string value is: " + answer2;
                     document.getElementById("demo4").innerHTML = "The string value is: " + answer3;
                  </script>
               </div>
         </div>
   </body>
</html>