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
                     <h5 class="card-header">JavaScript Variables</h5>
                     <div class="card-body">
                       <p class="card-text">In this example, x, y, and z are variables.</p>
                       <p class="card-text">
<pre>
   var x = 5;
   var y = 6;
   var z = x + y;
</pre>
                       </p>
                       <p class="card-text" id="demo"></p>
                     </div>
                  </div>
                  <script>
                     var x = 5;
                     var y = 6;
                     var z = x + y;
                     document.getElementById("demo").innerHTML = "The value of z is: " + z;
                  </script>
               </div>
         </div>
   </body>
</html>