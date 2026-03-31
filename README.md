<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

# 🧁 Bakery POS System

Sistem kasir (Point of Sale) berbasis web untuk toko roti (bakery) yang dibangun menggunakan Laravel, dengan fitur transaksi penjualan, manajemen produk, stok, laporan, dan integrasi pembayaran Midtrans (sandbox).

---

## 🚀 Fitur Utama

### 🔐 Authentication
- Login & logout
- Role: Admin & Kasir
- Akses berbasis role

### 📦 Manajemen Produk
- CRUD kategori
- CRUD produk
- Upload gambar produk
- Status aktif/nonaktif

### 🛒 Sistem Kasir (POS)
- Daftar produk
- Pencarian produk
- Keranjang (cart)
- Hitung total otomatis
- Checkout transaksi

### 💳 Pembayaran
- Tunai (cash)
- Midtrans Sandbox (Snap API)

### 📊 Laporan
- Laporan harian
- Laporan bulanan
- Produk terlaris

### 📉 Stok
- Pengurangan stok otomatis
- Penambahan stok manual
- Riwayat pergerakan stok

---

## 🏗️ Tech Stack

- **Backend**: Laravel
- **Frontend**: Blade + Bootstrap/AdminLTE
- **Database**: MySQL
- **Payment Gateway**: Midtrans Sandbox
- **Authentication**: Laravel Breeze

---

## ⚙️ Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/bakery-pos.git
cd bakery-pos