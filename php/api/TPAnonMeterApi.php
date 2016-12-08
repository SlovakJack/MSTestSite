<?php
/**
 * Copyright (c) 2014, Tinypass, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or
 * without modification, are permitted provided that the following
 * conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in the
 * documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
 * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
 * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
/**
 * The TPAnonMeterApi class.
 */
class TPAnonMeterApi  extends TPAPIBase {



    /**
     * @return loadRequestTPAnonMeterApi
     */
    public function loadRequest(){

        return new loadRequestTPAnonMeterApi($this->apiClient);
    }


    /**
     * @return logoutRequestTPAnonMeterApi
     */
    public function logoutRequest(){

        return new logoutRequestTPAnonMeterApi($this->apiClient);
    }
}



/**
 * Loads a meter
 */
class loadRequestTPAnonMeterApi  extends TPAPIBase {
    protected $request = array();

    /**
     * The Tinypass user meter cookie (umc)
     * @param string $umc
     * @return loadRequestTPAnonMeterApi
     */
    public function umc($umc){
        $this->request['umc'] = $umc;
        return $this;
    }
    

    /**
     * The paywall id
     * @param float $paywallId
     * @return loadRequestTPAnonMeterApi
     */
    public function paywallId($paywallId){
        $this->request['paywallId'] = $paywallId;
        return $this;
    }
    

    /**
     * The URL of the page
     * @param string $url
     * @return loadRequestTPAnonMeterApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    

    /**
     * The page referer
     * @param string $referer
     * @return loadRequestTPAnonMeterApi
     */
    public function referer($referer){
        $this->request['referer'] = $referer;
        return $this;
    }
    

    /**
     * Track page views
     * @param bool $trackPageView
     * @return loadRequestTPAnonMeterApi
     */
    public function trackPageView($trackPageView){
        $this->request['trackPageView'] = $trackPageView;
        return $this;
    }
    

    /**
     * Transaction id
     * @param string $transactionId
     * @return loadRequestTPAnonMeterApi
     */
    public function transactionId($transactionId){
        $this->request['transactionId'] = $transactionId;
        return $this;
    }
    

    /**
     * Encrypted user reference
     * @param string $userRef
     * @return loadRequestTPAnonMeterApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    

    /**
     * User token
     * @param string $userToken
     * @return loadRequestTPAnonMeterApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    

    /**
     * User token provider
     * @param string $userProvider
     * @return loadRequestTPAnonMeterApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    

    /**
     * Current meter name
     * @param string $meterName
     * @return loadRequestTPAnonMeterApi
     */
    public function meterName($meterName){
        $this->request['meterName'] = $meterName;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPAnonUserMeter

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['umc'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'umc' ) ] = $this->apiClient->toQueryValue($this->request['umc']);
        }
        if (isset($this->request['paywallId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'paywallId' ) ] = $this->apiClient->toQueryValue($this->request['paywallId']);
        }
        if (isset($this->request['url'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'url' ) ] = $this->apiClient->toQueryValue($this->request['url']);
        }
        if (isset($this->request['referer'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'referer' ) ] = $this->apiClient->toQueryValue($this->request['referer']);
        }
        if (isset($this->request['trackPageView'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'trackPageView' ) ] = $this->apiClient->toQueryValue($this->request['trackPageView']);
        }
        if (isset($this->request['transactionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'transactionId' ) ] = $this->apiClient->toQueryValue($this->request['transactionId']);
        }
        if (isset($this->request['userRef'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userRef' ) ] = $this->apiClient->toQueryValue($this->request['userRef']);
        }
        if (isset($this->request['userToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userToken' ) ] = $this->apiClient->toQueryValue($this->request['userToken']);
        }
        if (isset($this->request['userProvider'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userProvider' ) ] = $this->apiClient->toQueryValue($this->request['userProvider']);
        }
        if (isset($this->request['meterName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'meterName' ) ] = $this->apiClient->toQueryValue($this->request['meterName']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/anon/meter/load', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPAnonUserMeter');
        

    }

}


/**
 * Removes a user meter cookie
 */
class logoutRequestTPAnonMeterApi  extends TPAPIBase {
    protected $request = array();

    /**
     * The paywall id
     * @param string $paywallId
     * @return logoutRequestTPAnonMeterApi
     */
    public function paywallId($paywallId){
        $this->request['paywallId'] = $paywallId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPAnonUserMeter

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['paywallId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'paywallId' ) ] = $this->apiClient->toQueryValue($this->request['paywallId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/anon/meter/logout', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPAnonUserMeter');
        

    }

}

