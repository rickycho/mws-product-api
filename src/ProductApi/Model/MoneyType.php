<?php namespace MwsProductApi\Model;

/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 *
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 *           Library Version: 2014-10-20
 *           Generated: Fri Oct 17 17:59:56 GMT 2014
 */

use MwsProductApi\MwsProductsModel;

/**
 * MoneyType
 *
 * Properties:
 * <ul>
 *
 * <li>CurrencyCode: string</li>
 * <li>Amount: float</li>
 *
 * </ul>
 */
class MoneyType extends MwsProductsModel {

    public function __construct($data = null)
    {
        $this->_fields = [
            'CurrencyCode' => [
                'FieldValue' => null,
                'FieldType' => 'string'
            ],
            'Amount' => [
                'FieldValue' => null,
                'FieldType' => 'float'
            ],
        ];

        parent::__construct($data);
    }

    /**
     * Get the value of the CurrencyCode property.
     *
     * @return String CurrencyCode.
     */
    public function getCurrencyCode()
    {
        return $this->_fields['CurrencyCode']['FieldValue'];
    }

    /**
     * Check to see if CurrencyCode is set.
     *
     * @return true if CurrencyCode is set.
     */
    public function isSetCurrencyCode()
    {
        return ! is_null($this->_fields['CurrencyCode']['FieldValue']);
    }

    /**
     * Set the value of CurrencyCode, return this.
     *
     * @param currencyCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCurrencyCode($value)
    {
        $this->setCurrencyCode($value);

        return $this;
    }

    /**
     * Set the value of the CurrencyCode property.
     *
     * @param string currencyCode
     *
     * @return this instance
     */
    public function setCurrencyCode($value)
    {
        $this->_fields['CurrencyCode']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Get the value of the Amount property.
     *
     * @return BigDecimal Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set.
     */
    public function isSetAmount()
    {
        return ! is_null($this->_fields['Amount']['FieldValue']);
    }

    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmount($value)
    {
        $this->setAmount($value);

        return $this;
    }

    /**
     * Set the value of the Amount property.
     *
     * @param float amount
     *
     * @return this instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;

        return $this;
    }

}
