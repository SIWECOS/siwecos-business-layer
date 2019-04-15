<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\WpPasswordAuthentication;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'org_size', 'agb', 'preferred_language',
    ];

    protected $hidden = [
        'password', 'passwordreset_token', 'id', 'token_id', 'activation_key'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    /**
     * Returns the Eloquent Relationship for App\Token
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function token()
    {
        return $this->belongsTo(Token::class);
    }

    /**
     * Verifies if a given $passwordCandidate will match the saved hashed password.
     * Updates an old wordpress hash to the modern implementation shipped by laravel.
     *
     * @param string $passwordCandidate
     * @return void
     */
    public function verifyPassword(string $passwordCandidate)
    {
        // New modern password hash
        if (Hash::check($passwordCandidate, $this->password)) {
            return true;
        }

        // Old wordprss based password hash
        // Will be removed in a later version
        // Update to modern password hash if password is correct
        if ((new WpPasswordAuthentication(8, true))->CheckPassword($passwordCandidate, $this->password)) {
            $this->password = Hash::make($passwordCandidate);
            $this->save();

            return true;
        }

        return false;
    }

    public function delete()
    {
        $this->token->delete();

        parent::delete();
    }
}
