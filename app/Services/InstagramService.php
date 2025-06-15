<?php

namespace App\Services;

use Dymantic\InstagramFeed\InstagramFeed;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class InstagramService {
    private const PROFILE_NAME = 'deal-saudi';

    public static function auth() {
        return \Dymantic\InstagramFeed\Profile::new(self::PROFILE_NAME)->getInstagramAuthUrl();
    }

    private function getProfile() {
        return InstagramFeed::for(self::PROFILE_NAME, 4);
    }

    // public function getImages() : array  {
    //     return Cache::remember('instagram-feeds', now()->addDay(), function () {
    //         $feeds = $this->getProfile();

    //         $images = [];
    //         foreach($feeds as $index => $feed) {
    //             if (!strtolower($feed?->type) == 'image')
    //                 continue;

    //             if ($index > 5)
    //                 break;

    //             $images[$index]['image'] = $feed->thumbnail_url != '' ? $feed->thumbnail_url : $feed->url;
    //             $images[$index]['permalink'] = $feed->permalink;
    //         }
    //         return $images;
    //     });
    // }

    public function getPosts() {
        $accessToken = setting('instagram_token');

        if(!$accessToken) {
            Log::error('Instagram access token is not set.');
            return [];
        }

        return Cache::remember('instagram-feeds', now()->addDay(), function () use ($accessToken) {
            try {
                $endpoint = 'https://graph.instagram.com/me/media';
                $fields = 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp';

                $response = Http::get($endpoint, [
                    'fields' => $fields,
                    'access_token' => $accessToken
                ]);

                return collect($response->json()['data'] ?? [])
                ->filter(
                    callback: fn($item) => strtolower($item['media_type']) === 'image'
                )
                ->take(limit: setting('instagram_posts_count') ?? 6)
                ->map(
                    callback: fn($item) => [
                        'image' => $item['thumbnail_url'] ?? $item['media_url'],
                        'permalink' => $item['permalink'],
                    ]
                )
                ->toArray();
            } catch(Exception $e)
            {
                Log::error('Instagram API Error: ' . $e->getMessage());
                return [];
            }
        });
    }

    public function getImages() : array  {
        $feeds = $this->getPosts();

        if (!is_array($feeds))
            return [];

        return $feeds;
    }
}