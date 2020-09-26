<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
   <?php include './navigation.php';?>
         <div class="container">
               <div class="row">
                  <div class="card w-100 mt-5 mb-5">
                     <h5 class="card-header">JavaScript Functions</h5>
                     <div class="card-body">
                       <!-- <p class="card-text">JavaScript variables can hold many data types: numbers, strings, objects and more:</p> -->
                       <p class="card-text">
<pre>
function myFunction(a, b) {
  return a * b;
}

var x = myFunction(4, 3);
document.getElementById("demo").innerHTML = x;
</pre>
                       </p>
                       <p class="card-text" id="demo"></p>
                     </div>
                  </div>
                  <script>
                    
                    function myFunction(a, b) {
                    return a * b;
                    }

                    var x = myFunction(4, 3);
                    
                    document.getElementById("demo").innerHTML = x;

                    
                  </script>
               </div>
         </div>
   </body>
</html>