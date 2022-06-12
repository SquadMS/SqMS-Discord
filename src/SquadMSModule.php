<?php

namespace SquadMS\Discord;

use SquadMS\Foundation\Modularity\Contracts\SquadMSModule as SquadMSModuleContract;

class SquadMSModule extends SquadMSModuleContract
{
    public static function getIdentifier(): string
    {
        return 'sqms-discord';
    }

    public static function getName(): string
    {
        return 'SquadMS Discord';
    }
}
