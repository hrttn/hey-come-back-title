( function( $ ) {
	let isOriginalTitle = true;
	const originalTitle = document.title;
	const titleToComeBack = 'Hey come back! ' + originalTitle;
	let interval = null;

	function changeTitle() {
		document.title = isOriginalTitle ?
			titleToComeBack :
			originalTitle;
		isOriginalTitle = ! isOriginalTitle;
	}


	$( window ).focus( function() {
		clearInterval( interval );
		$( 'title' ).text( originalTitle );
	});

	$( window ).blur( function() {
		interval = setInterval( changeTitle, 1000 );
	});
}( jQuery ) );
