
	var slideIndex1n = 0;
	function showSlides1() {
	var i;
	var slides = document.getElementsByClassName("imgslides1");
	var n = slides.length;
	for (i = 0; i < n; i++) {
		slides[i].style.display = "none";  
	}
	
	slideIndex1n++;
	if (slideIndex1n > slides.length) 
		{slideIndex1n = 1}    
 
	slides[slideIndex1n-1].style.display = "block";  
  
	setTimeout(showSlides1, 3000); // Change image every 2 seconds
	}
	
	var slideIndex2n = 0;
	function showSlides2() {
	var i;
	var slides = document.getElementsByClassName("imgslides2");
	var n = slides.length;
	for (i = 0; i < n; i++) {
		slides[i].style.display = "none";  
	}
	
	slideIndex2n++;
	if (slideIndex2n > slides.length) 
		{slideIndex2n = 1}    
 
	slides[slideIndex2n-1].style.display = "block";  
  
	setTimeout(showSlides2, 3000); // Change image every 2 seconds
	}

	var slideIndex3n = 0;
	function showSlides3() {
	var i;
	var slides = document.getElementsByClassName("imgslides3");
	var n = slides.length;
	for (i = 0; i < n; i++) {
		slides[i].style.display = "none";  
	}
	
	slideIndex3n++;
	if (slideIndex3n > slides.length) 
		{slideIndex3n = 1}    
 
	slides[slideIndex3n-1].style.display = "block";  
  
	setTimeout(showSlides3, 3000); // Change image every 2 seconds
	}
	
	function function3images()
	{
		showSlides1(); 
		showSlides2();
		showSlides3();
	}
	
	/*-----------------------------------------------------------------------------------------------------------------------------------------*/

	
					
	var name;	
	var btn	
	var x;
	function loadStaffData(name)
	{	
		if(name=="im1"){
			modal = document.getElementById("myModal1");
			btn = document.getElementById("im1");
		}
		else if(name=="im2")
		{
			modal = document.getElementById("myModal2");
			btn = document.getElementById("im2");
		}
		else if(name=="im3")
		{
			modal = document.getElementById("myModal3");
			btn = document.getElementById("im3");
		}
		else if(name=="im4")
		{
			modal = document.getElementById("myModal4");
			btn = document.getElementById("im4");
		}
		else if(name=="im5")
		{
			modal = document.getElementById("myModal5");
			btn = document.getElementById("im5");
		}
		else if(name=="im6")
		{
			modal = document.getElementById("myModal6");
			btn = document.getElementById("im6");
		}
		else if(name=="im7")
		{
			modal = document.getElementById("myModal7");
			btn = document.getElementById("im7");
		}
		else if(name=="im8")
		{
			modal = document.getElementById("myModal8");
			btn = document.getElementById("im8");
		}
		else if(name=="im9")
		{
			modal = document.getElementById("myModal9");
			btn = document.getElementById("im9");
		}
		
		modal.style.display = "block";	
		
	}

	
		function closeButton(){		
			modal.style.display = "none";
		}

		
			window.onclick = function(event) {
			x =	event.target ;
		
			if (event.target == 'a2') {
				
			modal.style.display = "none";
			}
		}
		
						