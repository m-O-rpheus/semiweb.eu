

// Registriert mehrere Events (Click, Touch usw) auf dem Element selbst jedoch nicht auf den Kindern davon.
['click','touchstart'].forEach(function(evt) {

    swapinode().addEventListener(evt, function(e) {
      
        let sel = '.EXAMPLE_CLASS'; sel = ( ( e.target.matches(sel) === true ) ? e.target : null );
      
        if( sel !== null ) {

            console.log(sel.dataset.example);
        }
    });
});


