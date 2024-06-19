<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public const TABLE = 'post';
    public const ID = 'id';

    public const USER_ID = 'user_id';
    public const TITLE = 'title';
    public const BODY = 'body';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    protected $guarded = [self::ID];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
