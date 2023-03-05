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
		const nav = document.querySelector( '.header__menu' );
		if ( !nav ) {
			return;
		}
		const menu = nav.querySelector( 'ul' ),
			button = document.querySelector( '.menu-toggle' );

		menu.setAttribute( 'aria-expanded', 'false' );
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
	function goToTop() {
		const button = document.querySelector( '.cta__btn' );
		if ( !button ) {
			return;
		}
		button.addEventListener( 'click', e => {
			e.preventDefault();
			window.scrollTo( { top: 0, left: 0, behavior: 'smooth' } );
		} );
	}

	slickSlide();
	toggleMenu();
	tabTransfer();
	goToTop();
} );