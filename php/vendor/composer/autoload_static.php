<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a33e275c01c2f7fd262d57e9db185bd
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'b067bc7112e384b61c701452d53a14a8' => __DIR__ . '/..' . '/mtdowling/jmespath.php/src/JmesPath.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '8a9dc1de0ca7e01f3e08231539562f61' => __DIR__ . '/..' . '/aws/aws-sdk-php/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'J' => 
        array (
            'JmesPath\\' => 9,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'Aws\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'JmesPath\\' => 
        array (
            0 => __DIR__ . '/..' . '/mtdowling/jmespath.php/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Aws\\' => 
        array (
            0 => __DIR__ . '/..' . '/aws/aws-sdk-php/src',
        ),
    );

    public static $classMap = array (
        'CAS_AuthenticationException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/AuthenticationException.php',
        'CAS_Client' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Client.php',
        'CAS_CookieJar' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/CookieJar.php',
        'CAS_Exception' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Exception.php',
        'CAS_GracefullTerminationException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/GracefullTerminationException.php',
        'CAS_InvalidArgumentException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/InvalidArgumentException.php',
        'CAS_Languages_Catalan' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Catalan.php',
        'CAS_Languages_English' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/English.php',
        'CAS_Languages_French' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/French.php',
        'CAS_Languages_German' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/German.php',
        'CAS_Languages_Greek' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Greek.php',
        'CAS_Languages_Japanese' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Japanese.php',
        'CAS_Languages_LanguageInterface' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/LanguageInterface.php',
        'CAS_Languages_Spanish' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Spanish.php',
        'CAS_OutOfSequenceBeforeAuthenticationCallException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/OutOfSequenceBeforeAuthenticationCallException.php',
        'CAS_OutOfSequenceBeforeClientException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/OutOfSequenceBeforeClientException.php',
        'CAS_OutOfSequenceBeforeProxyException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/OutOfSequenceBeforeProxyException.php',
        'CAS_OutOfSequenceException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/OutOfSequenceException.php',
        'CAS_PGTStorage_AbstractStorage' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/PGTStorage/AbstractStorage.php',
        'CAS_PGTStorage_Db' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/PGTStorage/Db.php',
        'CAS_PGTStorage_File' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/PGTStorage/File.php',
        'CAS_ProxiedService' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService.php',
        'CAS_ProxiedService_Abstract' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Abstract.php',
        'CAS_ProxiedService_Exception' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Exception.php',
        'CAS_ProxiedService_Http' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Http.php',
        'CAS_ProxiedService_Http_Abstract' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Http/Abstract.php',
        'CAS_ProxiedService_Http_Get' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Http/Get.php',
        'CAS_ProxiedService_Http_Post' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Http/Post.php',
        'CAS_ProxiedService_Imap' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Imap.php',
        'CAS_ProxiedService_Testable' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Testable.php',
        'CAS_ProxyChain' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain.php',
        'CAS_ProxyChain_AllowedList' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain/AllowedList.php',
        'CAS_ProxyChain_Any' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain/Any.php',
        'CAS_ProxyChain_Interface' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain/Interface.php',
        'CAS_ProxyChain_Trusted' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain/Trusted.php',
        'CAS_ProxyTicketException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyTicketException.php',
        'CAS_Request_AbstractRequest' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/AbstractRequest.php',
        'CAS_Request_CurlMultiRequest' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/CurlMultiRequest.php',
        'CAS_Request_CurlRequest' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/CurlRequest.php',
        'CAS_Request_Exception' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/Exception.php',
        'CAS_Request_MultiRequestInterface' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/MultiRequestInterface.php',
        'CAS_Request_RequestInterface' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/RequestInterface.php',
        'CAS_TypeMismatchException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/TypeMismatchException.php',
        'phpCAS' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a33e275c01c2f7fd262d57e9db185bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a33e275c01c2f7fd262d57e9db185bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a33e275c01c2f7fd262d57e9db185bd::$classMap;

        }, null, ClassLoader::class);
    }
}
