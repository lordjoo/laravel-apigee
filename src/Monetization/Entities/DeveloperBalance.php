<?php

namespace Lordjoo\Apigee\Monetization\Entities;

class DeveloperBalance extends Entity
{

    /**
     * ID of the payment provider.
     * @var string $id
     */
    public string $id;

    /**
     * ID of the payment provider to use to reload the account, if configured.
     * @var string $developerID
     */
    public string $providerID;

    /**
     *
     * @var float $amount
     */
    public float $amount;

    /**
     * Indicates whether the balance is recurring.
     * @var bool $isRecurring
     */
    public bool $isRecurring;

    /**
     * Amount to add automatically to the account, if configured.
     * @var bool $isReplenishable
     */
    public float $recurringAmount;

    /**
     * Threshold that the prepaid account balance must drop below in order to trigger automatic reload, if configured.
     * @var bool $isReplenishable
     */
    public float $replenishAmount;

    public SupportedCurrency $supportedCurrency;

    /**
     * Amount used.
     * @var float $usage
     */
    public float $usage;

    /**
     * Billing month.
     * @var string $month
     */
    public string $month;

    /**
     * Billing year.
     * @var string $year
     */
    public string $year;

    /**
     * Usage tax..
     * @var float $tax
     */
    public float $tax;

    /**
     * Tax rate for developer.
     * @var float $approxTaxRate
     */
    public float $approxTaxRate;

    /**
     * Current balance in account based on current usage.
     * @var float $currentBalance
     */
    public float $currentBalance;

    /**
     * Total balance in account without subtracting current usage.
     * @var float $currentTotalBalance
     */
    public float $currentTotalBalance;

    /**
     * Current usage.
     * @var float $currentUsage
     */
    public float $currentUsage;

    /**
     * Previous balance in account.
     * @var float $previousBalance
     */
    public float $previousBalance;

    /**
     * Sum of top ups.
     * @var float $previousTotalBalance
     */
    public float $topups;


}
