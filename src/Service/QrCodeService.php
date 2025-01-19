<?php

namespace App\Service;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCodeBundle\Response\QrCodeResponse;

class QrCodeService
{
    public function __construct(
        private BuilderInterface $customQrCodeBuilder
        ){
    }

    public function generateQrCodeWithLogo(string $fullUrl, string $logoPath = null)
    {
        $result = $this->customQrCodeBuilder->build(
            data: $fullUrl,
            logoPath: $logoPath,
            margin: 0,
            size: 150,
        );

        $response = new QrCodeResponse($result);

        return $response;
    }

}