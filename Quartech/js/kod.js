
var objPeople = [
	{ 
		username: "Onur",
		password: "Onur2004"
	}

]

function getInfo() {
	var username = document.getElementById('username').value
	var password = document.getElementById('password').value

	for(var i = 0; i < objPeople.length; i++) {
		if(username == objPeople[i].username && password == objPeople[i].password) {
			console.log(username + " Giris Yapti!!!")
			return
		}
	}
	console.log("Hatali sifre ya da kullanici adi")
}