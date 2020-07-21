<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PhpParser\Node\Expr\Cast\Bool_;

class Tweet extends Model
{
    use Likable;
    protected $guarded = [];


    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    
}