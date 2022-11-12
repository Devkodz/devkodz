const toggle = document.querySelector(".toggle");
const toggleBtn = document.querySelector(".toggle-btn");
const menu = document.querySelector(".menu");
const menuList = document.querySelector(".menu-list");
const menuItems = document.querySelectorAll(".menu-item");

let showMenu = false;

toggle.addEventListener("click", toggleMenu);

function toggleMenu() {
  if (!showMenu) {
    toggleBtn.classList.add("open");
    menu.classList.add("open");
    menuList.classList.add("open");
    menuItems.forEach(item => item.classList.add("open"));

    showMenu = true;
  } else {
    toggleBtn.classList.remove("open");
    menu.classList.remove("open");
    menuList.classList.remove("open");
    menuItems.forEach(item => item.classList.remove("open"));

    showMenu = false;
  }
}



// TBC
const reviews = [
    {
        id: 1,
        name: "Developer 1",
        job: "Front-end developer",
        img: "img/developer-01.png",
        text:
            '"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iste, voluptate quam ipsum aliquam, corporis dicta distinctio, ea omnis quo quae non nulla facere rerum aperiam."'
    },
    {
        id: 2,
        name: "Developer 2",
        job: "UI Designer",
        img: "img/developer-02.png",
        text:
            '"Morbi a facilisis quam. In nec lorem sollicitudin, volutpat ex sit amet, sodales augue. Duis pretium sagittis odio, nec porttitor purus vulputate id. Proin urna metus, luctus sit amet."'
    },
    {
        id: 3,
        name: "Developer 3",
        job: "Intern",
        img: "img/developer-03.png",
        text:
            '"Donec hendrerit semper eros sed pellentesque. Nunc varius condimentum odio vitae posuere. Nulla sollicitudin sem mauris, eget porttitor justo pulvinar et. Maecenas maximus."'
    },
    {
        id: 4,
        name: "Developer 4",
        job: "UX Designer",
        img: "img/developer-04.png",
        text:
            '"Curabitur turpis felis, pellentesque feugiat tristique sit amet, vestibulum eu turpis. Sed commodo nulla quis metus consequat imperdiet. Aenean at elit dui. Donec sagittis ultricies."'
    }
];

const img = document.getElementById("img");
const testimonial = document.getElementById("testimonial");
const name = document.getElementById("name");
const job = document.getElementById("job");

const leftBtn = document.querySelector(".carousel__btn--left");
const rightBtn = document.querySelector(".carousel__btn--right");

let currentItem = 0;

window.addEventListener("DOMContentLoaded", function () {
    showPerson();
});

function showPerson() {
    const item = reviews[currentItem];
    img.src = item.img;
    testimonial.textContent = item.text;
    name.textContent = item.name;
    job.textContent = item.job;
}

rightBtn.addEventListener("click", function () {
    currentItem++;
    if (currentItem > reviews.length - 1) {
        currentItem = 0;
    }
    showPerson();
});

leftBtn.addEventListener("click", function () {
    currentItem--;
    if (currentItem < 0) {
        currentItem = reviews.length - 1;
    }
    showPerson();
});





(function(){
        var imgLen = document.getElementById('slider');
        var images = imgLen.getElementsByTagName('label');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].for = images[counter].for;
                console.log(images[counter].for);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },1000);
        }
})();





