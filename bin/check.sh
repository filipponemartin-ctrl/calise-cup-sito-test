#!/usr/bin/env bash
# Controlli del tema: gli stessi che girano su GitHub a ogni modifica.
# Uso: bin/check.sh
set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
THEME="$ROOT/calise-cup"
fail=0
err() { echo "ERRORE: $*" >&2; fail=1; }

echo "1. Sintassi PHP"
while IFS= read -r -d '' file; do
	php -l "$file" >/dev/null || err "sintassi non valida in ${file#"$ROOT"/}"
done < <(find "$THEME" -name '*.php' -print0)

echo "2. File JSON"
for file in "$THEME/theme.json" "$ROOT/blueprint.json"; do
	php -r 'json_decode(file_get_contents($argv[1]), true, 512, JSON_THROW_ON_ERROR);' "$file" 2>/dev/null \
		|| err "JSON non valido: ${file#"$ROOT"/}"
done

echo "3. Numero di versione allineato"
v_style="$(sed -n 's/^Version:[[:space:]]*//p' "$THEME/style.css" | tr -d '\r')"
v_php="$(sed -n "s/.*define( 'CALISE_CUP_VERSION', '\([^']*\)' ).*/\1/p" "$THEME/functions.php")"
[ -n "$v_style" ] || err "manca la riga Version in style.css"
[ "$v_style" = "$v_php" ] || err "style.css ($v_style) e functions.php ($v_php) hanno versioni diverse"
grep -q "^= $v_style =" "$THEME/readme.txt" || err "readme.txt del tema non ha la voce = $v_style ="
grep -q "^## \[$v_style\]" "$ROOT/CHANGELOG.md" || err "CHANGELOG.md non ha la sezione [$v_style]"

echo "4. Modelli di pagina"
while IFS= read -r slug; do
	grep -rqs "Slug: $slug\$" "$THEME/patterns" || err "il modello $slug è usato ma non esiste in patterns/"
done < <(grep -rhoE "calise-cup/[a-z0-9-]+" "$THEME/inc/setup.php" "$THEME/parts" "$THEME/templates" | sort -u)

echo "5. Parti dei template"
while IFS= read -r part; do
	[ -f "$THEME/parts/$part.html" ] || err "manca parts/$part.html"
done < <(grep -rhoE '"slug":"[a-z0-9-]+"' "$THEME/templates" | sed -E 's/"slug":"([^"]+)"/\1/' | sort -u)

echo "6. Nessuna risorsa caricata da servizi esterni"
if grep -rnE "fonts\.(googleapis|gstatic)\.com|cdn\.jsdelivr|cdnjs\.cloudflare|unpkg\.com" "$THEME" --include='*.php' --include='*.css' --include='*.html' --include='*.json'; then
	err "il tema non deve caricare font o script da servizi esterni"
fi

if [ "$fail" -ne 0 ]; then
	echo "Controlli falliti." >&2
	exit 1
fi
echo "Tutto a posto: tema versione $v_style."
