

['click','touchstart'].forEach(function(evt) {

    swapinode().addEventListener(evt, function(e) {

        let sel = '.EXAMPLE_CLASS'; sel = ( ( e.target.matches(sel) === true ) ? e.target : ( e.target.closest(sel) !== null ) ? e.target.closest(sel) : null );

        if( sel !== null ) {

            console.log(sel.dataset.example);
        }
    });
});

