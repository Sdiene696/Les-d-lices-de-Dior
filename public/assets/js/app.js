const menuBtn = document.querySelector(".menu")
const navBar = document.querySelector(".navbar")

menuBtn.addEventListener('click',afficheBardeNav)

function afficheBardeNav(){
	  	
  menuBtn.querySelector("i").classList.toggle("fa-close")
  navBar.classList.toggle('active')
}



window.onscroll =() =>{ 
  navBar.classList.remove('active')
  menuBtn.querySelector("i").classList.remove("fa-close")
  menuBtn.querySelector("i").classList.add("fa-bars")
}
