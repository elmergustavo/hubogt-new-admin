<?php

namespace App\Models;

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
// use JoelButcher\Socialstream\SetsProfilePhotoFromUrl;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser, HasTenants, MustVerifyEmail
{
    use HasApiTokens;
    use HasConnectedAccounts;
    // use SetsProfilePhotoFromUrl;
    use HasFactory;
    // use HasProfilePhoto
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
        'role'
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
        'avatar_url',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin')
        {

            return $this->role === 'admin' && $this->status === 'active';
        }
        if ($panel->getId() === 'seller')
        {

            return $this->role === 'vendor' && $this->status === 'active';
        }
        if ($panel->getId() === 'service')
        {

            return $this->role === 'service' && $this->status === 'active';
        }

        if ($panel->getId() === 'app')
        {

            return $this->role === 'admin' && $this->status === 'active';
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

    // public function getAvatarUrlAttribute()
    // {
    //     if (filter_var($this->profile_photo_path, FILTER_VALIDATE_URL))
    //     {
    //         return $this->profile_photo_path;
    //     }

    //     return $this->getPhotoUrl();
    // }


    // public function setProfilePhotoFromUrl(string $url)
    // {
    //     $file = sys_get_temp_dir() . '/' . Str::uuid()->toString();

    //     // Base64
    //     if (str_starts_with($url, 'data:image'))
    //     {
    //         $name = $this->id . '-' . time() . '.png';
    //         file_put_contents($file, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $url)));
    //         $this->updateProfilePhoto(new UploadedFile($file, $name));
    //     }
    //     else
    //     {
    //         $name = pathinfo($url)['basename'];
    //         $response = Http::get($url);

    //         //Determine if the status code is >= 200 and < 300
    //         if ($response->successful())
    //         {
    //             file_put_contents($file, $response);
    //             $this->updateProfilePhoto(new UploadedFile($file, $name));
    //         }
    //         else
    //         {
    //             session()->flash('flash.banner', 'Unable to retrive image');
    //             session()->flash('flash.bannerStyle', 'danger');
    //         }
    //     }
    // }
}
