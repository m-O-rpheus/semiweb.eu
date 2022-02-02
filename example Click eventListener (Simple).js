    
    
    swapinode().addEventListener('click', function(e) {

        let sel = '.example_class'; sel = ( ( e.target.matches(sel) === true ) ? e.target : ( e.target.closest(sel) !== null ) ? e.target.closest(sel) : null );

        if( sel !== null ) {

            console.log(sel.dataset.example);
        }
    });
    
    
