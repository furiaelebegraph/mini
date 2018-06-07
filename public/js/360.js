window.onload = iniciado;
var shapatito_baby;
function iniciado(){

    shapatito_baby = $('.shapatito_baby').ThreeSixty({

        totalFrames: 11, // Total no. of image you have for 360 slider
        endFrame: 11, // end frame for the auto spin animation
        currentFrame: 1, // This the start frame for auto spin
        imgList: '.threesixty_images', // selector for image list
        progress: '.spinner', // selector to show the loading progress
        imagePath:'img/360/baby/', // path of the image assets
        filePrefix: '', // file prefix if any
        ext: '.png', // extention for the assets
        height: 598,
        width: 600,
        navigation: false,
        responsive: true
    });

}