fetch("https://fakestoreapi.com/products")
.then(response => response.json())
.then((data)=>{
    drawhtml(data);
    console.log(data);
})
.catch((err)=>console.log(err));
let card= [];
let datafromapi=[];

function gettitle(t){
    datafromapi.push(t);
    console.log(datafromapi);
};
const card_body = document.querySelector('#c-body');

function drawhtml(data){
    for(i in data){
        card_body.innerHTML += `<div class="card-body">
        <div class="card-img-top"><img src=" ${data[i].image}"></div>
        <div class="card-title"> ${data[i].title}</div>
        <div class="card-text"><p> ${data[i].price}</p>
        <button onclick="gettitle('${data[i].title}')">ADD TO CART</button></div> </div>` ;
        card_body.innerHTML+= card; 
        
}};



