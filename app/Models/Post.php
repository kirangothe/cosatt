<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Shipu\Watchable\Traits\HasAuditColumn;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Post extends Model implements  HasMedia
{
    use HasFactory;

    use Notifiable;
    use InteractsWithMedia;
    use HasAuditColumn;


    protected $table = 'posts';
    protected $guarded = ['id']; 
    protected $fakeColumns = [];

    public $timestamps = false;
}
