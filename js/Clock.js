setInterval(showTime, 1000);
	function showTime() {
	let time = new Date();
	let day = time.getDay();
		switch (new Date().getDay()) {
			  case 0:
			    day = "Sunday";
			    break;
			  case 1:
			    day = "Monday";
			    break;
			  case 2:
			     day = "Tuesday";
			    break;
			  case 3:
			    day = "Wednesday";
			    break;
			  case 4:
			    day = "Thursday";
			    break;
			  case 5:
			    day = "Friday";
			    break;
			  case 6:
			    day = "Saturday";
		}
        getDay(new Date().getDay());
	let hour = time.getHours();
        let min = time.getMinutes();
        let sec = time.getSeconds();
        am_pm = "AM";
 
        if (hour > 12) {
        	hour -= 12;
            am_pm = "PM";
        }
        if (hour == 0) {
        	hr = 12;
            am_pm = "AM";
        }
 
        hour = hour < 10 ? "0" + hour : hour;
        min = min < 10 ? "0" + min : min;
        sec = sec < 10 ? "0" + sec : sec;
 

		
        let currentTime = day + "   " + hour + ":"
                + min + ":" + sec + am_pm;
 
        document.getElementById("clock")
                .innerHTML = currentTime;
    }
 


getDay(new Date().getDay());
	day = "Saturday";


showTime();
