jQuery( function ( $ ) {
	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

	let $window = $( window ),
		$body = $( 'body' );

	function slickSlide() {
		$( '.banner' ).slick( {
			slidesToShow: 1,
			dots: false,
			arrows: false,
			autoplay: false,
			rows: 0,
			autoplaySpeed: 3000,
		} );
	};

	function toggleMenu() {
		const nav = document.querySelector( '.header__inner' );
		if ( !nav ) {
			return;
		}
		const $menu = $( '.header__inner' );
		const button = document.querySelector( '.menu-toggle' );

		$( document ).mouseup( e => {
			if ( !$menu.is( e.target ) && $menu.has( e.target ).length === 0 ) // ... nor a descendant of the container
			{
				$menu.removeClass( 'is-open' );
			}
		} );
		button.addEventListener( 'click', () => {
			nav.classList.toggle( 'is-open' );
		} );
	}

	function tabTransfer() {
		$( '.section3__tabs-name' ).click( function () {
			let tab_id = $( this ).attr( 'data-tab' );
			console.log( 'eweqeq' );
			$( '.section3__tabs-name' ).removeClass( 'active' );
			$( '.section3__content' ).removeClass( 'active' );

			$( this ).addClass( 'active' );
			$( '#' + tab_id ).addClass( 'active' );
		} );
	}

	slickSlide();
	// popupForm();
	// toggleMenu();
	tabTransfer();
} );