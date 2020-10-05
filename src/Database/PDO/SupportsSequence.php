<?php

namespace Virtue\Database\PDO;

interface SupportsSequence
{
    public function lastInsertedId($name = null): int;
}
