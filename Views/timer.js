let element = document.getElementById('square');

setTimeout(function () {
    location.reload();
}, element.getAttribute('data-timer'));


