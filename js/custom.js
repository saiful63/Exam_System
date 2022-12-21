function changeStatus() {
	var status = document.getElementById("status_user");

	if(status.value == 1) {
		document.getElementById("ps").style.display = "none";//action performed to position input field
	}else if (status.value == 2) {
		document.getElementById("id1").style.display = "none"; //action performed to Student Id input field

		document.getElementById("dp").style.display = "none"; //action performed to Department input field
		document.getElementById("ss").style.display = "none"; //action performed to Session input field

		document.getElementById("hl").style.display = "none"; //action performed to Hall input field

		document.getElementById("ps").style.display = "none"; //action performed to position input field
	}else if (status.value == 3) {
		document.getElementById("id1").style.display = "none";
		
		

		document.getElementById("ss").style.display = "none";
		
		document.getElementById("hl").style.display = "none";
	
		document.getElementById("sm").style.display = "none";
	}else {
		document.getElementById("id1").style.display = "block";

		document.getElementById("dp").style.display = "block";
		document.getElementById("ss").style.display = "block";

		document.getElementById("hl").style.display = "block";

		document.getElementById("ps").style.display = "block";
		
	}
}
