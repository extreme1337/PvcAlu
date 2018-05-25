<?php
final class Configuration{
    const DATABASE_HOST = 'localhost';
    const DATABASE_USER = 'root';
    const DATABASE_PASS = '';
    const DATABASE_NAME = 'pvc_alu_stolarija';

    const SESSION_STORAGE = '\\App\core\\session\\FileSessionStorage';
    const SESSION_STORAGE_DATA = ['./sessions/'];
    const SESSION_LIFETIME = 3600;

    const FINGERPRINT_PROVIDER_FACTORY = '\\App\\Core\\Fingerprint\\BasicFingerprintProviderFactory';
        const FINGERPRINT_PROVIDER_METHOD  = 'getInstance';
        const FINGERPRINT_PROVIDER_ARGS    = [ 'SERVER' ];
}