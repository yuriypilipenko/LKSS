<?php

namespace LKSS\Console\Commands\Validation\Rules;

class MoveNodeRule implements Rule
{
    public function getParamsList(): array
    {
        return ['simple', 'composite'];
    }
}
