var index1 = 0;

function wedding()
{
	var i;	
	var img1 = document.getElementsByClassName("wedding");
		
	for(i = 0; i < img1.length; i++){
		img1[i].style.display = "none";
	}
		
	index1++;

	if(index1 > img1.length)
		index1 = 1;
	
	img1[index1-1].style.display = "block";
	
	setTimeout(wedding, 3000);
	
}	

var index2 = 0;

function family()
{
	var i;	
	var img2 = document.getElementsByClassName("family");
		
	for(i = 0; i < img2.length; i++){
		img2[i].style.display = "none";
	}
		
	index2++;

	if(index2 > img2.length)
		index2 = 1;
	
	img2[index2-1].style.display = "block";
	
	setTimeout(family, 3000);
	
}	

var index3 = 0;

function wildlife()
{
	var i;	
	var img3 = document.getElementsByClassName("wildlife");
		
	for(i = 0; i < img3.length; i++){
		img3[i].style.display = "none";
	}
		
	index3++;

	if(index3 > img3.length)
		index3 = 1;
	
	img3[index3-1].style.display = "block";
	
	setTimeout(wildlife, 3000);
	
}	

