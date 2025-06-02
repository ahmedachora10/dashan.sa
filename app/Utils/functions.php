<?php

use App\DTO\ReadHeadlineDTO;
use App\Models\Headline;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (! function_exists('setting')) {

    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new Setting();
        }

        if (is_array($key)) {
            return Setting::set($key[0], $key[1]);
        }

        $value = app('settings')->firstWhere('name', $key);

        return is_null($value) ? value($default) : Setting::castValue($value->val, $value->type);
    }
}

if(!function_exists('ar_slug')) {

    function ar_slug(string $string, string $separator = '-') {
        if (is_null($string)) {
            return "";
        }

        $string = trim($string);

        $string = mb_strtolower($string, "UTF-8");;

        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

        $string = preg_replace("/[\s-]+/", " ", $string);

        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;
    }

}


if(!function_exists('short_date_name')) {

    function short_date_name(string $date) {
        $replacement = [
            'دقيقة' =>  'د',
            'دقائق' =>  'د',
            'ساعة' =>  'س',
            'يوم' =>  'ي',
            'أيام' =>  'ي',
            'شهر' =>  'ش',
            'سنة' =>  'ع',
        ];

        return str($date)->replace('منذ', '')->replace(array_keys($replacement), array_values($replacement));
    }
}

if(!function_exists('headline')) {

    function headline($key) {
        $headline = app('headlines')->firstWhere('section', $key);

        return new ReadHeadlineDTO(
            title: $headline?->title,
            subTitle: $headline?->subtitle,
        );
    }
}


if(!function_exists('convertImagePath')) {
    function convertImagePath($url) {
        // Remove domain and fix double slash
        $path = preg_replace('/^https?:\/\/[^\/]+(\/+)/', '/', $url);

        // Remove 'conversions/' directory
        $path = str_replace('/conversions/', '/', $path);

        // Replace -main-thumb before the extension
        $path = preg_replace('/-(main-thumb|thumb)(\.[^.]+)$/', '$2', $path);

        // Ensure there's only one leading slash in the path
        return ltrim($path, '/');
    }
}

if(!function_exists('formatDescription')) {
    function formatDescription($text, $isRTL = true) {
        // Check if the text already contains bullet points (either - or ●)
        if (strpos($text, ' - ') === false && strpos($text, '- ') !== 0 &&
            strpos($text, '● ') === false && strpos($text, ' ● ') === false) {
            // No bullet points found, return the text with line breaks preserved
            return nl2br($text);
        }

        // First, normalize spaces around the dash and bullet to ensure consistent splitting
        $text = preg_replace('/ - /', "\n- ", $text);
        $text = preg_replace('/^- /', "\n- ", $text);
        $text = preg_replace('/ ● /', "\n● ", $text);
        $text = preg_replace('/^● /', "\n● ", $text);

        // Split the text by newlines
        $lines = explode("\n", $text);

        // Direction attributes
        $dir = $isRTL ? 'rtl' : 'ltr';
        $align = $isRTL ? 'right' : 'left';

        $html = '';
        $inList = false;

        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) continue;

            // Check if the line starts with a bullet point (either - or ●)
            if (strpos($line, '- ') === 0 || strpos($line, '● ') === 0) {
                // This is a bullet point
                if (!$inList) {
                    // Start a new list
                    $html .= '<ul class="custom-bullet-list" dir="' . $dir . '" style="text-align: ' . $align . ';">';
                    $inList = true;
                }

                // Add the list item (removing the prefix)
                $content = (strpos($line, '- ') === 0) ? substr($line, 2) : substr($line, 2);
                $html .= '<li class="bullet-item">' . trim($content) . '</li>';
            } else {
                // This is regular text
                if ($inList) {
                    // Close the list if we were in one
                    $html .= '</ul>';
                    $inList = false;
                }

                // Add the regular text
                $html .= '<p dir="' . $dir . '" style="text-align: ' . $align . ';">' . $line . '</p>';
            }
        }

        // Close the list if we're still in one
        if ($inList) {
            $html .= '</ul>';
        }

        return $html;
    }
}

if(!function_exists('getCachedImage')) {
    function getCachedImage($url, $cacheKey = null) {
        if (is_null($cacheKey)) {
            $cacheKey = 'image_cache_' . md5($url);
        }

        return Cache::remember($cacheKey, 60 * 24, function () use ($url) {
            return convertImagePath($url);
        });
    }
}