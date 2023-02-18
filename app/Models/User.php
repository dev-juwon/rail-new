<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use App\Models\Transaction;
use App\Models\Product;
use App\Enums\UserType;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'surname',
        'username',
        'phone',
        'email',
        'password',
        'role_id',
        'plan_id',
        
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
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['referral_link'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fullname()
    {
        return $this->firstname .' '.$this->middlename.' '.$this->surname;
    }
    
       

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function plan() {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

     /**
     * @param \App\Enums\UserRole $role
     * @return bool
     */
    public function hasPlan($plan): bool
    {
        return $this->plan->name === $plan;
    }

     /**
     * Get the user's referral link.
     *
     * @return string
     */
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username]);
    }

    /**
     * A user has a referrer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_user_id', 'id');
    }

    /**
     * A user has many referrals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_user_id', 'id');
    }


    public function downlines() {
        return $this->hasMany(User::class, 'referrer_user_id');
    }

    public function uploadProfilePicture(UploadedFile $profilePicture): void
    {
        $this->update([
            'image' => $profilePicture->storePublicly('profile', ['disk' => 'public'])
        ]);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class, 'user_id')->latest();
    }

}


