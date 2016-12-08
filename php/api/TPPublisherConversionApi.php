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
 * The TPPublisherConversionApi class.
 */
class TPPublisherConversionApi  extends TPAPIBase {



    /**
     * @return getRequestTPPublisherConversionApi
     */
    public function getRequest(){

        return new getRequestTPPublisherConversionApi($this->apiClient);
    }


    /**
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function listAccessRequest(){

        return new listAccessRequestTPPublisherConversionApi($this->apiClient);
    }


    /**
     * @return countRequestTPPublisherConversionApi
     */
    public function countRequest(){

        return new countRequestTPPublisherConversionApi($this->apiClient);
    }


    /**
     * @return listRequestTPPublisherConversionApi
     */
    public function listRequest(){

        return new listRequestTPPublisherConversionApi($this->apiClient);
    }
}



/**
 * Get a conversion
 */
class getRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return getRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Term conversion id
     * @param string $termConversionId
     * @return getRequestTPPublisherConversionApi
     */
    public function termConversionId($termConversionId){
        $this->request['termConversionId'] = $termConversionId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherTermConversion

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['termConversionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termConversionId' ) ] = $this->apiClient->toQueryValue($this->request['termConversionId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
        

    }

}


/**
 * Lists conversions
 */
class listAccessRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Search value
     * @param string $q
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    

    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    

    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherTermConversion[]

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/access', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion', 'array');
        

    }

}


/**
 * Counts conversions
 */
class countRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Search value
     * @param string $q
     * @return countRequestTPPublisherConversionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    

    /**
     * Field to order by
     * @param string $orderBy
     * @return countRequestTPPublisherConversionApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    

    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return countRequestTPPublisherConversionApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    

    /**
     * Type of term to list
     * @param string $type
     * @return countRequestTPPublisherConversionApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    

    /**
     * Term id to list
     * @param string $termId
     * @return countRequestTPPublisherConversionApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    

    /**
     * Type of resource
     * @param string $resourceType
     * @return countRequestTPPublisherConversionApi
     */
    public function resourceType($resourceType){
        $this->request['resourceType'] = $resourceType;
        return $this;
    }
    

    /**
     * Type of terms to exclude from the list
     * @param TPPublisherArray[string] $excludeType
     * @return countRequestTPPublisherConversionApi
     */
    public function excludeType($excludeType){
        $this->request['excludeType'] = $excludeType;
        return $this;
    }
    

    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return countRequestTPPublisherConversionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    

    /**
     * Maximum index of returned results
     * @param int $limit
     * @return countRequestTPPublisherConversionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    

    /**
     * Execute request
    * @return float

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        if (isset($this->request['resourceType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resourceType' ) ] = $this->apiClient->toQueryValue($this->request['resourceType']);
        }
        if (isset($this->request['excludeType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'excludeType' ) ] = $this->apiClient->toQueryValue($this->request['excludeType']);
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/count', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'float');
        

    }

}


/**
 * Lists conversions for an app
 */
class listRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherConversionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    

    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherConversionApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    

    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherConversionApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    

    /**
     * Type of term to list
     * @param string $type
     * @return listRequestTPPublisherConversionApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    

    /**
     * Term id to list
     * @param string $termId
     * @return listRequestTPPublisherConversionApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    

    /**
     * Type of resource
     * @param string $resourceType
     * @return listRequestTPPublisherConversionApi
     */
    public function resourceType($resourceType){
        $this->request['resourceType'] = $resourceType;
        return $this;
    }
    

    /**
     * Type of terms to exclude from the list
     * @param TPPublisherArray[string] $excludeType
     * @return listRequestTPPublisherConversionApi
     */
    public function excludeType($excludeType){
        $this->request['excludeType'] = $excludeType;
        return $this;
    }
    

    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherConversionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    

    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherConversionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherTermConversion[]

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        if (isset($this->request['resourceType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resourceType' ) ] = $this->apiClient->toQueryValue($this->request['resourceType']);
        }
        if (isset($this->request['excludeType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'excludeType' ) ] = $this->apiClient->toQueryValue($this->request['excludeType']);
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion', 'array');
        

    }

}

