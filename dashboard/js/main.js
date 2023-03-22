let input = document.getElementById("img");
let imageName = document.getElementById("imageName")

// input.addEventListener("change", ()=>{
//     let inputImage = document.querySelector("input[type=file]").files[0];

//     imageName.innerText = inputImage.name;
// })
function uploadImag(){
  let inputImage = document.querySelector("input[type=file]").files[0];
  imageName.innerText = inputImage.name;

}

 let select=document.getElementsByClassName("select");
 let news=document.getElementsByClassName("news");

 select[0].addEventListener("click", () => {

    if (news[0].style.display === "block") {
        news[0].style.display = "none";
      } else {
        news[0].style.display = "block";
      }
  
  });    
 