<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <title>Ajax Function </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class = "card">
    <div class="card-header text-center">
        <h2>Insert Teacher Record</h2>
    </div>
  	<div class="card-body">
        <form id = "myform">
         
        <label>Name:</label>
        <input type="text" placeholder = "Enter Your Name" id = 'name' name = "name" class="form-control">
        <br>
        <br>

        <input type ="hidden" id = "url" name = "url" value = "{{url('recive_data')}}">
        <button type = "submit"  class = "btn btn-lg btn-primary float-right" onclick = load()> Add</button>

        </form>
        
    </div>

</div>

</div>

<script>


//JQUERY GET method through AJAX
function load()
{
  var url = $("#url").val();  
  alert("the url is :  " + url);

  $.ajax({
    url : $("#url").val(),
    type : "GET",
    success:function(responce){
      
      console.log(responce);
    }
  })

}


// JQuery Get Method

// $("#myform").submit(function(){
//   // var name = $("#name").val();
//   // alert("the name is : " + name);
  
//   $.ajax({
//     url : $("#url").val(),
//     type : "GET",
//     success:function(responce){
      
//       console.log(responce);
//     }
//   })

// })


// $("#myform").submit(function(){
//   var url = $("#url").val();
//   var name =  $("#name").val();
//   alert("the name is : " + name +'\n'+ "the url is : "+ url);

//   $.ajax({
//     url : $("#url").val(),
//     method : "GET",
//     success:function(result){
//       console.log(result);
      
//     }
//   })


// })


</script>
    
</body>
</html>