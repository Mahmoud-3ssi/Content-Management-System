<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    const ADMIN = 'admin';

    const EDITOR = 'editor';

    const AUTHOR = 'author';

    const CONTRIBUTOR = 'contributer';

    const READER = 'reader';
}
