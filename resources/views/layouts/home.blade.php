<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exam work</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
<style type="text/css">
.navb{
  padding-top: 2px;
  padding-right: 10%;
  padding-left: 10%;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
}
.navbar{
  /*border-bottom: 1px solid black;*/
  
  min-height: 43px;

  
}
  .button:hover {
  background-color: #3e8e41;
}
.first_table{
  width: 48%;
  float: left;
}
.second_table{
  
  width: 48%;
  float: left;
}
.mid{
  
  width: 4%;
  float: left;
}

  * {
  box-sizing: border-box;
}
@media only screen and (max-width: 750px) {
    
    .first_table{
  width: 100%;
}
.second_table{
  
  width: 100%;
}
.mid{
  
  display: none;
}
  }
 td {
  
  border-bottom: 1px solid black;
}

</style>
<body>
<div class="navb">
  <nav class="navbar">
    
      
      <ul class="nav nav-tabs" id="nav_height">
        <li class="active"><a href="{{route('home')}}">Home</a></li>
        <li><a class="button" href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a class="button" href="{{route('customer_info')}}">Customer Info</a></li>
        <li><a class="button" href="{{route('sell_report')}}">Sale Report</a></li>
      </ul>
    
  </nav>
  @yield('content')

</div>

  


</body>
</html>
