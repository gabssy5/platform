#!/usr/bin/env bash

# Install PHP Buildpack dependencies (jika Render salah mendeteksi Node)
echo "Installing PHP Buildpack dependencies..."
export PATH="/usr/local/bin:$PATH"

# Jalankan Composer Install
echo "Running Composer Install..."
composer install --no-dev --optimize-autoloader

# Jika Anda butuh NPM untuk aset frontend, tambahkan ini. Jika tidak, hapus:
# echo "Running NPM Build..."
# npm install
# npm run build