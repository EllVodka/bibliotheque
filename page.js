
function oui() {
		mail = document.getElementById("mail").value;
		pwd = document.getElementById("mdp").value; 
		repwd = document.getElementById("remdp").value;
	if (mail==mail && pwd == repwd) {
			window.alert("l'incription a etait prise en compte ")
	}
	else{
		window.alert("il manque des info")
	}
}
function verif(){
	if (mail==mail && pwd==repwd) {
		window.alert("tu peux te connecter")
	}
	else{
		window.alert("c'est incomplet")
	}

}