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
 * The TPPublisherTermAdviewApi class.
 */
class TPPublisherTermAdviewApi  extends TPAPIBase {



    /**
     * @return createAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function createAdviewTermRequest(){

        return new createAdviewTermRequestTPPublisherTermAdviewApi($this->apiClient);
    }


    /**
     * @return updateAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function updateAdviewTermRequest(){

        return new updateAdviewTermRequestTPPublisherTermAdviewApi($this->apiClient);
    }
}



/**
 * Creates an adview term
 */
class createAdviewTermRequestTPPublisherTermAdviewApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return createAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Unique id for resource
     * @param string $rid
     * @return createAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    

    /**
     * Term name
     * @param string $name
     * @return createAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    

    /**
     * The length of time a user gets access for
     * @param int $adviewAccessPeriod
     * @return createAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function adviewAccessPeriod($adviewAccessPeriod){
        $this->request['adviewAccessPeriod'] = $adviewAccessPeriod;
        return $this;
    }
    

    /**
     * The VAST URL to use
     * @param string $adviewVastUrl
     * @return createAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function adviewVastUrl($adviewVastUrl){
        $this->request['adviewVastUrl'] = $adviewVastUrl;
        return $this;
    }
    

    /**
     * Term description
     * @param string $description
     * @return createAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherTerm

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        if (isset($this->request['adviewAccessPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'adviewAccessPeriod' ) ] = $this->apiClient->toQueryValue($this->request['adviewAccessPeriod']);
        }
        if (isset($this->request['adviewVastUrl'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'adviewVastUrl' ) ] = $this->apiClient->toQueryValue($this->request['adviewVastUrl']);
        }
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/adview/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        

    }

}


/**
 * Updates an adview term
 */
class updateAdviewTermRequestTPPublisherTermAdviewApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Term ID
     * @param string $termId
     * @return updateAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    

    /**
     * Unique id for resource
     * @param string $rid
     * @return updateAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    

    /**
     * Term name
     * @param string $name
     * @return updateAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    

    /**
     * The length of time a user gets access for
     * @param int $adviewAccessPeriod
     * @return updateAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function adviewAccessPeriod($adviewAccessPeriod){
        $this->request['adviewAccessPeriod'] = $adviewAccessPeriod;
        return $this;
    }
    

    /**
     * The VAST URL to use
     * @param string $adviewVastUrl
     * @return updateAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function adviewVastUrl($adviewVastUrl){
        $this->request['adviewVastUrl'] = $adviewVastUrl;
        return $this;
    }
    

    /**
     * Term description
     * @param string $description
     * @return updateAdviewTermRequestTPPublisherTermAdviewApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherTerm

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        if (isset($this->request['adviewAccessPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'adviewAccessPeriod' ) ] = $this->apiClient->toQueryValue($this->request['adviewAccessPeriod']);
        }
        if (isset($this->request['adviewVastUrl'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'adviewVastUrl' ) ] = $this->apiClient->toQueryValue($this->request['adviewVastUrl']);
        }
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/adview/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        

    }

}

