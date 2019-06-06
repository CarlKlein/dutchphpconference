<?php

namespace Carl\Greet;

class Greet {
    static function getGreeting(string $name): string {
      return self::getGreetingText() . " $name";
    }

    private static function getGreetingText(): string {
        $time = date('G', time());
        if ($time < 12) {
            return 'Good Morning';
        }
        if ($time < 15) {
            return 'Good Afternoon';
        }
        return 'Good evening';
    }
}
