<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }*/

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomPassword($token));
    }
}


class CustomPassword extends ResetPassword
{
    public $token = null;

    public function __construct($token)
    {
        parent::__construct($token);
        $this->token = $token;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('إستعادة كلمة المرور')
            ->line('نحن نرسل هذه الرسالة الإلكترونية لأننا تلقينا طلبًا بنسيان كلمة المرور.')
            ->action('إعادة ضبط كلمة المرور', route('password.reset', ["token" => $this->token]))
            ->line('إذا لم تطلب إعادة تعيين كلمة المرور ، فلا يلزم اتخاذ أي إجراء آخر. يرجى الاتصال بنا إذا لم ترسل هذا الطلب.');
    }
}
