<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Auth0\\SDK\\API\\Authentication' => $vendorDir . '/auth0/auth0-php/src/API/Authentication.php',
    'Auth0\\SDK\\API\\Header\\AuthorizationBearer' => $vendorDir . '/auth0/auth0-php/src/API/Header/AuthorizationBearer.php',
    'Auth0\\SDK\\API\\Header\\ContentType' => $vendorDir . '/auth0/auth0-php/src/API/Header/ContentType.php',
    'Auth0\\SDK\\API\\Header\\ForwardedFor' => $vendorDir . '/auth0/auth0-php/src/API/Header/ForwardedFor.php',
    'Auth0\\SDK\\API\\Header\\Header' => $vendorDir . '/auth0/auth0-php/src/API/Header/Header.php',
    'Auth0\\SDK\\API\\Header\\Telemetry' => $vendorDir . '/auth0/auth0-php/src/API/Header/Telemetry.php',
    'Auth0\\SDK\\API\\Helpers\\ApiClient' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/ApiClient.php',
    'Auth0\\SDK\\API\\Helpers\\InformationHeaders' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/InformationHeaders.php',
    'Auth0\\SDK\\API\\Helpers\\RequestBuilder' => $vendorDir . '/auth0/auth0-php/src/API/Helpers/RequestBuilder.php',
    'Auth0\\SDK\\API\\Management' => $vendorDir . '/auth0/auth0-php/src/API/Management.php',
    'Auth0\\SDK\\API\\Management\\Blacklists' => $vendorDir . '/auth0/auth0-php/src/API/Management/Blacklists.php',
    'Auth0\\SDK\\API\\Management\\ClientGrants' => $vendorDir . '/auth0/auth0-php/src/API/Management/ClientGrants.php',
    'Auth0\\SDK\\API\\Management\\Clients' => $vendorDir . '/auth0/auth0-php/src/API/Management/Clients.php',
    'Auth0\\SDK\\API\\Management\\Connections' => $vendorDir . '/auth0/auth0-php/src/API/Management/Connections.php',
    'Auth0\\SDK\\API\\Management\\DeviceCredentials' => $vendorDir . '/auth0/auth0-php/src/API/Management/DeviceCredentials.php',
    'Auth0\\SDK\\API\\Management\\EmailTemplates' => $vendorDir . '/auth0/auth0-php/src/API/Management/EmailTemplates.php',
    'Auth0\\SDK\\API\\Management\\Emails' => $vendorDir . '/auth0/auth0-php/src/API/Management/Emails.php',
    'Auth0\\SDK\\API\\Management\\GenericResource' => $vendorDir . '/auth0/auth0-php/src/API/Management/GenericResource.php',
    'Auth0\\SDK\\API\\Management\\Grants' => $vendorDir . '/auth0/auth0-php/src/API/Management/Grants.php',
    'Auth0\\SDK\\API\\Management\\Guardian' => $vendorDir . '/auth0/auth0-php/src/API/Management/Guardian.php',
    'Auth0\\SDK\\API\\Management\\Jobs' => $vendorDir . '/auth0/auth0-php/src/API/Management/Jobs.php',
    'Auth0\\SDK\\API\\Management\\Logs' => $vendorDir . '/auth0/auth0-php/src/API/Management/Logs.php',
    'Auth0\\SDK\\API\\Management\\ResourceServers' => $vendorDir . '/auth0/auth0-php/src/API/Management/ResourceServers.php',
    'Auth0\\SDK\\API\\Management\\Roles' => $vendorDir . '/auth0/auth0-php/src/API/Management/Roles.php',
    'Auth0\\SDK\\API\\Management\\Rules' => $vendorDir . '/auth0/auth0-php/src/API/Management/Rules.php',
    'Auth0\\SDK\\API\\Management\\Stats' => $vendorDir . '/auth0/auth0-php/src/API/Management/Stats.php',
    'Auth0\\SDK\\API\\Management\\Tenants' => $vendorDir . '/auth0/auth0-php/src/API/Management/Tenants.php',
    'Auth0\\SDK\\API\\Management\\Tickets' => $vendorDir . '/auth0/auth0-php/src/API/Management/Tickets.php',
    'Auth0\\SDK\\API\\Management\\UserBlocks' => $vendorDir . '/auth0/auth0-php/src/API/Management/UserBlocks.php',
    'Auth0\\SDK\\API\\Management\\Users' => $vendorDir . '/auth0/auth0-php/src/API/Management/Users.php',
    'Auth0\\SDK\\API\\Management\\UsersByEmail' => $vendorDir . '/auth0/auth0-php/src/API/Management/UsersByEmail.php',
    'Auth0\\SDK\\Auth0' => $vendorDir . '/auth0/auth0-php/src/Auth0.php',
    'Auth0\\SDK\\Exception\\ApiException' => $vendorDir . '/auth0/auth0-php/src/Exception/ApiException.php',
    'Auth0\\SDK\\Exception\\CoreException' => $vendorDir . '/auth0/auth0-php/src/Exception/CoreException.php',
    'Auth0\\SDK\\Exception\\EmptyOrInvalidParameterException' => $vendorDir . '/auth0/auth0-php/src/Exception/EmptyOrInvalidParameterException.php',
    'Auth0\\SDK\\Exception\\InvalidPermissionsArrayException' => $vendorDir . '/auth0/auth0-php/src/Exception/InvalidPermissionsArrayException.php',
    'Auth0\\SDK\\Exception\\InvalidTokenException' => $vendorDir . '/auth0/auth0-php/src/Exception/InvalidTokenException.php',
    'Auth0\\SDK\\Helpers\\Cache\\NoCacheHandler' => $vendorDir . '/auth0/auth0-php/src/Helpers/Cache/NoCacheHandler.php',
    'Auth0\\SDK\\Helpers\\JWKFetcher' => $vendorDir . '/auth0/auth0-php/src/Helpers/JWKFetcher.php',
    'Auth0\\SDK\\Helpers\\Tokens\\AsymmetricVerifier' => $vendorDir . '/auth0/auth0-php/src/Helpers/Tokens/AsymmetricVerifier.php',
    'Auth0\\SDK\\Helpers\\Tokens\\IdTokenVerifier' => $vendorDir . '/auth0/auth0-php/src/Helpers/Tokens/IdTokenVerifier.php',
    'Auth0\\SDK\\Helpers\\Tokens\\SignatureVerifier' => $vendorDir . '/auth0/auth0-php/src/Helpers/Tokens/SignatureVerifier.php',
    'Auth0\\SDK\\Helpers\\Tokens\\SymmetricVerifier' => $vendorDir . '/auth0/auth0-php/src/Helpers/Tokens/SymmetricVerifier.php',
    'Auth0\\SDK\\Helpers\\Tokens\\TokenVerifier' => $vendorDir . '/auth0/auth0-php/src/Helpers/Tokens/TokenVerifier.php',
    'Auth0\\SDK\\Helpers\\TransientStoreHandler' => $vendorDir . '/auth0/auth0-php/src/Helpers/TransientStoreHandler.php',
    'Auth0\\SDK\\Store\\CookieStore' => $vendorDir . '/auth0/auth0-php/src/Store/CookieStore.php',
    'Auth0\\SDK\\Store\\EmptyStore' => $vendorDir . '/auth0/auth0-php/src/Store/EmptyStore.php',
    'Auth0\\SDK\\Store\\SessionStore' => $vendorDir . '/auth0/auth0-php/src/Store/SessionStore.php',
    'Auth0\\SDK\\Store\\StoreInterface' => $vendorDir . '/auth0/auth0-php/src/Store/StoreInterface.php',
    'GuzzleHttp\\Client' => $vendorDir . '/guzzlehttp/guzzle/src/Client.php',
    'GuzzleHttp\\ClientInterface' => $vendorDir . '/guzzlehttp/guzzle/src/ClientInterface.php',
    'GuzzleHttp\\Cookie\\CookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
    'GuzzleHttp\\Cookie\\CookieJarInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
    'GuzzleHttp\\Cookie\\FileCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
    'GuzzleHttp\\Cookie\\SessionCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
    'GuzzleHttp\\Cookie\\SetCookie' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
    'GuzzleHttp\\Exception\\BadResponseException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
    'GuzzleHttp\\Exception\\ClientException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
    'GuzzleHttp\\Exception\\ConnectException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
    'GuzzleHttp\\Exception\\GuzzleException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
    'GuzzleHttp\\Exception\\InvalidArgumentException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
    'GuzzleHttp\\Exception\\RequestException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
    'GuzzleHttp\\Exception\\SeekException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
    'GuzzleHttp\\Exception\\ServerException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
    'GuzzleHttp\\Exception\\TooManyRedirectsException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
    'GuzzleHttp\\Exception\\TransferException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
    'GuzzleHttp\\HandlerStack' => $vendorDir . '/guzzlehttp/guzzle/src/HandlerStack.php',
    'GuzzleHttp\\Handler\\CurlFactory' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
    'GuzzleHttp\\Handler\\CurlFactoryInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
    'GuzzleHttp\\Handler\\CurlHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
    'GuzzleHttp\\Handler\\CurlMultiHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
    'GuzzleHttp\\Handler\\EasyHandle' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
    'GuzzleHttp\\Handler\\MockHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
    'GuzzleHttp\\Handler\\Proxy' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
    'GuzzleHttp\\Handler\\StreamHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
    'GuzzleHttp\\MessageFormatter' => $vendorDir . '/guzzlehttp/guzzle/src/MessageFormatter.php',
    'GuzzleHttp\\Middleware' => $vendorDir . '/guzzlehttp/guzzle/src/Middleware.php',
    'GuzzleHttp\\Pool' => $vendorDir . '/guzzlehttp/guzzle/src/Pool.php',
    'GuzzleHttp\\PrepareBodyMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
    'GuzzleHttp\\Promise\\AggregateException' => $vendorDir . '/guzzlehttp/promises/src/AggregateException.php',
    'GuzzleHttp\\Promise\\CancellationException' => $vendorDir . '/guzzlehttp/promises/src/CancellationException.php',
    'GuzzleHttp\\Promise\\Coroutine' => $vendorDir . '/guzzlehttp/promises/src/Coroutine.php',
    'GuzzleHttp\\Promise\\EachPromise' => $vendorDir . '/guzzlehttp/promises/src/EachPromise.php',
    'GuzzleHttp\\Promise\\FulfilledPromise' => $vendorDir . '/guzzlehttp/promises/src/FulfilledPromise.php',
    'GuzzleHttp\\Promise\\Promise' => $vendorDir . '/guzzlehttp/promises/src/Promise.php',
    'GuzzleHttp\\Promise\\PromiseInterface' => $vendorDir . '/guzzlehttp/promises/src/PromiseInterface.php',
    'GuzzleHttp\\Promise\\PromisorInterface' => $vendorDir . '/guzzlehttp/promises/src/PromisorInterface.php',
    'GuzzleHttp\\Promise\\RejectedPromise' => $vendorDir . '/guzzlehttp/promises/src/RejectedPromise.php',
    'GuzzleHttp\\Promise\\RejectionException' => $vendorDir . '/guzzlehttp/promises/src/RejectionException.php',
    'GuzzleHttp\\Promise\\TaskQueue' => $vendorDir . '/guzzlehttp/promises/src/TaskQueue.php',
    'GuzzleHttp\\Promise\\TaskQueueInterface' => $vendorDir . '/guzzlehttp/promises/src/TaskQueueInterface.php',
    'GuzzleHttp\\Psr7\\AppendStream' => $vendorDir . '/guzzlehttp/psr7/src/AppendStream.php',
    'GuzzleHttp\\Psr7\\BufferStream' => $vendorDir . '/guzzlehttp/psr7/src/BufferStream.php',
    'GuzzleHttp\\Psr7\\CachingStream' => $vendorDir . '/guzzlehttp/psr7/src/CachingStream.php',
    'GuzzleHttp\\Psr7\\DroppingStream' => $vendorDir . '/guzzlehttp/psr7/src/DroppingStream.php',
    'GuzzleHttp\\Psr7\\FnStream' => $vendorDir . '/guzzlehttp/psr7/src/FnStream.php',
    'GuzzleHttp\\Psr7\\InflateStream' => $vendorDir . '/guzzlehttp/psr7/src/InflateStream.php',
    'GuzzleHttp\\Psr7\\LazyOpenStream' => $vendorDir . '/guzzlehttp/psr7/src/LazyOpenStream.php',
    'GuzzleHttp\\Psr7\\LimitStream' => $vendorDir . '/guzzlehttp/psr7/src/LimitStream.php',
    'GuzzleHttp\\Psr7\\MessageTrait' => $vendorDir . '/guzzlehttp/psr7/src/MessageTrait.php',
    'GuzzleHttp\\Psr7\\MultipartStream' => $vendorDir . '/guzzlehttp/psr7/src/MultipartStream.php',
    'GuzzleHttp\\Psr7\\NoSeekStream' => $vendorDir . '/guzzlehttp/psr7/src/NoSeekStream.php',
    'GuzzleHttp\\Psr7\\PumpStream' => $vendorDir . '/guzzlehttp/psr7/src/PumpStream.php',
    'GuzzleHttp\\Psr7\\Request' => $vendorDir . '/guzzlehttp/psr7/src/Request.php',
    'GuzzleHttp\\Psr7\\Response' => $vendorDir . '/guzzlehttp/psr7/src/Response.php',
    'GuzzleHttp\\Psr7\\Rfc7230' => $vendorDir . '/guzzlehttp/psr7/src/Rfc7230.php',
    'GuzzleHttp\\Psr7\\ServerRequest' => $vendorDir . '/guzzlehttp/psr7/src/ServerRequest.php',
    'GuzzleHttp\\Psr7\\Stream' => $vendorDir . '/guzzlehttp/psr7/src/Stream.php',
    'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => $vendorDir . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
    'GuzzleHttp\\Psr7\\StreamWrapper' => $vendorDir . '/guzzlehttp/psr7/src/StreamWrapper.php',
    'GuzzleHttp\\Psr7\\UploadedFile' => $vendorDir . '/guzzlehttp/psr7/src/UploadedFile.php',
    'GuzzleHttp\\Psr7\\Uri' => $vendorDir . '/guzzlehttp/psr7/src/Uri.php',
    'GuzzleHttp\\Psr7\\UriNormalizer' => $vendorDir . '/guzzlehttp/psr7/src/UriNormalizer.php',
    'GuzzleHttp\\Psr7\\UriResolver' => $vendorDir . '/guzzlehttp/psr7/src/UriResolver.php',
    'GuzzleHttp\\RedirectMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
    'GuzzleHttp\\RequestOptions' => $vendorDir . '/guzzlehttp/guzzle/src/RequestOptions.php',
    'GuzzleHttp\\RetryMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
    'GuzzleHttp\\TransferStats' => $vendorDir . '/guzzlehttp/guzzle/src/TransferStats.php',
    'GuzzleHttp\\UriTemplate' => $vendorDir . '/guzzlehttp/guzzle/src/UriTemplate.php',
    'GuzzleHttp\\Utils' => $vendorDir . '/guzzlehttp/guzzle/src/Utils.php',
    'Lcobucci\\JWT\\Builder' => $vendorDir . '/lcobucci/jwt/src/Builder.php',
    'Lcobucci\\JWT\\Claim' => $vendorDir . '/lcobucci/jwt/src/Claim.php',
    'Lcobucci\\JWT\\Claim\\Basic' => $vendorDir . '/lcobucci/jwt/src/Claim/Basic.php',
    'Lcobucci\\JWT\\Claim\\EqualsTo' => $vendorDir . '/lcobucci/jwt/src/Claim/EqualsTo.php',
    'Lcobucci\\JWT\\Claim\\Factory' => $vendorDir . '/lcobucci/jwt/src/Claim/Factory.php',
    'Lcobucci\\JWT\\Claim\\GreaterOrEqualsTo' => $vendorDir . '/lcobucci/jwt/src/Claim/GreaterOrEqualsTo.php',
    'Lcobucci\\JWT\\Claim\\LesserOrEqualsTo' => $vendorDir . '/lcobucci/jwt/src/Claim/LesserOrEqualsTo.php',
    'Lcobucci\\JWT\\Claim\\Validatable' => $vendorDir . '/lcobucci/jwt/src/Claim/Validatable.php',
    'Lcobucci\\JWT\\Parser' => $vendorDir . '/lcobucci/jwt/src/Parser.php',
    'Lcobucci\\JWT\\Parsing\\Decoder' => $vendorDir . '/lcobucci/jwt/src/Parsing/Decoder.php',
    'Lcobucci\\JWT\\Parsing\\Encoder' => $vendorDir . '/lcobucci/jwt/src/Parsing/Encoder.php',
    'Lcobucci\\JWT\\Signature' => $vendorDir . '/lcobucci/jwt/src/Signature.php',
    'Lcobucci\\JWT\\Signer' => $vendorDir . '/lcobucci/jwt/src/Signer.php',
    'Lcobucci\\JWT\\Signer\\BaseSigner' => $vendorDir . '/lcobucci/jwt/src/Signer/BaseSigner.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\MultibyteStringConverter' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/MultibyteStringConverter.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha256' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/Sha256.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha384' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/Sha384.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha512' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/Sha512.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\SignatureConverter' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/SignatureConverter.php',
    'Lcobucci\\JWT\\Signer\\Hmac' => $vendorDir . '/lcobucci/jwt/src/Signer/Hmac.php',
    'Lcobucci\\JWT\\Signer\\Hmac\\Sha256' => $vendorDir . '/lcobucci/jwt/src/Signer/Hmac/Sha256.php',
    'Lcobucci\\JWT\\Signer\\Hmac\\Sha384' => $vendorDir . '/lcobucci/jwt/src/Signer/Hmac/Sha384.php',
    'Lcobucci\\JWT\\Signer\\Hmac\\Sha512' => $vendorDir . '/lcobucci/jwt/src/Signer/Hmac/Sha512.php',
    'Lcobucci\\JWT\\Signer\\Key' => $vendorDir . '/lcobucci/jwt/src/Signer/Key.php',
    'Lcobucci\\JWT\\Signer\\Keychain' => $vendorDir . '/lcobucci/jwt/src/Signer/Keychain.php',
    'Lcobucci\\JWT\\Signer\\OpenSSL' => $vendorDir . '/lcobucci/jwt/src/Signer/OpenSSL.php',
    'Lcobucci\\JWT\\Signer\\Rsa' => $vendorDir . '/lcobucci/jwt/src/Signer/Rsa.php',
    'Lcobucci\\JWT\\Signer\\Rsa\\Sha256' => $vendorDir . '/lcobucci/jwt/src/Signer/Rsa/Sha256.php',
    'Lcobucci\\JWT\\Signer\\Rsa\\Sha384' => $vendorDir . '/lcobucci/jwt/src/Signer/Rsa/Sha384.php',
    'Lcobucci\\JWT\\Signer\\Rsa\\Sha512' => $vendorDir . '/lcobucci/jwt/src/Signer/Rsa/Sha512.php',
    'Lcobucci\\JWT\\Token' => $vendorDir . '/lcobucci/jwt/src/Token.php',
    'Lcobucci\\JWT\\ValidationData' => $vendorDir . '/lcobucci/jwt/src/ValidationData.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
    'Psr\\SimpleCache\\CacheException' => $vendorDir . '/psr/simple-cache/src/CacheException.php',
    'Psr\\SimpleCache\\CacheInterface' => $vendorDir . '/psr/simple-cache/src/CacheInterface.php',
    'Psr\\SimpleCache\\InvalidArgumentException' => $vendorDir . '/psr/simple-cache/src/InvalidArgumentException.php',
    'Symfony\\Component\\Inflector\\Inflector' => $vendorDir . '/symfony/inflector/Inflector.php',
    'Symfony\\Component\\PropertyAccess\\Exception\\AccessException' => $vendorDir . '/symfony/property-access/Exception/AccessException.php',
    'Symfony\\Component\\PropertyAccess\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/property-access/Exception/ExceptionInterface.php',
    'Symfony\\Component\\PropertyAccess\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/property-access/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\PropertyAccess\\Exception\\InvalidPropertyPathException' => $vendorDir . '/symfony/property-access/Exception/InvalidPropertyPathException.php',
    'Symfony\\Component\\PropertyAccess\\Exception\\NoSuchIndexException' => $vendorDir . '/symfony/property-access/Exception/NoSuchIndexException.php',
    'Symfony\\Component\\PropertyAccess\\Exception\\NoSuchPropertyException' => $vendorDir . '/symfony/property-access/Exception/NoSuchPropertyException.php',
    'Symfony\\Component\\PropertyAccess\\Exception\\OutOfBoundsException' => $vendorDir . '/symfony/property-access/Exception/OutOfBoundsException.php',
    'Symfony\\Component\\PropertyAccess\\Exception\\RuntimeException' => $vendorDir . '/symfony/property-access/Exception/RuntimeException.php',
    'Symfony\\Component\\PropertyAccess\\Exception\\UnexpectedTypeException' => $vendorDir . '/symfony/property-access/Exception/UnexpectedTypeException.php',
    'Symfony\\Component\\PropertyAccess\\PropertyAccess' => $vendorDir . '/symfony/property-access/PropertyAccess.php',
    'Symfony\\Component\\PropertyAccess\\PropertyAccessor' => $vendorDir . '/symfony/property-access/PropertyAccessor.php',
    'Symfony\\Component\\PropertyAccess\\PropertyAccessorBuilder' => $vendorDir . '/symfony/property-access/PropertyAccessorBuilder.php',
    'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => $vendorDir . '/symfony/property-access/PropertyAccessorInterface.php',
    'Symfony\\Component\\PropertyAccess\\PropertyPath' => $vendorDir . '/symfony/property-access/PropertyPath.php',
    'Symfony\\Component\\PropertyAccess\\PropertyPathBuilder' => $vendorDir . '/symfony/property-access/PropertyPathBuilder.php',
    'Symfony\\Component\\PropertyAccess\\PropertyPathInterface' => $vendorDir . '/symfony/property-access/PropertyPathInterface.php',
    'Symfony\\Component\\PropertyAccess\\PropertyPathIterator' => $vendorDir . '/symfony/property-access/PropertyPathIterator.php',
    'Symfony\\Component\\PropertyAccess\\PropertyPathIteratorInterface' => $vendorDir . '/symfony/property-access/PropertyPathIteratorInterface.php',
    'Symfony\\Component\\PropertyInfo\\DependencyInjection\\PropertyInfoPass' => $vendorDir . '/symfony/property-info/DependencyInjection/PropertyInfoPass.php',
    'Symfony\\Component\\PropertyInfo\\Extractor\\PhpDocExtractor' => $vendorDir . '/symfony/property-info/Extractor/PhpDocExtractor.php',
    'Symfony\\Component\\PropertyInfo\\Extractor\\ReflectionExtractor' => $vendorDir . '/symfony/property-info/Extractor/ReflectionExtractor.php',
    'Symfony\\Component\\PropertyInfo\\Extractor\\SerializerExtractor' => $vendorDir . '/symfony/property-info/Extractor/SerializerExtractor.php',
    'Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface' => $vendorDir . '/symfony/property-info/PropertyAccessExtractorInterface.php',
    'Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface' => $vendorDir . '/symfony/property-info/PropertyDescriptionExtractorInterface.php',
    'Symfony\\Component\\PropertyInfo\\PropertyInfoCacheExtractor' => $vendorDir . '/symfony/property-info/PropertyInfoCacheExtractor.php',
    'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractor' => $vendorDir . '/symfony/property-info/PropertyInfoExtractor.php',
    'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface' => $vendorDir . '/symfony/property-info/PropertyInfoExtractorInterface.php',
    'Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface' => $vendorDir . '/symfony/property-info/PropertyInitializableExtractorInterface.php',
    'Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface' => $vendorDir . '/symfony/property-info/PropertyListExtractorInterface.php',
    'Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface' => $vendorDir . '/symfony/property-info/PropertyTypeExtractorInterface.php',
    'Symfony\\Component\\PropertyInfo\\Type' => $vendorDir . '/symfony/property-info/Type.php',
    'Symfony\\Component\\PropertyInfo\\Util\\PhpDocTypeHelper' => $vendorDir . '/symfony/property-info/Util/PhpDocTypeHelper.php',
    'Symfony\\Component\\Serializer\\Annotation\\DiscriminatorMap' => $vendorDir . '/symfony/serializer/Annotation/DiscriminatorMap.php',
    'Symfony\\Component\\Serializer\\Annotation\\Groups' => $vendorDir . '/symfony/serializer/Annotation/Groups.php',
    'Symfony\\Component\\Serializer\\Annotation\\MaxDepth' => $vendorDir . '/symfony/serializer/Annotation/MaxDepth.php',
    'Symfony\\Component\\Serializer\\Annotation\\SerializedName' => $vendorDir . '/symfony/serializer/Annotation/SerializedName.php',
    'Symfony\\Component\\Serializer\\DependencyInjection\\SerializerPass' => $vendorDir . '/symfony/serializer/DependencyInjection/SerializerPass.php',
    'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder' => $vendorDir . '/symfony/serializer/Encoder/ChainDecoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder' => $vendorDir . '/symfony/serializer/Encoder/ChainEncoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\ContextAwareDecoderInterface' => $vendorDir . '/symfony/serializer/Encoder/ContextAwareDecoderInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\ContextAwareEncoderInterface' => $vendorDir . '/symfony/serializer/Encoder/ContextAwareEncoderInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\CsvEncoder' => $vendorDir . '/symfony/serializer/Encoder/CsvEncoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => $vendorDir . '/symfony/serializer/Encoder/DecoderInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => $vendorDir . '/symfony/serializer/Encoder/EncoderInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\JsonDecode' => $vendorDir . '/symfony/serializer/Encoder/JsonDecode.php',
    'Symfony\\Component\\Serializer\\Encoder\\JsonEncode' => $vendorDir . '/symfony/serializer/Encoder/JsonEncode.php',
    'Symfony\\Component\\Serializer\\Encoder\\JsonEncoder' => $vendorDir . '/symfony/serializer/Encoder/JsonEncoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\NormalizationAwareInterface' => $vendorDir . '/symfony/serializer/Encoder/NormalizationAwareInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\XmlEncoder' => $vendorDir . '/symfony/serializer/Encoder/XmlEncoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\YamlEncoder' => $vendorDir . '/symfony/serializer/Encoder/YamlEncoder.php',
    'Symfony\\Component\\Serializer\\Exception\\BadMethodCallException' => $vendorDir . '/symfony/serializer/Exception/BadMethodCallException.php',
    'Symfony\\Component\\Serializer\\Exception\\CircularReferenceException' => $vendorDir . '/symfony/serializer/Exception/CircularReferenceException.php',
    'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/serializer/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Serializer\\Exception\\ExtraAttributesException' => $vendorDir . '/symfony/serializer/Exception/ExtraAttributesException.php',
    'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/serializer/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Serializer\\Exception\\LogicException' => $vendorDir . '/symfony/serializer/Exception/LogicException.php',
    'Symfony\\Component\\Serializer\\Exception\\MappingException' => $vendorDir . '/symfony/serializer/Exception/MappingException.php',
    'Symfony\\Component\\Serializer\\Exception\\MissingConstructorArgumentsException' => $vendorDir . '/symfony/serializer/Exception/MissingConstructorArgumentsException.php',
    'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException' => $vendorDir . '/symfony/serializer/Exception/NotEncodableValueException.php',
    'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException' => $vendorDir . '/symfony/serializer/Exception/NotNormalizableValueException.php',
    'Symfony\\Component\\Serializer\\Exception\\RuntimeException' => $vendorDir . '/symfony/serializer/Exception/RuntimeException.php',
    'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException' => $vendorDir . '/symfony/serializer/Exception/UnexpectedValueException.php',
    'Symfony\\Component\\Serializer\\Exception\\UnsupportedException' => $vendorDir . '/symfony/serializer/Exception/UnsupportedException.php',
    'Symfony\\Component\\Serializer\\Extractor\\ObjectPropertyListExtractor' => $vendorDir . '/symfony/serializer/Extractor/ObjectPropertyListExtractor.php',
    'Symfony\\Component\\Serializer\\Extractor\\ObjectPropertyListExtractorInterface' => $vendorDir . '/symfony/serializer/Extractor/ObjectPropertyListExtractorInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata' => $vendorDir . '/symfony/serializer/Mapping/AttributeMetadata.php',
    'Symfony\\Component\\Serializer\\Mapping\\AttributeMetadataInterface' => $vendorDir . '/symfony/serializer/Mapping/AttributeMetadataInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorFromClassMetadata' => $vendorDir . '/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping' => $vendorDir . '/symfony/serializer/Mapping/ClassDiscriminatorMapping.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface' => $vendorDir . '/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassMetadata' => $vendorDir . '/symfony/serializer/Mapping/ClassMetadata.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface' => $vendorDir . '/symfony/serializer/Mapping/ClassMetadataInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory' => $vendorDir . '/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php',
    'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory' => $vendorDir . '/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php',
    'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => $vendorDir . '/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassResolverTrait' => $vendorDir . '/symfony/serializer/Mapping/Factory/ClassResolverTrait.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader' => $vendorDir . '/symfony/serializer/Mapping/Loader/AnnotationLoader.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\FileLoader' => $vendorDir . '/symfony/serializer/Mapping/Loader/FileLoader.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain' => $vendorDir . '/symfony/serializer/Mapping/Loader/LoaderChain.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface' => $vendorDir . '/symfony/serializer/Mapping/Loader/LoaderInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader' => $vendorDir . '/symfony/serializer/Mapping/Loader/XmlFileLoader.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\YamlFileLoader' => $vendorDir . '/symfony/serializer/Mapping/Loader/YamlFileLoader.php',
    'Symfony\\Component\\Serializer\\NameConverter\\AdvancedNameConverterInterface' => $vendorDir . '/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php',
    'Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter' => $vendorDir . '/symfony/serializer/NameConverter/CamelCaseToSnakeCaseNameConverter.php',
    'Symfony\\Component\\Serializer\\NameConverter\\MetadataAwareNameConverter' => $vendorDir . '/symfony/serializer/NameConverter/MetadataAwareNameConverter.php',
    'Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface' => $vendorDir . '/symfony/serializer/NameConverter/NameConverterInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\AbstractNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/AbstractNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\AbstractObjectNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/AbstractObjectNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer' => $vendorDir . '/symfony/serializer/Normalizer/ArrayDenormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface' => $vendorDir . '/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ConstraintViolationListNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ContextAwareDenormalizerInterface' => $vendorDir . '/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ContextAwareNormalizerInterface' => $vendorDir . '/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\CustomNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/CustomNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DataUriNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/DataUriNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DateIntervalNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/DateIntervalNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DateTimeNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/DateTimeNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DateTimeZoneNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DenormalizableInterface' => $vendorDir . '/symfony/serializer/Normalizer/DenormalizableInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface' => $vendorDir . '/symfony/serializer/Normalizer/DenormalizerAwareInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareTrait' => $vendorDir . '/symfony/serializer/Normalizer/DenormalizerAwareTrait.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => $vendorDir . '/symfony/serializer/Normalizer/DenormalizerInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\GetSetMethodNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/GetSetMethodNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\JsonSerializableNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/JsonSerializableNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\NormalizableInterface' => $vendorDir . '/symfony/serializer/Normalizer/NormalizableInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface' => $vendorDir . '/symfony/serializer/Normalizer/NormalizerAwareInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareTrait' => $vendorDir . '/symfony/serializer/Normalizer/NormalizerAwareTrait.php',
    'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => $vendorDir . '/symfony/serializer/Normalizer/NormalizerInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/ObjectNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ObjectToPopulateTrait' => $vendorDir . '/symfony/serializer/Normalizer/ObjectToPopulateTrait.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ProblemNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/ProblemNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\PropertyNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/PropertyNormalizer.php',
    'Symfony\\Component\\Serializer\\Serializer' => $vendorDir . '/symfony/serializer/Serializer.php',
    'Symfony\\Component\\Serializer\\SerializerAwareInterface' => $vendorDir . '/symfony/serializer/SerializerAwareInterface.php',
    'Symfony\\Component\\Serializer\\SerializerAwareTrait' => $vendorDir . '/symfony/serializer/SerializerAwareTrait.php',
    'Symfony\\Component\\Serializer\\SerializerInterface' => $vendorDir . '/symfony/serializer/SerializerInterface.php',
    'Symfony\\Polyfill\\Ctype\\Ctype' => $vendorDir . '/symfony/polyfill-ctype/Ctype.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Idn' => $vendorDir . '/symfony/polyfill-intl-idn/Idn.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
    'Symfony\\Polyfill\\Php72\\Php72' => $vendorDir . '/symfony/polyfill-php72/Php72.php',
);
