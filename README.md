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

![Add New Project](https://cdn.discordapp.com/attachments/1059928632912527391/1282804769588776960/Screenshot_873.png?ex=66e0b08a&is=66df5f0a&hm=b10347bedb1dfbebf33f69d9e27c8fdc411e5016a1e58189432d005e9d8908c7&)

### 3. Import Project

![Import Project](https://cdn.discordapp.com/attachments/1059928632912527391/1282804817181540413/Screenshot_874.png?ex=66e0b095&is=66df5f15&hm=08724874acb2fec3b2348d0b002c776232aa5ea3092200c1a6d1fac6fae926ca&)

### 4. Deploy Project

![Deploy Project](https://cdn.discordapp.com/attachments/1059928632912527391/1282804855781593209/Screenshot_875.png?ex=66e0b09e&is=66df5f1e&hm=ecc422ef06db06c65467946196b5ba12152fcbfac893cedda0c8ab5fd6ede6a6&)

### 5. harusnya dapet error, tapi takpa soalnya ada beberapa setting yang mesti diatur

![Error](https://cdn.discordapp.com/attachments/1059928632912527391/1282806006379712544/Screenshot_876.png?ex=66e0b1b1&is=66df6031&hm=d98cd9a646ce7bcb452b319b76de40a1585f55215d87801466fafe0c2c59cf3b&)

---

## Step by Step Resolve Error

### 1. General

buka `Project Settings > General`, ada beberapa hal yang mesti diubah

- #### Build & Development Settings

  ubah Framework Preset jadi `Other`, trus override Output Directory menjadi `public`, kemudian **Save**

  ![Build & Development Settings](https://cdn.discordapp.com/attachments/1059928632912527391/1282806403647406151/Screenshot_877.png?ex=66e0b210&is=66df6090&hm=9d63f986675510095d6ccc9795318cef8df4787243690b306bb136f76b14b058&)

- #### Node.js Version

  ubah Node.js Version menjadi 18.x, kemudian **Save**

  ![Node.js Version](https://cdn.discordapp.com/attachments/1059928632912527391/1282806443224989736/Screenshot_878.png?ex=66e0b219&is=66df6099&hm=8615cfbe5de1851267afb4fe9f3fa996601fb8835b5696327b7fb40bffadf64d&)

### 2. Setting Environment Variables

buka `Project Settings > Environment Variables` dan tambahkan Environment Variable berikut :

- APP_NAME => `(terserah)`,
- APP_ENV => production,
- APP_KEY => `(ambil dari php artisan key:generate)`,
- APP_DEBUG => false,
- APP_TIMEZONE => `(sesuaikan)`

![Environment Variables](https://cdn.discordapp.com/attachments/1059928632912527391/1282812994983694447/Screenshot_883.png?ex=66e0b833&is=66df66b3&hm=032282c63f319ee0d9d32ae25674782bbbc6520dd6ddc1a764fd42be5090a322&)

### 3. Redeploy

buka `Deployments`, trus Redeploy

![Redeploy](https://cdn.discordapp.com/attachments/1059928632912527391/1282809647622914128/Screenshot_880.png?ex=66e0b515&is=66df6395&hm=40d852446e9b3d5c6dac9d734228b79572b07b366c88460da1675ff648c62293&)

### 4. Ambil Deployment URL

kalo deploymentnya sukses (gak masalah kalo CSS & JS nya enggak keload), ntar dapet **Deployment URL**, nah copy aja URLnya

![Redeploy Result](https://cdn.discordapp.com/attachments/1059928632912527391/1282811671483519017/Screenshot_882.png?ex=66e0b6f7&is=66df6577&hm=2c1ced8c11cb3929c77cf2aa437a13eb01945cde68a44294832b0d24c600b1c1&)

### 5. Setting Environment Variables (lagi)

buka lagi `Project Settings > Environment Variables` dan tambahkan Environment Variable berikut :

- APP_URL => `(paste aja Deployment URLnya)`
- ASSET_URL => `(paste aja Deployment URLnya)`

![Environment Variable](https://cdn.discordapp.com/attachments/1059928632912527391/1282813472350011402/Screenshot_884.png?ex=66e0b8a5&is=66df6725&hm=dc41435d041dc54403fa8b9d083c30090b6354ab91fcec08d26b1725fdcb9e82&)

### 6. Redeploy (lagi)

buka lagi `Deployments`, trus Redeploy

![Redeploy (lagi)](https://cdn.discordapp.com/attachments/1059928632912527391/1282814169187352616/Screenshot_885.png?ex=66e0b94b&is=66df67cb&hm=b1f6fe5367ba419b736517cff5e3eb7fe41441100c7e3074ef159bd4809ab7fb&)

### 7. Selesai

sampai disini, seharusnya sudah berjalan dengan normal dan preview dari website bisa keliatan

![End](https://cdn.discordapp.com/attachments/1059928632912527391/1282814949672095744/Screenshot_886.png?ex=66e0ba05&is=66df6885&hm=308da0b7fe53ed83b52be8e05494ffeec0365654a0795d9d3645d403210b4911&)

### 8. Happy Coding

---

## For Those Who Ask

- kalo buat API Server gimane tu?

  sebagian besar same sih, palingan install sanctum doang

- bise upload file ndak?

  ndak bise kalo driver `local`, soalnye tak bise symlink (udah gratis ndak usah banyak minta), jadi mesti cari alternatif laen misalnye S3
