<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
</head>
<body>
   <div id="abc">
      {{ message }}
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript">
   var app=new Vue({
      el:"#abc",
      data:{
         message:"Hello world!";
      }
   });
</script>
</body>
</html>