# 🚀 Khushali Savaliya — Laravel Portfolio Setup Guide

## Folder Structure
```
your-laravel-project/
├── public/
│   ├── css/
│   │   └── portfolio.css          ← Copy here
│   └── js/
│       └── portfolio.js           ← Copy here
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php      ← Copy here
│       ├── partials/
│       │   ├── navbar.blade.php   ← Copy here
│       │   └── footer.blade.php   ← Copy here
│       └── home.blade.php         ← Copy here
└── routes/
    └── web.php                    ← Update this
```

---

## ✅ Step-by-Step Setup

### Step 1 — Fresh Laravel Project
If you haven't already:
```bash
composer create-project laravel/laravel khushali-portfolio
cd khushali-portfolio
```

### Step 2 — Copy the Files
Copy each file from this package into the matching path in your Laravel project (see folder structure above).

### Step 3 — Update `routes/web.php`
Replace (or update) your `routes/web.php` with the provided one, or just add:
```php
Route::get('/', function () {
    return view('home');
})->name('home');
```

### Step 4 — No NPM/Vite Required
This portfolio uses **zero build steps**. All CSS and JS are in `public/` and referenced via `asset()` helpers. No Vite, no Mix needed.

> If you have Vite running and see errors, either stop it or remove the `@vite(...)` directives from any existing blade files.

### Step 5 — Serve the Project
```bash
php artisan serve
```
Visit `http://localhost:8000` — your portfolio is live!

---

## 🎨 Customisation Guide

### Change Accent Color
In `public/css/portfolio.css`, find the `:root` block and change:
```css
--accent: #7C3AED;        /* Main purple — change to any color */
--accent-light: #A78BFA;  /* Lighter tint */
--accent-2: #06B6D4;      /* Gradient secondary (cyan) */
```

### Add Your Photo
Replace the avatar initials block in `home.blade.php`:
```html
<div class="avatar-inner">
    {{-- Replace this: --}}
    <span class="avatar-initials">KS</span>

    {{-- With this: --}}
    <img src="{{ asset('images/khushali.jpg') }}" alt="Khushali Savaliya"
         style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
</div>
```
Then place your photo at `public/images/khushali.jpg`.

### Add a Resume Download Button
In `home.blade.php`, inside `.hero-actions`:
```html
<a href="{{ asset('files/khushali-resume.pdf') }}" download class="btn btn-ghost">
    <i class="fas fa-download"></i> Download CV
</a>
```
Place your PDF at `public/files/khushali-resume.pdf`.

### Update Contact Form (Backend)
When ready to make the form functional:

1. Create `app/Http/Controllers/ContactController.php`:
```php
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'required|string|max:200',
            'message' => 'required|string',
        ]);

        // Mail::to('khushalisavaliya28@gmail.com')->send(new ContactMail($request->all()));

        return response()->json(['success' => true]);
    }
}
```

2. Uncomment the route in `routes/web.php`.

---

## 🌗 Dark / Light Theme
- Default is **dark mode**.
- Click the sun/moon icon in the navbar to toggle.
- Preference is saved in `localStorage` — persists on refresh.

## 📱 Responsive Breakpoints
| Breakpoint | Layout |
|---|---|
| `> 1024px` | Full two-column layouts |
| `768px – 1024px` | Adjusted gaps, single contact column |
| `< 768px` | Mobile: hamburger menu, single column everything |
| `< 480px` | Extra compact hero, smaller text |

## ✨ Animations Included
- **Cursor** — Custom trailing dot cursor (desktop only)
- **Reveal** — Elements fade+slide in on scroll (IntersectionObserver)
- **Count-up** — Hero stats count up when visible
- **Skill bars** — Progress bars animate in on scroll
- **Ticker** — Role text cycles through 4 values
- **Orbs** — Floating gradient blobs in hero background
- **Avatar orbit** — Tech pills orbit the avatar
- **Project filters** — Click to filter projects by category
- **Floating cards** — Gently float up/down

---

## 🔮 Future Backend Steps (Dynamic Content)
When you're ready to make it dynamic:

1. **Database migrations** — Create tables: `projects`, `experiences`, `skills`, `contact_messages`
2. **Models & Controllers** — `Project`, `Experience`, `Skill`
3. **Admin panel** — Use Laravel Filament or build a custom blade admin
4. **Pass data to view** — In `web.php`: `return view('home', compact('projects', 'experiences'))`
5. **Blade loops** — Replace static project cards with `@foreach($projects as $project)`

---

Built with ❤️ — Syne + DM Sans + JetBrains Mono fonts, no build tools required.