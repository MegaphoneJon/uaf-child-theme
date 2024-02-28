jQuery(document).ready(function($) {
    function accordionViewToggle() {

        const accordionLinks = document.querySelectorAll('.large-accordion__accordion-item a');
        const viewBtns = document.querySelectorAll('.accordion-item__view-btn');
        const accordionHeaders = document.querySelectorAll('.js-accordion-item__heading');

        accordionLinks.forEach( link => {
            link.setAttribute('tabindex', -1);
        });

        accordionHeaders.forEach(header => {   
            header.addEventListener('click', function() {
                let btn = this.nextElementSibling.nextElementSibling;
                
                if(this.classList.contains('is--active')) {
                    viewBtns.forEach(e => {
                        e.innerHTML = "View Experiences";
                    });
                    btn.innerHTML = "Hide Experiences";
                } else {
                    btn.innerHTML = "View Experiences";
                }

            });
        });


        viewBtns.forEach(el => {
            el.addEventListener('click', function() {
                // Use previousElementSibling in a loop to find the correct sibling
                let sibling = this.previousElementSibling;
                while (sibling && !sibling.classList.contains('js-accordion-item__heading')) {
                    sibling = sibling.previousElementSibling;
                }

                if (sibling) {
                    sibling.click();
                    if (sibling.classList.contains('is--active')) {
                        this.classList.add('is--open');
                        this.innerHTML = "Hide Experiences";
                    } else {
                        this.classList.remove('is--open');
                        this.innerHTML = "View Experiences";
                    }
               
                }
            });
            el.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    const accordionBtn = this.parentElement.querySelector('.js-accordion-item__heading');
                    let accordionItem = this.parentElement.querySelector('.large-accordion__accordion-item');
                    let accordionLinks = accordionItem.querySelectorAll('.large-accordion__accordion-item a');
                    let firstLink = this.parentElement.querySelector('.large-accordion__accordion-item a:first-of-type');
                    if (accordionBtn) {
                        accordionBtn.click();
                    }
                    if (accordionLinks && accordionItem.classList.contains('is--visible')) {
                        accordionLinks.forEach( link => {
                            link.setAttribute('tabindex', 0);
                        });
                    }
                    if (firstLink) {
                        firstLink.focus();
                    }

                    if(!accordionItem.classList.contains('is--visible')) {
                        accordionLinks.forEach( link => {
                            link.setAttribute('tabindex', -1);
                        });
                    }

                }
            });
        });


    }

    accordionViewToggle();
});
