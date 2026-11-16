# Guida al tema Calise Cup

## Com'è fatto

Il tema è un tema a blocchi: non usa costruttori di pagine né plugin obbligatori.

| Cartella o file | A cosa serve |
| --- | --- |
| `theme.json` | Tavolozza dei colori, caratteri, dimensioni del testo, larghezza dei contenuti |
| `style.css` | Caratteri inclusi e stile dei componenti (schede, numeri, storia, polaroid, tabelle) |
| `templates/` | Struttura dei tipi di pagina: home, pagina, elenco notizie, articolo, 404 |
| `parts/` | Testata e piè di pagina, che richiamano i modelli in `patterns/` |
| `patterns/` | Contenuto di partenza di ogni pagina, scritto con blocchi standard |
| `inc/setup.php` | Crea pagine, menu e impostazioni alla prima attivazione |
| `inc/markup.php` | Funzioni che scrivono i blocchi usati dai modelli |

## Le pagine di partenza

Alla prima attivazione `inc/setup.php` crea una pagina per ogni voce dell'elenco `calise_cup_starter_pages()`. Il contenuto di ogni pagina è un richiamo al modello corrispondente in `patterns/`.

Quando la redazione apre una pagina nell'editor e la salva, il contenuto diventa della pagina: da quel momento le modifiche al file del modello non la cambiano più. I modelli servono quindi come punto di partenza, non come contenuto vivo.

Per aggiungere una pagina di partenza:

1. creare `patterns/<nome>.php` con l'intestazione `Title`, `Slug: calise-cup/<nome>`, `Categories: calise-cup`;
2. aggiungere la voce in `calise_cup_starter_pages()`;
3. eseguire `bin/check.sh`.

## Colori

| Nome | Codice | Uso |
| --- | --- | --- |
| Sabbia chiara | `#FBF9F5` | Sfondo |
| Inchiostro | `#24323B` | Testo |
| Grigio | `#5D6B72` | Testo secondario |
| Mare di Serapo | `#1E6A85` | Link e pulsanti |
| Oliva di Gaeta | `#5C7330` | Etichette, scritte a mano, storia |
| Sole | `#F1C35B` | Accenti, numeri dei passi |
| Mare chiaro, Oliva chiaro, Sole chiaro | — | Sfondi delle schede |

## Caratteri

- **Lora** per i titoli.
- **Nunito Sans** per il testo.
- **Caveat** per le scritte a mano, da usare poco.

I file sono in `assets/fonts/`: il sito non chiama servizi esterni.

## Classi utili nell'editor

Si scrivono nel campo "Classi CSS aggiuntive" del blocco.

| Classe | Blocco | Effetto |
| --- | --- | --- |
| `cc-card` | Gruppo | Scheda bianca con bordo |
| `cc-card is-warm` / `is-olive` | Gruppo | Scheda con sfondo sole o oliva |
| `cc-grid` | Gruppo a griglia | Schede affiancate che vanno a capo da sole |
| `cc-hand` | Paragrafo | Scritta a mano |
| `cc-eyebrow` | Paragrafo | Etichetta sopra un titolo |
| `cc-intro` | Paragrafo | Testo introduttivo |
| `cc-note` | Paragrafo | Nota su sfondo giallo chiaro |
| `cc-polaroid` | Immagine | Cornice tipo polaroid |
| `cc-section` | Qualsiasi | Spazio sopra e sotto una sezione |

## Logo

**Aspetto → Editor → Modelli → Testata**, blocco "Logo del sito". Quando il logo è impostato, la sigla "CC" scompare.
