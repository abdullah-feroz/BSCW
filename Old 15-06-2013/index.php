<html>
<body>
<script src="js/jquery.js"></script>
<form id="loginForm" method="post" action="authentication.php">
Username: <input id="usernameInput" type="text">
Password: <input id="passwordInput" type="text">
<input type="submit">
</form>
<<<<<<< .mine
<script>
$('#target').submit(function() {
  alert('Handler for .submit() called.');
  return false;
});
$(document).ready(function(){
  function make_basic_auth(user, password) {
    var tok = user + ':' + password;
    var hash = Base64.encode(tok);
    return "Basic " + hash;
  }

  var url = 'http://merkur.informatik.rwth-aachen.de/bscw/bscw.cgi/3496028';
  $("#loginForm").submit(function() {
    var auth = make_basic_auth('gamification','gami123++');
    $.ajax({
      url : url,
      method : 'GET',
      beforeSend : function(req) {
        req.setRequestHeader('Authorization', auth);
      },
      success: function(){alert("yay!");},
      complete: function( jqXHR, textStatus ) {
	console.log(jqXHR);  
	console.log(textStatus); 
      }
    });
    return false;
  });
}); 
</script>
=======
>>>>>>> .r15
</body>
</html>
