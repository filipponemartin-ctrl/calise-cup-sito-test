# Come si lavora su questo repository

## Regole di base

- Il ramo `main` contiene sempre una versione funzionante: è quella che l'anteprima carica.
- Ogni modifica passa da un ramo separato e da una pull request, anche se piccola.
- Una pull request si unisce a `main` quando i controlli automatici sono verdi.

## Rami

| Prefisso | Quando | Esempio |
| --- | --- | --- |
| `feat/` | Una funzione o una pagina nuova | `feat/pagina-convenzioni` |
| `fix/` | Una correzione | `fix/menu-telefono` |
| `content/` | Solo testi o immagini | `content/date-2027` |
| `docs/` | Solo documentazione | `docs/guida-tema` |
| `chore/` | Manutenzione, controlli, dipendenze | `chore/aggiorna-actions` |

## Messaggi dei commit

Si usa lo stile [Conventional Commits](https://www.conventionalcommits.org/it/v1.0.0/): un prefisso, due punti, una frase breve all'imperativo.

```
feat: aggiungi la pagina delle convenzioni
fix: allinea a sinistra il menu su telefono
content: aggiorna le quote 2027
docs: spiega come pubblicare una versione
```

## Prima di aprire una pull request

```bash
bin/check.sh
```

Poi controllare il risultato nell'anteprima del ramo, dopo averlo caricato su GitHub:

```bash
bin/preview-link.sh          # link di Playground per il ramo corrente
bin/preview-link.sh fix/menu # oppure per un ramo a scelta
```

Se la modifica cambia ciò che si vede, allegare alla pull request una schermata da computer e una da telefono.

## Versioni

I numeri seguono [Semantic Versioning](https://semver.org/lang/it/). Fino alla messa online il progetto resta in `0.x`: la seconda cifra sale a ogni rilascio con novità, la terza per le sole correzioni.

Il numero di versione sta in quattro posti, che `bin/check.sh` tiene allineati:

1. `calise-cup/style.css`, riga `Version:`
2. `calise-cup/functions.php`, costante `CALISE_CUP_VERSION`
3. `calise-cup/readme.txt`, sezione Changelog
4. `CHANGELOG.md`

## Pubblicare una versione

1. Aprire una pull request che aggiorna i quattro punti sopra e sposta le voci da "Non rilasciato" alla nuova versione nel `CHANGELOG.md`.
2. Unirla a `main`.
3. Creare l'etichetta della versione su `main`:
   ```bash
   git tag v0.2.0 && git push origin v0.2.0
   ```
4. GitHub Actions esegue i controlli, crea il file `.zip` e pubblica la versione nella pagina Releases con le note prese dal changelog.

## Impostazioni consigliate del repository

In **Settings → Branches**, una regola su `main` che richieda la pull request e il controllo "Controlli" verde prima dell'unione.

## Cosa non va nel repository

- Password, chiavi di Stripe o PayPal, credenziali dell'hosting.
- Dati personali di atleti, squadre o sponsor.
- Documenti interni: requisiti, trattative, preventivi.
