<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @package App
 * @property string $email
 * @property string $merchant
 * @property double $amount
*/
class Payment extends Model
{
    protected $fillable = ['email', 'merchant', 'amount'];
    

    /**
     *
     * @param $input
     */
    public function setAmountAttribute($input)
    {
        if ($input != '') {
            $this->attributes['amount'] = $input;
        } else {
            $this->attributes['amount'] = null;
        }
    }
    
}
