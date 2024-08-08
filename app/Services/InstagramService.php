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

    public function getFeeds() {
        return InstagramFeed::for(self::PROFILE_NAME);
    }

    public function getImages() {
        $feeds = $this->getFeeds();
        if(!$feeds?->profile) {
            return [];
        }
        return $feeds->items
        ->filter(fn($feed) => strtolower($feed?->type) == 'image')
        ->map(fn($feed) => $feed->image);
    }
}