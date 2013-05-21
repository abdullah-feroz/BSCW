<html>
<body>
<script src="js/jquery.js"></script>
<form id="loginForm" method="post">
Username: <input id="usernameInput" type="text">
Password: <input id="passwordInput" type="text">
<input type="submit">
</form>
<script>


$(document).ready(function(){
  var username = $('#usernameInput').val();
  var password = $('#passwordInput').val();
  $('#loginForm').submit(function() {
  console.log(username);
   $.ajax
   ({
     url: "http://merkur.informatik.rwth-aachen.de/bscw/bscw.cgi/3496028",
     dataType: 'json',
     data: {'username': 'gamification', 'password': 'gami123++'},
     success: function (){
      alert('Thanks for login!'); 
     }
  });
  return false;
  });
 
  }); 
</script>
</body>
</html>
