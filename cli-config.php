<?php
// cli-config.php
namespace Nekonyx\RYWT;
require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);