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
                     <h5 class="card-header">JavaScript typeof Operator</h5>
                     <div class="card-body">
                       <!-- <p class="card-text">JavaScript variables can hold many data types: numbers, strings, objects and more:</p> -->
                       <p class="card-text">
<pre>
typeof ""             // Returns "string"
typeof "John"         // Returns "string"
typeof "John Doe"     // Returns "string"

document.getElementById("demo").innerHTML = typeof "" + "<br>" + typeof "John" + "<br>" + typeof "John Doe";

typeof 0              // Returns "number"
typeof 314            // Returns "number"
typeof 3.14           // Returns "number"
typeof (3)            // Returns "number"
typeof (3 + 4)        // Returns "number"

document.getElementById("demo").innerHTML = typeof 0 + "<br>" + typeof 314 + "<br>" + typeof 3.14 + "<br>" + typeof (3) + "<br>" + typeof (3 + 4);
</pre>
                       </p>
                       <p class="card-text" id="demo"></p>
                     </div>
                  </div>
                  <script>
                  document.getElementById("demo").innerHTML = typeof "" + "<br>" + typeof "John" + "<br>" + typeof "John Doe";
                  document.getElementById("demo").innerHTML = typeof 0 + "<br>" + typeof 314 + "<br>" + typeof 3.14 + "<br>" + typeof (3) + "<br>" + typeof (3 + 4);
                  </script>
               </div>
         </div>
   </body>
</html>