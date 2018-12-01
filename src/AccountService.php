<?php
/**
 * AccountService
 *
 * PHP version 7
 *
 * @author Marco Filipa <marco.filipa@olx.com>
 * @copyright 2018 Olx@lisbonTechHub
 */


/**
 * AccountService
 *
 *
 */
class AccountService
{
    private $transactions;
    /**
     * AccountService constructor.
     */
    public function __construct(TransactionList $transactions){
        $this->transactions = $transactions;
    }

    public function deposit(int $amount)
    {
        $this->transactions->add($amount, date('c'), 'D');
    }

    public function withdraw(int $amount)
    {
        $this->transactions->add($amount, date('c'),'W');
    }

    public function printStatement() {
        $header = ['DATE', 'AMOUNT', 'BALANCE'];

        echo implode('|', $header);

        foreach ($this->transactions->get() as $transaction) {
            echo $transaction->getDate().'|'
                .$transaction->getAmount().'|'
                .$transaction->getBalance();
        }
    }
}