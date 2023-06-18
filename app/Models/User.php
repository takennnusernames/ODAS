<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Document;
use App\Models\ssDocument;
use App\Models\ejsDocument;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'address',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAssessor() {
        return $this->role === 'assessor';
    }
    
    // Relationship To User
    public function ejsDocuments() {
        return $this->hasMany(ejsDocument::class, 'user_id');
    }

    public function ssDocuments() {
        return $this->hasMany(ssDocument::class, 'user_id');
    }

    public function documents() {
        return $this->hasMany(Document::class, 'user_id');
    }

    
}
