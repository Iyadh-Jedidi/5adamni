function Myfunction(event)
	{
		
		var nom= document.getElementById("name").value;
		
		var prenom =document.getElementById("lastname").value;
		var adresse= document.getElementById("adresse").value;
		var age = document.getElementById("age").value;
		var travaille = document.getElementById("travaille").value;
		var email = document.getElementById("email").value;
		if (nom==="")
		{
			document.getElementById("nameE").innerHTML=" *Nom Invalide";
			return false;
		}
		if (prenom==="")
		{
			document.getElementById("prenomE").innerHTML=" *Prenom Invalide";
			return false;
		}
		if (adresse==="")
		{
			document.getElementById("adresseE").innerHTML=" *Aresse Invalide";
			return false;
		}
		if (age==="")
		{
			document.getElementById("ageE").innerHTML=" *Age Invalide";
			return false;
		}
		if (travaille==="")
		{
			document.getElementById("travailleE").innerHTML=" *Travaille Invalide";
			return false;
		}if (email==="")
		{
			document.getElementById("emailE").innerHTML=" *Email Invalide";
			return false;
		} 
		return true;
	}
