<?php

namespace Vinkas\Visa\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait SendsEmailConfirmations
{
  /**
    * Create a new token for the user.
    *
    * @return string
  */
  protected function createNewToken()
  {
    return hash_hmac('sha256', Str::random(40), $this->getHashKey());
  }

  protected function getHashKey() {
    $key = config('app.key');

    if (Str::startsWith($key, 'base64:')) {
      $key = base64_decode(substr($key, 7));
    }

    return $key;
  }

}
