# Calise Cup — nuovo sito (fase di test)

[![Controlli](https://github.com/filipponemartin-ctrl/calise-cup-sito-test/actions/workflows/ci.yml/badge.svg)](https://github.com/filipponemartin-ctrl/calise-cup-sito-test/actions/workflows/ci.yml)
[![Licenza: GPL v2+](https://img.shields.io/badge/licenza-GPL%20v2%2B-blue.svg)](LICENSE)

Codice del nuovo sito della **Calise Cup**, il torneo di beach handball organizzato a Gaeta dalla Gaeta Handball 84 ASD. Per ora il repository contiene il tema WordPress con la grafica e le pagine pubbliche in italiano.

## Anteprima senza installare nulla

**[Apri l'anteprima del sito](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/filipponemartin-ctrl/calise-cup-sito-test/main/blueprint.json)**

Il link avvia [WordPress Playground](https://wordpress.org/playground/): un WordPress temporaneo che gira nel browser, carica l'ultima versione del tema dal ramo `main` e crea le pagine di partenza.

- Il primo avvio richiede qualche decina di secondi.
- Ogni apertura parte da zero: le modifiche fatte nell'anteprima non vengono salvate.
- Serve per vedere e far vedere il lavoro. Il sito pubblico avrà un hosting vero.
- Per provare l'editor: aggiungere `/wp-admin/` all'indirizzo dell'anteprima ed entrare con utente `admin` e password `password`.

## Cosa c'è oggi

| Parte | Stato |
| --- | --- |
| Grafica: colori, caratteri, testata, menu per telefono, piè di pagina | Fatto (v0.1.0) |
| Pagine in italiano: Home, Il torneo, Partecipa, Calendario e risultati, Vivi Gaeta, Amici e partner, Foto e notizie | Fatto (v0.1.0) |
| Foto del torneo, logo e colori del logo | Fatto (v0.2.0) |
| Versione inglese | Da fare |
| Account, squadre, iscrizioni e pagamenti (plugin su misura) | Da fare |
| Calendario, risultati, documenti, sponsor, convenzioni | Da fare |

Le modifiche di ogni versione sono nel [CHANGELOG](CHANGELOG.md).

## Struttura del repository

```
calise-cup/            Tema WordPress a blocchi
├── style.css          Intestazione del tema, caratteri e stili dei componenti
├── theme.json         Colori, caratteri e impostazioni dell'editor
├── functions.php      Avvio del tema
├── inc/               Creazione delle pagine di partenza e funzioni di supporto
├── patterns/          Contenuto delle pagine, testata e piè di pagina
├── templates/ parts/  Struttura delle pagine
└── assets/            Caratteri (inclusi nel tema) e immagini
blueprint.json         Istruzioni per l'anteprima su WordPress Playground
bin/                   Controlli e creazione del pacchetto .zip
docs/                  Guida al tema
.github/               Controlli automatici, modelli per segnalazioni e richieste di modifica
```

## Installare il tema su un WordPress vero

1. Scaricare `calise-cup-<versione>.zip` dalla pagina [Releases](https://github.com/filipponemartin-ctrl/calise-cup-sito-test/releases).
2. In WordPress: **Aspetto → Temi → Aggiungi tema → Carica tema**, scegliere il file e attivare.
3. Alla prima attivazione il tema crea le pagine di partenza e il menu, e imposta la home. Le pagine già esistenti con lo stesso indirizzo non vengono toccate.

Requisiti: WordPress 6.6 o successivo, PHP 7.4 o successivo.

## Lavorare sul tema

```bash
bin/check.sh       # sintassi PHP, JSON, versioni allineate, modelli e parti esistenti
bin/build-zip.sh   # crea dist/calise-cup-<versione>.zip
bin/preview-link.sh # link di anteprima per il ramo corrente
```

Gli stessi controlli girano su GitHub a ogni modifica proposta. Come proporre una modifica, come si chiamano i rami e come si pubblica una versione è spiegato in [CONTRIBUTING.md](CONTRIBUTING.md). La struttura del tema e le classi disponibili sono in [docs/tema.md](docs/tema.md).

## Licenze

- Codice del tema: [GPL v2 o successiva](LICENSE), come WordPress.
- Caratteri Lora, Nunito Sans e Caveat: SIL Open Font License 1.1, testi in `calise-cup/assets/fonts/`.
- Testi, foto e marchi della Calise Cup appartengono alla Gaeta Handball 84 ASD.

## Contatti

Calise Cup · Gaeta Handball 84 ASD · calisecup@gmail.com
