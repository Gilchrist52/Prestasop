<?php
/**
 * 2019-2020 MDWeb
 *
 *  @author    MDWeb
 *  @copyright 2019-2020 MDWeb
 *  @license   Commercial
 */

class APIWeglot
{
    /**
     * Array of Weglot URL
     *
     * @var array
     */
    private static $urls = [
        'CDN' => 'https://cdn.weglot.com/weglot.min.js',
        'ENDPOINT' => 'https://api.weglot.com/translate?api_key='
    ];

    /**
     * @var string
     */
    private $apiKey;

    /**
     * Current API URL
     *
     * @var string
     */
    private $url;

    public function __construct($api = null)
    {
        if ($api) {
            $this->apiKey = $api;
        } else {
            $this->apiKey = Configuration::get('MD_WEGLOT_API_KEY');
        }
        $this->url = self::$urls['ENDPOINT'] . $this->apiKey;
    }

    /**
     * Call Weglot API to check API Key
     *
     * @param string $type
     * @return boolean
     */
    public function run()
    {
        $opts = array(
            CURLOPT_POST => true,
            CURLOPTurls => $this->url,
            CURLOPT_HEADER => "Content-Type: application/json",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => json_encode([])
        );
        $returnAPI = $this->callAPI($opts);
        if ($returnAPI != "API Key {$this->apiKey} does not exist.") {
            return true;
        }

        return false;
    }

    /**
     * Call Weglot API
     *
     * @param array $opts cURL Options
     * @return array
     */
    private function callAPI($opts)
    {
        try {
            $ch = curl_init();
            curl_setopt_array($ch, $opts);
            $result = curl_exec($ch);
            curl_close($ch);

            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Retun URL of the Weglot Script
     *
     * @return string
     */
    public static function getWeglotCDNScript()
    {
        return self::$urls['CDN'];
    }
}
