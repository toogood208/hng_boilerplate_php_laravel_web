<?php

namespace App\Helpers;

use Ferdous\OtpValidator\Object\OtpRequestObject;
use Ferdous\OtpValidator\OtpValidator;
use Ferdous\OtpValidator\Object\OtpValidateRequestObject;

class OtpHelper
{
    /**
     * Request for OTP
     *
     * @param string $identifier
     * @param string $purpose
     * @param string $phoneNumber
     * @param string $email
     * @return array
     */
    public static function requestOtp(string $identifier, string $purpose, string $phoneNumber = null, string $email): array
    {
        return OtpValidator::requestOtp(
            new OtpRequestObject($identifier, $purpose, $phoneNumber, $email)
        );
    }

    /**
     * Validate OTP
     *
     * @param string $uniqueId
     * @param string $otp
     * @return array
     */
    public static function validateOtp(string $uniqueId, string $otp): array
    {
        return OtpValidator::validateOtp(
            new OtpValidateRequestObject($uniqueId, $otp)
        );
    }

    /**
     * Resend OTP
     *
     * @param string $uniqueId
     * @return array
     */
    public static function resendOtp(string $uniqueId): array
    {
        return OtpValidator::resendOtp($uniqueId);
    }
}
