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

    public function getProfile() {
        return InstagramFeed::for(self::PROFILE_NAME);
    }

    public function getImages() {
        $userProfile = $this->getProfile();
        if(!$userProfile?->profile) {
            return [];
        }
        return $userProfile->feeds();
        // ->filter(fn($feed) => strtolower($feed?->type) == 'image')
        // ->map(fn($feed) => $feed->image);
    }
}