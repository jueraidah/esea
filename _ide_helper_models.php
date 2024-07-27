<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Adstype
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Adstype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adstype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adstype query()
 */
	class Adstype extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property-read \App\Models\District|null $district
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Iklan> $iklans
 * @property-read int|null $iklans_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\License> $licenses
 * @property-read int|null $licenses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Permit> $permits
 * @property-read int|null $permits_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\District
 *
 * @property int $id
 * @property string $district_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company|null $company
 * @method static \Illuminate\Database\Eloquent\Builder|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District query()
 * @method static \Illuminate\Database\Eloquent\Builder|District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereDistrictName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereUpdatedAt($value)
 */
	class District extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Iklan
 *
 * @property-read \App\Models\Company|null $company
 * @method static \Database\Factories\IklanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Iklan query()
 */
	class Iklan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\License
 *
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Positionholder> $positionholders
 * @property-read int|null $positionholders_count
 * @method static \Illuminate\Database\Eloquent\Builder|License newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|License newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|License query()
 */
	class License extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permit
 *
 * @property int $id
 * @property string|null $profile_pic
 * @property string|null $username
 * @property string|null $nama
 * @property string|null $birthdate
 * @property string|null $birthplace
 * @property string|null $tel
 * @property string|null $license_number
 * @property string|null $lokasi
 * @property string|null $identification
 * @property string|null $kewarganegaraan
 * @property string|null $gender
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $address3
 * @property string|null $wilayah
 * @property string|null $negeri
 * @property int $status
 * @property int $pemeriksa_status
 * @property int $penyokong_status
 * @property int $pelulus_status
 * @property string|null $pemeriksa_comment
 * @property string|null $penyokong_comment
 * @property string|null $pelulus_comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Permit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereAddress3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereBirthplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereIdentification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereKewarganegaraan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereLicenseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereNegeri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit wherePelulusComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit wherePelulusStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit wherePemeriksaComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit wherePemeriksaStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit wherePenyokongComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit wherePenyokongStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereProfilePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permit whereWilayah($value)
 */
	class Permit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Positionholder
 *
 * @property-read \App\Models\License|null $company
 * @method static \Illuminate\Database\Eloquent\Builder|Positionholder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Positionholder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Positionholder query()
 */
	class Positionholder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RenewIklan
 *
 * @method static \Database\Factories\RenewIklanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|RenewIklan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RenewIklan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RenewIklan query()
 */
	class RenewIklan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $username
 * @property string $nama
 * @property string $noic
 * @property string $name
 * @property string $email
 * @property string $kewarganegaraan
 * @property string $alamat
 * @property string $dokumen
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $user_level
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $department
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDokumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereKewarganegaraan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNoic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

