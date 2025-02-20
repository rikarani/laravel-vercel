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

### 1. clone aja ni repo, kalo mau di-fork pun bole biar namanya bisa seenak jidatmu

```bash
git clone https://github.com/rikarani/laravel-vercel
```

### 2. buka Vercel, trus Add New Project

![Add New Project](https://cdn.discordapp.com/attachments/1059928632912527391/1282804769588776960/Screenshot_873.png?ex=67b83dca&is=67b6ec4a&hm=2913fecfbb46b0c92227d9f66adb0265ffb254ed30a9b0d614a78e4d9022bc52&)

### 3. Import Project

![Import Project](https://cdn.discordapp.com/attachments/1059928632912527391/1282804817181540413/Screenshot_874.png?ex=67b83dd5&is=67b6ec55&hm=af71b963a90107d056e2d60601959ca838c62f59a0a3a6d233f0263865263a94&)

### 4. Deploy Project

![Deploy Project](https://cdn.discordapp.com/attachments/1059928632912527391/1282804855781593209/Screenshot_875.png?ex=67b83dde&is=67b6ec5e&hm=6d5194d6ebaecf21fff66f18d4266b9fa31b02336afa2487c4121e21e868e5ae&)

### 5. harusnya dapet error, tapi takpa soalnya ada beberapa setting yang mesti diatur

![Error](https://cdn.discordapp.com/attachments/1059928632912527391/1282806006379712544/Screenshot_876.png?ex=67b83ef1&is=67b6ed71&hm=59e78e3b6a1592c774d790cc67aa4fc3d53152915e1e742c4d3e1b79266f433d&)

---

## Step by Step Resolve Error

### 1. General

buka `Project Settings > General`, ada beberapa hal yang mesti diubah

- #### Build & Development Settings

  ubah Framework Preset jadi `Other`, trus override Output Directory menjadi `public`, kemudian **Save**

  ![Build & Development Settings](https://cdn.discordapp.com/attachments/1059928632912527391/1282806403647406151/Screenshot_877.png?ex=67b83f50&is=67b6edd0&hm=52df14eb1ea43059216c283844aa4ca9df5584e8a06acf74d18f5351b1b2d924&)

- #### Node.js Version

  ubah Node.js Version menjadi 18.x, kemudian **Save**

  ![Node.js Version](https://cdn.discordapp.com/attachments/1059928632912527391/1282806443224989736/Screenshot_878.png?ex=67b83f59&is=67b6edd9&hm=97f2107736ad9b3cf588066f4f0ed96026ff6148e8348f00e61d872fcaaf4e09&)

### 2. Setting Environment Variables

buka `Project Settings > Environment Variables` dan tambahkan Environment Variable berikut :

- APP_NAME => `(terserah)`,
- APP_ENV => production,
- APP_KEY => `(ambil dari php artisan key:generate)`,
- APP_DEBUG => false,
- APP_TIMEZONE => `(sesuaikan)`

![Environment Variables](https://cdn.discordapp.com/attachments/1059928632912527391/1282812994983694447/Screenshot_883.png?ex=67b84573&is=67b6f3f3&hm=4daeb86839a4869a4c312a6cba51394a7be8a9e532554aa2387b305ca0223595&)

### 3. Redeploy

buka `Deployments`, trus Redeploy

![Redeploy](https://cdn.discordapp.com/attachments/1059928632912527391/1282809647622914128/Screenshot_880.png?ex=67b84255&is=67b6f0d5&hm=b1d8097a7b7b0314ba36a91a8dd9b11f599e1b2f5a96d8883b938371c7620fa9&)

### 4. Ambil Deployment URL

kalo deploymentnya sukses (gak masalah kalo CSS & JS nya enggak keload), ntar dapet **Deployment URL**, nah copy aja URLnya

![Redeploy Result](https://cdn.discordapp.com/attachments/1059928632912527391/1282811671483519017/Screenshot_882.png?ex=67b84437&is=67b6f2b7&hm=a0ba0a468a54bd9a9b33d56217d28ca4cf3e0321f36b509581884c5c4cfcb284&)

### 5. Setting Environment Variables (lagi)

buka lagi `Project Settings > Environment Variables` dan tambahkan Environment Variable berikut :

- APP_URL => `(paste aja Deployment URLnya)`
- ASSET_URL => `(paste aja Deployment URLnya)`

![Environment Variable](https://cdn.discordapp.com/attachments/1059928632912527391/1282813472350011402/Screenshot_884.png?ex=67b845e5&is=67b6f465&hm=0aa49047ce8c00729016077832a62657eda2d1a7af486a23f5292200d2fa9695&)

### 6. Redeploy (lagi)

buka lagi `Deployments`, trus Redeploy dari yang terbaru

![Redeploy (lagi)](https://cdn.discordapp.com/attachments/1059928632912527391/1282814169187352616/Screenshot_885.png?ex=67b8468b&is=67b6f50b&hm=e1f9f75478e7066ff73b5e8b55bee32eee743645ba4feeb9ec9fc759a00fdbea&)

### 7. Selesai

sampai disini, seharusnya sudah berjalan dengan normal dan preview dari website bisa keliatan

![End](https://cdn.discordapp.com/attachments/1059928632912527391/1282814949672095744/Screenshot_886.png?ex=67b84745&is=67b6f5c5&hm=d590be23d72cb409403c0d68513469bccdf6a995e4327ae20dfb8a548449bfbe&)

### 8. Happy Coding

---

## For Those Who Ask

- kalo buat API Server gimane tu?

  sebagian besar same sih, palingan install sanctum doang

- bise upload file ndak?

  ndak bise kalo driver `local`, soalnye tak bise symlink (udah gratis ndak usah banyak minta), jadi mesti cari alternatif laen misalnye S3
