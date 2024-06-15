<?php 
  namespace App\Models;

  use Illuminate\Database\Eloquent\Factories\HasFactory;
  use Illuminate\Database\Eloquent\Model;

  class Geojson extends Model {
      use HasFactory;
      protected $table = 'geojson';
      public function workspace(){
          return $this -> belongsTo(workspace::class, 'workspace', 'nama');
      }
  }
?>