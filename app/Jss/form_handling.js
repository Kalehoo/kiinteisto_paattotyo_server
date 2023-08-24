let timer;

const waitTime = 1000;

const messageInput = document.getElementById('CheckPassword');

messageInput.addEventListener('keyup', event => {
  clearTimeout(timer);

  timer = setTimeout(() => {
    doneTyping(event.target.value);
  }, waitTime);
});

function doneTyping(value) {

    if(document.getElementById('InputPassword').value != document.getElementById('CheckPassword').value)
    {
        document.getElementById('hide_alert').className = "text-center"
        document.getElementById('verifyPassword').innerHTML = `Salasana ei täsmää`;
        document.getElementById('verifyPassword').className = "alert alert-danger";
        document.getElementById('submit').className = "btn btn-primary disabled";

    }
    else
    {
        document.getElementById('hide_alert').className = "text-center"
        document.getElementById('verifyPassword').className = "alert alert-success";
        document.getElementById('verifyPassword').innerHTML = `Salasana täsmää`;
        document.getElementById('submit').className = "btn btn-primary";
    }


  }




    let pw1 = document.getElementById('InputPassword');
    let pw2 = document.getElementById('CheckPassword');

    let compare = pw1.localeCompare(pw2);

    if (!compare)
    {
        
    }


