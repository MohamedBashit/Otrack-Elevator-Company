// Start Header
// Toggle Menu
let toggleBtn = document.querySelector(".toggle-menu");
let links = document.querySelector(".links");

toggleBtn.onclick = function(){
    // Toggle Class "menu-active" On Button
    this.classList.toggle("menu-active");
    // Check Ad
    if(this.classList.contains("menu-active")){
        links.classList.add("open")
    }else{
        links.classList.remove("open")
    }
};
// Select Services Element
let elementServices = document.querySelector(".items-services");
let elementMenuServ = document.querySelector(".menu-serv");
let elementProducts = document.querySelector(".items-products");
let elementMenuProd = document.querySelector(".menu-prod");

// Add Class Open On Element Ul
elementServices.onclick = function(){
    elementMenuServ.classList.toggle("open");
};
elementProducts.onclick = function(){
    elementMenuProd.classList.toggle("open");
};

window.document.addEventListener("click", function(e){
        if(e.target !== elementProducts){
            elementMenuProd.classList.remove("open");
        };
        if(e.target !== elementServices){
            elementMenuServ.classList.remove("open");
        };
});

let linksA = document.querySelectorAll(".links .basic a");

linksA.forEach(function(e){
    e.addEventListener("click", function(e){
        linksA.forEach(function(e){
            e.classList.remove("active");
        });
        e.target.classList.add("active")
    });
});



// Start Page Catalogue

let cabins = document.querySelector(".cabins");
let doors = document.querySelector(".doors");


// console.log(doors.innerHTML)
// cabins.onclick = function(){
//     // Create Div Overlay
//     let divOverlay = document.createElement("div");
//     // Add Class Name To Div Overlay
//     divOverlay.className = "cabins-overlay";
//     // Add Div OverLay To Div Cabins
//     cabins.appendChild(divOverlay);

// };
// doors.onclick = function(){
//     // Create Div Overlay
//     let divOverlay = document.createElement("div");
//     // Add Class Name To Div Overlay
//     divOverlay.className = "doors-overlay";
//     // Add Div OverLay To Div Cabins
//     doors.appendChild(divOverlay);

// };

// End Page Catalogue