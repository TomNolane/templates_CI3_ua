var fingerprint0 = $("#fingerprint").val(), ip = $("#ip").val(), my_timer = 0; $(function () { var i = setTimeout(function n() { if (my_timer++ , fingerprint0 = $("#fingerprint").val(), console.log(i), "" != fingerprint0) { clearInterval(i); var r = document.location.host, t = document.location.href; return console.log(ip), $.ajax({ type: "POST", url: "/fingerprint/", data: "fingerprint=" + fingerprint0 + "&site=" + r + "&url=" + t + "&ip=" + ip, success: function (i) { } }), !1 } i = setTimeout(n, 700) }, 700) });
document.addEventListener('DOMContentLoaded', function () {
    function start_check() { 
    }
    start_check();
}, false);  