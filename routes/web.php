<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController_pharmacy;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('index_pharmacy_admin', [CustomAuthController_pharmacy::class, 'dashboard_pharmacy']); 
Route::get('pharmacy-admin/login', [CustomAuthController_pharmacy::class, 'index_pharmacy'])->name('pharmacy-admin/login');
Route::post('pharmacy-admin/custom-login', [CustomAuthController_pharmacy::class, 'customLogin_pharmacy'])->name('pharmacy-admin/login.custom'); 
Route::get('pharmacy-admin/register', [CustomAuthController_pharmacy::class, 'registration_pharmacy'])->name('pharmacy-admin/register');
Route::post('pharmacy-admin/custom-registration', [CustomAuthController_pharmacy::class, 'customRegistration_pharmacy'])->name('pharmacy-admin/register.custom'); 
Route::get('signout', [CustomAuthController_pharmacy::class, 'signOut_pharmacy'])->name('signout');

use App\Http\Controllers\CustomAuthController;
Route::get('index_admin', [CustomAuthController::class, 'dashboard']); 
Route::get('admin/login', [CustomAuthController::class, 'index'])->name('admin/login');
Route::post('admin/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('admin/register', [CustomAuthController::class, 'registration'])->name('admin/register');
Route::post('admin/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



Route::get('/', function () {
        return view('index');
    })->name('page');
    
    Route::get('/home', function () {
        return view('index');
    })->name('page');

Route::get('/index', function () {
    return view('index');
})->name('page');

Route::get('/index-1', function () {
    return view('index-1');
})->name('index-1');
Route::get('/index-2', function () {
    return view('index-2');
})->name('index-2');
Route::get('/index-3', function () {
    return view('index-3');
})->name('index-3');
Route::get('/index-4', function () {
    return view('index-4');
})->name('index-4');
Route::get('/index-5', function () {
    return view('index-5');
})->name('index-5');
Route::get('/index-9', function () {
    return view('index-9');
})->name('index-9');
Route::get('/index-10', function () {
    return view('index-10');
})->name('index-10');
Route::get('/index-11', function () {
    return view('index-11');
})->name('index-11');
Route::get('/index-12', function () {
    return view('index-12');
})->name('index-12');
Route::get('/index-13', function () {
    return view('index-13');
})->name('index-13');
Route::get('/index-14', function () {
    return view('index-14');
})->name('index-14');
Route::get('/doctor-dashboard', function () {
    return view('doctor-dashboard');
});
Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');
Route::get('/schedule-timings', function () {
    return view('schedule-timings');
})->name('schedule-timings');;
Route::get('/my-patients', function () {
    return view('my-patients');
});
Route::get('/patient-profile', function () {
    return view('patient-profile');
})->name('patient-profile');
Route::get('/chat-doctor', function () {
    return view('chat-doctor');
})->name('chat-doctor');
Route::get('/invoices', function () {
    return view('invoices');
});
Route::get('/doctor-profile-settings', function () {
    return view('doctor-profile-settings');
});
Route::get('/reviews', function () {
    return view('reviews');
});
Route::get('/doctor-register', function () {
    return view('doctor-register');
})->name('doctor-register');
Route::get('/map-grid', function () {
    return view('map-grid');
})->name('map-grid');
Route::get('/map-list', function () {
    return view('map-list');
})->name('map-list');
Route::get('/map-list-1', function () {
    return view('map-list-1');
})->name('map-list-1');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/doctor-profile', function () {
    return view('doctor-profile');
})->name('doctor-profile');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/booking-success', function () {
    return view('booking-success');
})->name('booking-success');
Route::get('/patient-dashboard', function () {
    return view('patient-dashboard');
})->name('patient-dashboard');
Route::get('/favourites', function () {
    return view('favourites');
})->name('favourites');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');
Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');
Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
Route::get('/components', function () {
    return view('components');
})->name('components');
Route::get('/invoice-view', function () {
    return view('invoice-view');
})->name('invoice-view');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/add-billing', function () {
    return view('add-billing');
})->name('add-billing');
Route::get('/add-prescription', function () {
    return view('add-prescription');
})->name('add-prescription');
Route::get('/edit-billing', function () {
    return view('edit-billing');
})->name('edit-billing');
Route::get('/edit-prescription', function () {
    return view('edit-prescription');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/social-media', function () {
    return view('social-media');
})->name('social-media');
Route::get('/term-condition', function () {
    return view('term-condition');
})->name('term-condition');
Route::get('/doctor-change-password', function () {
    return view('doctor-change-password');
})->name('doctor-change-password');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/doctor-add-blog', function () {
    return view('doctor-add-blog');
})->name('doctor-add-blog');
Route::get('/doctor-blog', function () {
    return view('doctor-blog');
})->name('doctor-blog');
Route::get('/doctor-pending-blog', function () {
    return view('doctor-pending-blog');
})->name('doctor-pending-blog');
Route::get('/edit-blog', function () {
    return view('edit-blog');
})->name('edit-blog');
Route::get('/payment-success', function () {
    return view('payment-success');
})->name('payment-success');
Route::get('/pharmacy-details', function () {
    return view('pharmacy-details');
})->name('pharmacy-details');
Route::get('/pharmacy-index', function () {
    return view('pharmacy-index');
})->name('pharmacy-index');
Route::get('/pharmacy-search', function () {
    return view('pharmacy-search');
})->name('pharmacy-search');
Route::get('/product-all', function () {
    return view('product-all');
})->name('product-all');
Route::get('/product-checkout', function () {
    return view('product-checkout');
})->name('product-checkout');
Route::get('/product-description', function () {
    return view('product-description');
})->name('product-description');
Route::get('/product-healthcare', function () {
    return view('product-healthcare');
})->name('product-healthcare');
Route::get('/accounts', function () {
    return view('accounts');
})->name('accounts');
Route::get('/available-timings', function () {
    return view('available-timings');
})->name('available-timings');
Route::get('/dependent', function () {
    return view('dependent');
})->name('dependent');
Route::get('/doctor-register-step1', function () {
    return view('doctor-register-step1');
})->name('doctor-register-step1');
Route::get('/doctor-register-step2', function () {
    return view('doctor-register-step2');
})->name('doctor-register-step2');
Route::get('/doctor-register-step3', function () {
    return view('doctor-register-step3');
})->name('doctor-register-step3');
Route::get('/index-4', function () {
    return view('index-4');
})->name('index-4');
Route::get('/index-8', function () {
    return view('index-8');
})->name('index-8');
Route::get('/index-6', function () {
    return view('index-6');
})->name('index-6');
Route::get('/index-7', function () {
    return view('index-7');
})->name('index-7');
Route::get('/medical-details', function () {
    return view('medical-details');
})->name('medical-details');
Route::get('/medical-records', function () {
    return view('medical-records');
})->name('medical-records');
Route::get('/orders-list', function () {
    return view('orders-list');
})->name('orders-list');
Route::get('/patient-accounts', function () {
    return view('patient-accounts');
})->name('patient-accounts');
Route::get('/patient-register-step1', function () {
    return view('patient-register-step1');
})->name('patient-register-step1');
Route::get('/patient-register-step2', function () {
    return view('patient-register-step2');
})->name('patient-register-step2');
Route::get('/patient-register-step3', function () {
    return view('patient-register-step3');
})->name('patient-register-step3');
Route::get('/patient-register-step4', function () {
    return view('patient-register-step4');
})->name('patient-register-step4');
Route::get('/patient-register-step5', function () {
    return view('patient-register-step5');
})->name('patient-register-step5');
Route::get('/pharmacy-register', function () {
    return view('pharmacy-register');
})->name('pharmacy-register');
Route::get('/pharmacy-register-step1', function () {
    return view('pharmacy-register-step1');
})->name('pharmacy-register-step1');
Route::get('/pharmacy-register-step2', function () {
    return view('pharmacy-register-step2');
})->name('pharmacy-register-step2');
Route::get('/pharmacy-register-step3', function () {
    return view('pharmacy-register-step3');
})->name('pharmacy-register-step3');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/membership-details', function () {
    return view('membership-details');
})->name('membership-details');
Route::get('/onboarding-availability', function () {
    return view('onboarding-availability');
})->name('onboarding-availability');
Route::get('/onboarding-consultation', function () {
    return view('onboarding-consultation');
})->name('onboarding-consultation');
Route::get('/onboarding-cost', function () {
    return view('onboarding-cost');
})->name('onboarding-cost');
Route::get('/onboarding-email-otp', function () {
    return view('onboarding-email-otp');
})->name('onboarding-email-otp');
Route::get('/onboarding-email-step-2-verify', function () {
    return view('onboarding-email-step-2-verify');
})->name('onboarding-email-step-2-verify');
Route::get('/onboarding-email', function () {
    return view('onboarding-email');
})->name('onboarding-email');
Route::get('/onboarding-lock', function () {
    return view('onboarding-lock');
})->name('onboarding-lock');
Route::get('/onboarding-password', function () {
    return view('onboarding-password');
})->name('onboarding-password');
Route::get('/onboarding-payments', function () {
    return view('onboarding-payments');
})->name('onboarding-payments');
Route::get('/onboarding-personalize', function () {
    return view('onboarding-personalize');
})->name('onboarding-personalize');
Route::get('/onboarding-phone-otp', function () {
    return view('onboarding-phone-otp');
})->name('onboarding-phone-otp');
Route::get('/onboarding-phone', function () {
    return view('onboarding-phone');
})->name('onboarding-phone');
Route::get('/onboarding-preferences', function () {
    return view('onboarding-preferences');
})->name('onboarding-preferences');
Route::get('/onboarding-verification', function () {
    return view('onboarding-verification');
})->name('onboarding-verification');
Route::get('/onboarding-verify-account', function () {
    return view('onboarding-verify-account');
})->name('onboarding-verify-account');
Route::get('/onboarding-identity', function () {
    return view('onboarding-identity');
})->name('onboarding-identity');
Route::get('/patient-dependant-details', function () {
    return view('patient-dependant-details');
})->name('patient-dependant-details');
Route::get('/patient-details', function () {
    return view('patient-details');
})->name('patient-details');
Route::get('/patient-email-otp', function () {
    return view('patient-email-otp');
})->name('patient-email-otp');
Route::get('/patient-email', function () {
    return view('patient-email');
})->name('patient-email');
Route::get('/patient-family-details', function () {
    return view('patient-family-details');
})->name('patient-family-details');
Route::get('/patient-other-details', function () {
    return view('patient-other-details');
})->name('patient-other-details');
Route::get('/patient-password', function () {
    return view('patient-password');
})->name('patient-password');
Route::get('/patient-personalize', function () {
    return view('patient-personalize');
})->name('patient-personalize');
Route::get('/patient-phone-otp', function () {
    return view('patient-phone-otp');
})->name('patient-phone-otp');
Route::get('/patient-phone', function () {
    return view('patient-phone');
})->name('patient-phone');

