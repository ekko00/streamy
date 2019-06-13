function changePassword(user){
  var newPass = prompt('Entrez votre nouveau password');
  $.ajax({
    url : './changePassword.php',
    type : 'POST',
    data : 'user=' + user + '&newPass=' + newPass,
    success: function (data) {
      console.log(data);
    },
    error: function(request) {
      alert("Error " + request["status"] + ": " + request["statusText"]);
    }
  });
}

function deleteAccount(user){
  var confim = prompt('Ecrivez "OUI" si vous voulez supprimer votre compte');
  if (confim === "OUI") {
    $.ajax({
      url : './deleteAccount.php',
      type : 'POST',
      data : 'user=' + user,
      error: function(request) {
        alert("Error " + request["status"] + ": " + request["statusText"]);
      }
    });
  }
}
