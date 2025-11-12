<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/faqs', function () {
    return view('pages.faqs');
})->name('faqs');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('testimonials');

Route::prefix('pages')->name('pages.')->group(function () {
    Route::get('/service-details', function () {
        return view('pages.service-single');
    })->name('service.single');

    Route::get('/portfolio-details', function () {
        return view('pages.portfolio-single');
    })->name('portfolio.single');

    Route::get('/team-details', function () {
        return view('pages.team-single');
    })->name('team.single');
});

// Anda mungkin perlu memperbarui logika 'active' di header.blade.php
// menjadi: request()->routeIs('pages.*') atau sejenisnya.

// Rute untuk 404
Route::fallback(function () {
    return view('pages.404'); // Pastikan Anda membuat pages/404.blade.php
});




/// Routes admin

Route::prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.pages.home');
    })->name('dashboard');

    // Pages Management (VCMS Editor)
    Route::prefix('pages')->name('pages.')->group(function () {
        Route::get('/home', function () {
            return view('admin.pages.home');
        })->name('home');

        Route::get('/about', function () {
            return view('admin.pages.about');
        })->name('about');

        Route::get('/services', function () {
            return view('admin.pages.services');
        })->name('services');

        Route::get('/portfolio', function () {
            return view('admin.pages.portfolio');
        })->name('portfolio');

        Route::get('/team', function () {
            return view('admin.pages.team');
        })->name('team');

        Route::get('/pricing', function () {
            return view('admin.pages.pricing');
        })->name('pricing');

        Route::get('/contact', function () {
            return view('admin.pages.contact');
        })->name('contact');
    });

    // Portfolio Management
    Route::prefix('portfolio')->name('portfolio.')->group(function () {
        Route::get('/', function () {
            return view('admin.portfolio.index');
        })->name('index');
        
        Route::get('/create', function () {
            return view('admin.portfolio.create');
        })->name('create');
        
        Route::get('/{id}/edit', function ($id) {
            return view('admin.portfolio.edit', compact('id'));
        })->name('edit');
    });

    // Services Management
    Route::prefix('services')->name('services.')->group(function () {
        Route::get('/', function () {
            return view('admin.services.index');
        })->name('index');
        
        Route::get('/create', function () {
            return view('admin.services.create');
        })->name('create');
        
        Route::get('/{id}/edit', function ($id) {
            return view('admin.services.edit', compact('id'));
        })->name('edit');
    });

    // Team Management
    Route::prefix('team')->name('team.')->group(function () {
        Route::get('/', function () {
            return view('admin.team.index');
        })->name('index');
        
        Route::get('/create', function () {
            return view('admin.team.create');
        })->name('create');
        
        Route::get('/{id}/edit', function ($id) {
            return view('admin.team.edit', compact('id'));
        })->name('edit');
    });

    // Testimonials Management
    Route::prefix('testimonials')->name('testimonials.')->group(function () {
        Route::get('/', function () {
            return view('admin.testimonials.index');
        })->name('index');
        
        Route::get('/create', function () {
            return view('admin.testimonials.create');
        })->name('create');
        
        Route::get('/{id}/edit', function ($id) {
            return view('admin.testimonials.edit', compact('id'));
        })->name('edit');
    });

    // Settings
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/general', function () {
            return view('admin.settings.general');
        })->name('general');
    });

    // Media Library
    Route::get('/media-library', function () {
        return view('admin.media.library');
    })->name('media.library');

    // Logout
    Route::get('/logout', function () {
        // Handle logout logic here
        return redirect()->route('home');
    })->name('logout');
});