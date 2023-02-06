let slide = document.getElementById('slide');
console.log(slide);
let images = ["./images/propaganda.jpg" ];
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



/*

const imgs = document.getElementById("img");
const img = document.querySelectorAll("#img img");

let idx = 0;

function carrocel(){
    idx++;

    if(idx > img.length - 1){
    idx = 0;
    }

    imgs.style.transform = `translateX(${-idx * 700}px)`;
}

setInterval(carrocel, 1800);
*/