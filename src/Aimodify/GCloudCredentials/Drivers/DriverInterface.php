<?php
/**
 * Created by PhpStorm.
 * User: ai
 * Date: 28.04.18
 * Time: 9:40
 */

namespace Aimodify\GCloudCredentials;

interface DriverInterface
{
    public function load();

    public function save($token);

}