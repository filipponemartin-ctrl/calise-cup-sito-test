# Changelog

Le modifiche rilevanti del progetto, versione per versione.
Il formato segue [Keep a Changelog](https://keepachangelog.com/it/1.1.0/) e i numeri di versione seguono [Semantic Versioning](https://semver.org/lang/it/).

## [Non rilasciato]

## [0.2.0] - 2026-11-17

### Aggiunto
- 16 foto del torneo (Martin Filippone), ritagliate e alleggerite, in `assets/img/foto/`.
- Logo ufficiale in testata e nel piè di pagina, in versione blu e rossa.
- Home: apertura a tutta larghezza con foto, fascia delle nazioni, il ricordo del 1989 con polaroid, schede con foto, numeri su fascia blu notte, mosaico "Sabbia, mare e voli".
- Pagine interne: foto di apertura e polaroid con didascalie scritte a mano.
- Funzioni `calise_cup_img()`, `calise_cup_photo_card()` e `calise_cup_banner()` per i modelli di pagina.

### Modificato
- Tavolozza presa dai loghi: blu Calise, azzurro, rosso, giallo sole e blu notte, su sfondo sabbia.
- Pulsante "Iscrivi la squadra" rosso, testata fissa in alto, piè di pagina blu notte con credito fotografico.

### Rimosso
- Illustrazione `serapo.svg`, sostituita dalle foto.

## [0.1.0] - 2026-11-16

### Aggiunto
- Tema WordPress a blocchi "Calise Cup": colori, caratteri e componenti della bozza approvata.
- Testata con menu per telefono, piè di pagina, pagina 404.
- Pagine di partenza in italiano, create all'attivazione: Home, Il torneo, Partecipa, Calendario e risultati, Vivi Gaeta, Amici e partner, Foto e notizie.
- Caratteri Lora, Nunito Sans e Caveat inclusi nel tema, senza chiamate a servizi esterni.
- Commenti disattivati su tutto il sito.
- Anteprima su WordPress Playground tramite `blueprint.json`.
- Controlli automatici (`bin/check.sh`), creazione del pacchetto e pubblicazione delle versioni con GitHub Actions.

[Non rilasciato]: https://github.com/filipponemartin-ctrl/calise-cup-sito-test/compare/v0.2.0...HEAD
[0.2.0]: https://github.com/filipponemartin-ctrl/calise-cup-sito-test/compare/v0.1.0...v0.2.0
[0.1.0]: https://github.com/filipponemartin-ctrl/calise-cup-sito-test/releases/tag/v0.1.0
