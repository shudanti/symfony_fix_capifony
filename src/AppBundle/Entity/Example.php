<?php namespace AppBundle\Entity;

use Captcha\Bundle\CaptchaBundle\Validator\Constraints as CaptchaAssert;

class Example
{
    /**
     * @CaptchaAssert\ValidCaptcha(
     *      message = "CAPTCHA validation failed, try again."
     * )
     */
    protected $captchaCode;

    public function getCaptchaCode()
    {
        return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
        $this->captchaCode = $captchaCode;
    }
}
