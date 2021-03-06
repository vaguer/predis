<?php

namespace Predis\Commands;

use Predis\Helpers;

class SubscribeByPattern extends Command {
    public function getId() {
        return 'PSUBSCRIBE';
    }

    public function filterArguments(Array $arguments) {
        return Helpers::filterArrayArguments($arguments);
    }

    protected function canBeHashed() {
        return false;
    }
}
