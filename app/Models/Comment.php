<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Expr\Cast;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'visible',
    ];

    protected $casts = [
        'visible' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