/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () { 
        Route::get('/index_admin', function () {
        return view('admin.index_admin');
        })->name('pagee');
        Route::get('/appointment-report', function () {
        return view('admin.appointment-report');
        })->name('appointment-report');
        Route::get('/specialities', function () {
        return view('admin.specialities');
        })->name('specialities');
        Route::get('/doctor-list', function () {
        return view('admin.doctor-list');
        })->name('doctor-list');
        Route::get('/patient-list', function () {
        return view('admin.patient-list');
        })->name('patient-list');
        Route::get('/reviews', function () {
        return view('admin.reviews');
        })->name('reviews');
        Route::get('/transaction', function () {
        return view('admin.transaction');
        })->name('transaction');
        Route::get('/settings', function () {
        return view('admin.settings');
        })->name('settings');
        Route::get('/invoice-report', function () {
        return view('admin.invoice-report');
        })->name('invoice-report');
        Route::get('/profile', function () {
        return view('admin.profile');
        })->name('profile');
        Route::get('/login', function () {
        return view('admin.login');
        })->name('login');
        Route::get('/register', function () {
        return view('admin.register');
        })->name('register');
        Route::get('/forgot-password', function () {
        return view('admin.forgot-password');
        })->name('forgot-password');
        Route::get('/lock-screen', function () {
        return view('admin.lock-screen');
        })->name('lock-screen');
        Route::get('/error-404', function () {
        return view('admin.error-404');
        })->name('error-404');
        Route::get('/error-500', function () {
        return view('admin.error-500');
        })->name('error-500');
        Route::get('/blank-page', function () {
        return view('admin.blank-page');
        })->name('blank-page');
        Route::get('/components', function () {
        return view('admin.components');
        })->name('components');
        Route::get('/form-basic-inputs', function () {
        return view('admin.form-basic-inputs');
        })->name('form-basic');
        Route::get('/form-input-groups', function () {
        return view('admin.form-input-groups');
        })->name('form-inputs');
        Route::get('/form-horizontal', function () {
        return view('admin.form-horizontal');
        })->name('form-horizontal');
        Route::get('/form-vertical', function () {
        return view('admin.form-vertical');
        })->name('form-vertical');
        Route::get('/form-mask', function () {
        return view('admin.form-mask');
        })->name('form-mask');
        Route::get('/form-validation', function () {
        return view('admin.form-validation');
        })->name('form-validation');
        Route::get('/tables-basic', function () {
        return view('admin.tables-basic');
        })->name('tables-basic');
        Route::get('/data-tables', function () {
        return view('admin.data-tables');
        })->name('data-tables');
        Route::get('/invoice', function () {
        return view('invoice');
        })->name('invoice');
        Route::get('/calendar', function () {
        return view('admin.calendar');
        })->name('calendar');
        Route::get('/blog', function () {
        return view('admin.blog');
        })->name('blog');
        Route::get('/blog-details', function () {
        return view('admin.blog-details');
        })->name('blog-details');
        Route::get('/add-blog', function () {
        return view('admin.add-blog');
        })->name('add-blog');
        Route::get('/edit-blog', function () {
        return view('admin.edit-blog');
        })->name('edit-blog');
        Route::get('/product-list', function () {
        return view('admin.product-list');
        })->name('product-list');
        Route::get('/pharmacy-list', function () {
        return view('admin.pharmacy-list');
        })->name('pharmacy-list');
        Route::get('/pending-blog', function () {
        return view('admin.pending-blog');
        })->name('pending-blog');
        Route::get('/account-settings', function () {
        return view('admin.account-settings');
        })->name('account-settings');
        Route::get('/active-blog', function () {
        return view('admin.active-blog');
        })->name('active-blog');
        Route::get('/add-profile', function () {
        return view('admin.add-profile');
        })->name('add-profile');
         Route::get('/change-password', function () {
        return view('admin.change-password');
        })->name('change-password');
        Route::get('/conform-email', function () {
        return view('admin.conform-email');
        })->name('conform-email');
         Route::get('/email-settings', function () {
        return view('admin.email-settings');
        })->name('email-settings');
        Route::get('/income-report', function () {
        return view('admin.income-report');
        })->name('income-report');
        Route::get('/login-settings', function () {
        return view('admin.login-settings');
        })->name('login-settings');
        Route::get('/past-appointments', function () {
        return view('admin.past-appointments');
        })->name('past-appointments');
        Route::get('/payment-gateway', function () {
        return view('admin.payment-gateway');
        })->name('payment-gateway');
        Route::get('/pharmacy-category', function () {
        return view('admin.pharmacy-category');
        })->name('pharmacy-category');
        Route::get('/product-category', function () {
        return view('admin.product-category');
        })->name('product-category');
        Route::get('/ratings', function () {
        return view('admin.ratings');
        })->name('ratings');
        Route::get('/setting-notifications', function () {
        return view('admin.setting-notifications');
        })->name('setting-notifications');
        Route::get('/setting-preference', function () {
        return view('admin.setting-preference');
        })->name('setting-preference');
        Route::get('/sms-gateway', function () {
        return view('admin.sms-gateway');
        })->name('sms-gateway');
        Route::get('/upcoming-appointments', function () {
        return view('admin.upcoming-appointments');
        })->name('upcoming-appointments');
        Route::get('/user-reports', function () {
        return view('admin.user-reports');
        })->name('user-reports');
    });
