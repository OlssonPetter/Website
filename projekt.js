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

