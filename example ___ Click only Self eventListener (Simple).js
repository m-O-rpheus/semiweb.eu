

// Registriert ein Click Event auf das Element selbst, jedoch keinem Kind davon
swapinode().addEventListener('click', function(e) {

    let sel = '.EXAMPLE_CLASS'; sel = ( ( e.target.matches(sel) === true ) ? e.target : null );

    if( sel !== null ) {

        console.log(sel.dataset.example);
    }
});

