<?php

namespace Mbates\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MbatesUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
