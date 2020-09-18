let element = document.getElementById('square');
let timeout = element.getAttribute('data-timer');


if(timeout) {
    setTimeout(function () {
        window.location = "?next=true"
    }, timeout);
}


