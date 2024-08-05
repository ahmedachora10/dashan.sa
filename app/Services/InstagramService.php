<?php

namespace App\Services;

use Dymantic\InstagramFeed\InstagramFeed;

class InstagramService {

    private $profile;

    const PROFILE_NAME = 'dashan';

    public function __construct() {
        $this->profile = \Dymantic\InstagramFeed\Profile::for(self::PROFILE_NAME);
    }

    public static function auth() {
        return \Dymantic\InstagramFeed\Profile::new(self::PROFILE_NAME)->getInstagramAuthUrl();
    }

    public function getFeed() {
        return InstagramFeed::for(self::PROFILE_NAME);
    }
}