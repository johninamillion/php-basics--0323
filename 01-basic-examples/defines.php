<?php

// Kann einmal definiert werden und ist dann global verfügbar
// Konstanten können nicht überschrieben werden
// Konstanten können nicht mit $ aufgerufen werden
// Konstanten sollten keine Arrays sein
define( 'MY_APP_CONST1', 'Hallo World' );

// Konstanten können auch in Klassen definiert werden
// Konstanten können auch in Funktionen definiert werden
// Konstanten können auch Array-Werte haben
const MY_APP_CONST2 = 'Hallo World 2';

echo MY_APP_CONST2;