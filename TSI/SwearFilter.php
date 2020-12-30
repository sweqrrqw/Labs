<?php

class SwearFilter
{

    protected $replacePattern = '';
    protected $obscenePatterns = [];

    public function __construct($config = [])
    {
        $configFile = include __DIR__ . '/swear_config.php';
        $configInfo = array_merge($configFile, $config);
        $this->obscenePatterns = $configInfo['obscene_patterns'];
        $this->replacePattern = $configInfo['replace_pattern'];

    }

    public function removeSwearWords($text)
    {
        $patterns = $this->obscenePatterns;
        $replaceString = $this->replacePattern;
        $text = preg_replace($patterns, $replaceString, $text);
        return $text;
    }
}



