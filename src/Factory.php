<?php

namespace Signifly\Shopify;

class Factory
{
    public static function fromConfig(): Shopify
    {
        $shopify = new Shopify(
            config('shopify.credentials.access_token'),
            config('shopify.credentials.domain'),
            config('shopify.credentials.api_version'),
        );

        if ($connectTimeout = config('shopify.http.connect_timeout')) {
            $shopify->withConnectTimeout((int) $connectTimeout);
        }

        if ($timeout = config('shopify.http.timeout')) {
            $shopify->withTimeout((int) $timeout);
        }

        return $shopify;
    }

    public static function fromArray(array $data): Shopify
    {
        return new Shopify(
            $data['access_token'],
            $data['domain'],
            $data['api_version']
        );
    }
}
