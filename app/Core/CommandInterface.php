<?php
namespace App\Core;

interface CommandInterface
{
    public function handle($arguments);
}
