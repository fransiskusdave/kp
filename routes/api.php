<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\API\GeojsonController;
    use App\Http\Controllers\API\DesaController;
    use App\Http\Controllers\API\KecamatanController;

    Route::get('subbidang', [GeojsonController::class, 'getAllGeojson']);
    Route::get('subbidang/{filename}', [GeojsonController::class, 'getGeojsonFile']);

    Route::get('kelurahan', [DesaController::class, 'getAllGeojson']);
    Route::get('kelurahan/{filename}', [DesaController::class, 'getGeojsonFile']);

    Route::get('kecamatan', [KecamatanController::class, 'getAllGeojson']);
    Route::get('kecamatan/{filename}', [KecamatanController::class, 'getGeojsonFile']);

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
?>