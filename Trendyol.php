<?php

require_once __DIR__."/vendor/autoload.php";
use Curl\Curl;

class Trendyol
{

    private $curl;
    private $responseData;
    private $base_url = "https://public.trendyol.com/";
    private $api_v2 = "discovery-web-searchgw-service/v2/api/";
    private $api = "discovery-web-productgw-service/api/";
    private $infinite_scroll = "infinite-scroll/";

    private $pageCount = 208;
    private $whileCheck = true;
    private $whileCounter = 0;
    private $url;

    public function __construct()
    {
        $this->curl = new Curl();
        $this->responseData = array();
    }

    public function infinite_scroll($path){
        $this->url = $this->base_url.$this->api_v2.$this->infinite_scroll.$path;
        $this->curl->get($this->url);
        if ($this->curl->error){
            return [
                'code' => $this->curl->errorCode,
                'message' => $this->curl->errorMessage,
                'url' => $this->url
            ];
        }else{
            if ($this->curl->response->statusCode == 200){
                return $this->curl->response->result->products;
            }else{
                return [
                    'code' => $this->curl->response->statusCode,
                    'message' => $this->curl->response->error,
                    'url' =>    $this->url
                ];
            }

        }
    }

    public function infinite_scrolls($path){
        while ($this->whileCheck){
            if ($this->whileCounter == 0){
                $this->url = $this->base_url.$this->api_v2.$this->infinite_scroll.$path;
            }else{
                $this->url = $this->base_url.$this->api_v2.$this->infinite_scroll.$path."&pi=".$this->whileCounter;
            }
            $this->curl->get($this->url);
            if ($this->curl->error){
                return [
                    'code' => $this->curl->errorCode,
                    'message' => $this->curl->errorMessage,
                    'url' => $this->url
                ];
            }else{
                if ($this->curl->response->statusCode == 200){
                    if ($this->curl->response->result->products){
                        foreach ($this->curl->response->result->products as $item){
                            array_push($this->responseData,$item);
                        }
                    }else{
                        $this->whileCheck = false;
                    }

                }else{
                    return [
                        'code' => $this->curl->response->statusCode,
                        'message' => $this->curl->response->error,
                        'url' => $this->url
                    ];

                }
            }
            $this->whileCounter++;
            if ($this->whileCounter >= $this->pageCount){
                $this->whileCheck = false;
            }
        }
        return  $this->responseData;

    }

    public function product_detail($id,$merchantId,$campaignId){
        $this->url = $this->base_url.$this->api."productDetail/".$id."?merchantId=".$merchantId."&campaignId=".$campaignId;
        $this->curl->get($this->url);
        if ($this->curl->error){
            return [
                'code' => $this->curl->errorCode,
                'message' => $this->curl->errorMessage,
                'url' => $this->url
            ];
        }else{
            if ($this->curl->response->statusCode == 200){
                return $this->curl->response->result;
            }else{
                return [
                    'code' => $this->curl->response->statusCode,
                    'message' => $this->curl->response->error,
                    'url' =>    $this->url
                ];
            }
        }
    }






}