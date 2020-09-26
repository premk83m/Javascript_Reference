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
                     <h5 class="card-header">JavaScript Data Types</h5>
                     <div class="card-body">
                       <p class="card-text">JavaScript variables can hold many data types: numbers, strings, objects and more:</p>
                       <p class="card-text">
<pre>
var length = 16;                               // Number
var lastName = "Johnson";                      // String
var x = {firstName:"John", lastName:"Doe"};    // Object
</pre>
                       </p>
                       <p class="card-text" id="demo"></p>
                       <p class="card-text" id="demo1"></p>
                       <p class="card-text" id="demo2"></p>
                     </div>
                  </div>
                  <script>
                    var length = 16;                               // Number
                    var lastName = "Johnson";                      // String
                    var x = {firstName:"John", lastName:"Doe"};    // Object
                     document.getElementById("demo").innerHTML = "The value is: " + length + "===>Types:" + typeof length;
                     document.getElementById("demo1").innerHTML = "The value is: " + lastName + "===>Types:" + typeof lastName;
                     document.getElementById("demo2").innerHTML = "The value is: " + x.firstName + "===>Types:" + typeof x;
                  </script>
               </div>
         </div>
   </body>
</html>