// start Land
let arrayImg = ["01.jpg","02.jpg","03.jpg","04.jpg","05.jpg","06.jpg","07.jpg"];

let land = document.querySelector(".landing");
setInterval(function(){
    let arrayRadom = Math.floor(Math.random() * arrayImg.length);
    land.style.backgroundImage = 'url("assets/photo/'+ arrayImg[arrayRadom] +'"), linear-gradient(197deg, #000000, #ff0000)';
},20000);

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

// Start Popup

let arrayImages = document.querySelectorAll(".images-box img");

arrayImages.forEach((img)=>{
    img.addEventListener('click', (e) =>{
        // Create Overlay Element
        let divOverlay = document.createElement("div");
        divOverlay.className = 'popup-overlay';
        // Append Overlay To The Body
        document.body.appendChild(divOverlay);
        
        // Create The Popup
        let popupBox = document.createElement("div");
        popupBox.className = 'popup-box';
        
        // Craete The Image
        let popupImage = document.createElement("img");
        // Set Image Source
        popupImage.src = img.src;

        // Add Image To popup Box
        popupBox.appendChild(popupImage);
        // Add Popup Box To Body
        document.body.appendChild(popupBox);

        // Creat the Close Button
        let closeButton = document.createElement("span");

        // Cteate The Close Button Text 
        let closeButtonText = document.createTextNode("X");
        // Append Text To Close Button
        closeButton.appendChild(closeButtonText);
        // Add Class Name To Close Button
        closeButton.className = 'close-button';
        // Add Close Button To Popup Box
        popupBox.appendChild(closeButton);

    });
});

// Close Popup

document.addEventListener('click', (e)=>{
    if(e.target.className == "close-button"){
        // Remove The Crrunt Popup
        document.querySelector('.popup-box').remove();
        document.querySelector('.popup-overlay').remove();
    }
});

//  Start Customers

let myCustomers = document.querySelectorAll(".img-logo img");

myCustomers.forEach((img)=>{
    img.addEventListener('click', (e)=>{
        myCustomers.forEach((ele) =>{
            ele.classList.remove('active')
        });
        e.target.classList.add('active');
    });
});
