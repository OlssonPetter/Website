var highlight_form = document.getElementById('MyRegForm')
highlight_form.addEventListener('submit', function(event){

    if (document.getElementById('checkbox').checked)
        {
            alert("Welcome to Activ8!");
            return false;
        }
    else {
        event.preventDefault();
        alert("You have to accept the terms and conditions.");
        return false;
    }
},false );

function validateLogin()
{
  var pass = document.FormLogin.password_login.value;
  alert("WOORK PLEASE");
  return false;
}

function validateRegister(){
  var mail = document.MyRegForm.email_register.value;
  var atpos = mail.indexOf("@");
  var dotpos = mail.lastIndexOf(".");
  if (mail = "" || mail.trim() = '' || atpos < 1 || dotpos < atpos)
  {
    alert("Invalid email");
    return false;
  }
  return true;
}
