<?php

namespace App\Http\Traits;

use SEO;
use Lang;

trait SeoRoutes
{
    /**
     * The seo language file name.
     *
     * @var string
     */
    protected $seoLanguageGroup = 'routes';

    /**
     * Set SEO data for the action.
     *
     * @param $key
     * @param array $replace
     */
    protected function setSeo($key, $replace = [])
    {
        $titleKey = "{$this->seoLanguageGroup}.{$key}.title";
        $descriptionKey = "{$this->seoLanguageGroup}.{$key}.description";

        if (Lang::has($titleKey)) {
            SEO::setTitle(trans($titleKey, $replace));
        }

        if (Lang::has($descriptionKey)) {
            SEO::setDescription(trans($descriptionKey, $replace));
        }
    }
}
