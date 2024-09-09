# Ape bende ni?

ini template buat orang yang maok deploy Laravel ke Vercel (atau buat yang penasaran gimane sih care deploy Laravel ke Vercel)

## Notes

Template ini belom ade connect ke database (soalnye Vercel cuma ngasih jatah 1 Postgres doang anying) jadi blom bise CRUD. Jadinya ya untuk sementara palingan buat Static Pages doang.

Sebenernya ada alternatif buat DB sih, misalnya :

1. Neon
2. Supabase

ntar bakal aku update, tapi tak tau kapan

## Includes

1. Laravel 11
2. TailwindCSS
3. AlpineJS
4. Vite

## Step by Step

1. clone aja ni repo, kalo mau di-fork pun bole biar namanya bisa seenak jidatmu

```bash
git clone https://github.com/rikarani/laravel-vercel
```

2. buka Vercel, trus Add New Project

3. Import Project, langsung deploy aja

harusnya ntar dapet error, tapi takpa
ada beberapa setting yang mesti diatur

1.  Build & Development Settings
    buka `Project Settings > General`, ada beberapa hal yang mesti diubah

    - Build & Development Settings
      ubah Framework Preset jadi `Other`, trus override Output Directory menjadi `public`
    - Node.js Version
      ubah Node.js Version menjadi 18.x

2.  Environment Variables
    buka `Project Settings > Environment Variables` dan tambahkan Environment Variable berikut :

    - APP_NAME => `(terserah)`,
    - APP_ENV => production,
    - APP_KEY => `(ambil dari php artisan key:generate)`,
    - APP_DEBUG => false,
    - APP_TIMEZONE => `(sesuaikan)`,
    - APP_URL => `(ambil dari deployment url)`,
    - ASSET_URL => `(ambil dari deployment url)`,

    ganti yang ada di dalam tanda kurung

3.  harusnya disini dah aman, kalo masih ada error langsung dm aja

## For Those Who Ask

- kalo buat API Server gimane tu?
  sebagian besar same sih, palingan install sanctum doang

- bise upload file ndak?
  ndak bise kalo driver `local`, soalnye tak bise symlink (udah gratis ndak usah banyak minta), jadi mesti cari alternatif laen misalnye S3
