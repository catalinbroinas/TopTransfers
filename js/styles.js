function slideShow() 
{ 		
  let x = document.getElementsByClassName("slideImage");

  for (let i = 0; i < x.length; i++) 
  {
    x[i].style.display = "none";  
  }

  myIndex++;

  if (myIndex > x.length) 
  	{myIndex = 1}

  x[myIndex-1].style.display = "block";  
  setTimeout(slideShow, 5000); 
}

function openImg(modalOpen, imgOpen, modalImgOpen)
{
  let modal = document.getElementById(modalOpen);
  let img = document.getElementById(imgOpen);
  let modalImg = document.getElementById(modalImgOpen);
  let closeModal = document.getElementsByClassName("closeModalImage")[0];

  modal.style.display = "block";
  modalImg.src = img.src;

  closeModal.onclick = function() {
    modal.style.display = "none";
  }
}

function zoomImage()
{
  let img = document.getElementsByClassName("zoomImage");
  img.onclick = function(){
    img.style.transform = "scale(3)";
  }
}

function changeSrcImage(imageId, newSrc)
{
  let idImage = imageId;
  let srcImage =  newSrc;
  document.getElementById(idImage).src = srcImage;
}