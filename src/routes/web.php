<?php

use Lucky\Account\Http\Controllers\AccountController;

Route::get('account',[AccountController::class,"index"]);