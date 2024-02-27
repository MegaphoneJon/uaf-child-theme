jQuery(document).ready(function($) {
    function accordionViewToggle() {

        const accordionLinks = document.querySelectorAll('.large-accordion__accordion-item a');
        const viewBtns = document.querySelectorAll('.accordion-item__view-btn');

        accordionLinks.forEach( link => {
            link.setAttribute('tabindex', -1);
        });

        // accordionBtns.forEach(el => {
        //     el.addEventListener('click', function() {
        //         // Use nextElementSibling in a loop to find the correct sibling
        //         let sibling = this.nextElementSibling;
        //         while (sibling && !sibling.classList.contains('accordion-item__view-btn')) {
        //             sibling = sibling.nextElementSibling;
        //         }

        //         if (sibling) {
        //             sibling.classList.toggle('is--open');
        //             sibling.setAttribute('aria-hidden', 'false');
        //             sibling.setAttribute('aria-expanded', 'true');
                    
              
        //         }
        //     });
        // });

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
