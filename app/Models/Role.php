<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{

    const ADMIN = 'admin';

    const EDITOR = 'editor';

    const AUTHOR = 'author';

    const CONTRIBUTOR = 'contributer';

    const READER = 'reader';



    public const ROLES = [
        self::ADMIN,
        self::EDITOR,
        self::AUTHOR,
        self::READER
    ];


    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
