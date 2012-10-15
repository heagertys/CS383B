<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit - I edited it, changed array indexes from all lower case to hump case
function my_autoloader($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'AlchemyService' => '/sentiment/alchemySentiment.php',
            'FacebookService' => '/social/facebookService.php',
            'FinancialService' => '/financial/financialService.php',
            'GooglePlusService' => '/social/googlePlusService.php',
            'RedditService' => '/social/redditService.php',
            'SentimentService' => '/sentiment/sentiment.php',
            'Service' => '/service/service.php',
            'SocialService' => '/social/socialService.php',
            'StocklyticsService' => '/financial/stocklyticsService.php',
            'TwitterService' => '/social/twitterService.php',
            'YahooService' => '/financial/yahooService.php'
        );
    }
    
    $cn = strtolower($class);
    
    if (isset($classes[$class])) {
        require __DIR__ . $classes[$class];
    }
}

spl_autoload_register('my_autoloader');
// @codeCoverageIgnoreEnd