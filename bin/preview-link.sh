#!/usr/bin/env bash
# Stampa il link di WordPress Playground per l'anteprima di un ramo.
# Uso: bin/preview-link.sh [ramo]   (senza argomento usa il ramo corrente)
set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
branch="${1:-$(git -C "$ROOT" rev-parse --abbrev-ref HEAD)}"

php -r '
$blueprint = json_decode(file_get_contents($argv[1]), true, 512, JSON_THROW_ON_ERROR);
foreach ($blueprint["steps"] as &$step) {
	if (($step["step"] ?? "") === "installTheme") {
		$step["themeData"]["ref"]     = $argv[2];
		$step["themeData"]["refType"] = "branch";
	}
}
unset($step, $blueprint["\$schema"], $blueprint["meta"]);
echo "https://playground.wordpress.net/#" . rawurlencode(json_encode($blueprint, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)) . PHP_EOL;
' "$ROOT/blueprint.json" "$branch"
