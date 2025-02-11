<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_menu',
        'body_menu',
        'img_menu',
        'menu_category_fk',
    ];

    public function menuCategory()
    {
        return $this->belongsTo(MenuCategory::class, 'menu_category_fk'); // 'menu_category_fk' — это внешний ключ в таблице menus
    }
}
