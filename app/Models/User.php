<?php

namespace App\Models;

use App\Enums\UserRole;
use App\Models\Shop\Shop;
use App\Models\Shop\Vendor;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasTenants;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Laravel\Jetstream\HasProfilePhoto;
use JoelButcher\Socialstream\HasConnectedAccounts;
use Filament\Models\Contracts\HasAvatar;
use JoelButcher\Socialstream\SetsProfilePhotoFromUrl;
use Laravel\Sanctum\HasApiTokens;
use Jeffgreco13\FilamentBreezy\Traits\TwoFactorAuthenticatable;

use Illuminate\Support\Facades\Storage;
// use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements FilamentUser, HasTenants, MustVerifyEmail, HasAvatar
{
    use HasApiTokens;
    use HasConnectedAccounts;
    // use InteractsWithMedia;
    use SetsProfilePhotoFromUrl;
    use HasFactory;
    use HasProfilePhoto;
    use TwoFactorAuthenticatable;
    // {
    //     getProfilePhotoUrlAttribute as getPhotoUrl;
    // }
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'avatar_url',
        'profile_photo_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
    protected $appends = [
        // 'avatar_url',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'role' => UserRole::class,
    ];

    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }

    public function shop()
    {
        return $this->hasOne(Shop::class);
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->profile_photo_path ? Storage::url($this->profile_photo_path) : null;
    }


    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin')
        {

            return $this->role === 'admin' && $this->status;
        }
        if ($panel->getId() === 'seller')
        {

            return $this->role === 'vendor' && $this->status;
        }
        if ($panel->getId() === 'service')
        {

            return $this->role === 'service' && $this->status;
        }

        if ($panel->getId() === 'app')
        {

            return $this->role === 'admin' && $this->status;
        }
        return true;
    }

    public function canAccessTenant(Model $tenant): bool
    {
        return true;
    }

    public function getTenants(Panel $panel): array | Collection
    {
        return Team::all();
    }

    public function getRoleUserAttribute()
    {
        if ($this->role === 'user') {
            return __('Cliente');
        }
        elseif ($this->role === 'admin')
        {
            return __('Administrador');
        }
        elseif ($this->role === 'vendor')
        {
            return __('Vendedor');
        }
        elseif ($this->role === 'service')
        {
            return __('Servicio');
        }
    }



}
