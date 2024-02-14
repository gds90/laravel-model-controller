Esercizio di oggi:
nome repo: laravel-model-controller

Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
1 - Create un nuovo progetto Laravel 9.2
2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
3 - Importate nel vostro database la tabella movies in allegato
4 - inserite le vostre credenziali per il database nel file .env (MAMP/phpLauncher deve essere attivo per mysql)
5 - Create un model Movie
php artisan make:model Movie
6 - Create un controller che gestirà la rotta /
php artisan make:controller Guest/PageController
7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

CONSIGLI
Mi raccomando al nome del model: PascalCase e singolare!

BONUS:
Stilare il layout nei dettagli con Sass

SUPER BONUS (solo per chi se la sente)
Realizzare un metodo show, come visto a lezione per mostrare il dettaglio di un film.