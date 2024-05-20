function openfolder() {
    var a;
    a = document.getElementById("folder-open");
    a.innerHTML = "&#xf114;";
    setTimeout(function () {
        a.innerHTML = "&#xf115;";
    }, 1000);
}
openfolder();
setInterval(openfolder, 2000);

function brakechain() {
    var a;
    a = document.getElementById("break-chain");
    a.innerHTML = "&#xf0c1;";
    setTimeout(function () {
        a.innerHTML = "&#xf127;";
    }, 1000);
}
brakechain();
setInterval(brakechain, 2000);
