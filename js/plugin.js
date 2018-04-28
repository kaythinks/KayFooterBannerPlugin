function desktopBanner() {

    var fixedBanner = document.getElementById("fixed-banner");



    function scrollBanner() {       

        fixedBanner.style.animation = "slidebanner .5s ease-in-out";

        fixedBanner.style.webkitAnimation = "slidebanner .5s ease-in-out";

        fixedBanner.style.bottom = "1px";					

    }



    function exitBanner() {

        fixedBanner.style.animation = "backbanner .5s ease-in-out";

        fixedBanner.style.webkitAnimation = "backbanner .5s ease-in-out";

        fixedBanner.style.bottom = "-200px";  				

    }



    return {

        loadBanner: function() {

            setTimeout(function() {

                scrollBanner();

                desktopBanner().closeBanner();

            }, 3000);

        },				

        showBanner: function() {

            setTimeout(function(){

                scrollBanner();

                desktopBanner().closeBanner();

            }, 10000);

        },

        closeBanner: function() {

            setTimeout(function() {

                exitBanner();

                desktopBanner().showBanner();

            }, 20000);            

        }

    }

}







function mobileBanner() {                

    this.arrayElements = [];

    this.index = 0;

    this.htmlElements = document.querySelectorAll(".mobile-banner > div");



    this.getHtmlElements = function() {

        for (var i = 0; i < this.htmlElements.length; i++) {

            this.arrayElements.push(this.htmlElements[i]);

        }             

    }



    this.default = function() {

        this.arrayElements[this.index].style.left = 0;

        this.index = this.index + 1;

    }



    this.slide = function() {

        this.arrayElements[this.index].style.animation = "come-in .5s";

        this.arrayElements[this.index].style.webkitAnimation = "come-in .5s";

        this.arrayElements[this.index].style.left = 0;

        var divNumber, divSlider;                                          

        this.timer = setTimeout(() => {

            this.arrayElements[this.index].style.animation = "come-out .5s";

            this.arrayElements[this.index].style.webkitAnimation = "come-out .5s";

            this.arrayElements[this.index].style.left = "100%";    

            this.index = this.index + 1;   

            if (this.index < this.arrayElements.length) {

                this.slide();

            } else {

                this.index = 0;

                this.slide();

            }                         

        }, 5000);            

    }



    this.closeSlide = function() {

            document.querySelector(".mobile-banner").style.display = "none";

    }

                   

}  



                

onload = function() {  

    try {	

        var mobile =  new mobileBanner();   

        var desktop = desktopBanner();





        desktop.loadBanner(); 

        

        mobile.getHtmlElements();

        mobile.default();

        setTimeout(() => {

            mobile.slide();

        }, 2000);   

    } catch(e) {

        console.log(e.stack);

    }				

};



document.querySelector(".banner-close").addEventListener("click", function() {

            var mobile =  new mobileBanner();

            mobile.closeSlide();

});


