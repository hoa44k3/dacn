<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Nếu tên bảng là 'categories' thì không cần khai báo $table
    protected $fillable = ['name', 'description', 'status'];

    // Nếu không sử dụng timestamps (created_at, updated_at)
    public $timestamps = false;

    // Nếu tên bảng là khác
    // protected $table = 'category';

    // Nếu có khóa chính khác
    // protected $primaryKey = 'your_primary_key';

    // Chuyển đổi kiểu dữ liệu
    protected $casts = [
        'status' => 'boolean',
    ];
}
