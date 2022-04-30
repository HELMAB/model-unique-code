<?php

namespace Helmab\ModelUniqueCode;

use Helmab\ModelUniqueCode\Traits\HasModelUniqueCode;

class ModelUniqueCode
{
    use HasModelUniqueCode;

    public function __toString()
    {
        return $this->random();
    }
}
