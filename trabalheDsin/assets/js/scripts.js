

const menuItems = document.querySelectorAll('.alignHeader a');
menuItems.forEach(item =>{
item.addEventListener('click', scrollToIdOnClick);
});
function getScrollTopByHref(element){
const id = element.getAttribute('href');
return document.querySelector(id);
}


function scrollToIdOnClick(event) {
event.preventDefault();
const to  = getScrollTopByHref(event.target)+650;
scrollToposition(to);
}

function scrollToposition(to){
window.scroll({
top: to,
behavior: "smooth"
});
}


let slide = document.getElementById('slides');
         let images = ["assets/images/propaganda.jpg" ];
         let i = 0;

         function slideShow(){
            slide.src = images[i];
            if(i < images.length - 1){
               i++;
            }else{
              i=0;
           }
           setTimeout(slideShow, 10000);
        }
        slideShow();
       
      