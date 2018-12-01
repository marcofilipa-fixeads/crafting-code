<?php
/**
 * AccountServiceShouldTest
 *
 * PHP version 7
 *
 * @author Marco Filipa <marco.filipa@olx.com>
 * @copyright 2018 Olx@lisbonTechHub
 */

use \PHPUnit\Framework\TestCase;

/**
 * AccountServiceShouldTest
 *
 *
 */
class AccountServiceShouldTest extends TestCase
{
    /** @test */
    public function print_account_statement()
    {
        $accountService = new AccountService($this->createMock(TransactionList::class));

        $accountService->deposit(100);
        $accountService->withdraw(15);
        $accountService->deposit(27);

        $accountService->printStatement();
        $expectedOutput =
            "DATE       | AMOUNT  | BALANCE
        2018-12-01 | 100 | 100
        2018-12-01 | -15 | 85
        2018-12-01 | 27 | 112";
        $this->expectOutputString($expectedOutput);
    }

    public function record_deposit_transaction()
    {
        $transactionListMock =
            $this->createMock(TransactionList::class)
                ->expects($this->once())
                ->method('add')
                ->with(200)
            ;
        $accountService = new AccountService($transactionListMock);
        $accountService->deposit(100);
    }

    public function record_withdrawal_transaction()
    {

    }
}