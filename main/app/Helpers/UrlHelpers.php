<?php

if (!function_exists('url_modify')) {
    /**
     * manipulate the Current/Given URL with the given parameters
     * @param $changes
     * @param  $url
     * @return string
     */
    function url_modify($changes, $url = false)
    {
        // If $url wasn't passed in, use the current url
        if ($url == false) {
            $scheme = $_SERVER['SERVER_PORT'] == 80 ? 'http' : 'https';
            $url = $scheme . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        }

        // Parse the url into pieces
        $url_array = parse_url($url);

        // The original URL had a query string, modify it.
        if (!empty($url_array['query'])) {
            parse_str($url_array['query'], $query_array);
            $query_array = array_merge($query_array, $changes);
        } // The original URL didn't have a query string, add it.
        else {
            $query_array = $changes;
        }

        return (!empty($url_array['scheme']) ? $url_array['scheme'] . '://' : NULL) .
            (!empty($url_array['host']) ? $url_array['host'] : NULL) .
            (!empty($url_array['port']) ? ':' . $url_array['port'] : NULL) .
            $url_array['path'] . '?' . http_build_query($query_array);
    }
}


if (!function_exists('url_full')) {
    /**
     * Get the full URL from current request.
     * @param array $changes
     * @param null $secure
     * @return string
     */
    function url_full($changes = [])
    {
        $url = urldecode(app('url')->full());
        if ($changes) {
            $url = url_modify($changes, $url);
        }
        return $url;
    }
}


if (!function_exists('url_current')) {
    /**
     * Get the URL from current request.
     * @param array $changes
     * @param null $secure
     * @return string
     */
    function url_current($changes = [])
    {
        $url = urldecode(app('url')->current());
        if ($changes) {
            $url = url_modify($changes, $url);
        }
        return $url;
    }
}


if (!function_exists('url_queries')) {
    /**
     * Get query string of current request URL.
     * @param array $changes
     * @return string
     */
    function url_queries($changes = [], $url = NULL)
    {
        if (!$url)
            $url = urldecode(app('url')->full());

        if ($changes)
            $url = url_modify($changes, $url);

        if ($psign = strpos($url, '?')) {
            return substr($url, $psign + 1);
        }

        return NULL;
    }
}


if (!function_exists('url_params')) {
    /**
     * Get query parameters of current request URL.
     * @param array $changes
     * @return string
     * @TOTO route parameters could be added
     */
    function url_params($changes = [], $url = NULL)
    {

        $queries = url_queries($changes, $url);
        $params = [];
        if ($queries) {
            $elems = explode("&", $queries);
            foreach ($elems as $e) {
                list($k, $v) = explode("=", $e);
                $params[$k] = $v;
            }
        }
        return $params;
    }
}


if (!function_exists('base_url')) {
    /**
     * Get the path to the base of the install.
     *
     * @param string $path
     * @return string
     */
    function base_url($path = '/')
    {
        return app()->make('url')->to($path);
    }
}


if (!function_exists('is_url')) {

    /**
     * check whether the given string is a valid URL or not
     * @param $url
     * @return bool
     */
    function is_url($url)
    {
        $reg_exp = "%(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})%i";
        return preg_match($reg_exp, $url);
    }
}

if (!function_exists('short_url')) {
    /**
     * Shortens Long Urls
     * @param String $url
     * @return string
     */
    function short_url($url, $maxlen = 40)
    {
        $len = strlen($url);
        if ($len > $maxlen) {
            //$length = $length - 30;

            $scheme = isset(parse_url($url)['scheme']) ? parse_url($url)['scheme'] : '';
            $host = isset(parse_url($url)['host']) ? parse_url($url)['host'] : '';

            $hostlen = strlen($scheme . $host) + 4;

            if ($hostlen > $maxlen - 8)
                return substr($url, 0, $maxlen - 3) . '...';
            else {
                $midlen = $maxlen - $hostlen - 8;

                $first = substr($url, 0, $hostlen + $midlen / 2);
                $last = substr($url, -5 - $midlen / 2);
                $new = $first . "..." . $last;
                $result = $new;
            }
        } else {
            $result = $url;
        }

        $parts = parse_url($result);

        $scheme = (isset($parts['scheme']) && $parts['scheme'] == 'https') ? 'https://' : '';
        $host = isset($parts['host']) ? $parts['host'] : '';
        $path = isset($parts['path']) ? $parts['path'] : '';
        $query = isset($parts['query']) ? '?' . $parts['query'] : '';
        $fragment = isset($parts['fragment']) ? '#' . $parts['fragment'] : '';

        return "{$scheme}{$host}{$path}{$query}{$fragment}";

    }
}


