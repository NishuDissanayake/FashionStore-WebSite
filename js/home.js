//for auto hide nav bar 
var prevScrollpos = window.pageYOffset;

window.onscroll = function(){

    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos){

        document.getElementById("head").style.top = "0";

    }
    else{

        document.getElementById("head").style.top = "-85px";
    }

    prevScrollpos = currentScrollPos;
}
