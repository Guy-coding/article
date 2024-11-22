var image= document.getElementById('image-article');
var inputimg= document.getElementById('input-image');

inputimg.addEventListener('change',function(){

    var nouvelleImage= inputimg.files[0];

    var reader= new FileReader();
    reader.onload= function(event){

        image.src= event.target.result;
    };

    reader.readAsDataURL(nouvelleImage);
});