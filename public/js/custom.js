for (var i = 0; i < 10; i++) {
    /* console.log(i); */
    setTimeout(function () { console.log('Число = ' + i) }, 100);
    /* setTimeout(function () { alert('Число = ' + i) }, 100); */
}


var n = 1;
var starter = 0;
var myTimer = setInterval(function () {
    console.log('Число = ' + n);
    if ((n < 10) && (starter == 0)) {
        n++;
    }
    if ((starter == 1) && (n >= 0)) {
        n--;
    }

    if (n == 10) {
        starter = 1;
    }

    if ((starter == 1) && (n < 0)) {
        clearInterval(myTimer);
    }
}, 100);

