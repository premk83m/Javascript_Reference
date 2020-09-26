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
                     <h5 class="card-header">JavaScript Events</h5>
                     <div class="card-body">
                       <!-- <p class="card-text">JavaScript variables can hold many data types: numbers, strings, objects and more:</p> -->
                       <p class="card-text">
<pre>
<<-button onclick="document.getElementById('demo').innerHTML=Date()">The time is?</-button>>

<p>Click the button to display the date.</p>
<-button onclick="displayDate()"->The time is?</-button->
function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}
</pre>
                       </p>
                       <button onclick="document.getElementById('demo').innerHTML=Date()" type="button" class="btn btn-primary btn-lg">
                    The time is?</button>
                       <p class="card-text" id="demo"></p>
                  <button onclick="displayDate()" class="btn btn-dark btn-lg">Function call</button>
                  <p class="card-text" id="demo1"></p>
                     </div>
                  </div>
                  <script>               
                     function displayDate() {
                        var x = document.getElementById("demo1");
                       var date = new Date();                      
                        x.innerHTML = date;
                     }
                  </script>
               </div>
         </div>
   </body>
</html>