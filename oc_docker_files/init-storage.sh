#!/usr/bin/env bash
set -euo pipefail

cd "$(dirname "$0")"

DIRS=(
  storage/cache/template
  storage/download
  storage/logs
  storage/modification
  storage/session
  storage/upload
)

for dir in "${DIRS[@]}"; do
  mkdir -p "$dir"
done

if [[ ! -f storage/vendor/autoload.php ]]; then
  if command -v composer >/dev/null 2>&1; then
    composer install --no-dev --optimize-autoloader
  elif [[ -d vendor && -f vendor/autoload.php ]]; then
    echo "composer not found; copying vendor/ to storage/vendor/"
    rm -rf storage/vendor
    cp -R vendor storage/vendor
  else
    echo "Run: composer install (from oc_docker_files) or copy vendor into storage/vendor" >&2
    exit 1
  fi
fi

chmod -R 0777 storage

echo "Storage ready at $(pwd)/storage"
