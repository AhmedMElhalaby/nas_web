<?php

use IlluminateSupportFacadesRoute;

Route::middleware(['api'])
    ->prefix('worker')
    ->group(base_path('routes/api_worker.php'));
