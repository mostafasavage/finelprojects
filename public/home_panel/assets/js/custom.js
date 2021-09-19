$(document).ready(function(){
    $(window).on('scroll' , function(){
    if($(window).scrollTop()){
        $('header').addClass('bg');
    }else{
        $('header').removeClass('bg');
    }
    });
});
let mobileBar = document.querySelector('.bar-mobile'),
menubars = document.querySelector('.menubar');
mobileBar.addEventListener('click',function(){
    menubars.classList.toggle('active');
});
let homesilder = document.querySelectorAll('.home-silder'),
Nexthomesilder = 3000,
silderCurrend = 0;
homesilder[silderCurrend].style.display="block";
homesilder[silderCurrend].style.opacity = "1";
setInterval(silderNext , Nexthomesilder );
function silderNext()
{
    homesilder[silderCurrend].style.display = "none";
    homesilder[silderCurrend].style.opacity = "0";
    silderCurrend = (silderCurrend + 1) % homesilder.length;
    homesilder[silderCurrend].style.display="block";
    homesilder[silderCurrend].style.opacity = "1";
}
let links = document.querySelectorAll(".lists");
links.forEach(item=>{
    item.addEventListener("click",function(){
        let der = document.getElementById(item.getAttribute('data-link'));
        der.scrollIntoView({behavior:"smooth",block:"start"});
    });
});
let faqaSilder = document.querySelectorAll('.image-base'),
silderfaqCurrend = 0;
Nextfqasilders = 3000,
faqaSilder[silderfaqCurrend].style.display="block";
faqaSilder[silderfaqCurrend].style.opacity = "1";
setInterval(silderNextss , Nextfqasilders);
function silderNextss()
{
    faqaSilder[silderfaqCurrend].style.display = "none";
    faqaSilder[silderfaqCurrend].style.opacity = "0";
    silderfaqCurrend = (silderfaqCurrend + 1) % faqaSilder.length;
    faqaSilder[silderfaqCurrend].style.display="block";
    faqaSilder[silderfaqCurrend].style.opacity = "1";
}
// Emd Silder Faq Here
let conbox = document.querySelectorAll('.conbox');
conbox.forEach(item=>{
    item.addEventListener('click',(e=>{
        e.currentTarget.classList.toggle('active');
        conbox.forEach(item=>{
            if(item!=e.currentTarget){
                item.classList.remove('active');
            }
        });
    }));
});

// Start Carousel Images
let homesilders = document.querySelectorAll('.tast-base'),
Nexthomesilders = 3000,
silderCurrends = 0;
homesilders[silderCurrends].style.display="block";
setTimeout(() => {
    homesilders[silderCurrends].style.opacity = "1";
},2000);
setInterval(silderNexts , Nexthomesilders );
function silderNexts()
{
    homesilders[silderCurrends].style.display = "none";
    homesilders[silderCurrends].style.opacity = "0";
    silderCurrends = (silderCurrend + 1) % homesilders.length;
    homesilders[silderCurrends].style.display="block";
    homesilders[silderCurrends].style.opacity = "1";
}
// End Carousel Images
// Start blog
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
// End Blog

// Start Tabs
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:6
        }
    }
})
// End Tabs

// Start Loading Page Here
function loader(){
    document.querySelector(".lader-container").classList.add('fade-out');
}
function fadOut(){
    setInterval(loader, 3000)
}
window.onload = fadOut();
// End Section Loding Page Here
// Start Scrolltop Here
let modelr = document.querySelector(".models");
window.addEventListener("scroll",function(){
    if(window.pageYOffset>500){
        modelr.style.display = "block";
    }else{
        modelr.style.display = "none";
    }
});
modelr.addEventListener("click",function(){
    window.scrollTo({behavior:"smooth",top:"0"});
});
// End Scroll Top Here