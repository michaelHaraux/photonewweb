<?php

namespace Photonew\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PhotonewUserBundle extends Bundle
{
    public function getParent()
  {
    return 'FOSUserBundle';
  }
}
