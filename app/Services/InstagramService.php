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

    private function getProfile() {
        return InstagramFeed::for(self::PROFILE_NAME);
    }

    public function getImages()  {
        $feeds = $this->getProfile();

        return $feeds;
        $images = [];
        foreach($feeds as $feed) {
            if (!strtolower($feed?->type) == 'image')
                continue;
            $images[] = $feed->url;
        }

        return $images;
    }
}