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
       
