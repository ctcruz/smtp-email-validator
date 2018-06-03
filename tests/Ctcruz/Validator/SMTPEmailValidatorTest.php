<?php
/**
 * Created by PhpStorm.
 * User: tarsis
 * Date: 27/05/18
 * Time: 23:02
 */

use PHPUnit\Framework\TestCase;
use Ctcruz\Validator\SMTPEmailValidator;

class SMTPEmailValidatorTest extends TestCase
{
    public function test_if_validate_method_can_be_assign()
    {
        $smtp_validator = new SMTPEmailValidator();
        $emails = ['joe@gmail.com'];
        $sender = 'user@example.com';

        $this->assertInstanceOf(SMTPEmailValidator::class, $smtp_validator->validate($emails, $sender));
    }
}
