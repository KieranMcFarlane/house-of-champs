document.addEventListener('DOMContentLoaded', function(){
    // do something

    // const smoothScroll = (target, duration) => {
    //     const targetArea = document.querySelector(target)
    //     const targetPos = targetArea.getBoundingClientRect().top
    //     const startPos = 
    //     console.log(targetPos)
    // }

    // console.log(smoothScroll('.hero__scroll', 1000))

    const fullIntro = document.querySelector('.full-screen-showcase')
    fullIntro.classList.add('fade-out')
    const introScreen = () => {
        fullIntro.classList.add('hide')
    }

    setTimeout(introScreen, 3000)


    AOS.init()

    function onTabClick(element){
        element.preventDefault();
        // servicesContainer.style.height = '594px'
        let servicesContainer = document.querySelector('.services__container')
        const servicesContHeight = servicesContainer.clientHeight
        let activeTabs = document.querySelectorAll('.active')
        servicesContainer.style.height = `${servicesContHeight}px`

        // var box = document.querySelector('div');

        // This removes all of the active so there is only one
        activeTabs.forEach(tab => {
            tab.classList.remove('active')
        });

        // This finds the target and uses the classListAPI to add the class '.active'
        element.target.classList.add('active')

        let targetEl = element.target.classList

        // document.querySelectorAll(element.target.classList);
        // console.log(targetEl[0]);
        // console.log(light);
        console.log(document.querySelectorAll('.' + targetEl[0]))
        let newTabs = document.querySelectorAll('.' + targetEl[0])

        newTabs.forEach(tabBlue => {
            tabBlue.classList.add('active')
        });

        if(targetEl.contains('all')){
            let allTabs = document.querySelectorAll('.services__individual')

            allTabs.forEach(allSingleTabs => {
                allSingleTabs.classList.add('active')
            });
        }
        
        // add class all to button then add active as default and then add active to all if clicked
    }


    // Added the event listener to this specific tab, then added the function that has the event attached, and then your 
    // .querySelectorAll would only be applied to elements inside that element with the class that matches
    

    const service_tabs = document.getElementById('services__menu');
    if(service_tabs){
        service_tabs.addEventListener('click', onTabClick, false);
    }

    // Deactivate the active tab
    // Remove all active tabs
    // Add active class tab


    const heroUnit = document.querySelector('hero-unit__outer-container') 

    // heroUnit.addEventListener('click', eve =>{
        
    // })

    // Homepage Video

        // JS
        var video = document.querySelector('video')
        , container = document.querySelector('#video-container');

        var setVideoDimensions = function () {
        // Video's intrinsic dimensions
        var w = video.videoWidth
        ,h = video.videoHeight;
        
        // Intrinsic Ratio
        // Will be more than 1 if W > H and less if W < H
        var videoRatio = (w / h).toFixed(2);
        
        // Get the container's computed styles
        //
        // Also calculate the min dimensions required (this will be
        // the container dimentions)
        var containerStyles = window.getComputedStyle(container)
        , minW = parseInt( containerStyles.getPropertyValue('width') )
        , minH = parseInt( containerStyles.getPropertyValue('height') );
        
        // What's the min:intrinsic dimensions
        //
        // The idea is to get which of the container dimension
        // has a higher value when compared with the equivalents
        // of the video. Imagine a 1200x700 container and
        // 1000x500 video. Then in order to find the right balance
        // and do minimum scaling, we have to find the dimension
        // with higher ratio.
        //
        // Ex: 1200/1000 = 1.2 and 700/500 = 1.4 - So it is best to
        // scale 500 to 700 and then calculate what should be the
        // right width. If we scale 1000 to 1200 then the height
        // will become 600 proportionately.
        var widthRatio = minW / w
        , heightRatio = minH / h;
        
        // Whichever ratio is more, the scaling
        // has to be done over that dimension
        if (widthRatio > heightRatio) {
        var newWidth = minW;
        var newHeight = Math.ceil( newWidth / videoRatio );
        }
        else {
        var newHeight = minH;
        var newWidth = Math.ceil( newHeight * videoRatio );
        }
        
        video.style.width = newWidth + 'px';
        video.style.height = newHeight + 'px';
        };

        video.addEventListener('loadedmetadata', setVideoDimensions, false);
        window.addEventListener('resize', setVideoDimensions, false);



});


