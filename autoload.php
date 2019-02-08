<?php

/*
 * Bear Framework
 * http://bearframework.com
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

$classes = [
    'BearFramework' => 'src/BearFramework.php',
    'BearFramework\App\Addon' => 'src/App/Addon.php',
    'BearFramework\App\AddonsRepository' => 'src/App/AddonsRepository.php',
    'BearFramework\App\Assets' => 'src/App/Assets.php',
    'BearFramework\App\Assets\BeforeGetDetailsEventDetails' => 'src/App/Assets/BeforeGetDetailsEventDetails.php',
    'BearFramework\App\Assets\BeforeGetURLEventDetails' => 'src/App/Assets/BeforeGetURLEventDetails.php',
    'BearFramework\App\Assets\BeforePrepareEventDetails' => 'src/App/Assets/BeforePrepareEventDetails.php',
    'BearFramework\App\Assets\GetDetailsEventDetails' => 'src/App/Assets/GetDetailsEventDetails.php',
    'BearFramework\App\Assets\GetURLEventDetails' => 'src/App/Assets/GetURLEventDetails.php',
    'BearFramework\App\Assets\PrepareEventDetails' => 'src/App/Assets/PrepareEventDetails.php',
    'BearFramework\App\BeforeSendResponseEventDetails' => 'src/App/BeforeSendResponseEventDetails.php',
    'BearFramework\App\CacheItem' => 'src/App/CacheItem.php',
    'BearFramework\App\CacheRepository' => 'src/App/CacheRepository.php',
    'BearFramework\App\Cache\ItemChangeEventDetails' => 'src/App/Cache/ItemChangeEventDetails.php',
    'BearFramework\App\Cache\ItemDeleteEventDetails' => 'src/App/Cache/ItemDeleteEventDetails.php',
    'BearFramework\App\Cache\ItemExistsEventDetails' => 'src/App/Cache/ItemExistsEventDetails.php',
    'BearFramework\App\Cache\ItemGetEventDetails' => 'src/App/Cache/ItemGetEventDetails.php',
    'BearFramework\App\Cache\ItemGetValueEventDetails' => 'src/App/Cache/ItemGetValueEventDetails.php',
    'BearFramework\App\Cache\ItemRequestEventDetails' => 'src/App/Cache/ItemRequestEventDetails.php',
    'BearFramework\App\Cache\ItemSetEventDetails' => 'src/App/Cache/ItemSetEventDetails.php',
    'BearFramework\App\ClassesRepository' => 'src/App/ClassesRepository.php',
    'BearFramework\App\Config' => 'src/App/Config.php',
    'BearFramework\App\Context' => 'src/App/Context.php',
    'BearFramework\App\Context\Assets' => 'src/App/Context/Assets.php',
    'BearFramework\App\Context\Classes' => 'src/App/Context/Classes.php',
    'BearFramework\App\ContextsRepository' => 'src/App/ContextsRepository.php',
    'BearFramework\App\Data\DataLockedException' => 'src/App/Data/DataLockedException.php',
    'BearFramework\App\Data\GetListEventDetails' => 'src/App/Data/GetListEventDetails.php',
    'BearFramework\App\Data\ItemAppendEventDetails' => 'src/App/Data/ItemAppendEventDetails.php',
    'BearFramework\App\Data\ItemChangeEventDetails' => 'src/App/Data/ItemChangeEventDetails.php',
    'BearFramework\App\Data\ItemDeleteEventDetails' => 'src/App/Data/ItemDeleteEventDetails.php',
    'BearFramework\App\Data\ItemDeleteMetadataEventDetails' => 'src/App/Data/ItemDeleteMetadataEventDetails.php',
    'BearFramework\App\Data\ItemDuplicateEventDetails' => 'src/App/Data/ItemDuplicateEventDetails.php',
    'BearFramework\App\Data\ItemExistsEventDetails' => 'src/App/Data/ItemExistsEventDetails.php',
    'BearFramework\App\Data\ItemGetEventDetails' => 'src/App/Data/ItemGetEventDetails.php',
    'BearFramework\App\Data\ItemGetMetadataEventDetails' => 'src/App/Data/ItemGetMetadataEventDetails.php',
    'BearFramework\App\Data\ItemGetValueEventDetails' => 'src/App/Data/ItemGetValueEventDetails.php',
    'BearFramework\App\Data\ItemRenameEventDetails' => 'src/App/Data/ItemRenameEventDetails.php',
    'BearFramework\App\Data\ItemRequestEventDetails' => 'src/App/Data/ItemRequestEventDetails.php',
    'BearFramework\App\Data\ItemSetEventDetails' => 'src/App/Data/ItemSetEventDetails.php',
    'BearFramework\App\Data\ItemSetMetadataEventDetails' => 'src/App/Data/ItemSetMetadataEventDetails.php',
    'BearFramework\App\Data\ItemSetValueEventDetails' => 'src/App/Data/ItemSetValueEventDetails.php',
    'BearFramework\App\DataCacheDriver' => 'src/App/DataCacheDriver.php',
    'BearFramework\App\DataItem' => 'src/App/DataItem.php',
    'BearFramework\App\DataRepository' => 'src/App/DataRepository.php',
    'BearFramework\App\EventsTrait' => 'src/App/EventsTrait.php',
    'BearFramework\App\FileDataDriver' => 'src/App/FileDataDriver.php',
    'BearFramework\App\FileDataItemStreamWrapper' => 'src/App/FileDataItemStreamWrapper.php',
    'BearFramework\App\FileLogger' => 'src/App/FileLogger.php',
    'BearFramework\App\ICacheDriver' => 'src/App/ICacheDriver.php',
    'BearFramework\App\IDataDriver' => 'src/App/IDataDriver.php',
    'BearFramework\App\IDataItemStreamWrapper' => 'src/App/IDataItemStreamWrapper.php',
    'BearFramework\App\ILogger' => 'src/App/ILogger.php',
    'BearFramework\App\LogsRepository' => 'src/App/LogsRepository.php',
    'BearFramework\App\NullCacheDriver' => 'src/App/NullCacheDriver.php',
    'BearFramework\App\NullDataDriver' => 'src/App/NullDataDriver.php',
    'BearFramework\App\NullDataItemStreamWrapper' => 'src/App/NullDataItemStreamWrapper.php',
    'BearFramework\App\NullLogger' => 'src/App/NullLogger.php',
    'BearFramework\App\Request' => 'src/App/Request.php',
    'BearFramework\App\Request\Cookie' => 'src/App/Request/Cookie.php',
    'BearFramework\App\Request\CookiesRepository' => 'src/App/Request/CookiesRepository.php',
    'BearFramework\App\Request\FormDataItem' => 'src/App/Request/FormDataItem.php',
    'BearFramework\App\Request\FormDataFileItem' => 'src/App/Request/FormDataFileItem.php',
    'BearFramework\App\Request\FormDataRepository' => 'src/App/Request/FormDataRepository.php',
    'BearFramework\App\Request\Header' => 'src/App/Request/Header.php',
    'BearFramework\App\Request\HeadersRepository' => 'src/App/Request/HeadersRepository.php',
    'BearFramework\App\Request\PathRepository' => 'src/App/Request/PathRepository.php',
    'BearFramework\App\Request\QueryItem' => 'src/App/Request/QueryItem.php',
    'BearFramework\App\Request\QueryRepository' => 'src/App/Request/QueryRepository.php',
    'BearFramework\App\Response' => 'src/App/Response.php',
    'BearFramework\App\Response\Cookie' => 'src/App/Response/Cookie.php',
    'BearFramework\App\Response\CookiesRepository' => 'src/App/Response/CookiesRepository.php',
    'BearFramework\App\Response\FileReader' => 'src/App/Response/FileReader.php',
    'BearFramework\App\Response\HTML' => 'src/App/Response/HTML.php',
    'BearFramework\App\Response\Header' => 'src/App/Response/Header.php',
    'BearFramework\App\Response\HeadersRepository' => 'src/App/Response/HeadersRepository.php',
    'BearFramework\App\Response\JSON' => 'src/App/Response/JSON.php',
    'BearFramework\App\Response\NotFound' => 'src/App/Response/NotFound.php',
    'BearFramework\App\Response\PermanentRedirect' => 'src/App/Response/PermanentRedirect.php',
    'BearFramework\App\Response\TemporaryRedirect' => 'src/App/Response/TemporaryRedirect.php',
    'BearFramework\App\Response\TemporaryUnavailable' => 'src/App/Response/TemporaryUnavailable.php',
    'BearFramework\App\Response\Text' => 'src/App/Response/Text.php',
    'BearFramework\App\RoutesRepository' => 'src/App/RoutesRepository.php',
    'BearFramework\App\SendResponseEventDetails' => 'src/App/SendResponseEventDetails.php',
    'BearFramework\App\ShortcutsRepository' => 'src/App/ShortcutsRepository.php',
    'BearFramework\App\URLs' => 'src/App/URLs.php',
    'BearFramework\Addon' => 'src/Addon.php',
    'BearFramework\Addons' => 'src/Addons.php',
    'BearFramework\App' => 'src/App.php',
    'BearFramework\DataList' => 'src/DataList.php',
    'BearFramework\DataList\Action' => 'src/DataList/Action.php',
    'BearFramework\DataList\Context' => 'src/DataList/Context.php',
    'BearFramework\DataList\FilterByAction' => 'src/DataList/FilterByAction.php',
    'BearFramework\DataList\SlicePropertiesAction' => 'src/DataList/SlicePropertiesAction.php',
    'BearFramework\DataList\SortByAction' => 'src/DataList/SortByAction.php',
    'BearFramework\Internal\DataItemStreamWrapper' => 'src/Internal/DataItemStreamWrapper.php',
    'BearFramework\Internal\ErrorHandler' => 'src/Internal/ErrorHandler.php',
    'BearFramework\Internal\Utilities' => 'src/Internal/Utilities.php',
];

spl_autoload_register(function ($class) use ($classes) {
    if (isset($classes[$class])) {
        require __DIR__ . '/' . $classes[$class];
    }
}, true);
