SetTeamNav();

//Menu
$("#logout").click(function () {
    eraseCookie("TeamName");
    window.location.href = "Mainpage.html";
})

function GetTeamName() {
    return readCookie("TeamName");
}

function GetStage() {
    return readCookie("Stage");
}

function GotoStage() {
    var stage = readCookie("Stage").padStart(2, "0");
    location.href = "a" + stage + ".html";
}

function SetTeamNav() {
    var TeamName = GetTeamName();
    if (TeamName === null) {
        let target = document.getElementById("TeamNav");
        target.style.display = "none";
    } else {
        let target = document.getElementById("TeamName");
        target.innerText = "���I��:" + TeamName;
    }

}

function FindTeamCookies() {
    var TeamName = GetTeamName();
    if (TeamName === null) {
        window.location.href = "index.html";
    }
}

// �إ�cookie
function createCookie(name, value) {
    expire_days = 120; // �L�����(��)
    var d = new Date();
    d.setTime(d.getTime() + (expire_days * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = name + "=" + value + "; " + expires + ";";

}
//Ū��
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
//�R��
function eraseCookie(name) {
    createCookie(name, "", -1);
}