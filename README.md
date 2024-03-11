# Esercizio di oggi: Laravel Comics Layout
### Nome repo: laravel-comics
Create un nuovo progetto Laravel.<br> 
Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.<br>
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.<br>

### Bonus
Create più pagine istituzionali che condividono lo stesso layout<br>

**Steps installazione SASS e Bootstrap**
1. composer require pacificdev/laravel_9_preset
1. php artisan preset:ui bootstrap
1. npm i
1. Rimuovere riga 3 del package.json (type: module)
1. npm run dev
1. Importare gli assets con la direttiva @vite() nella  <head> del vostro layout