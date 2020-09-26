<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
   <?php include './navigation.php'?>;
         <div class="container">
               <div class="row">
                  <div class="card w-100 mt-5 mb-5">
                     <h5 class="card-header">JavaScript Data Types 1</h5>
                     <div class="card-body">
                       <!-- <p class="card-text">JavaScript variables can hold many data types: numbers, strings, objects and more:</p> -->
                       <p class="card-text">
<pre>
var x = "Volvo" + "16";
var y = "Volvo" + "16" + "4";
var z = "Volvo" + 20 + 16 + 4;
var a = "Volvo" + "16" + 4 + 4;
var b = "Volvo" + 20 + "16" + 4;
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
                    var x = "Volvo" + "16";
                    var y = "Volvo" + "16" + "4";
                    var z = "Volvo" + 20 + 16 + 4;
                    var a = "Volvo" + "16" + 4 + 4;
                    var b = "Volvo" + 20 + "16" + 4;
                     document.getElementById("demo").innerHTML = "The value is: " + x;
                     document.getElementById("demo1").innerHTML = "The value is: " + y;
                     document.getElementById("demo2").innerHTML = "The value is: " + z;
                     document.getElementById("demo3").innerHTML = "The value is: " + a;
                     document.getElementById("demo4").innerHTML = "The value is: " + b;
                  </script>
               </div>
         </div>
   </body>
</html>