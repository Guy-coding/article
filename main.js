const inputImage= document.getElementById('input-image');
const imageArtile= document.getElementById('image-article');

imageArtile.addEventListener('click',()=>{
    inputImage.click();
})

inputImage.addEventListener('change',(e)=>{
    const file= e.target.files[0];
    const reader= new FileReader();

    reader.onload=(e)=>{
        imageArtile.src= e.target.result;
    };
    reader.readAsDataURL(file);

});