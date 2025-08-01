<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig;
use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $afterTaxAmount;

    /**
     * @var billModuleConfig
     */
    public $billModuleConfig;

    /**
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example DBInstanceClass:[DBInstanceClass:rds.mysql.s1.small;EngineVersion:8.0;Region:cn-qingdao;]DBFlowType:[Region:cn-qingdao;]
     *
     * @var string
     */
    public $config;

    /**
     * @example 2017-06-08T09:41:30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @var string[]
     */
    public $extendInfos;

    /**
     * @example ["rm-bp1a2vsr018313t6o"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @example 322315
     *
     * @var string
     */
    public $operator;

    /**
     * @example 241559391310333
     *
     * @var string
     */
    public $orderId;

    /**
     * @example productsuborder
     *
     * @var string
     */
    public $orderSubType;

    /**
     * @example new
     *
     * @var string
     */
    public $orderType;

    /**
     * @example DBInstanceClass:[DBInstanceClass:rds.mysql.s1.small;EngineVersion:8.0;Region:cn-qingdao;]DBFlowType:[Region:cn-qingdao;]
     *
     * @var string
     */
    public $originalConfig;

    /**
     * @var originalModuleConfig
     */
    public $originalModuleConfig;

    /**
     * @example CNY
     *
     * @var string
     */
    public $paymentCurrency;

    /**
     * @example paid
     *
     * @var string
     */
    public $paymentStatus;

    /**
     * @example 2017-06-08T09:41:30Z
     *
     * @var string
     */
    public $paymentTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $pretaxAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $pretaxAmountLocal;

    /**
     * @example 0
     *
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @example 3
     *
     * @var string
     */
    public $quantity;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example 241559391310332
     *
     * @var string
     */
    public $relatedOrderId;

    /**
     * @example 234343
     *
     * @var string
     */
    public $subOrderId;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @example 0
     *
     * @var string
     */
    public $tax;

    /**
     * @example 2117-06-08T16:00:00Z
     *
     * @var string
     */
    public $usageEndTime;

    /**
     * @example 2017-06-08T16:00:00Z
     *
     * @var string
     */
    public $usageStartTime;
    protected $_name = [
        'afterTaxAmount' => 'AfterTaxAmount',
        'billModuleConfig' => 'BillModuleConfig',
        'commodityCode' => 'CommodityCode',
        'config' => 'Config',
        'createTime' => 'CreateTime',
        'currency' => 'Currency',
        'extendInfos' => 'ExtendInfos',
        'instanceIds' => 'InstanceIds',
        'operator' => 'Operator',
        'orderId' => 'OrderId',
        'orderSubType' => 'OrderSubType',
        'orderType' => 'OrderType',
        'originalConfig' => 'OriginalConfig',
        'originalModuleConfig' => 'OriginalModuleConfig',
        'paymentCurrency' => 'PaymentCurrency',
        'paymentStatus' => 'PaymentStatus',
        'paymentTime' => 'PaymentTime',
        'pretaxAmount' => 'PretaxAmount',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'quantity' => 'Quantity',
        'region' => 'Region',
        'relatedOrderId' => 'RelatedOrderId',
        'subOrderId' => 'SubOrderId',
        'subscriptionType' => 'SubscriptionType',
        'tax' => 'Tax',
        'usageEndTime' => 'UsageEndTime',
        'usageStartTime' => 'UsageStartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }
        if (null !== $this->billModuleConfig) {
            $res['BillModuleConfig'] = null !== $this->billModuleConfig ? $this->billModuleConfig->toMap() : null;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->extendInfos) {
            $res['ExtendInfos'] = $this->extendInfos;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderSubType) {
            $res['OrderSubType'] = $this->orderSubType;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->originalConfig) {
            $res['OriginalConfig'] = $this->originalConfig;
        }
        if (null !== $this->originalModuleConfig) {
            $res['OriginalModuleConfig'] = null !== $this->originalModuleConfig ? $this->originalModuleConfig->toMap() : null;
        }
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
        }
        if (null !== $this->paymentStatus) {
            $res['PaymentStatus'] = $this->paymentStatus;
        }
        if (null !== $this->paymentTime) {
            $res['PaymentTime'] = $this->paymentTime;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->relatedOrderId) {
            $res['RelatedOrderId'] = $this->relatedOrderId;
        }
        if (null !== $this->subOrderId) {
            $res['SubOrderId'] = $this->subOrderId;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
        }
        if (null !== $this->usageEndTime) {
            $res['UsageEndTime'] = $this->usageEndTime;
        }
        if (null !== $this->usageStartTime) {
            $res['UsageStartTime'] = $this->usageStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if (isset($map['BillModuleConfig'])) {
            $model->billModuleConfig = billModuleConfig::fromMap($map['BillModuleConfig']);
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ExtendInfos'])) {
            $model->extendInfos = $map['ExtendInfos'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderSubType'])) {
            $model->orderSubType = $map['OrderSubType'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OriginalConfig'])) {
            $model->originalConfig = $map['OriginalConfig'];
        }
        if (isset($map['OriginalModuleConfig'])) {
            $model->originalModuleConfig = originalModuleConfig::fromMap($map['OriginalModuleConfig']);
        }
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if (isset($map['PaymentStatus'])) {
            $model->paymentStatus = $map['PaymentStatus'];
        }
        if (isset($map['PaymentTime'])) {
            $model->paymentTime = $map['PaymentTime'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RelatedOrderId'])) {
            $model->relatedOrderId = $map['RelatedOrderId'];
        }
        if (isset($map['SubOrderId'])) {
            $model->subOrderId = $map['SubOrderId'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }
        if (isset($map['UsageEndTime'])) {
            $model->usageEndTime = $map['UsageEndTime'];
        }
        if (isset($map['UsageStartTime'])) {
            $model->usageStartTime = $map['UsageStartTime'];
        }

        return $model;
    }
}
