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
                     <h5 class="card-header">JavaScript Objects</h5>
                     <div class="card-body">
                       <!-- <p class="card-text">JavaScript variables can hold many data types: numbers, strings, objects and more:</p> -->
                       <p class="card-text">
<pre>
var car = {type:"Fiat", model:"500", color:"white"};
document.getElementById("demo").innerHTML = "The car type is " + car.type;

// Create an object:
var person = { firstName: "John",lastName: "Doe",age: 50,eyeColor: "blue"};
// Display some data from the object:
document.getElementById("demo1").innerHTML = person.firstName + " is " + person.age + " years old.";

// Create an object:
var person = {
  firstName: "John",
  lastName : "Doe",
  id : 5566,
  fullName : function() {
    return this.firstName + " " + this.lastName;
  }
};
// Display data from the object:
document.getElementById("demo").innerHTML = person.fullName();
</pre>
                       </p>
                       <p class="card-text" id="demo"></p>
                       <p class="card-text" id="demo1"></p>
                       <p class="card-text" id="demo2"></p>
                     </div>
                  </div>
                  <script>
                  var car = {type:"Fiat", model:"500", color:"white"};
                  document.getElementById("demo").innerHTML = "The car type is " + car.type + ", The car model is: " + car['model'];

                  // Create an object:
                  var person = { firstName: "John", lastName: "Doe", age: 50, eyeColor: "blue" };
                  // Display some data from the object:
                  document.getElementById("demo1").innerHTML = person.firstName + " is " + person['age'] + " years old.";

                  // Create an object:
                  var person = { firstName: "John", lastName : "Doe", id : 5566,
                  fullName : function() {
                    return this.firstName + " " + this.lastName;
                  }
                  };
                  // Display data from the object:
                  document.getElementById("demo2").innerHTML = person.fullName();

                  </script>
               </div>
         </div>
   </body>
</html>