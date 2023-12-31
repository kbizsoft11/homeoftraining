<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Auth;


class NewsLetterSubscribeModel extends Model implements AuthenticatableContract, AuthorizableContract
{
    use HasApiTokens, Authenticatable, Authorizable;

    protected $table="tbl_news_letter_subscribes";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email_id'

    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}

