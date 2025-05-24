<?php

namespace App\Helpers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeGenerator
{
    /**
     * Generate QR code for payment with enhanced styling
     * 
     * @param string|null $amount
     * @param string $style
     * @return string
     */
    public static function generatePaymentQr($amount = null, $style = 'modern')
    {
        // Payment information
        $merchantName = "KOSAL SENSOK";
        $merchantId = "YOUR_MERCHANT_ID"; // Replace with actual merchant ID
        $amount = $amount ?? "10.00";
        $currency = "USD";
        
        // Create payment string
        $paymentString = "BCD
001
2
KHR
{$merchantName}
{$merchantId}
{$amount}
{$currency}";

        // Style configurations
        $styles = [
            'modern' => [
                'size' => 200,
                'color' => [30, 58, 138], // Indigo-900
                'background' => [255, 255, 255],
                'style' => 'square',
                'eye' => 'circle',
                'margin' => 1,
            ],
            'classic' => [
                'size' => 200,
                'color' => [0, 0, 0],
                'background' => [255, 255, 255],
                'style' => 'dot',
                'eye' => 'square',
                'margin' => 2,
            ],
            'fancy' => [
                'size' => 250,
                'color' => [79, 70, 229], // Indigo-600
                'background' => [243, 244, 246],
                'style' => 'round',
                'eye' => 'circle',
                'margin' => 1,
            ]
        ];

        // Get style configuration
        $config = $styles[$style] ?? $styles['modern'];

        // Generate QR code with selected style
        $qrCode = QrCode::size($config['size'])
            ->backgroundColor(...$config['background'])
            ->color(...$config['color'])
            ->margin($config['margin'])
            ->errorCorrection('H');

        // Apply additional styling if available
        if (method_exists($qrCode, 'style')) {
            $qrCode->style($config['style']);
        }
        if (method_exists($qrCode, 'eye')) {
            $qrCode->eye($config['eye']);
        }

        // Generate and return the QR code
        return $qrCode->generate($paymentString);
    }

    /**
     * Generate a styled QR code with logo
     * 
     * @param string $data
     * @param string|null $logoPath
     * @return string
     */
    public static function generateStyledQr($data, $logoPath = null)
    {
        $qrCode = QrCode::size(300)
            ->backgroundColor(255, 255, 255)
            ->color(79, 70, 229)
            ->margin(1)
            ->errorCorrection('H');

        if ($logoPath && file_exists($logoPath)) {
            $qrCode->merge($logoPath, 0.3, true);
        }

        return $qrCode->generate($data);
    }
} 