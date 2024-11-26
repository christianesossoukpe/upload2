<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;  
    protected $table = 'articles';

  // Optionnel : définir les champs pouvant être assignés en masse
  protected $fillable = ['title', 'summary', 'image_path', 'content'];

}
