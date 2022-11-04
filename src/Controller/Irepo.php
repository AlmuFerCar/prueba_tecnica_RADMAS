<?php

namespace App\Controller;

use mysql_xdevapi\Collection;

interface Irepo
{
    function getAll():Collection;
}