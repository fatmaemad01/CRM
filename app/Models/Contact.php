<?php

namespace App\Models;

use App\Models\Scopes\UserContactScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    public static $disk = 'public';

    protected $fillable = [
        'first_name', 'surname', 'user_id', 'company', 'job_title', 'email', 'phone', 'birthday', 'note', 'image'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    protected static function booted()
    {
        static::addGlobalScope(new UserContactScope);
    }

    public static function uploadImage($file)
    {
        $path = $file->store('/contacts', [
            'disk' =>  static::$disk,
        ]);
        return $path;
    }

    public static function deleteImage($path)
    {
        return Storage::disk(Contact::$disk)->delete($path);
    }
}
