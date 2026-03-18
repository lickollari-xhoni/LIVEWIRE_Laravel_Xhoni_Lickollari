📦 Laravel & Livewire Product Management
Un'applicazione per la gestione di prodotti sviluppata con Laravel e Livewire, che implementa funzionalità dinamiche in tempo reale senza ricaricamenti di pagina.

🚀 Funzionalità principali
Real-time Search: Ricerca dei prodotti istantanea tramite componenti Livewire.

Gestione CRUD Completa:

Create: Validazione dinamica dei dati e feedback immediato all'utente.

Read: Visualizzazione tabellare con estrazione dei componenti.

Update: Modifica dei dati con popolamento automatico del form tramite Dependency Injection (Product $product).

Validazione Avanzata: Utilizzo di metodi protetti per le rules e messaggi di errore contestuali.

UI/UX Ottimizzata:

Alert di successo per le operazioni di salvataggio.

Reset automatico dei campi del form.

Gestione intelligente del polling (wire:poll) per l'aggiornamento dei dati.

🛠️ Stack Tecnologico
Framework PHP: Laravel

Frontend Dinamico: Livewire

Database: MySQL (con Factory e Seeder per dati fake)

Styling: Blade, Bootstrap/Tailwind (tramite CDN)

📂 Struttura dei Componenti Livewire
1. ProductIndex
Gestisce la visualizzazione della tabella prodotti e la logica di ricerca in tempo reale.

File: ProductIndex.php & product-index.blade.php

Key Feature: Filtro di ricerca dinamico sulla query del database.

2. ProductCreate
Gestisce la creazione di nuovi prodotti.

File: ProductCreate.php & product-create.blade.php

Key Feature: Validazione campo per campo e reset dello stato dopo l'invio.

3. ProductEdit
Gestisce la modifica dei prodotti esistenti.

File: ProductEdit.php & product-edit.blade.php

Key Feature: Dependency Injection del modello Product per il caricamento dei dati nel form.

🔧 Installazione
Clona il repository:

Bash
git clone https://github.com/tuo-username/nome-repo.git
Installa le dipendenze:

Bash
composer install
npm install && npm run dev
Configura l'ambiente:

Copia .env.example in .env.

Configura i dati del tuo database.

Genera la chiave applicativa: php artisan key:generate.

Migrazioni e Seeding:

Bash
php artisan migrate --seed
Avvia il server:

Bash
php artisan serve
📝 Note di Sviluppo (Log dei Commit)
Durante lo sviluppo sono stati affrontati i seguenti step:

Setup iniziale di Laravel e downgrade della versione di Livewire per compatibilità.

Creazione delle migrazioni, modelli e factory per i test.

Sviluppo dei controller e delle rotte dedicate.

Refactoring progressivo: estrazione della logica da Blade a componenti Livewire per una maggiore manutenibilità.

Ottimizzazione: rimozione del polling superfluo e aggiunta di messaggi di sessione (flash data) per i feedback.

Autore: Xhoni Lickollari
