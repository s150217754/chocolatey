<?php

/*
 * * azure project presents:
                                          _
                                         | |
 __,   __          ,_    _             _ | |
/  |  / / _|   |  /  |  |/    |  |  |_|/ |/ \_
\_/|_/ /_/  \_/|_/   |_/|__/   \/ \/  |__/\_/
        /|
        \|
				azure web
				version: 1.0a
				azure team
 * * be carefully.
 */

namespace Azure\Models\Json;

use Azure\Types\Json as JsonType;

/**
 * Class Badge
 * @package Azure\Models\Json
 */
class ChannelsContent extends JsonType
{

    /**
     * @var string
     */
    /**
     * @var string
     */
    /**
     * @var string
     */
    public $contentWidth, $contentHeight, $tags, $previewUrl, $url, $creator_uniqueId, $creator_id, $creator_name, $time, $title, $type, $id, $likes;

    /**
     * function construct
     * create a model for the channels instance
     * @param string $user_id
     * @param string $image
     * @param string $description
     * @param string $user_name
     * @param string $date
     * @param string $tags
     * @param string $type
     * @param string $title
     */
    function __construct($user_id = '', $image = '', $description = '', $user_name = '', $date = '', $type = '', $tags = '', $title = '')
    {
        $this->id = $user_id;
        $this->contentHeight = 600;
        $this->contentWidth = 600;
        $this->tags = $tags;
        $this->previewUrl = $this->url = $image;
        $this->creator_uniqueId = $this->creator_id = $description;
        $this->creator_name = $user_name;
        $this->time = $date;
        $this->type = $type;
        $this->likes = [];
        $this->title = $title;
    }
}