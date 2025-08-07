# 🧾 Single-Page Digital Resume in Laravel

This project is one of the practical learning projects from [my.codearch.app](https://my.codearch.app).  
I'm working on it independently for self-practice and to improve my Laravel skills.

## 🚀 Overview

A single-page digital resume web app built with Laravel and Tailwind CSS.  
It loads resume data from a JSON file and displays it using a clean, responsive layout.

## 📁 Features

- Load CV/resume data from `cv.json`
- Structured layout with header, content, and footer
- Tailwind CSS for modern UI
- Data handled via Laravel Controller
- Blade view renders resume sections

## 🛠️ Still to Come

- Edit/update form for resume data  
- PDF export feature
  
## 📦 Installation

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan serve
