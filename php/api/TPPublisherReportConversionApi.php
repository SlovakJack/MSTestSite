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
 * The TPPublisherReportConversionApi class.
 */
class TPPublisherReportConversionApi  extends TPAPIBase {



    /**
     * @return getRequestTPPublisherReportConversionApi
     */
    public function getRequest(){

        return new getRequestTPPublisherReportConversionApi($this->apiClient);
    }
}



/**
 * Get conversion report for an app and given dates
 */
class getRequestTPPublisherReportConversionApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return getRequestTPPublisherReportConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * The start date
     * @param string $startDate
     * @return getRequestTPPublisherReportConversionApi
     */
    public function startDate($startDate){
        $this->request['startDate'] = $startDate;
        return $this;
    }
    

    /**
     * The end date
     * @param string $endDate
     * @return getRequestTPPublisherReportConversionApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    

    /**
     * Execute request
    * @return string

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['startDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'startDate' ) ] = $this->apiClient->toQueryValue($this->request['startDate']);
        }
        if (isset($this->request['endDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->apiClient->toQueryValue($this->request['endDate']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/report/conversion/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'string');
        

    }

}

