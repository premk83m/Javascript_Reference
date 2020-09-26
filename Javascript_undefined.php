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
                     <h5 class="card-header">JavaScript Undefined, Empty & Null</h5>
                     <div class="card-body">
                       <!-- <p class="card-text">JavaScript variables can hold many data types: numbers, strings, objects and more:</p> -->
                       <p class="card-text">
<pre>
var car;
document.getElementById("demo").innerHTML = car + "<br>" + typeof car;

var car = "";
document.getElementById("demo").innerHTML = "The value is: " + car + "<br>" + "The type is: " + typeof car;

var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};
person = null;
document.getElementById("demo").innerHTML = typeof person;

var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};
person = undefined;   // Now both value and type is undefined
</pre>
                       </p>
                       <p class="card-text" id="demo"></p>
                       <p class="card-text" id="demo1"></p>
                       <p class="card-text" id="demo2"></p>
                       <p class="card-text" id="demo3"></p>
                     </div>
                  </div>
                  <script>
                  var car;
                  document.getElementById("demo").innerHTML = car + "<br>" + typeof car;
                  
                  var car = "";
                  document.getElementById("demo1").innerHTML = "The value is: " + car + "<br>" + "The type is: " + typeof car;
                  
                  var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};
                    person = null;
                    document.getElementById("demo2").innerHTML = typeof person;

                    var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};
                    person = undefined;   // Now both value and type is undefined
                    document.getElementById("demo3").innerHTML = typeof person;
                  </script>
               </div>
         </div>
   </body>
</html>