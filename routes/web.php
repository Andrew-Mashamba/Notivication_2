<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\WarehouseController;
use App\Models\departmentsList;
use App\Http\Livewire\VerifyOtp;
use App\Models\approvals;
use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Traits\MailSender;


// Route for logging out
Route::get('/logoutx', function () {
    Auth::logout(); // Log the user out

    // Redirect to a specified route after logout
    return redirect('/login'); // You can customize the redirect route
})->name('logoutx');

Route::post('/update-steps-order', [StepController::class, 'updateOrder'])->name('update-steps-order');
Route::post('/sendmail', [mailController::class, 'send'])->name('sendmail');


Route::get('/get-districts/{region}', [LocationController::class, 'getDistricts']);
Route::get('/get-wards/{district}', [LocationController::class, 'getWards']);

Route::post('/warehouse/register', [WarehouseController::class, 'store'])->name('warehouse.register');

Route::get('/warehouses', [WarehouseController::class, 'getWarehouses']);


Route::get('/microfinance_registration_link',[\App\Http\Controllers\CompanyRequest::class,'index']);

Route::post('registration/submition',[\App\Http\Controllers\CompanyRequest::class,'create'])->name('saccossRequestForm');

// Redirect to login page
Route::redirect('/', 'login');

// Route for password reset form submission
Route::post('/password-reset', function (Illuminate\Http\Request $request) {
    $email = $request->input('email');

    // Check if email is registered
    if (User::where('email',$email)->get()->count() == 1) {
        Session::put('status',null);

        // Create/update password reset approval process record
        $update_value = approvals::updateOrCreate(
            [
                'process_id' => $email,
                'user_id' => null
            ],
            [
                'institution' => '',
                'process_name' => 'passwordReset',
                'process_description' => 'Password Reset request for user with email - '.$email,
                'approval_process_description' => '',
                'process_code' => '35',
                'process_id' => null,
                'process_status' => 'PENDING',
                'approval_status' => 'PENDING',
                'user_id'  => null,
                'team_id'  => '',
                'reset_email' => $email,
                'edit_package'=> null
            ]
        );

        $adminRoleId = departmentsList::where('department_name', 'ADMINISTRATION')->value('id');
        $admins = User::where('department', $adminRoleId)->get();
        foreach ($admins as $admin ){

            $this->composeEmail($admin->email, 'Dear '.$admin->name.', User '. User::where('email', $email)->value('name') .' has requested to reset his/her password');
        }

        //


        // Redirect to main dashboard page
        return redirect()->route('System');

    } else {
        // Email is not registered, redirect to password reset form with error message
        Session::put('status',"This password is not registered");
        return redirect()->route('password.request');
    }
})->name('password-reset');

// Group routes that require authentication
Route::middleware(['auth:sanctum', 'verified'])->group(function () {



    // Route for the main dashboard page
    Route::get('/System', \App\Http\Livewire\System::class)->name('System');

    // Route for OTP verification page
    Route::get('/verify-user', function () {
        return view('otp');
    })->name('verify-user');


    Route::fallback(function() {
        return view('pages/utility/404');
    });
});


