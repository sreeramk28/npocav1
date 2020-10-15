
$(document).ready(function() {
	
		var xhttp = new XMLHttpRequest();
		try {
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					//alert(this.responseXML);
					go(this);
				}
			};
			xhttp.open("POST", "includes/webinars.inc.php", true);
			xhttp.send();
		}
		catch(e) {
			alert("Error!");
		} 
		function go(doc) {
			
			
			//alert(scontainer);
			var result = doc.responseXML;
			alert(result);
			if(result == null) {
				$("#sessions-boxes-wrap").append("<div id='no-sesh'></div>");
				$('#no-sesh').css({"width":"250px", "height":"400px", "box-shadow": "3px 5px 15px #d3d3d3"});
				$('#no-sesh').append("<p class='opensans-font text-center' style='margin-top: 170px'>Please stay tuned for more sessions!</p>");
				return;
			}
			var title = result.getElementsByTagName("title"); 
			var speakers = result.getElementsByTagName("speakers");
			var description = result.getElementsByTagName("description");
			var date = result.getElementsByTagName("date");
			var time = result.getElementsByTagName("time");
			var type = result.getElementsByTagName("type");
			var link = result.getElementsByTagName("link");
			var n = title.length; //number of sessions
			//alert(n);
			if(n == 0) {
				$("#sessions-boxes-wrap").append("<div id='no-sesh'></div>");
				$('#no-sesh').css({"width":"250px", "height":"400px", "box-shadow": "3px 5px 15px #d3d3d3"});
				$('#no-sesh').append("<p class='opensans-font text-center' style='margin-top: 170px'>Please stay tuned for more sessions!</p>");
				return;
				
			}
			//alert(pluck(title[0]));
			for (var i = 0; i < n; i++) {
				/* creating document tree nodes breadth-wise */
				/* although depth-wise is more intuitive I guess. hmm:) */
				var dateTime = getModifiedDT(pluck(date[i]), pluck(time[i]));	
				var scontainer = document.getElementById("sessions-boxes-wrap");
				
				/*level 0*/
				var seshbox = document.createElement("div");
				seshbox.classList.add("session-box");
				//alert(seshbox.classList);
				// /*level 1*/
				var ttbox = document.createElement("div");
				ttbox.classList.add("title-box", "text-center");
				var tmbox = document.createElement("div");
				tmbox.classList.add("time-box");
				var spbox = document.createElement("div");
				spbox.classList.add("author-box");
				var descbox = document.createElement("div");
				descbox.classList.add("description-box");
				descbox.classList.add("text-justify");
				var btn = document.createElement("a");
				btn.classList.add("button-1", "text-center");
				btn.href = pluck(link[i]);

				/*level 2*/
				var tp = document.createElement("p");
				tp.classList.add("title"); tp.classList.add("mont-font-bold");
				tp.style.color = "#FFA333E";
				tp.innerHTML = pluck(title[i]);
				var tbL1 = document.createElement("table");
				var tbL2 = document.createElement("table");
				var spspn = document.createElement("span");
				spspn.classList.add("ftsz-13");
				spspn.classList.add("opensans-font");
				spspn.style.color = "#707070";
				spspn.style.fontStyle = "italic";
				spspn.innerHTML = pluck(speakers[i]);
				var dspn = document.createElement("span");
				dspn.classList.add("ftsz-13");
				dspn.classList.add("opensans-font");
				dspn.style.color = "#1B2F3F";
				dspn.innerHTML = pluck(description[i]);
				var bspn = document.createElement("span");
				bspn.classList.add("mont-font-bold", "button-text-1");
				bspn.innerHTML = "Register Now";

				/*level 3*/
				var tr1 = document.createElement("tr");
				var tr2 = document.createElement("tr");

				/*level 4*/
				var td1_1 = document.createElement("td");
				var td1_2 = document.createElement("td");
				var td2_1 = document.createElement("td");
				var td2_2 = document.createElement("td");
				td1_1.style.paddingRight = "5px";
				td2_1.style.paddingRight = "5px";

				/*level 5 - leaves*/
				var calendar_img = document.createElement("img");
				calendar_img.src = "assets/sessions-page/calendar.svg";
				calendar_img.height = "15"; 
				calendar_img.width = "15";
				var clock_img = document.createElement("img");
				clock_img.src = "assets/sessions-page/clock.svg";
				clock_img.height = "15"; 
				clock_img.width = "15";
				var datespn = document.createElement("span");
				datespn.classList.add("the-date"); 
				datespn.classList.add("opensans-font");
				datespn.innerHTML = dateTime[0];

				var timespn = document.createElement("span");
				timespn.classList.add("the-date"); 
				timespn.classList.add("opensans-font");
				timespn.innerHTML = dateTime[1]; 

				/*----end of creation----*/

				/*appending start - bottom up - leaves to root | level 5 to level 0*/ 
				td1_1.appendChild(calendar_img);
				td2_1.appendChild(clock_img);
				td1_2.appendChild(datespn);
				td2_2.appendChild(timespn);

				tr1.appendChild(td1_1);
				tr1.appendChild(td1_2);
				tr2.appendChild(td2_1);
				tr2.appendChild(td2_2);

				tbL1.appendChild(tr1);
				tbL2.appendChild(tr2);

				ttbox.appendChild(tp);
				tmbox.appendChild(tbL1);
				tmbox.appendChild(tbL2);
				spbox.appendChild(spspn);
				descbox.appendChild(dspn);
				btn.appendChild(bspn);

				seshbox.appendChild(ttbox);
				seshbox.appendChild(tmbox);
				seshbox.appendChild(spbox);
				seshbox.appendChild(descbox);
				seshbox.appendChild(btn);
				
				scontainer.appendChild(seshbox);

			}
		}
		function pluck(x) {
			return x.childNodes[0].nodeValue.replace(/\n/g, "<br />");
		}
		function getModifiedDT(date, time) {
		    var weekday = new Array(7);
		  	weekday[0] = "Sunday";
			weekday[1] = "Monday";
			weekday[2] = "Tuesday";
			weekday[3] = "Wednesday";
			weekday[4] = "Thursday";
			weekday[5] = "Friday";
			weekday[6] = "Saturday";
		    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 
					'August', 'September', 'October', 'November', 'December'];
		    var hh_mm_ss = time.split(":");
		    var yy_mm_dd = date.split("-");
		    var dt = new Date(date);
			var day = weekday[dt.getDay()];
		    date = yy_mm_dd[2];
		    date += " ";
		    var month_index = parseInt(yy_mm_dd[1], 10);
		    date += months[month_index - 1];
		    date += ", " + day;
		    
		    var hours_integer = parseInt(hh_mm_ss[0], 10);
		    if(hours_integer == 12) {
		    	time = hh_mm_ss[0] + ":" + hh_mm_ss[1] + " PM";
		     }
		     else if(hours_integer > 12) {
		     	hours_integer -= 12;
		     	time = hours_integer.toString() + ":" + hh_mm_ss[1] + " PM";
		     }
		     else if(hours_integer == 0) {
		     	hours_integer += 12;
		     	time = hours_integer.toString() + ":" + hh_mm_ss[1] + " AM";
		     }
		     else {
		     	time = hours_integer.toString() + ":" + hh_mm_ss[1] + " AM";
		     }
		     return [date, time];
		}
});