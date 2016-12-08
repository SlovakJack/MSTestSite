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
 * The TPPublisherProviderUserJanrainApi class.
 */
class TPPublisherProviderUserJanrainApi  extends TPAPIBase {



    /**
     * @return createJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function createJanrainRequest(){

        return new createJanrainRequestTPPublisherProviderUserJanrainApi($this->apiClient);
    }


    /**
     * @return getJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function getJanrainRequest(){

        return new getJanrainRequestTPPublisherProviderUserJanrainApi($this->apiClient);
    }
}



/**
 * Creates a new user provider configuration for janrain
 */
class createJanrainRequestTPPublisherProviderUserJanrainApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return createJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * The title
     * @param string $title
     * @return createJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function title($title){
        $this->request['title'] = $title;
        return $this;
    }
    

    /**
     * Janrain app name as part of url to janrain api. It looks like https://[app-name].rpxnow.com
     * @param string $appName
     * @return createJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function appName($appName){
        $this->request['appName'] = $appName;
        return $this;
    }
    

    /**
     * Janrain app id
     * @param string $appId
     * @return createJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function appId($appId){
        $this->request['appId'] = $appId;
        return $this;
    }
    

    /**
     * Janrain client id
     * @param string $clientId
     * @return createJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function clientId($clientId){
        $this->request['clientId'] = $clientId;
        return $this;
    }
    

    /**
     * Janrain client secret key
     * @param string $clientSecret
     * @return createJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function clientSecret($clientSecret){
        $this->request['clientSecret'] = $clientSecret;
        return $this;
    }
    

    /**
     * Janrain entity type
     * @param string $typeName
     * @return createJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function typeName($typeName){
        $this->request['typeName'] = $typeName;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherUserProviderConfiguration

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['title'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'title' ) ] = $this->apiClient->toQueryValue($this->request['title']);
        }
        if (isset($this->request['appName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'appName' ) ] = $this->apiClient->toQueryValue($this->request['appName']);
        }
        if (isset($this->request['appId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'appId' ) ] = $this->apiClient->toQueryValue($this->request['appId']);
        }
        if (isset($this->request['clientId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'clientId' ) ] = $this->apiClient->toQueryValue($this->request['clientId']);
        }
        if (isset($this->request['clientSecret'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'clientSecret' ) ] = $this->apiClient->toQueryValue($this->request['clientSecret']);
        }
        if (isset($this->request['typeName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'typeName' ) ] = $this->apiClient->toQueryValue($this->request['typeName']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/provider/user/janrain/create', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserProviderConfiguration');
        

    }

}


/**
 * Available user provider configurations for Janrain
 */
class getJanrainRequestTPPublisherProviderUserJanrainApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return getJanrainRequestTPPublisherProviderUserJanrainApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherUserProviderConfiguration

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/provider/user/janrain/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserProviderConfiguration');
        

    }

}

