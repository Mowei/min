$("#logout").click(function () {
    document.cookie = "TeamName=; expires=Thu, 01 Jan 1970 00:00:00 GMT;";
    window.location.href = "index.html";
})


function FindTeamCookies() {
    var theCookies = document.cookie.split(';');
    var aString = '';
    for (var i = 0; i < theCookies.length; i++) {
        if (theCookies[i].indexOf('TeamName') >= 0) {

        } else {
            window.location.href = "index.html";
        }
    }
    return aString;
}