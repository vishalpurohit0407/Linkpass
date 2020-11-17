<?php

if (! function_exists('getYoutubeOrVimeoFromURL')) {
    function getYoutubeOrVimeoFromURL($videoUrl)
    {
        if(!empty($videoUrl) && stripos($videoUrl, 'youtube') !== false)
        {
            $url_string = parse_url($videoUrl, PHP_URL_QUERY);
            parse_str($url_string, $args);
            $youtubeId =  isset($args['v']) ? $args['v'] : false;

            if(!empty($youtubeId))
            {
                $videoUrl = 'https://www.youtube.com/embed/'.$youtubeId;
            }
        }
        else if(!empty($videoUrl) && stripos($videoUrl, 'vimeo') !== false)
        {
            $vimeoId = (int) substr(parse_url($videoUrl, PHP_URL_PATH), 1);

            if(!empty($vimeoId))
            {
                $videoUrl = 'https://player.vimeo.com/video/'.$vimeoId;
            }
        }

        return $videoUrl;
    }
}
