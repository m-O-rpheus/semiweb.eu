

// Registriert mehrere Events (Click, Touch usw) auf dem Element selbst, oder einem Kind davon
['click','touchstart'].forEach(function(evt) {

    swapinode().addEventListener(evt, function(e) {
        
        let sel = '.EXAMPLE_CLASS'; sel = ( e.target.matches(sel) ? e.target : e.target.closest(sel) );  // sel or null

        if( sel !== null ) {

            console.log(sel.dataset.example);
        }
    });
});



