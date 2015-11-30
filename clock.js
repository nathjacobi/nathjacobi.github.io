var gradDate = new Date("2016-05-13T09:00:00");
var gradTime = gradDate.getTime();
var currentDate;
var currentTime;
var timeTo;
var countDown = [];
$(document).ready(function() {
	$("button").click(function(){
        $("#demo").hide();
    });
	window.setInterval(function(){
		getCurrentTime();
	}, 1000);});

function getCurrentTime() {
    currentDate = new Date();
    currentTime = currentDate.getTime();
    document.getElementById("Date").innerHTML = countDown;
    calculateTimeTo();
};

function calculateTimeTo() {
	timeTo = gradTime-currentTime;
	countDown["Days"] = Math.floor(timeTo/(60*60*1000*24)*1);;
	countDown["Hours"] = Math.floor((timeTo%(60*60*1000*24))/(60*60*1000)*1);;
	countDown["Minutes"] = Math.floor(((timeTo%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);;
	countDown["Seconds"] = Math.floor((((timeTo%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);;
	document.getElementById("Date").innerHTML = countDown["Days"] + " Days " + countDown["Hours"] + " Hours " + 
		countDown["Minutes"] + " Minutes " + countDown["Seconds"] + " Seconds";
}
