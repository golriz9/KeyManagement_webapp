var app = angular.module("angularApp", []);

function onLoad() {
    getAPIBadge();
}

function checkNumber() {
    var theNumber, theMessage;
    
    //theNumber = document.getElementById("smallnumber").value;
    theNumber = $('#smallnumber').val();
    
    if (isNaN(theNumber) || theNumber < 1 || theNumber > 10) {
        theMessage = "Number was expected to be between 1 and 10";
    } else {
        theMessage = "Number is good";
    }
    
    //document.getElementById("numberMessage").innerHTML = theMessage;
    $('#numberMessage').text(theMessage);

}

function chooseDomainParamMethod() {
    var x;
    x = document.getElementById("domainParamMethod").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
    theMessage = "You selected: " + x;
}

