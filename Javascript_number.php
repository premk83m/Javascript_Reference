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
                     <h5 class="card-header">JavaScript Numbers</h5>
                     <div class="card-body">
                       <!-- <p class="card-text">JavaScript variables can hold many data types: numbers, strings, objects and more:</p> -->
                       <p class="card-text">
<pre>
var x1 = 34.00;     // Written with decimals
var x2 = 34;        // Written without decimals
var y = 123e5;      // 12300000
var z = 123e-5;     // 0.00123
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
                     var x1 = 34.00;     // Written with decimals
                     var x2 = 34;        // Written without decimals
                     var y = 123e5;      // 12300000
                     var z = 123e-5;     // 0.00123
                     document.getElementById("demo").innerHTML = "The string value is: " + x1;
                     document.getElementById("demo1").innerHTML = "The string value is: " + x2;
                     document.getElementById("demo2").innerHTML = "The string value is: " + y;
                     document.getElementById("demo3").innerHTML = "The string value is: " + z;
                  </script>
               </div>
         </div>
   </body>
</html>