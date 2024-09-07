<?php
  namespace App\Http\Controllers\Api;

  use App\Http\Controllers\Controller;
  use App\Models\Desa;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Storage;
  use Illuminate\Support\Facades\URL;

  class DesaController extends Controller {

      public function getAllGeojson(Request $request) 
      {
          $geojsons = Desa::all();
          $baseUrl = URL::to('/') . '/api/kelurahan/';
      
          foreach ($geojsons as $geojson) {
              $geojson->file_geojson = $baseUrl . $geojson->file_geojson;
          }
          return response()->json($geojsons);
      }

      public function getGeojsonFile($filename)
      {
          $path = 'Kelurahan/' . $filename;  
          if (Storage::disk('public')->exists($path)) {
              $file = Storage::disk('public')->get($path);
              return response($file, 200)->header('Content-Type', 'application/json');
          } else {
              return response()->json(['message' => 'File not found.'], 404);
          }
      }
  }
?>