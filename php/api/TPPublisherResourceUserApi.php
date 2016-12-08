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
 * The TPPublisherResourceUserApi class.
 */
class TPPublisherResourceUserApi  extends TPAPIBase {



    /**
     * @return listUsersRequestTPPublisherResourceUserApi
     */
    public function listUsersRequest(){

        return new listUsersRequestTPPublisherResourceUserApi($this->apiClient);
    }
}



/**
 * Lists users of a resource
 */
class listUsersRequestTPPublisherResourceUserApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return listUsersRequestTPPublisherResourceUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Unique id for resource
     * @param string $rid
     * @return listUsersRequestTPPublisherResourceUserApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    

    /**
     * Search value
     * @param string $q
     * @return listUsersRequestTPPublisherResourceUserApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    

    /**
     * Field to order by
     * @param string $orderBy
     * @return listUsersRequestTPPublisherResourceUserApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    

    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listUsersRequestTPPublisherResourceUserApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    

    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listUsersRequestTPPublisherResourceUserApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    

    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listUsersRequestTPPublisherResourceUserApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherUser[]

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
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
        $response = $this->apiClient->callAPI('/publisher/resource/user/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUser', 'array');
        

    }

}