/********************ADMIN ROUTES END******************************/
/********************PHARMACY ADMIN********************************/
Route::Group(['prefix' => 'pharmacy-admin'], function () { 
    Route::get('/index_pharmacy_admin', function () {
    return view('pharmacy-admin.index_pharmacy_admin');
    })->name('pagees');
    Route::get('/products', function () {
    return view('pharmacy-admin.products');
    })->name('products');
    Route::get('/add-product', function () {
    return view('pharmacy-admin.add-product');
    })->name('add-product');
    Route::get('/outstock', function () {
    return view('pharmacy-admin.outstock');
    })->name('outstock');
    Route::get('/expired', function () {
    return view('pharmacy-admin.expired');
    })->name('expired');
    Route::get('/categories', function () {
    return view('pharmacy-admin.categories');
    })->name('categories');
     Route::get('/login', function () {
    return view('pharmacy-admin.login');
    })->name('login');
    Route::get('/register', function () {
    return view('pharmacy-admin.register');
    })->name('register');
    Route::get('/purchase', function () {
    return view('pharmacy-admin.purchase');
    })->name('purchase');
    Route::get('/add-purchase', function () {
    return view('pharmacy-admin.add-purchase');
    })->name('add-purchase');
    Route::get('/order', function () {
    return view('pharmacy-admin.order');
    })->name('order');
    Route::get('/sales', function () {
    return view('pharmacy-admin.sales');
    })->name('sales');
    Route::get('/supplier', function () {
    return view('pharmacy-admin.supplier');
    })->name('supplier');
    Route::get('/add-supplier', function () {
    return view('pharmacy-admin.add-supplier');
    })->name('add-supplier');
    Route::get('/transactions-list', function () {
    return view('pharmacy-admin.transactions-list');
    })->name('transactions-list');
    Route::get('/invoice-report', function () {
    return view('pharmacy-admin.invoice-report');
    })->name('invoice-report');
    Route::get('/profile', function () {
    return view('pharmacy-admin.profile');
    })->name('profile');
    Route::get('/settings', function () {
    return view('pharmacy-admin.settings');
    })->name('settings');
    Route::get('/customer-orders', function () {
    return view('pharmacy-admin.customer-orders');
    })->name('customer-orders');
    Route::get('/edit-product', function () {
    return view('pharmacy-admin.edit-product');
    })->name('edit-product');
    Route::get('/edit-purchase', function () {
    return view('pharmacy-admin.edit-purchase');
    })->name('edit-purchase');
    Route::get('/edit-supplier', function () {
    return view('pharmacy-admin.edit-supplier');
    })->name('edit-supplier');
    Route::get('/invoice', function () {
    return view('pharmacy-admin.invoice');
    })->name('invoice');
    Route::get('/product-list', function () {
    return view('pharmacy-admin.product-list');
    })->name('product-list');
    });