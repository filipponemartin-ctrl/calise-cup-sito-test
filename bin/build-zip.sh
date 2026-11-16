#!/usr/bin/env bash
# Crea dist/calise-cup-<versione>.zip, pronto da caricare in Aspetto > Temi.
# Uso: bin/build-zip.sh
set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
version="$(sed -n 's/^Version:[[:space:]]*//p' "$ROOT/calise-cup/style.css" | tr -d '\r')"
mkdir -p "$ROOT/dist"
out="$ROOT/dist/calise-cup-$version.zip"
rm -f "$out"
(cd "$ROOT" && zip -qr "$out" calise-cup -x '*.DS_Store')
echo "$out"
