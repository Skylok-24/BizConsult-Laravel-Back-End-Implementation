# BizConsult Laravel Back-End

![BizConsult Hero Screenshot](image1)

A Laravel 10 (PHP 8.1+) backend powering the BizConsult corporate/consulting website template, converting a static Bootstrap 5 front-end into localized, database‑driven pages with an authenticated admin dashboard.

> Status: Active development  
> License: MIT  
> Template Source: [BizConsult Free Responsive Bootstrap 5 HTML5 Template](https://themewagon.com/themes/bizconsult-free-responsive-bootstrap-5-html5-template/)  
> Localization: Multi-language admin (`/{locale}/admin`) via `mcamara/laravel-localization`  
> Auth: Breeze (web forms) + Sanctum (API user context)

## Features
- Public pages: Home, About, Services, Contact, Subscribe
- Localized admin dashboard (CRUD for Services, Features, Testimonials)
- Manage Messages (view/delete) & Subscribers (list/delete)
- Site Settings (singleton update)
- User Profile management
- Modern asset pipeline (Vite + Tailwind CSS)

## Stack
Laravel 10 · PHP 8.1 · Breeze · Sanctum · Tailwind CSS · Vite · PostCSS · Guzzle · Pint · PHPUnit · Mockery · Faker · mcamara/laravel-localization

## Quick Start
```bash
git clone https://github.com/Skylok-24/BizConsult-Laravel-Back-End-Implementation.git
cd BizConsult-Laravel-Back-End-Implementation
cp .env.example .env
composer install
npm install
php artisan key:generate
php artisan migrate --seed   # add seeders when ready
npm run dev                  # or npm run build
php artisan serve
```
(Optional)
```bash
php artisan storage:link
```

## Core Routes
Front:
- GET / (home)
- GET /about
- GET /service
- GET /contact
- POST /subscribe

Admin (prefix `/{locale}/admin`, auth required):
- Dashboard
- services, features, testmonials (resource controllers)
- messages (index/show/destroy)
- subscribers (index/destroy)
- settings (index/update)
- profile
- login view

## Roadmap
| Item | Status |
|------|--------|
| Form Requests | Pending |
| Feature/Admin CRUD tests | Pending |
| Rate limiting (contact/subscribe) | Planned |
| Service layer abstraction | Planned |
| Public JSON API | Planned |
| CI (Pint + tests) | Planned |

## Attribution & License
- Backend Code: MIT
- Template: BizConsult (ThemeWagon) – retain required footer credit.

## Arabic Summary
مشروع خلفية بلاريڤيل يحوّل قالب BizConsult إلى موقع ديناميكي متعدد اللغات مع لوحة إدارة للمحتوى والاشتراكات والرسائل والإعدادات، وقابل للتوسعة واختبارات مستقبلية.