if (!function_exists('external_link')) {
    /**
     * get a clean external link from given URL
     * @param $link the messy url
     * @param bool|false $secure secure url with https
     * @return string
     */
    function external_link($link, $secure = false)
    {
        $parts = parse_url($link);

        if (!isset($parts['scheme']))
            $parts['scheme'] =
                'http' . ($secure ? 's' : NULL);
        $host = isset($parts['host']) ? $parts['host'] : '';
        $path = isset($parts['path']) ? $parts['path'] : '';
        $query = isset($parts['query']) ? '?' . $parts['query'] : '';
        $fragment = isset($parts['fragment']) ? '#' . $parts['fragment'] : '';

        return "{$parts['scheme']}://{$host}{$path}{$query}{$fragment}";
    }
}

if (!function_exists('get_domain_name')) {
    /**
     * Get domain
     * @return string
     */
    function get_domain_name($domain = NULL)
    {
        if (isset($_SERVER['HTTP_X_FORWARDED_HOST']) && $host = $_SERVER['HTTP_X_FORWARDED_HOST']) {
            $elements = explode(',', $host);
            $host = trim(end($elements));
        } else {
            if (!isset($_SERVER['HTTP_HOST']) || !$host = $_SERVER['HTTP_HOST']) {
                if (!isset($_SERVER['SERVER_NAME']) || !$host = $_SERVER['SERVER_NAME']) {
                    $host = !empty($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '';
                }
            }
        }
        $host = preg_replace('/:\d+$/', '', $host);
        if ($domain)
            return strtolower($domain) === trim($host);
        return trim($host);
    }
}

if (!function_exists('get_reached_point')) {
    /**
     * Get url after redirect
     * @param $url
     * @return string
     */
    function get_reached_point($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $a = curl_exec($ch);
        if (preg_match('#Location: (.*)#', $a, $r))
            return trim($r[1]);
        return $url;
    }
}

if (!function_exists('get_domain_name_by')) {
    /**
     * Get host name from a URL
     * @param $url
     * @param bool $get_subdomain
     * @return mixed
     */
    function get_domain_name_by($url, $get_subdomain = true)
    {
        if (!$url)
            return;
        if ($url != strip_tags($url))
            return;
        $domain = preg_replace("/https?:\/\//i", "", $url);
        $domain = preg_replace("/^www\./i", "", $domain);
        $domain = preg_replace("/(\/|\:).*/i", "", $domain);
        if (!$get_subdomain && preg_match("/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,7})$/i", $domain, $matches))
            $domain = $matches['domain'];
        return $domain;
    }
}


function parse_raw_headers($raw_headers){
    $headers=[];
    foreach ($raw_headers as $part) {
        //some headers will contain ":" character (Location for example), and the part after ":" will be lost, Thanks to @Emanuele
        if ($part && strpos($part, 'HTTP/') !== false)
            $middle = explode(" ", $part);
        else
            $middle = explode(":", $part, 2);
        $middle = array_map('trim', $middle);

        if (!$middle[0])
            continue;

        //Supress warning message if $middle[1] does not exist, Thanks to @crayons
        if (!isset($middle[1])) {
            $middle[1] = NULL;
        }

        $headers[$middle[0]] = $middle[1];
    }
    return $headers;
}

if (!function_exists('curl_get_contents')) {
    /**
     * Get contents of a url by CURL
     * @param $url
     * @param null $httpCode
     * @param array $headers
     * @param bool $ssl_check
     * @return mixed
     */
    function curl_get_contents($url, &$httpCode = NULL, $headers = [], $ssl_check = false)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        if ($headers)
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, !!$ssl_check); // ssl

        // get Headers
        if(!empty($params['request_response_headers'])){
            curl_setopt($ch, CURLOPT_HEADER, 1);
            $data = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $rawHeaders = substr($data, 0, $header_size);
            $rawHeaders = explode("\n", $rawHeaders);
            $result = substr($data, $header_size);
            curl_close($ch);
            return ['data'=>$result,'headers'=>parse_raw_headers($rawHeaders)];
        }

        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $data;
    }
}

if (!function_exists('curl_post_contents')) {
    /**
     * Get contents of a url by CURL
     * @param $url
     * @param array $params
     * @param null $httpCode
     * @param array $headers
     * @param bool $ssl_check
     * @return mixed
     */
    function curl_post_contents($url, $params = [], &$httpCode = NULL, $headers = ['Content-Type: application/json'], $ssl_check = false)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($headers) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, !!$ssl_check); // ssl

        // get Headers
        if(!empty($params['request_response_headers'])){
            curl_setopt($ch, CURLOPT_HEADER, 1);
            $data = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $rawHeaders = substr($data, 0, $header_size);
            $rawHeaders = explode("\n", $rawHeaders);
            $result = substr($data, $header_size);
            curl_close($ch);
            return ['data'=>$result,'headers'=>parse_raw_headers($rawHeaders)];
        }

        $data = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $data;
    }
}
