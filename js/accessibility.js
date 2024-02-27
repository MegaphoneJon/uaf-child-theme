jQuery( function ( $ ) {
	// Focus styles for menus when using keyboard navigation
	// Properly update the ARIA states on focus (keyboard) and mouse over events
	$( 'nav > ul' ).on( 'focus.wparia  mouseenter.wparia', '[aria-haspopup="true"]', function ( ev ) {
		$( ev.currentTarget ).attr( 'aria-expanded', true );
    console.log(ev.currentTarget);
    $(ev.currentTarget).find('ul.sub-menu').addClass('is--visible');
	} );

	// Properly update the ARIA states on blur (keyboard) and mouse out events
	$( 'nav > ul' ).on( 'blur.wparia  mouseleave.wparia', '[aria-haspopup="true"]', function ( ev ) {
		$( ev.currentTarget ).attr( 'aria-expanded', false );
    // $(ev.currentTarget).find('ul.sub-menu').removeClass('is--visible');
	} );

	//hide mobile menu from tabs 

	const mobileLinks = document.querySelectorAll('.mobile-menu a');
	const mobileBtns = document.querySelectorAll('.mobile-menu button');
	const mobileInputs = document.querySelectorAll('.mobile-menu input');

	mobileLinks.forEach( link => { 
		link.setAttribute('tabindex', -1);
	});

	mobileBtns.forEach( btn => { 
		btn.setAttribute('tabindex', -1);
	});
	
	mobileInputs.forEach( input => { 
		input.setAttribute('tabindex', -1);
	});

} );