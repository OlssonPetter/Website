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


function validateRegister(){
  var name = document.MyRegForm.name_register.value;
  if (name == "" || name.trim() == '')
  {
    alert("Invalid name!");
    return false;
  }
  var pass = document.MyRegForm.password_register.value;
  if (pass == "" || pass.trim() == '')
  {
    alert("Invalid password!");
    return false;
  }
  var email = document.MyRegForm.email_register.value;
  var atpos = email.indexOf("@");
  var dotpos = email.lastIndexOf(".");
  if (email == "" || email.trim() == '' || atpos < 1 || dotpos < atpos)
  {
    alert("Invalid email!");
    return false;
  }
  var age = document.MyRegForm.age_register.value;
  if(age < 18 || age == "" || age.trim() == '')
  {
    alert("You must be over 18 year old in order to create an account!")
  }
  return true;
}

function validateLogin(){
  var pass = document.FormLogin.password_login.value;
  if (pass == "" || pass.trim() == '')
  {
    alert("Invalid password!");
    return false;
  }
  var email = document.FormLogin.email_login.value;
  var atpos = email.indexOf("@");
  var dotpos = email.lastIndexOf(".");
  if (email == "" || email.trim() == '' || atpos < 1 || dotpos < atpos)
  {
    alert("Invalid email!");
    return false;
  }
  return true;
}

function validateProfileEdit(){
  var age = document.MyProfileRegForm.age_edit.value;
  if(age < 18 || age == "" || age.trim() == '')
  {
    alert("You must be over 18 year old in order to create an account!");
    return false;
  }
  var pass = document.MyProfileRegForm.password_edit.value;
  if (pass == "" || pass.trim() == '')
  {
    alert("Invalid password!");
    return false;
  }

  return true;
}

function validateEvent(){
  var info = document.Create_Event_Form.event_info.value;
  if (info == "" || info.trim() == '')
  {
    alert("Info field must be filled out!");
    return false;
  }
  var location = document.Create_Event_Form.event_location.value;
  if (location == "" || location.trim() == '')
  {
    alert("Location field must be filled out!");
    return false;
  }
  var name = document.Create_Event_Form.event_name.value;
  if (name == "" || pass.trim() == '')
  {
    alert("Name field must be filled out!");
    return false;
  }

  return true;
}
