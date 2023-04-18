<?php
function price_endpoint() {
    // map currencies to retrieve ID's
//    $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/map';
//    $parameters = [
//        'symbol' => "BTC,XAU,XAG,ETH,XRP,LTC,BNB,USDT,HEX,ADA,SOL,DOT,VET,DOGE",
//    ];


    $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';
    $parameters = [
        'id' => "1,2,3575,3574,1839,1027,5015,825,52,2010,6636,5426,3077,74",
        'convert' => "EUR"
    ];

    $headers = [
        'Accepts: application/json',
        'X-CMC_PRO_API_KEY:' . COINMARKETCAP_API,
        'Cache-Control: max-age=3600'
    ];
    $qs = http_build_query($parameters); // query string encode the parameters
    $request = "{$url}?{$qs}"; // create the request URL

    $curl = curl_init(); // Get cURL resource
    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => $request,            // set the request URL
        CURLOPT_HTTPHEADER => $headers,     // set the headers
        CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
    ));

    $response = json_decode(curl_exec($curl),true); // Send the request, save the response

    curl_close($curl); // Close request

    return $response;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'prices/v2', '/post/', array(
        'methods' => 'GET',
        'callback' => 'price_endpoint'
    ));
});



/**
 * Register the /wp-json/prices/v2/post/ endpoint so it will be cached.
 */
function wprc_add_acf_posts_endpoint( $allowed_endpoints ) {
    if ( ! isset( $allowed_endpoints[ 'prices/v2' ] ) || ! in_array( 'posts', $allowed_endpoints[ 'prices/v2' ] ) ) {
        $allowed_endpoints[ 'prices/v2' ][] = 'post';
    }
    return $allowed_endpoints;
}
add_filter( 'wp_rest_cache/allowed_endpoints', 'wprc_add_acf_posts_endpoint', 10, 1);

?>