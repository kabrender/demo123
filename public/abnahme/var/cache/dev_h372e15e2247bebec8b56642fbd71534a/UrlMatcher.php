<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/oauth/authorize' => [[['_route' => 'api.oauth.authorize', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::authorize'], null, ['POST' => 0], null, false, false, null]],
        '/api/oauth/token' => [[['_route' => 'api.oauth.token', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::token'], null, ['POST' => 0], null, false, false, null]],
        '/payment/finalize-transaction' => [[['_route' => 'payment.finalize.transaction', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Checkout\\Payment\\Controller\\PaymentController::finalizeTransaction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'administration.index', 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/account/order' => [[['_route' => 'frontend.account.order.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/payment' => [
            [['_route' => 'frontend.account.payment.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::paymentOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.payment.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::savePayment'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account' => [[['_route' => 'frontend.account.home.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/account/profile' => [
            [['_route' => 'frontend.account.profile.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::profileOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.profile.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveProfile'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/profile/email' => [[['_route' => 'frontend.account.profile.email.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveEmail'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/password' => [[['_route' => 'frontend.account.profile.password.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::savePassword'], null, ['POST' => 0], null, false, false, null]],
        '/account/address' => [[['_route' => 'frontend.account.address.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountAddressOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/address/create' => [[['_route' => 'frontend.account.address.create.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountCreateAddress'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/address-book' => [[['_route' => 'frontend.account.addressbook', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressBook'], null, ['POST' => 0], null, false, false, null]],
        '/account/login' => [
            [['_route' => 'frontend.account.login.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::loginPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.login', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::login'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/logout' => [[['_route' => 'frontend.account.logout.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/account/recover' => [
            [['_route' => 'frontend.account.recover.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::recoverAccountForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.request', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::generateAccountRecovery'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/recover/password' => [
            [['_route' => 'frontend.account.recover.password.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPasswordForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.password.reset', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPassword'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkout/promotion/add' => [[['_route' => 'frontend.checkout.promotion.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addPromotion'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/product/add-by-number' => [[['_route' => 'frontend.checkout.product.add-by-number', '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addProductByNumber'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/add' => [[['_route' => 'frontend.checkout.line-item.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addLineItems'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/cart' => [[['_route' => 'frontend.checkout.cart.page', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::cartPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/confirm' => [[['_route' => 'frontend.checkout.confirm.page', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::confirmPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/finish' => [[['_route' => 'frontend.checkout.finish.page', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::finishPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/order' => [[['_route' => 'frontend.checkout.finish.order', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::order'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/checkout/info' => [[['_route' => 'frontend.checkout.info', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::info'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/offcanvas' => [[['_route' => 'frontend.cart.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/configure' => [[['_route' => 'frontend.checkout.configure', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::configure'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/language' => [[['_route' => 'frontend.checkout.switch-language', '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::switchLanguage'], null, ['POST' => 0], null, false, false, null]],
        '/cookie/offcanvas' => [[['_route' => 'frontend.cookie.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/cookie/permission' => [[['_route' => 'frontend.cookie.permission', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::permission'], null, ['GET' => 0], null, false, false, null]],
        '/country/country-state-data' => [[['_route' => 'frontend.country.country.data', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CountryStateController::getCountryData'], null, ['POST' => 0], null, false, false, null]],
        '/csrf/generate' => [[['_route' => 'frontend.csrf.generateToken', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CsrfController::generateCsrf'], null, ['POST' => 0], null, false, false, null]],
        '/api-access' => [[['_route' => 'frontend.api-access', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CsrfController::getApiAccess'], null, ['GET' => 0], null, false, false, null]],
        '/form/contact' => [[['_route' => 'frontend.form.contact.send', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::sendContactForm'], null, ['POST' => 0], null, false, false, null]],
        '/form/newsletter' => [[['_route' => 'frontend.form.newsletter.register.handle', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::handleNewsletter'], null, ['POST' => 0], null, false, false, null]],
        '/maintenance' => [[['_route' => 'frontend.maintenance.page', '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderMaintenancePage'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'frontend.home.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::home'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'root.fallback', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\FallbackController::rootFallback'], null, ['GET' => 0], null, false, false, null],
        ],
        '/widgets/menu/offcanvas' => [[['_route' => 'frontend.menu.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/newsletter-subscribe' => [[['_route' => 'frontend.newsletter.subscribe', '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeMail'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/newsletter' => [[['_route' => 'frontend.account.newsletter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeCustomer'], null, ['POST' => 0], null, false, false, null]],
        '/account/register' => [
            [['_route' => 'frontend.account.register.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::accountRegisterPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.register.save', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::register'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkout/register' => [[['_route' => 'frontend.checkout.register.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::checkoutRegisterPage'], null, ['GET' => 0], null, false, false, null]],
        '/registration/confirm' => [[['_route' => 'frontend.account.register.mail', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::confirmRegistration'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'frontend.search.page', '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::search'], null, ['GET' => 0], null, false, false, null]],
        '/suggest' => [[['_route' => 'frontend.search.suggest', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::suggest'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/search' => [[['_route' => 'widgets.search.pagelet.v2', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::ajax'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'frontend.sitemap.xml', '_format' => 'xml', '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapXml'], null, ['GET' => 0], null, false, false, null]],
        '/_proxy/store-api' => [[['_route' => 'frontend.store-api.proxy', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\StoreApiProxyController::proxy'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi/(?'
                        .'|v(?'
                            .'|([^/]++)/_action/access\\-key/(?'
                                .'|intergration(*:66)'
                                .'|user(*:77)'
                                .'|sales\\-channel(*:98)'
                                .'|product\\-export(*:120)'
                            .')'
                            .'|(\\d+)/_search(*:142)'
                            .'|(\\d+)/_action/clone/([a-zA-Z-]+)/([0-9a-f]{32})(*:197)'
                            .'|(\\d+)/_action/version/([a-zA-Z-]+)/([0-9a-f]{32})(*:254)'
                            .'|(\\d+)/_action/version/merge/([a-zA-Z-]+)/([0-9a-f]{32})(*:317)'
                            .'|(\\d+)/_action/version/([^/]++)/([a-zA-Z-]+)/([^/]++)(*:377)'
                            .'|([^/]++)/(?'
                                .'|_(?'
                                    .'|action/(?'
                                        .'|c(?'
                                            .'|a(?'
                                                .'|che(?'
                                                    .'|_(?'
                                                        .'|info(*:433)'
                                                        .'|warmup(*:447)'
                                                    .')'
                                                    .'|(*:456)'
                                                .')'
                                                .'|ptcha_list(*:475)'
                                            .')'
                                            .'|leanup(*:490)'
                                            .'|ontainer_cache(*:512)'
                                        .')'
                                        .'|index(?'
                                            .'|(*:529)'
                                            .'|ing(*:540)'
                                        .')'
                                        .'|s(?'
                                            .'|ync(*:556)'
                                            .'|tore/(?'
                                                .'|frw/(?'
                                                    .'|start(*:584)'
                                                    .'|login(*:597)'
                                                    .'|finish(*:611)'
                                                .')'
                                                .'|l(?'
                                                    .'|anguage\\-plugins(*:640)'
                                                    .'|icense(?'
                                                        .'|\\-(?'
                                                            .'|domains(*:669)'
                                                            .'|violations(*:687)'
                                                        .')'
                                                        .'|s(*:697)'
                                                    .')'
                                                    .'|og(?'
                                                        .'|in(*:713)'
                                                        .'|out(*:724)'
                                                    .')'
                                                .')'
                                                .'|d(?'
                                                    .'|emo\\-data\\-plugins(*:756)'
                                                    .'|ownload(*:771)'
                                                .')'
                                                .'|recommendation(?'
                                                    .'|\\-regions(*:806)'
                                                    .'|s(*:815)'
                                                .')'
                                                .'|verify\\-license\\-domain(*:847)'
                                                .'|p(?'
                                                    .'|ing(*:862)'
                                                    .'|lugin/search(*:882)'
                                                .')'
                                                .'|checklogin(*:901)'
                                                .'|updates(*:916)'
                                            .')'
                                            .'|cheduled\\-task/(?'
                                                .'|run(*:946)'
                                                .'|min\\-run\\-interval(*:972)'
                                            .')'
                                            .'|nippet\\-set(*:992)'
                                        .')'
                                        .'|plugin/(?'
                                            .'|u(?'
                                                .'|p(?'
                                                    .'|load(*:1023)'
                                                    .'|date(*:1036)'
                                                .')'
                                                .'|ninstall(*:1054)'
                                            .')'
                                            .'|de(?'
                                                .'|lete(*:1073)'
                                                .'|activate(*:1090)'
                                            .')'
                                            .'|refresh(*:1107)'
                                            .'|install(*:1123)'
                                            .'|activate(*:1140)'
                                        .')'
                                        .'|u(?'
                                            .'|pdate/(?'
                                                .'|check(?'
                                                    .'|(*:1171)'
                                                    .'|\\-requirements(*:1194)'
                                                .')'
                                                .'|plugin\\-compatibility(*:1225)'
                                                .'|d(?'
                                                    .'|ownload\\-latest\\-update(*:1261)'
                                                    .'|eactivate\\-plugins(*:1288)'
                                                .')'
                                                .'|unpack(*:1304)'
                                                .'|finish/([^/]++)(*:1328)'
                                            .')'
                                            .'|ser/(?'
                                                .'|user\\-recovery(?'
                                                    .'|(*:1362)'
                                                    .'|/(?'
                                                        .'|hash(*:1379)'
                                                        .'|password(*:1396)'
                                                    .')'
                                                .')'
                                                .'|check\\-(?'
                                                    .'|email\\-unique(*:1430)'
                                                    .'|username\\-unique(*:1455)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|message\\-queue/consume(*:1489)'
                                        .'|database/(?'
                                            .'|sync\\-migration(*:1525)'
                                            .'|migrate(?'
                                                .'|(*:1544)'
                                                .'|\\-destructive(*:1566)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|info/(?'
                                        .'|open(?'
                                            .'|api3\\.json(*:1603)'
                                            .'|\\-api\\-schema\\.json(*:1631)'
                                        .')'
                                        .'|e(?'
                                            .'|ntity\\-schema\\.json(*:1664)'
                                            .'|vents\\.json(*:1684)'
                                        .')'
                                        .'|swagger\\.html(*:1707)'
                                        .'|config(*:1722)'
                                        .'|business\\-events\\.json(*:1753)'
                                    .')'
                                    .'|proxy/(?'
                                        .'|s(?'
                                            .'|ales\\-channel\\-api/([^/]++)/(.*)(*:1808)'
                                            .'|tore\\-api/([^/]++)/(.*)(*:1840)'
                                            .'|witch\\-customer(*:1864)'
                                        .')'
                                        .'|modify\\-shipping\\-costs(*:1897)'
                                        .'|disable\\-automatic\\-promotions(*:1936)'
                                        .'|enable\\-automatic\\-promotions(*:1974)'
                                    .')'
                                .')'
                                .'|app\\-system/(?'
                                    .'|action\\-button/(?'
                                        .'|([^/]++)/([^/]++)(*:2035)'
                                        .'|run/([^/]++)(*:2056)'
                                    .')'
                                    .'|modules(*:2073)'
                                .')'
                            .')'
                        .')'
                        .'|([^/]++)/_action/snippet(?'
                            .'|/filter(*:2119)'
                            .'|\\-set/(?'
                                .'|baseFile(*:2145)'
                                .'|author(*:2160)'
                            .')'
                        .')'
                        .'|v(?'
                            .'|([^/]++)/_action/(?'
                                .'|attribute\\-set/relations(*:2219)'
                                .'|s(?'
                                    .'|ystem\\-config(?'
                                        .'|/(?'
                                            .'|check(*:2257)'
                                            .'|schema(*:2272)'
                                            .'|batch(*:2286)'
                                        .')'
                                        .'|(*:2296)'
                                    .')'
                                    .'|tate\\-machine/([^/]++)/([^/]++)/state(?'
                                        .'|(*:2346)'
                                        .'|/([^/]++)(*:2364)'
                                    .')'
                                .')'
                                .'|number\\-range/(?'
                                    .'|reserve/([^/]++)(?:/([^/]++))?(*:2422)'
                                    .'|preview\\-pattern(?:/([^/]++))?(*:2461)'
                                .')'
                                .'|product(?'
                                    .'|/([^/]++)/combinations(*:2503)'
                                    .'|\\-export/(?'
                                        .'|validate(*:2532)'
                                        .'|preview(*:2548)'
                                    .')'
                                .')'
                                .'|m(?'
                                    .'|edia(?'
                                        .'|\\-folder/([^/]++)/dissolve(*:2596)'
                                        .'|/(?'
                                            .'|([^/]++)/(?'
                                                .'|upload(*:2627)'
                                                .'|rename(*:2642)'
                                            .')'
                                            .'|provide\\-name(*:2665)'
                                        .')'
                                    .')'
                                    .'|ail\\-template/(?'
                                        .'|send(*:2697)'
                                        .'|validate(*:2714)'
                                    .')'
                                .')'
                                .'|import\\-export/(?'
                                    .'|f(?'
                                        .'|eatures(*:2754)'
                                        .'|ile/download(*:2775)'
                                    .')'
                                    .'|pr(?'
                                        .'|epare(*:2795)'
                                        .'|ocess(*:2809)'
                                    .')'
                                    .'|cancel(*:2825)'
                                .')'
                            .')'
                            .'|(\\d+)/_action/seo\\-url\\-template/validate(*:2877)'
                            .'|(\\d+)/_action/seo\\-url\\-template/preview(*:2926)'
                            .'|(\\d+)/_action/seo\\-url\\-template/context(*:2975)'
                            .'|(\\d+)/_action/seo\\-url/canonical(*:3016)'
                            .'|(\\d+)/_action/seo\\-url/create\\-custom\\-url(*:3067)'
                            .'|(\\d+)/_action/seo\\-url\\-template/default/([^/]++)(*:3125)'
                            .'|([^/]++)/_action/(?'
                                .'|order(?'
                                    .'|/([^/]++)/(?'
                                        .'|c(?'
                                            .'|onvert\\-to\\-cart(*:3195)'
                                            .'|reditItem(*:3213)'
                                        .')'
                                        .'|recalculate(*:3234)'
                                        .'|product/([^/]++)(*:3259)'
                                        .'|lineItem(*:3276)'
                                        .'|([^/]++)/document/([^/]++)/preview(*:3319)'
                                        .'|document/([^/]++)(*:3345)'
                                        .'|state/([^/]++)(*:3368)'
                                    .')'
                                    .'|\\-address/([^/]++)/customer\\-address/([^/]++)(*:3423)'
                                    .'|_(?'
                                        .'|transaction/([^/]++)/state/([^/]++)(*:3471)'
                                        .'|delivery/([^/]++)/state/([^/]++)(*:3512)'
                                    .')'
                                .')'
                                .'|calculate\\-price(*:3539)'
                                .'|document/([^/]++)/(?'
                                    .'|([^/]++)(*:3577)'
                                    .'|upload(*:3592)'
                                .')'
                                .'|promotion/(?'
                                    .'|([^/]++)/codes/individual(?'
                                        .'|(*:3643)'
                                    .')'
                                    .'|setgroup/(?'
                                        .'|packager(*:3673)'
                                        .'|sorter(*:3688)'
                                    .')'
                                .')'
                            .')'
                            .'|(\\d+)/_action/customer\\-group\\-registration/accept/([^/]++)(*:3759)'
                            .'|(\\d+)/_action/customer\\-group\\-registration/decline/([^/]++)(*:3828)'
                            .'|([^/]++)/_a(?'
                                .'|dmin/(?'
                                    .'|snippets(*:3867)'
                                    .'|known\\-ips(*:3886)'
                                .')'
                                .'|ction/theme/([^/]++)(?'
                                    .'|/(?'
                                        .'|configuration(*:3936)'
                                        .'|assign/([^/]++)(*:3960)'
                                        .'|reset(*:3974)'
                                        .'|fields(*:3989)'
                                        .'|structured\\-fields(*:4016)'
                                    .')'
                                    .'|(*:4026)'
                                .')'
                            .')'
                            .'|(\\d+)/acl\\-role/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:4118)'
                            .'|(\\d+)/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4195)'
                            .'|(\\d+)/search/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4279)'
                            .'|(\\d+)/search\\-ids/acl\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4368)'
                            .'|(\\d+)/acl\\-user\\-role/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:4467)'
                            .')'
                            .'|(\\d+)/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4551)'
                            .'|(\\d+)/search/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4641)'
                            .'|(\\d+)/search\\-ids/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4736)'
                            .'|(\\d+)/acl\\-user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4819)'
                            .'|(\\d+)/category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:4911)'
                            .')'
                            .'|(\\d+)/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4988)'
                            .'|(\\d+)/search/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5071)'
                            .'|(\\d+)/search\\-ids/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5159)'
                            .'|(\\d+)/category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5235)'
                            .'|(\\d+)/category\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5332)'
                            .')'
                            .'|(\\d+)/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5414)'
                            .'|(\\d+)/search/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5502)'
                            .'|(\\d+)/search\\-ids/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5595)'
                            .'|(\\d+)/category\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5676)'
                            .'|(\\d+)/category\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:5781)'
                            .')'
                            .'|(\\d+)/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5871)'
                            .'|(\\d+)/search/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5967)'
                            .'|(\\d+)/search\\-ids/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6068)'
                            .'|(\\d+)/category\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6157)'
                            .'|(\\d+)/cms\\-block/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:6251)'
                            .')'
                            .'|(\\d+)/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6330)'
                            .'|(\\d+)/search/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6415)'
                            .'|(\\d+)/search\\-ids/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6505)'
                            .'|(\\d+)/cms\\-block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6583)'
                            .'|(\\d+)/cms\\-page/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:6676)'
                            .')'
                            .'|(\\d+)/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6754)'
                            .'|(\\d+)/search/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6838)'
                            .'|(\\d+)/search\\-ids/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6927)'
                            .'|(\\d+)/cms\\-page((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7004)'
                            .'|(\\d+)/cms\\-page\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:7110)'
                            .')'
                            .'|(\\d+)/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7201)'
                            .'|(\\d+)/search/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7298)'
                            .'|(\\d+)/search\\-ids/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7400)'
                            .'|(\\d+)/cms\\-page\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7490)'
                            .'|(\\d+)/cms\\-section/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:7586)'
                            .')'
                            .'|(\\d+)/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7667)'
                            .'|(\\d+)/search/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7754)'
                            .'|(\\d+)/search\\-ids/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7846)'
                            .'|(\\d+)/cms\\-section((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7926)'
                            .'|(\\d+)/cms\\-slot/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:8019)'
                            .')'
                            .'|(\\d+)/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8097)'
                            .'|(\\d+)/search/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8181)'
                            .'|(\\d+)/search\\-ids/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8270)'
                            .'|(\\d+)/cms\\-slot((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8347)'
                            .'|(\\d+)/cms\\-slot\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:8453)'
                            .')'
                            .'|(\\d+)/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8544)'
                            .'|(\\d+)/search/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8641)'
                            .'|(\\d+)/search\\-ids/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8743)'
                            .'|(\\d+)/cms\\-slot\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8833)'
                            .'|(\\d+)/country/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:8924)'
                            .')'
                            .'|(\\d+)/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9000)'
                            .'|(\\d+)/search/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9082)'
                            .'|(\\d+)/search\\-ids/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9169)'
                            .'|(\\d+)/country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9244)'
                            .'|(\\d+)/country\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9342)'
                            .')'
                            .'|(\\d+)/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9425)'
                            .'|(\\d+)/search/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9514)'
                            .'|(\\d+)/search\\-ids/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9608)'
                            .'|(\\d+)/country\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9690)'
                            .'|(\\d+)/country\\-state\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:9801)'
                            .')'
                            .'|(\\d+)/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9897)'
                            .'|(\\d+)/search/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9999)'
                            .'|(\\d+)/search\\-ids/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10106)'
                            .'|(\\d+)/country\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10202)'
                            .'|(\\d+)/country\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:10307)'
                            .')'
                            .'|(\\d+)/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10397)'
                            .'|(\\d+)/search/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10493)'
                            .'|(\\d+)/search\\-ids/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10594)'
                            .'|(\\d+)/country\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10683)'
                            .'|(\\d+)/currency/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:10776)'
                            .')'
                            .'|(\\d+)/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10854)'
                            .'|(\\d+)/search/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:10938)'
                            .'|(\\d+)/search\\-ids/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11027)'
                            .'|(\\d+)/currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11104)'
                            .'|(\\d+)/currency\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:11210)'
                            .')'
                            .'|(\\d+)/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11301)'
                            .'|(\\d+)/search/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11398)'
                            .'|(\\d+)/search\\-ids/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11500)'
                            .'|(\\d+)/currency\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11590)'
                            .'|(\\d+)/custom\\-field/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:11688)'
                            .')'
                        .')'
                    .')'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:11728)'
                            .'|cancel(*:11744)'
                            .'|edit/([^/]++)(*:11767)'
                            .'|payment/([^/]++)(*:11793)'
                            .'|update/([^/]++)(*:11818)'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:11848)'
                            .'|de(?'
                                .'|fault\\-([^/]++)/([^/]++)(*:11887)'
                                .'|lete/([^/]++)(*:11910)'
                            .')'
                            .'|create(*:11927)'
                            .'|([^/]++)(*:11945)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:11989)'
                    .'|wdt/([^/]++)(*:12011)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:12059)'
                            .'|router(*:12075)'
                            .'|exception(?'
                                .'|(*:12097)'
                                .'|\\.css(*:12112)'
                            .')'
                        .')'
                        .'|(*:12124)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ales\\-channel\\-api/v([^/]++)/(?'
                        .'|_info/(?'
                            .'|open(?'
                                .'|api3\\.json(*:12199)'
                                .'|\\-api\\-schema\\.json(*:12228)'
                            .')'
                            .'|swagger\\.html(*:12252)'
                        .')'
                        .'|c(?'
                            .'|ontext(?'
                                .'|(*:12276)'
                            .')'
                            .'|ms\\-page/([^/]++)(*:12304)'
                            .'|heckout/(?'
                                .'|cart(?'
                                    .'|(*:12332)'
                                    .'|/(?'
                                        .'|product/([^/]++)(*:12362)'
                                        .'|code/([^/]++)(*:12385)'
                                        .'|line\\-item(?'
                                            .'|/([^/]++)(?'
                                                .'|(*:12420)'
                                            .')'
                                            .'|s/delete(*:12439)'
                                        .')'
                                    .')'
                                    .'|(*:12451)'
                                .')'
                                .'|order(?'
                                    .'|(*:12470)'
                                    .'|/([^/]++)/pay(*:12493)'
                                .')'
                                .'|guest\\-order(?'
                                    .'|(*:12519)'
                                    .'|/([^/]++)(*:12538)'
                                .')'
                            .')'
                            .'|ustomer(?'
                                .'|/(?'
                                    .'|log(?'
                                        .'|in(*:12572)'
                                        .'|out(*:12585)'
                                    .')'
                                    .'|order(*:12601)'
                                    .'|email(*:12616)'
                                    .'|password(*:12634)'
                                    .'|address(?'
                                        .'|(*:12654)'
                                        .'|/([^/]++)(?'
                                            .'|(*:12676)'
                                            .'|/default\\-(?'
                                                .'|shipping(*:12707)'
                                                .'|billing(*:12724)'
                                            .')'
                                        .')'
                                        .'|(*:12736)'
                                    .')'
                                .')'
                                .'|(*:12748)'
                            .')'
                        .')'
                        .'|product/([^/]++)/cross\\-selling(*:12791)'
                        .'|newsletter/(?'
                            .'|subscribe(*:12824)'
                            .'|confirm(*:12841)'
                            .'|unsubscribe(*:12862)'
                        .')'
                    .')'
                    .'|tore\\-api/(?'
                        .'|v([^/]++)/(?'
                            .'|_info/(?'
                                .'|open(?'
                                    .'|api3\\.json(*:12926)'
                                    .'|\\-api\\-schema\\.json(*:12955)'
                                .')'
                                .'|swagger\\.html(*:12979)'
                            .')'
                            .'|c(?'
                                .'|o(?'
                                    .'|nt(?'
                                        .'|ext(?'
                                            .'|(*:13009)'
                                        .')'
                                        .'|act\\-form(*:13029)'
                                    .')'
                                    .'|untry(*:13045)'
                                .')'
                                .'|u(?'
                                    .'|rrency(*:13066)'
                                    .'|stomer\\-group\\-registration/config/([^/]++)(*:13119)'
                                .')'
                                .'|ategory(?'
                                    .'|(*:13140)'
                                    .'|/([^/]++)(*:13159)'
                                .')'
                                .'|ms/([^/]++)(*:13181)'
                                .'|heckout/(?'
                                    .'|cart(?'
                                        .'|(*:13209)'
                                        .'|/line\\-item(?'
                                            .'|(*:13233)'
                                        .')'
                                        .'|(*:13244)'
                                    .')'
                                    .'|order(*:13260)'
                                .')'
                            .')'
                            .'|language(*:13280)'
                            .'|s(?'
                                .'|alutation(*:13303)'
                                .'|e(?'
                                    .'|arch(?'
                                        .'|(*:13324)'
                                        .'|\\-suggest(*:13343)'
                                    .')'
                                    .'|o\\-url(*:13360)'
                                .')'
                                .'|itemap(*:13377)'
                                .'|hipping\\-method(*:13402)'
                            .')'
                            .'|n(?'
                                .'|avigation/([^/]++)/([^/]++)(*:13444)'
                                .'|ewsletter/(?'
                                    .'|confirm(*:13474)'
                                    .'|subscribe(*:13493)'
                                    .'|unsubscribe(*:13514)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|roduct(?'
                                    .'|/([^/]++)(?'
                                        .'|/(?'
                                            .'|cross\\-selling(*:13569)'
                                            .'|review(?'
                                                .'|s(*:13589)'
                                                .'|(*:13599)'
                                            .')'
                                        .')'
                                        .'|(*:13611)'
                                    .')'
                                    .'|\\-listing/([^/]++)(*:13640)'
                                    .'|(*:13650)'
                                .')'
                                .'|ayment\\-method(*:13675)'
                            .')'
                            .'|handle\\-payment(*:13701)'
                            .'|account/(?'
                                .'|c(?'
                                    .'|hange\\-(?'
                                        .'|p(?'
                                            .'|rofile(*:13746)'
                                            .'|a(?'
                                                .'|ssword(*:13766)'
                                                .'|yment\\-method/([^/]++)(*:13798)'
                                            .')'
                                        .')'
                                        .'|email(*:13815)'
                                    .')'
                                    .'|ustomer(?'
                                        .'|(*:13836)'
                                    .')'
                                .')'
                                .'|address(?'
                                    .'|/(?'
                                        .'|([^/]++)(*:13870)'
                                        .'|default\\-(?'
                                            .'|shipping/([^/]++)(*:13909)'
                                            .'|billing/([^/]++)(*:13935)'
                                        .')'
                                        .'|([^/]++)(*:13954)'
                                    .')'
                                    .'|(*:13965)'
                                .')'
                                .'|l(?'
                                    .'|ist\\-address(*:13992)'
                                    .'|og(?'
                                        .'|in(*:14009)'
                                        .'|out(*:14022)'
                                    .')'
                                .')'
                                .'|re(?'
                                    .'|gister(?'
                                        .'|\\-confirm(*:14057)'
                                        .'|(*:14067)'
                                    .')'
                                    .'|covery\\-password(?'
                                        .'|\\-confirm(*:14106)'
                                        .'|(*:14116)'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|/(?'
                                    .'|state/cancel(*:14153)'
                                    .'|payment(*:14170)'
                                .')'
                                .'|(*:14181)'
                            .')'
                        .')'
                        .'|product\\-export/([^/]++)/([^/]++)(*:14226)'
                    .')'
                .')'
                .'|/widgets/(?'
                    .'|account/order/detail/([^/]++)(*:14279)'
                    .'|cms(?'
                        .'|(?:/([^/]++))?(*:14309)'
                        .'|/navigation(?'
                            .'|(?:/([^/]++))?(*:14347)'
                            .'|/([^/]++)/filter(*:14373)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout/line\\-item/(?'
                        .'|delete/([^/]++)(*:14428)'
                        .'|change\\-quantity/([^/]++)(*:14463)'
                    .')'
                    .'|ustomer\\-group\\-registration/([^/]++)(*:14511)'
                .')'
                .'|/maintenance/singlepage/([^/]++)(*:14554)'
                .'|/navigation/([^/]++)(*:14584)'
                .'|/detail/([^/]++)(?'
                    .'|(*:14613)'
                    .'|/switch(*:14630)'
                .')'
                .'|/quickview/([^/]++)(*:14660)'
                .'|/product/([^/]++)/r(?'
                    .'|ating(*:14697)'
                    .'|eviews(*:14713)'
                .')'
                .'|/export/([^/]++)/([^/]++)(*:14749)'
            .')/?$}sD',
        14749 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:14837)'
                    .'|(\\d+)/search/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:14926)'
                    .'|(\\d+)/search\\-ids/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15020)'
                    .'|(\\d+)/custom\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15102)'
                    .'|(\\d+)/custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:15205)'
                    .')'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15293)'
                    .'|(\\d+)/search/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15387)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15486)'
                    .'|(\\d+)/custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15573)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:15686)'
                    .')'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15784)'
                    .'|(\\d+)/search/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15888)'
                    .'|(\\d+)/search\\-ids/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:15997)'
                    .'|(\\d+)/custom\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16094)'
                    .'|(\\d+)/customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16187)'
                    .')'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16265)'
                    .'|(\\d+)/search/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16349)'
                    .'|(\\d+)/search\\-ids/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16438)'
                    .'|(\\d+)/customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16515)'
                    .'|(\\d+)/customer\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:16617)'
                    .')'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16704)'
                    .'|(\\d+)/search/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16797)'
                    .'|(\\d+)/search\\-ids/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16895)'
                    .'|(\\d+)/customer\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16981)'
                    .'|(\\d+)/customer\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17081)'
                    .')'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17166)'
                    .'|(\\d+)/search/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17257)'
                    .'|(\\d+)/search\\-ids/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17353)'
                    .'|(\\d+)/customer\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17437)'
                    .'|(\\d+)/customer\\-group\\-registration\\-sales\\-channels/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:17568)'
                    .')'
                    .'|(\\d+)/customer\\-group\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17684)'
                    .'|(\\d+)/search/customer\\-group\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17806)'
                    .'|(\\d+)/search\\-ids/customer\\-group\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17933)'
                    .'|(\\d+)/customer\\-group\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18048)'
                    .'|(\\d+)/customer\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18161)'
                    .')'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18259)'
                    .'|(\\d+)/search/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18363)'
                    .'|(\\d+)/search\\-ids/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18472)'
                    .'|(\\d+)/customer\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18569)'
                    .'|(\\d+)/customer\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:18672)'
                    .')'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18760)'
                    .'|(\\d+)/search/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18854)'
                    .'|(\\d+)/search\\-ids/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18953)'
                    .'|(\\d+)/customer\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19040)'
                    .'|(\\d+)/customer\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19138)'
                    .')'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19221)'
                    .'|(\\d+)/search/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19310)'
                    .'|(\\d+)/search\\-ids/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19404)'
                    .'|(\\d+)/customer\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19486)'
                    .'|(\\d+)/dead\\-message/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:19584)'
                    .')'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19667)'
                    .'|(\\d+)/search/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19756)'
                    .'|(\\d+)/search\\-ids/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19850)'
                    .'|(\\d+)/dead\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19932)'
                    .'|(\\d+)/delivery\\-time/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20031)'
                    .')'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20115)'
                    .'|(\\d+)/search/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20205)'
                    .'|(\\d+)/search\\-ids/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20300)'
                    .'|(\\d+)/delivery\\-time((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20383)'
                    .'|(\\d+)/delivery\\-time\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20495)'
                    .')'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20592)'
                    .'|(\\d+)/search/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20695)'
                    .'|(\\d+)/search\\-ids/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20803)'
                    .'|(\\d+)/delivery\\-time\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20899)'
                    .'|(\\d+)/document/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:20992)'
                    .')'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21070)'
                    .'|(\\d+)/search/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21154)'
                    .'|(\\d+)/search\\-ids/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21243)'
                    .'|(\\d+)/document((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21320)'
                    .'|(\\d+)/document\\-base\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:21427)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21519)'
                    .'|(\\d+)/search/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21617)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21720)'
                    .'|(\\d+)/document\\-base\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21811)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:21934)'
                    .')'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22042)'
                    .'|(\\d+)/search/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22156)'
                    .'|(\\d+)/search\\-ids/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22275)'
                    .'|(\\d+)/document\\-base\\-config\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22382)'
                    .'|(\\d+)/document\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22481)'
                    .')'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22565)'
                    .'|(\\d+)/search/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22655)'
                    .'|(\\d+)/search\\-ids/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22750)'
                    .'|(\\d+)/document\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22833)'
                    .'|(\\d+)/document\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:22945)'
                    .')'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23042)'
                    .'|(\\d+)/search/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23145)'
                    .'|(\\d+)/search\\-ids/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23253)'
                    .'|(\\d+)/document\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23349)'
                    .'|(\\d+)/event\\-action/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23447)'
                    .')'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23530)'
                    .'|(\\d+)/search/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23619)'
                    .'|(\\d+)/search\\-ids/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23713)'
                    .'|(\\d+)/event\\-action((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23795)'
                    .'|(\\d+)/import\\-export\\-file/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:23900)'
                    .')'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23990)'
                    .'|(\\d+)/search/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24086)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24187)'
                    .'|(\\d+)/import\\-export\\-file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24276)'
                    .'|(\\d+)/import\\-export\\-log/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:24380)'
                    .')'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24469)'
                    .'|(\\d+)/search/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24564)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24664)'
                    .'|(\\d+)/import\\-export\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24752)'
                    .'|(\\d+)/import\\-export\\-profile/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:24860)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24953)'
                    .'|(\\d+)/search/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25052)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25156)'
                    .'|(\\d+)/import\\-export\\-profile((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25248)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25369)'
                    .')'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25475)'
                    .'|(\\d+)/search/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25587)'
                    .'|(\\d+)/search\\-ids/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25704)'
                    .'|(\\d+)/import\\-export\\-profile\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25809)'
                    .'|(\\d+)/integration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:25905)'
                    .')'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25986)'
                    .'|(\\d+)/search/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26073)'
                    .'|(\\d+)/search\\-ids/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26165)'
                    .'|(\\d+)/integration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26245)'
                    .'|(\\d+)/language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26338)'
                    .')'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26416)'
                    .'|(\\d+)/search/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26500)'
                    .'|(\\d+)/search\\-ids/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26589)'
                    .'|(\\d+)/language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26666)'
                    .'|(\\d+)/locale/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:26757)'
                    .')'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26833)'
                    .'|(\\d+)/search/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:26915)'
                    .'|(\\d+)/search\\-ids/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27002)'
                    .'|(\\d+)/locale((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27077)'
                    .'|(\\d+)/locale\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27181)'
                    .')'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27270)'
                    .'|(\\d+)/search/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27365)'
                    .'|(\\d+)/search\\-ids/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27465)'
                    .'|(\\d+)/locale\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27553)'
                    .'|(\\d+)/log\\-entry/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:27648)'
                    .')'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27728)'
                    .'|(\\d+)/search/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27814)'
                    .'|(\\d+)/search\\-ids/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27905)'
                    .'|(\\d+)/log\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:27984)'
                    .'|(\\d+)/mail\\-header\\-footer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28089)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28179)'
                    .'|(\\d+)/search/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28275)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28376)'
                    .'|(\\d+)/mail\\-header\\-footer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28465)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:28583)'
                    .')'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28686)'
                    .'|(\\d+)/search/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28795)'
                    .'|(\\d+)/search\\-ids/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28909)'
                    .'|(\\d+)/mail\\-header\\-footer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29011)'
                    .'|(\\d+)/mail\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29110)'
                    .')'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29194)'
                    .'|(\\d+)/search/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29284)'
                    .'|(\\d+)/search\\-ids/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29379)'
                    .'|(\\d+)/mail\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29462)'
                    .'|(\\d+)/mail\\-template\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:29568)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29659)'
                    .'|(\\d+)/search/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29756)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29858)'
                    .'|(\\d+)/mail\\-template\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:29948)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30063)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30163)'
                    .'|(\\d+)/search/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30269)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30380)'
                    .'|(\\d+)/mail\\-template\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30479)'
                    .'|(\\d+)/mail\\-template\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:30591)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30688)'
                    .'|(\\d+)/search/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30791)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30899)'
                    .'|(\\d+)/mail\\-template\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:30995)'
                    .'|(\\d+)/mail\\-template\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31100)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31190)'
                    .'|(\\d+)/search/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31286)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31387)'
                    .'|(\\d+)/mail\\-template\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31476)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:31594)'
                    .')'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31697)'
                    .'|(\\d+)/search/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31806)'
                    .'|(\\d+)/search\\-ids/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:31920)'
                    .'|(\\d+)/mail\\-template\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32022)'
                    .'|(\\d+)/main\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32121)'
                    .')'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32205)'
                    .'|(\\d+)/search/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32295)'
                    .'|(\\d+)/search\\-ids/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32390)'
                    .'|(\\d+)/main\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32473)'
                    .'|(\\d+)/media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32563)'
                    .')'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32638)'
                    .'|(\\d+)/search/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32719)'
                    .'|(\\d+)/search\\-ids/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32805)'
                    .'|(\\d+)/media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:32879)'
                    .'|(\\d+)/media\\-default\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:32986)'
                    .')'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33078)'
                    .'|(\\d+)/search/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33176)'
                    .'|(\\d+)/search\\-ids/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33279)'
                    .'|(\\d+)/media\\-default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33370)'
                    .'|(\\d+)/media\\-folder/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:33468)'
                    .')'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33551)'
                    .'|(\\d+)/search/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33640)'
                    .'|(\\d+)/search\\-ids/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33734)'
                    .'|(\\d+)/media\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:33816)'
                    .'|(\\d+)/media\\-folder\\-configuration/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:33929)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34027)'
                    .'|(\\d+)/search/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34131)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34240)'
                    .'|(\\d+)/media\\-folder\\-configuration((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34337)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:34474)'
                    .')'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34596)'
                    .'|(\\d+)/search/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34724)'
                    .'|(\\d+)/search\\-ids/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34857)'
                    .'|(\\d+)/media\\-folder\\-configuration\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:34978)'
                    .'|(\\d+)/media\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35073)'
                    .')'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35153)'
                    .'|(\\d+)/search/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35239)'
                    .'|(\\d+)/search\\-ids/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35330)'
                    .'|(\\d+)/media\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35409)'
                    .'|(\\d+)/media\\-thumbnail/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35510)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35596)'
                    .'|(\\d+)/search/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35688)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35785)'
                    .'|(\\d+)/media\\-thumbnail((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35870)'
                    .'|(\\d+)/media\\-thumbnail\\-size/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:35977)'
                    .')'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36069)'
                    .'|(\\d+)/search/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36167)'
                    .'|(\\d+)/search\\-ids/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36270)'
                    .'|(\\d+)/media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36361)'
                    .'|(\\d+)/media\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36464)'
                    .')'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36552)'
                    .'|(\\d+)/search/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36646)'
                    .'|(\\d+)/search\\-ids/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36745)'
                    .'|(\\d+)/media\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36832)'
                    .'|(\\d+)/message\\-queue\\-stats/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:36938)'
                    .')'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37029)'
                    .'|(\\d+)/search/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37126)'
                    .'|(\\d+)/search\\-ids/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37228)'
                    .'|(\\d+)/message\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37318)'
                    .'|(\\d+)/newsletter\\-recipient/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37424)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37515)'
                    .'|(\\d+)/search/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37612)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37714)'
                    .'|(\\d+)/newsletter\\-recipient((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37804)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:37915)'
                    .')'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38011)'
                    .'|(\\d+)/search/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38113)'
                    .'|(\\d+)/search\\-ids/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38220)'
                    .'|(\\d+)/newsletter\\-recipient\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38315)'
                    .'|(\\d+)/number\\-range/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:38413)'
                    .')'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38496)'
                    .'|(\\d+)/search/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38585)'
                    .'|(\\d+)/search\\-ids/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38679)'
                    .'|(\\d+)/number\\-range((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38761)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:38875)'
                    .')'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38974)'
                    .'|(\\d+)/search/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39079)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39189)'
                    .'|(\\d+)/number\\-range\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39287)'
                    .'|(\\d+)/number\\-range\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39392)'
                    .')'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39482)'
                    .'|(\\d+)/search/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39578)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39679)'
                    .'|(\\d+)/number\\-range\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39768)'
                    .'|(\\d+)/number\\-range\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:39879)'
                    .')'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39975)'
                    .'|(\\d+)/search/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40077)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40184)'
                    .'|(\\d+)/number\\-range\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40279)'
                    .'|(\\d+)/number\\-range\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40383)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40472)'
                    .'|(\\d+)/search/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40567)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40667)'
                    .'|(\\d+)/number\\-range\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40755)'
                    .'|(\\d+)/number\\-range\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:40872)'
                    .')'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40974)'
                    .'|(\\d+)/search/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41082)'
                    .'|(\\d+)/search\\-ids/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41195)'
                    .'|(\\d+)/number\\-range\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41296)'
                    .'|(\\d+)/order/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41386)'
                    .')'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41461)'
                    .'|(\\d+)/search/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41542)'
                .')'
            .')/?$}sD',
        41542 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/search\\-ids/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41634)'
                    .'|(\\d+)/order((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41708)'
                    .'|(\\d+)/order\\-address/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:41807)'
                    .')'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41891)'
                    .'|(\\d+)/search/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41981)'
                    .'|(\\d+)/search\\-ids/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42076)'
                    .'|(\\d+)/order\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42159)'
                    .'|(\\d+)/order\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42259)'
                    .')'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42344)'
                    .'|(\\d+)/search/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42435)'
                    .'|(\\d+)/search\\-ids/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42531)'
                    .'|(\\d+)/order\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42615)'
                    .'|(\\d+)/order\\-delivery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:42715)'
                    .')'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42800)'
                    .'|(\\d+)/search/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42891)'
                    .'|(\\d+)/search\\-ids/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42987)'
                    .'|(\\d+)/order\\-delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43071)'
                    .'|(\\d+)/order\\-delivery\\-position/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43181)'
                    .')'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43276)'
                    .'|(\\d+)/search/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43377)'
                    .'|(\\d+)/search\\-ids/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43483)'
                    .'|(\\d+)/order\\-delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43577)'
                    .'|(\\d+)/order\\-line\\-item/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:43679)'
                    .')'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43766)'
                    .'|(\\d+)/search/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43859)'
                    .'|(\\d+)/search\\-ids/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43957)'
                    .'|(\\d+)/order\\-line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44043)'
                    .'|(\\d+)/order\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44138)'
                    .')'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44218)'
                    .'|(\\d+)/search/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44304)'
                    .'|(\\d+)/search\\-ids/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44395)'
                    .'|(\\d+)/order\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44474)'
                    .'|(\\d+)/order\\-transaction/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:44577)'
                    .')'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44665)'
                    .'|(\\d+)/search/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44759)'
                    .'|(\\d+)/search\\-ids/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44858)'
                    .'|(\\d+)/order\\-transaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44945)'
                    .'|(\\d+)/payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45045)'
                    .')'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45130)'
                    .'|(\\d+)/search/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45221)'
                    .'|(\\d+)/search\\-ids/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45317)'
                    .'|(\\d+)/payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45401)'
                    .'|(\\d+)/payment\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:45514)'
                    .')'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45612)'
                    .'|(\\d+)/search/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45716)'
                    .'|(\\d+)/search\\-ids/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45825)'
                    .'|(\\d+)/payment\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:45922)'
                    .'|(\\d+)/plugin/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46013)'
                    .')'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46089)'
                    .'|(\\d+)/search/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46171)'
                    .'|(\\d+)/search\\-ids/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46258)'
                    .'|(\\d+)/plugin((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46333)'
                    .'|(\\d+)/plugin\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46437)'
                    .')'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46526)'
                    .'|(\\d+)/search/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46621)'
                    .'|(\\d+)/search\\-ids/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46721)'
                    .'|(\\d+)/plugin\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46809)'
                    .'|(\\d+)/product/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:46901)'
                    .')'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:46978)'
                    .'|(\\d+)/search/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47061)'
                    .'|(\\d+)/search\\-ids/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47149)'
                    .'|(\\d+)/product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47225)'
                    .'|(\\d+)/product\\-category/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47327)'
                    .')'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47414)'
                    .'|(\\d+)/search/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47507)'
                    .'|(\\d+)/search\\-ids/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47605)'
                    .'|(\\d+)/product\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47691)'
                    .'|(\\d+)/product\\-category\\-tree/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:47799)'
                    .')'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47892)'
                    .'|(\\d+)/search/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:47991)'
                    .'|(\\d+)/search\\-ids/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48095)'
                    .'|(\\d+)/product\\-category\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48187)'
                    .'|(\\d+)/product\\-configurator\\-setting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48302)'
                    .')'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48402)'
                    .'|(\\d+)/search/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48508)'
                    .'|(\\d+)/search\\-ids/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48619)'
                    .'|(\\d+)/product\\-configurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48718)'
                    .'|(\\d+)/product\\-cross\\-selling/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:48826)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:48919)'
                    .'|(\\d+)/search/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49018)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49122)'
                    .'|(\\d+)/product\\-cross\\-selling((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49214)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49342)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49455)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49574)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49698)'
                    .'|(\\d+)/product\\-cross\\-selling\\-assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:49810)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:49931)'
                    .')'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50037)'
                    .'|(\\d+)/search/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50149)'
                    .'|(\\d+)/search\\-ids/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50266)'
                    .'|(\\d+)/product\\-cross\\-selling\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50371)'
                    .'|(\\d+)/product\\-custom\\-field\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50483)'
                    .')'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50580)'
                    .'|(\\d+)/search/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50683)'
                    .'|(\\d+)/search\\-ids/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50791)'
                    .'|(\\d+)/product\\-custom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:50887)'
                    .'|(\\d+)/product\\-export/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:50987)'
                    .')'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51072)'
                    .'|(\\d+)/search/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51163)'
                    .'|(\\d+)/search\\-ids/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51259)'
                    .'|(\\d+)/product\\-export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51343)'
                    .'|(\\d+)/product\\-feature\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51449)'
                    .')'
                    .'|(\\d+)/product\\-feature\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51540)'
                    .'|(\\d+)/search/product\\-feature\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51637)'
                    .'|(\\d+)/search\\-ids/product\\-feature\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51739)'
                    .'|(\\d+)/product\\-feature\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:51829)'
                    .'|(\\d+)/product\\-feature\\-set\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:51948)'
                    .')'
                    .'|(\\d+)/product\\-feature\\-set\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52052)'
                    .'|(\\d+)/search/product\\-feature\\-set\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52162)'
                    .'|(\\d+)/search\\-ids/product\\-feature\\-set\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52277)'
                    .'|(\\d+)/product\\-feature\\-set\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52380)'
                    .'|(\\d+)/product\\-keyword\\-dictionary/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:52493)'
                    .')'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52591)'
                    .'|(\\d+)/search/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52695)'
                    .'|(\\d+)/search\\-ids/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52804)'
                    .'|(\\d+)/product\\-keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:52901)'
                    .'|(\\d+)/product\\-manufacturer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53007)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53098)'
                    .'|(\\d+)/search/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53195)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53297)'
                    .'|(\\d+)/product\\-manufacturer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53387)'
                    .'|(\\d+)/product\\-manufacturer\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:53506)'
                    .')'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53610)'
                    .'|(\\d+)/search/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53720)'
                    .'|(\\d+)/search\\-ids/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53835)'
                    .'|(\\d+)/product\\-manufacturer\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53938)'
                    .'|(\\d+)/product\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54037)'
                    .')'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54121)'
                    .'|(\\d+)/search/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54211)'
                    .'|(\\d+)/search\\-ids/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54306)'
                    .'|(\\d+)/product\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54389)'
                    .'|(\\d+)/product\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54489)'
                    .')'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54574)'
                    .'|(\\d+)/search/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54665)'
                    .'|(\\d+)/search\\-ids/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54761)'
                    .'|(\\d+)/product\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54845)'
                    .'|(\\d+)/product\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:54944)'
                    .')'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55028)'
                    .'|(\\d+)/search/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55118)'
                    .'|(\\d+)/search\\-ids/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55213)'
                    .'|(\\d+)/product\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55296)'
                    .'|(\\d+)/product\\-property/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55398)'
                    .')'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55485)'
                    .'|(\\d+)/search/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55578)'
                    .'|(\\d+)/search\\-ids/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55676)'
                    .'|(\\d+)/product\\-property((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55762)'
                    .'|(\\d+)/product\\-review/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:55862)'
                    .')'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55947)'
                    .'|(\\d+)/search/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56038)'
                    .'|(\\d+)/search\\-ids/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56134)'
                    .'|(\\d+)/product\\-review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56218)'
                    .'|(\\d+)/product\\-search\\-keyword/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:56327)'
                    .')'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56421)'
                    .'|(\\d+)/search/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56521)'
                    .'|(\\d+)/search\\-ids/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56626)'
                    .'|(\\d+)/product\\-search\\-keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56719)'
                    .'|(\\d+)/product\\-sorting/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:56820)'
                    .')'
                    .'|(\\d+)/product\\-sorting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56906)'
                    .'|(\\d+)/search/product\\-sorting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56998)'
                    .'|(\\d+)/search\\-ids/product\\-sorting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57095)'
                    .'|(\\d+)/product\\-sorting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57180)'
                    .'|(\\d+)/product\\-sorting\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57294)'
                    .')'
                    .'|(\\d+)/product\\-sorting\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57393)'
                    .'|(\\d+)/search/product\\-sorting\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57498)'
                    .'|(\\d+)/search\\-ids/product\\-sorting\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57608)'
                    .'|(\\d+)/product\\-sorting\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57706)'
                    .'|(\\d+)/product\\-stream/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:57806)'
                    .')'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57891)'
                    .'|(\\d+)/search/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57982)'
                    .'|(\\d+)/search\\-ids/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58078)'
                    .'|(\\d+)/product\\-stream((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58162)'
                    .'|(\\d+)/product\\-stream\\-filter/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58270)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58363)'
                    .'|(\\d+)/search/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58462)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58566)'
                    .'|(\\d+)/product\\-stream\\-filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58658)'
                    .'|(\\d+)/product\\-stream\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:58771)'
                    .')'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58869)'
                    .'|(\\d+)/search/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58973)'
                    .'|(\\d+)/search\\-ids/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59082)'
                    .'|(\\d+)/product\\-stream\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59179)'
                    .'|(\\d+)/product\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59276)'
                    .')'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59358)'
                    .'|(\\d+)/search/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59446)'
                    .'|(\\d+)/search\\-ids/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59539)'
                    .'|(\\d+)/product\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59620)'
                    .'|(\\d+)/product\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:59725)'
                    .')'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59815)'
                    .'|(\\d+)/search/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59911)'
                    .'|(\\d+)/search\\-ids/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60012)'
                    .'|(\\d+)/product\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60101)'
                    .'|(\\d+)/product\\-visibility/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60205)'
                    .')'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60294)'
                    .'|(\\d+)/search/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60389)'
                    .'|(\\d+)/search\\-ids/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60489)'
                    .'|(\\d+)/product\\-visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60577)'
                    .'|(\\d+)/promotion/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:60671)'
                    .')'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60750)'
                    .'|(\\d+)/search/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60835)'
                    .'|(\\d+)/search\\-ids/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60925)'
                    .'|(\\d+)/promotion((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61003)'
                    .'|(\\d+)/promotion\\-cart\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61109)'
                    .')'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61200)'
                    .'|(\\d+)/search/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61297)'
                    .'|(\\d+)/search\\-ids/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61399)'
                    .'|(\\d+)/promotion\\-cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61489)'
                    .'|(\\d+)/promotion\\-discount/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:61593)'
                    .')'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61682)'
                    .'|(\\d+)/search/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61777)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61877)'
                    .'|(\\d+)/promotion\\-discount((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61965)'
                    .'|(\\d+)/promotion\\-discount\\-prices/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62077)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62174)'
                    .'|(\\d+)/search/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62277)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62385)'
                    .'|(\\d+)/promotion\\-discount\\-prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62481)'
                    .'|(\\d+)/promotion\\-discount\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:62591)'
                    .')'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62686)'
                    .'|(\\d+)/search/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62787)'
                    .'|(\\d+)/search\\-ids/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62893)'
                    .'|(\\d+)/promotion\\-discount\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62987)'
                    .'|(\\d+)/promotion\\-individual\\-code/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63099)'
                    .')'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63196)'
                    .'|(\\d+)/search/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63299)'
                    .'|(\\d+)/search\\-ids/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63407)'
                    .'|(\\d+)/promotion\\-individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63503)'
                    .'|(\\d+)/promotion\\-order\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:63610)'
                    .')'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63702)'
                    .'|(\\d+)/search/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63800)'
                    .'|(\\d+)/search\\-ids/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63903)'
                    .'|(\\d+)/promotion\\-order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:63994)'
                    .'|(\\d+)/promotion\\-persona\\-customer/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64107)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64205)'
                    .'|(\\d+)/search/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64309)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64418)'
                    .'|(\\d+)/promotion\\-persona\\-customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64515)'
                    .'|(\\d+)/promotion\\-persona\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:64624)'
                    .')'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64718)'
                    .'|(\\d+)/search/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64818)'
                    .'|(\\d+)/search\\-ids/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:64923)'
                    .'|(\\d+)/promotion\\-persona\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65016)'
                    .'|(\\d+)/promotion\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65126)'
                    .')'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65221)'
                    .'|(\\d+)/search/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65322)'
                    .'|(\\d+)/search\\-ids/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65428)'
                    .'|(\\d+)/promotion\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65522)'
                    .'|(\\d+)/promotion\\-setgroup/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:65626)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65715)'
                    .'|(\\d+)/search/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65810)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65910)'
                    .'|(\\d+)/promotion\\-setgroup((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:65998)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:66108)'
                    .')'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66203)'
                    .'|(\\d+)/search/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66304)'
                    .'|(\\d+)/search\\-ids/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66410)'
                    .'|(\\d+)/promotion\\-setgroup\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66504)'
                    .'|(\\d+)/promotion\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:66611)'
                    .')'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66703)'
                    .'|(\\d+)/search/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66801)'
                    .'|(\\d+)/search\\-ids/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66904)'
                    .'|(\\d+)/promotion\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:66995)'
                    .'|(\\d+)/property\\-group/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67095)'
                    .')'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67180)'
                    .'|(\\d+)/search/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67271)'
                    .'|(\\d+)/search\\-ids/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67367)'
                    .'|(\\d+)/property\\-group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67451)'
                    .'|(\\d+)/property\\-group\\-option/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:67559)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67652)'
                    .'|(\\d+)/search/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67751)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67855)'
                    .'|(\\d+)/property\\-group\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:67947)'
                    .'|(\\d+)/property\\-group\\-option\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68068)'
                    .')'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68174)'
                    .'|(\\d+)/search/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68286)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68403)'
                    .'|(\\d+)/property\\-group\\-option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68508)'
                .')'
            .')/?$}sD',
        68508 => '{^(?'
                .'|/api/v(?'
                    .'|(\\d+)/property\\-group\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:68627)'
                    .')'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68725)'
                    .'|(\\d+)/search/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68829)'
                    .'|(\\d+)/search\\-ids/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:68938)'
                    .'|(\\d+)/property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69035)'
                    .'|(\\d+)/rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69124)'
                    .')'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69198)'
                    .'|(\\d+)/search/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69278)'
                    .'|(\\d+)/search\\-ids/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69363)'
                    .'|(\\d+)/rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69436)'
                    .'|(\\d+)/rule\\-condition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69536)'
                    .')'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69621)'
                    .'|(\\d+)/search/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69712)'
                    .'|(\\d+)/search\\-ids/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69808)'
                    .'|(\\d+)/rule\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69892)'
                    .'|(\\d+)/sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:69991)'
                    .')'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70075)'
                    .'|(\\d+)/search/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70165)'
                    .'|(\\d+)/search\\-ids/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70260)'
                    .'|(\\d+)/sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70343)'
                    .'|(\\d+)/sales\\-channel\\-analytics/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70453)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70548)'
                    .'|(\\d+)/search/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70649)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70755)'
                    .'|(\\d+)/sales\\-channel\\-analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:70849)'
                    .'|(\\d+)/sales\\-channel\\-country/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:70957)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71050)'
                    .'|(\\d+)/search/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71149)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71253)'
                    .'|(\\d+)/sales\\-channel\\-country((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71345)'
                    .'|(\\d+)/sales\\-channel\\-currency/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71454)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71548)'
                    .'|(\\d+)/search/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71648)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71753)'
                    .'|(\\d+)/sales\\-channel\\-currency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:71846)'
                    .'|(\\d+)/sales\\-channel\\-domain/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:71953)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72045)'
                    .'|(\\d+)/search/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72143)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72246)'
                    .'|(\\d+)/sales\\-channel\\-domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72337)'
                    .'|(\\d+)/sales\\-channel\\-language/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:72446)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72540)'
                    .'|(\\d+)/search/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72640)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72745)'
                    .'|(\\d+)/sales\\-channel\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:72838)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:72954)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73055)'
                    .'|(\\d+)/search/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73162)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73274)'
                    .'|(\\d+)/sales\\-channel\\-payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73374)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:73491)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73593)'
                    .'|(\\d+)/search/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73701)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73814)'
                    .'|(\\d+)/sales\\-channel\\-shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:73915)'
                    .'|(\\d+)/sales\\-channel\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74027)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74124)'
                    .'|(\\d+)/search/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74227)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74335)'
                    .'|(\\d+)/sales\\-channel\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74431)'
                    .'|(\\d+)/sales\\-channel\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:74536)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74626)'
                    .'|(\\d+)/search/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74722)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74823)'
                    .'|(\\d+)/sales\\-channel\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:74912)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75030)'
                    .')'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75133)'
                    .'|(\\d+)/search/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75242)'
                    .'|(\\d+)/search\\-ids/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75356)'
                    .'|(\\d+)/sales\\-channel\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75458)'
                    .'|(\\d+)/salutation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75553)'
                    .')'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75633)'
                    .'|(\\d+)/search/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75719)'
                    .'|(\\d+)/search\\-ids/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75810)'
                    .'|(\\d+)/salutation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:75889)'
                    .'|(\\d+)/salutation\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:75997)'
                    .')'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76090)'
                    .'|(\\d+)/search/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76189)'
                    .'|(\\d+)/search\\-ids/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76293)'
                    .'|(\\d+)/salutation\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76385)'
                    .'|(\\d+)/scheduled\\-task/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76485)'
                    .')'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76570)'
                    .'|(\\d+)/search/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76661)'
                    .'|(\\d+)/search\\-ids/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76757)'
                    .'|(\\d+)/scheduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:76841)'
                    .'|(\\d+)/seo\\-url/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:76934)'
                    .')'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77012)'
                    .'|(\\d+)/search/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77096)'
                    .'|(\\d+)/search\\-ids/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77185)'
                    .'|(\\d+)/seo\\-url((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77262)'
                    .'|(\\d+)/seo\\-url\\-template/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:77365)'
                    .')'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77453)'
                    .'|(\\d+)/search/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77547)'
                    .'|(\\d+)/search\\-ids/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77646)'
                    .'|(\\d+)/seo\\-url\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77733)'
                    .'|(\\d+)/shipping\\-method/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:77834)'
                    .')'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:77920)'
                    .'|(\\d+)/search/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78012)'
                    .'|(\\d+)/search\\-ids/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78109)'
                    .'|(\\d+)/shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78194)'
                    .'|(\\d+)/shipping\\-method\\-price/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78302)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78395)'
                    .'|(\\d+)/search/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78494)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78598)'
                    .'|(\\d+)/shipping\\-method\\-price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78690)'
                    .'|(\\d+)/shipping\\-method\\-tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:78796)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78887)'
                    .'|(\\d+)/search/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:78984)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79086)'
                    .'|(\\d+)/shipping\\-method\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79176)'
                    .'|(\\d+)/shipping\\-method\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79290)'
                    .')'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79389)'
                    .'|(\\d+)/search/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79494)'
                    .'|(\\d+)/search\\-ids/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79604)'
                    .'|(\\d+)/shipping\\-method\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79702)'
                    .'|(\\d+)/snippet/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:79794)'
                    .')'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79871)'
                    .'|(\\d+)/search/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:79954)'
                    .'|(\\d+)/search\\-ids/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80042)'
                    .'|(\\d+)/snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80118)'
                    .'|(\\d+)/snippet\\-set/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80215)'
                    .')'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80297)'
                    .'|(\\d+)/search/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80385)'
                    .'|(\\d+)/search\\-ids/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80478)'
                    .'|(\\d+)/snippet\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80559)'
                    .'|(\\d+)/state\\-machine/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:80658)'
                    .')'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80742)'
                    .'|(\\d+)/search/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80832)'
                    .'|(\\d+)/search\\-ids/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:80927)'
                    .'|(\\d+)/state\\-machine((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81010)'
                    .'|(\\d+)/state\\-machine\\-history/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81118)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81211)'
                    .'|(\\d+)/search/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81310)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81414)'
                    .'|(\\d+)/state\\-machine\\-history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81506)'
                    .'|(\\d+)/state\\-machine\\-state/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:81612)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81703)'
                    .'|(\\d+)/search/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81800)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81902)'
                    .'|(\\d+)/state\\-machine\\-state((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:81992)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82111)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82215)'
                    .'|(\\d+)/search/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82325)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82440)'
                    .'|(\\d+)/state\\-machine\\-state\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82543)'
                    .'|(\\d+)/state\\-machine\\-transition/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:82654)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82750)'
                    .'|(\\d+)/search/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82852)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:82959)'
                    .'|(\\d+)/state\\-machine\\-transition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83054)'
                    .'|(\\d+)/state\\-machine\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83166)'
                    .')'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83263)'
                    .'|(\\d+)/search/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83366)'
                    .'|(\\d+)/search\\-ids/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83474)'
                    .'|(\\d+)/state\\-machine\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83570)'
                    .'|(\\d+)/system\\-config/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:83669)'
                    .')'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83753)'
                    .'|(\\d+)/search/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83843)'
                    .'|(\\d+)/search\\-ids/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:83938)'
                    .'|(\\d+)/system\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84021)'
                    .'|(\\d+)/tag/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84109)'
                    .')'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84182)'
                    .'|(\\d+)/search/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84261)'
                    .'|(\\d+)/search\\-ids/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84345)'
                    .'|(\\d+)/tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84417)'
                    .'|(\\d+)/tax/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84505)'
                    .')'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84578)'
                    .'|(\\d+)/search/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84657)'
                    .'|(\\d+)/search\\-ids/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84741)'
                    .'|(\\d+)/tax((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84813)'
                    .'|(\\d+)/tax\\-rule/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:84907)'
                    .')'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:84986)'
                    .'|(\\d+)/search/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85071)'
                    .'|(\\d+)/search\\-ids/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85161)'
                    .'|(\\d+)/tax\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85239)'
                    .'|(\\d+)/tax\\-rule\\-type/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85339)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85424)'
                    .'|(\\d+)/search/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85515)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85611)'
                    .'|(\\d+)/tax\\-rule\\-type((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85695)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:85808)'
                    .')'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:85906)'
                    .'|(\\d+)/search/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86010)'
                    .'|(\\d+)/search\\-ids/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86119)'
                    .'|(\\d+)/tax\\-rule\\-type\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86216)'
                    .'|(\\d+)/theme/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86306)'
                    .')'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86381)'
                    .'|(\\d+)/search/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86462)'
                    .'|(\\d+)/search\\-ids/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86548)'
                    .'|(\\d+)/theme((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86622)'
                    .'|(\\d+)/theme\\-media/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:86719)'
                    .')'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86801)'
                    .'|(\\d+)/search/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86889)'
                    .'|(\\d+)/search\\-ids/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:86982)'
                    .'|(\\d+)/theme\\-media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87063)'
                    .'|(\\d+)/theme\\-sales\\-channel/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87169)'
                    .')'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87260)'
                    .'|(\\d+)/search/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87357)'
                    .'|(\\d+)/search\\-ids/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87459)'
                    .'|(\\d+)/theme\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87549)'
                    .'|(\\d+)/theme\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:87652)'
                    .')'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87740)'
                    .'|(\\d+)/search/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87834)'
                    .'|(\\d+)/search\\-ids/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:87933)'
                    .'|(\\d+)/theme\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88020)'
                    .'|(\\d+)/unit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88109)'
                    .')'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88183)'
                    .'|(\\d+)/search/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88263)'
                    .'|(\\d+)/search\\-ids/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88348)'
                    .'|(\\d+)/unit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88421)'
                    .'|(\\d+)/unit\\-translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:88523)'
                    .')'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88610)'
                    .'|(\\d+)/search/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88703)'
                    .'|(\\d+)/search\\-ids/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88801)'
                    .'|(\\d+)/unit\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:88887)'
                    .'|(\\d+)/user/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:88973)'
                    .'|(\\d+)/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89046)'
                    .'|(\\d+)/search/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89126)'
                    .'|(\\d+)/search\\-ids/user((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89211)'
                    .'|(\\d+)/user\\-access\\-key/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89313)'
                    .')'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89400)'
                    .'|(\\d+)/search/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89493)'
                    .'|(\\d+)/search\\-ids/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89591)'
                    .'|(\\d+)/user\\-access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89677)'
                    .'|(\\d+)/user\\-recovery/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:89776)'
                    .')'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89860)'
                    .'|(\\d+)/search/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:89950)'
                    .'|(\\d+)/search\\-ids/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90045)'
                    .'|(\\d+)/user\\-recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90128)'
                    .'|(\\d+)/version/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90220)'
                    .')'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90297)'
                    .'|(\\d+)/search/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90380)'
                    .'|(\\d+)/search\\-ids/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90468)'
                    .'|(\\d+)/version((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90544)'
                    .'|(\\d+)/version\\-commit/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:90644)'
                    .')'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90729)'
                    .'|(\\d+)/search/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90820)'
                    .'|(\\d+)/search\\-ids/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:90916)'
                    .'|(\\d+)/version\\-commit((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91000)'
                    .'|(\\d+)/version\\-commit\\-data/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                        .'|(*:91106)'
                    .')'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91197)'
                    .'|(\\d+)/search/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91294)'
                    .'|(\\d+)/search\\-ids/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91396)'
                    .'|(\\d+)/version\\-commit\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:91486)'
                    .'|([^/]++)/(?'
                        .'|_info/(?'
                            .'|me(*:91519)'
                            .'|ping(*:91533)'
                        .')'
                        .'|user(?'
                            .'|/([^/]++)(?'
                                .'|(*:91563)'
                                .'|/access\\-keys/([^/]++)(*:91595)'
                                .'|(*:91605)'
                            .')'
                            .'|(*:91616)'
                        .')'
                        .'|acl\\-role(?'
                            .'|(*:91639)'
                            .'|/([^/]++)(?'
                                .'|(*:91661)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/sales\\-channel\\-api/v(?'
                    .'|(\\d+)/category/([^/]++)(*:91723)'
                    .'|(\\d+)/search\\-ids/category(*:91759)'
                    .'|(\\d+)/category(*:91783)'
                    .'|(\\d+)/country/([^/]++)(*:91815)'
                    .'|(\\d+)/search\\-ids/country(*:91850)'
                    .'|(\\d+)/country(*:91873)'
                    .'|(\\d+)/country\\-state/([^/]++)(*:91912)'
                    .'|(\\d+)/search\\-ids/country\\-state(*:91954)'
                    .'|(\\d+)/country\\-state(*:91984)'
                    .'|(\\d+)/currency/([^/]++)(*:92017)'
                    .'|(\\d+)/search\\-ids/currency(*:92053)'
                    .'|(\\d+)/currency(*:92077)'
                    .'|(\\d+)/language/([^/]++)(*:92110)'
                    .'|(\\d+)/search\\-ids/language(*:92146)'
                    .'|(\\d+)/language(*:92170)'
                    .'|(\\d+)/main\\-category/([^/]++)(*:92209)'
                    .'|(\\d+)/search\\-ids/main\\-category(*:92251)'
                    .'|(\\d+)/main\\-category(*:92281)'
                    .'|(\\d+)/payment\\-method/([^/]++)(*:92321)'
                    .'|(\\d+)/search\\-ids/payment\\-method(*:92364)'
                    .'|(\\d+)/payment\\-method(*:92395)'
                    .'|(\\d+)/product/([^/]++)(*:92427)'
                    .'|(\\d+)/search\\-ids/product(*:92462)'
                    .'|(\\d+)/product(*:92485)'
                    .'|(\\d+)/salutation/([^/]++)(*:92520)'
                    .'|(\\d+)/search\\-ids/salutation(*:92558)'
                    .'|(\\d+)/salutation(*:92584)'
                    .'|(\\d+)/seo\\-url/([^/]++)(*:92617)'
                    .'|(\\d+)/search\\-ids/seo\\-url(*:92653)'
                    .'|(\\d+)/seo\\-url(*:92677)'
                    .'|(\\d+)/shipping\\-method/([^/]++)(*:92718)'
                    .'|(\\d+)/search\\-ids/shipping\\-method(*:92762)'
                    .'|(\\d+)/shipping\\-method(*:92794)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        66 => [[['_route' => 'api.action.access-key.integration', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateIntegrationKey'], ['version'], ['GET' => 0], null, false, false, null]],
        77 => [[['_route' => 'api.action.access-key.user', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateUserKey'], ['version'], ['GET' => 0], null, false, false, null]],
        98 => [[['_route' => 'api.action.access-key.sales-channel', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateSalesChannelKey'], ['version'], ['GET' => 0], null, false, false, null]],
        120 => [[['_route' => 'api.action.access-key.product-export', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateProductExportKey'], ['version'], ['GET' => 0], null, false, false, null]],
        142 => [[['_route' => 'api.composite.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::compositeSearch'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        197 => [[['_route' => 'api.clone', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::clone'], ['version', 'entity', 'id'], ['POST' => 0], null, false, true, null]],
        254 => [[['_route' => 'api.createVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::createVersion'], ['version', 'entity', 'id'], ['POST' => 0], null, false, true, null]],
        317 => [[['_route' => 'api.mergeVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::mergeVersion'], ['version', 'entity', 'versionId'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'api.deleteVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::deleteVersion'], ['version', 'versionId', 'entity', 'entityId'], ['POST' => 0], null, false, true, null]],
        433 => [[['_route' => 'api.action.cache.info', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        447 => [[['_route' => 'api.action.cache.delete_and_warmup', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCacheAndScheduleWarmUp'], ['version'], ['DELETE' => 0], null, false, false, null]],
        456 => [[['_route' => 'api.action.cache.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCache'], ['version'], ['DELETE' => 0], null, false, false, null]],
        475 => [[['_route' => 'api.action.captcha.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CaptchaController::list'], ['version'], ['GET' => 0], null, false, false, null]],
        490 => [[['_route' => 'api.action.cache.cleanup', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearOldCacheFolders'], ['version'], ['DELETE' => 0], null, false, false, null]],
        512 => [[['_route' => 'api.action.container-cache.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearContainerCache'], ['version'], ['DELETE' => 0], null, false, false, null]],
        529 => [[['_route' => 'api.action.cache.index', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::index'], ['version'], ['POST' => 0], null, false, false, null]],
        540 => [[['_route' => 'api.action.indexing', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::indexing'], ['version'], ['POST' => 0], null, false, false, null]],
        556 => [[['_route' => 'api.action.sync', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SyncController::sync'], ['version'], ['POST' => 0], null, false, false, null]],
        584 => [[['_route' => 'api.custom.store.frw.start', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwStart'], ['version'], ['POST' => 0], null, false, false, null]],
        597 => [[['_route' => 'api.custom.store.frw.login', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwLogin'], ['version'], ['POST' => 0], null, false, false, null]],
        611 => [[['_route' => 'api.custom.store.frw.finish', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwFinish'], ['version'], ['POST' => 0], null, false, false, null]],
        640 => [[['_route' => 'api.custom.store.language-plugins', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getLanguagePluginList'], ['version'], ['GET' => 0], null, false, false, null]],
        669 => [[['_route' => 'api.custom.store.license-domains', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDomainList'], ['version'], ['GET' => 0], null, false, false, null]],
        687 => [[['_route' => 'api.custom.store.license-violations', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseViolations'], ['version'], ['POST' => 0], null, false, false, null]],
        697 => [[['_route' => 'api.custom.store.licenses', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseList'], ['version'], ['GET' => 0], null, false, false, null]],
        713 => [[['_route' => 'api.custom.store.login', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::login'], ['version'], ['POST' => 0], null, false, false, null]],
        724 => [[['_route' => 'api.custom.store.logout', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        756 => [[['_route' => 'api.custom.store.demo-data-plugins', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDemoDataPluginList'], ['version'], ['GET' => 0], null, false, false, null]],
        771 => [[['_route' => 'api.custom.store.download', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::downloadPlugin'], ['version'], ['GET' => 0], null, false, false, null]],
        806 => [[['_route' => 'api.custom.store.recommendation-regions', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendationRegions'], ['version'], ['GET' => 0], null, false, false, null]],
        815 => [[['_route' => 'api.custom.store.recommendations', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendations'], ['version'], ['GET' => 0], null, false, false, null]],
        847 => [[['_route' => 'api.custom.store.verify-license-domain', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::verifyDomain'], ['version'], ['POST' => 0], null, false, false, null]],
        862 => [[['_route' => 'api.custom.store.ping', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::pingStoreAPI'], ['version'], ['GET' => 0], null, false, false, null]],
        882 => [[['_route' => 'api.action.store.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::searchPlugins'], ['version'], ['POST' => 0], null, false, false, null]],
        901 => [[['_route' => 'api.custom.store.checklogin', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::checkLogin'], ['version'], ['POST' => 0], null, false, false, null]],
        916 => [[['_route' => 'api.custom.store.updates', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getUpdateList'], ['version'], ['GET' => 0], null, false, false, null]],
        946 => [[['_route' => 'api.action.scheduled-task.run', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\ScheduledTask\\Api\\ScheduledTaskController::runScheduledTasks'], ['version'], ['POST' => 0], null, false, false, null]],
        972 => [[['_route' => 'api.action.scheduled-task.min-run-interval', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\ScheduledTask\\Api\\ScheduledTaskController::getMinRunInterval'], ['version'], ['GET' => 0], null, false, false, null]],
        992 => [[['_route' => 'api.action.snippet-set.getList', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getList'], ['version'], ['POST' => 0], null, false, false, null]],
        1023 => [[['_route' => 'api.action.plugin.upload', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::uploadPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1036 => [[['_route' => 'api.action.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::updatePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1054 => [[['_route' => 'api.action.plugin.uninstall', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::uninstallPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1073 => [[['_route' => 'api.action.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::deletePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1090 => [[['_route' => 'api.action.plugin.deactivate', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::deactivatePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1107 => [[['_route' => 'api.action.plugin.refresh', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::refreshPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1123 => [[['_route' => 'api.action.plugin.install', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::installPlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1140 => [[['_route' => 'api.action.plugin.activate', '_controller' => 'Shopware\\Core\\Framework\\Plugin\\Api\\PluginController::activatePlugin'], ['version'], ['POST' => 0], null, false, false, null]],
        1171 => [[['_route' => 'api.custom.updateapi.check', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::updateApiCheck'], ['version'], ['GET' => 0], null, false, false, null]],
        1194 => [[['_route' => 'api.custom.update.check_requirements', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::checkRequirements'], ['version'], ['GET' => 0], null, false, false, null]],
        1225 => [[['_route' => 'api.custom.updateapi.plugin_compatibility', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::pluginCompatibility'], ['version'], ['GET' => 0], null, false, false, null]],
        1261 => [[['_route' => 'api.custom.updateapi.download_latest_update', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::downloadLatestUpdate'], ['version'], ['GET' => 0], null, false, false, null]],
        1288 => [[['_route' => 'api.custom.updateapi.deactivate-plugins', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::deactivatePlugins'], ['version'], ['GET' => 0], null, false, false, null]],
        1304 => [[['_route' => 'api.custom.updateapi.unpack', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::unpack'], ['version'], ['GET' => 0], null, false, false, null]],
        1328 => [[['_route' => 'api.custom.updateapi.finish', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::finish'], ['version', 'token'], ['GET' => 0], null, false, true, null]],
        1362 => [[['_route' => 'api.action.user.user-recovery', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::createUserRecovery'], ['version'], ['POST' => 0], null, false, false, null]],
        1379 => [[['_route' => 'api.action.user.user-recovery.hash', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::checkUserRecovery'], ['version'], ['GET' => 0], null, false, false, null]],
        1396 => [[['_route' => 'api.action.user.user-recovery.password', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::updateUserPassword'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1430 => [[['_route' => 'api.action.check-email-unique', '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isEmailUnique'], ['version'], ['POST' => 0], null, false, false, null]],
        1455 => [[['_route' => 'api.action.check-username-unique', '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isUsernameUnique'], ['version'], ['POST' => 0], null, false, false, null]],
        1489 => [[['_route' => 'api.action.message-queue.consume', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ConsumeMessagesController::consumeMessages'], ['version'], ['POST' => 0], null, false, false, null]],
        1525 => [[['_route' => 'api.action.database.sync-migration', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::syncMigrations'], ['version'], ['POST' => 0], null, false, false, null]],
        1544 => [[['_route' => 'api.action.database.migrate', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::migrate'], ['version'], ['POST' => 0], null, false, false, null]],
        1566 => [[['_route' => 'api.action.database.migrate-destructive', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::migrateDestructive'], ['version'], ['POST' => 0], null, false, false, null]],
        1603 => [[['_route' => 'api.info.openapi3', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        1631 => [[['_route' => 'api.info.open-api-schema', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        1664 => [[['_route' => 'api.info.entity-schema', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::entitySchema'], ['version'], ['GET' => 0], null, false, false, null]],
        1684 => [[['_route' => 'api.info.business-events', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::businessEvents'], ['version'], ['GET' => 0], null, false, false, null]],
        1707 => [[['_route' => 'api.info.swagger', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        1722 => [[['_route' => 'api.info.config', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::config'], ['version'], ['GET' => 0], null, false, false, null]],
        1753 => [[['_route' => 'api.info.events', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::events'], ['version'], ['GET' => 0], null, false, false, null]],
        1808 => [[['_route' => 'api.proxy.sales-channel', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxy'], ['version', 'salesChannelId', '_path'], null, null, false, true, null]],
        1840 => [[['_route' => 'api.proxy.store-api', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxy'], ['version', 'salesChannelId', '_path'], null, null, false, true, null]],
        1864 => [[['_route' => 'api.proxy.switch-customer', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::assignCustomer'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1897 => [[['_route' => 'api.proxy.modify-shipping-costs', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::modifyShippingCosts'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1936 => [[['_route' => 'api.proxy.disable-automatic-promotions', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::disableAutomaticPromotions'], ['version'], ['PATCH' => 0], null, false, false, null]],
        1974 => [[['_route' => 'api.proxy.enable-automatic-promotions', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::enableAutomaticPromotions'], ['version'], ['PATCH' => 0], null, false, false, null]],
        2035 => [[['_route' => 'api.app_system.action_buttons', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getActionsPerView'], ['version', 'entity', 'view'], ['GET' => 0], null, false, true, null]],
        2056 => [[['_route' => 'api.app_system.action_button.run', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::runAction'], ['version', 'id'], ['POST' => 0], null, false, true, null]],
        2073 => [[['_route' => 'api.app_system.modules', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getModules'], ['version'], ['GET' => 0], null, false, false, null]],
        2119 => [[['_route' => 'api.action.snippet.get.filter', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getFilterItems'], ['version'], ['GET' => 0], null, false, false, null]],
        2145 => [[['_route' => 'api.action.snippet-set.base-file', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getBaseFiles'], ['version'], ['GET' => 0], null, false, false, null]],
        2160 => [[['_route' => 'api.action.snippet-set.author', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getAuthors'], ['version'], ['GET' => 0], null, false, false, null]],
        2219 => [[['_route' => 'api.action.attribute-set.get-relations', '_controller' => 'Shopware\\Core\\System\\CustomField\\Api\\CustomFieldSetActionController::getAvailableRelations'], ['version'], ['GET' => 0], null, false, false, null]],
        2257 => [[['_route' => 'api.action.core.system-config.check', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::checkConfiguration'], ['version'], ['GET' => 0], null, false, false, null]],
        2272 => [[['_route' => 'api.action.core.system-config', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfiguration'], ['version'], ['GET' => 0], null, false, false, null]],
        2286 => [[['_route' => 'api.action.core.save.system-config.batch', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::batchSaveConfiguration'], ['version'], ['POST' => 0], null, false, false, null]],
        2296 => [
            [['_route' => 'api.action.core.system-config.value', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfigurationValues'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api.action.core.save.system-config', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::saveConfiguration'], ['version'], ['POST' => 0], null, false, false, null],
        ],
        2346 => [[['_route' => 'api.state_machine.states', '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::getAvailableTransitions'], ['version', 'entityName', 'entityId'], ['GET' => 0], null, false, false, null]],
        2364 => [[['_route' => 'api.state_machine.transition_state', '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::transitionState'], ['version', 'entityName', 'entityId', 'transition'], ['POST' => 0], null, false, true, null]],
        2422 => [[['_route' => 'api.action.number-range.reserve', 'saleschannel' => null, '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::reserve'], ['version', 'type', 'saleschannel'], ['GET' => 0], null, false, true, null]],
        2461 => [[['_route' => 'api.action.number-range.preview-pattern', 'type' => 'default', '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::previewPattern'], ['version', 'type'], ['GET' => 0], null, false, true, null]],
        2503 => [[['_route' => 'api.action.product.combinations', '_controller' => 'Shopware\\Core\\Content\\Product\\Api\\ProductActionController::getCombinations'], ['version', 'productId'], ['GET' => 0], null, false, false, null]],
        2532 => [[['_route' => 'api.action.product_export.validate', '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::validate'], ['version'], ['POST' => 0], null, false, false, null]],
        2548 => [[['_route' => 'api.action.product_export.preview', '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::preview'], ['version'], ['POST' => 0], null, false, false, null]],
        2596 => [[['_route' => 'api.action.media-folder.dissolve', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaFolderController::dissolve'], ['version', 'folderId'], ['POST' => 0], null, false, false, null]],
        2627 => [[['_route' => 'api.action.media.upload', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::upload'], ['version', 'mediaId'], ['POST' => 0], null, false, false, null]],
        2642 => [[['_route' => 'api.action.media.rename', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::renameMediaFile'], ['version', 'mediaId'], ['POST' => 0], null, false, false, null]],
        2665 => [[['_route' => 'api.action.media.provide-name', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::provideName'], ['version'], ['GET' => 0], null, false, false, null]],
        2697 => [[['_route' => 'api.action.mail_template.send', '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::send'], ['version'], ['POST' => 0], null, false, false, null]],
        2714 => [[['_route' => 'api.action.mail_template.validate', '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::validate'], ['version'], ['POST' => 0], null, false, false, null]],
        2754 => [[['_route' => 'api.action.import_export.features', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::features'], ['version'], ['GET' => 0], null, false, false, null]],
        2775 => [[['_route' => 'api.action.import_export.file.download', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::download'], ['version'], ['GET' => 0], null, false, false, null]],
        2795 => [[['_route' => 'api.action.import_export.initiate', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::initiate'], ['version'], ['POST' => 0], null, false, false, null]],
        2809 => [[['_route' => 'api.action.import_export.process', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::process'], ['version'], ['POST' => 0], null, false, false, null]],
        2825 => [[['_route' => 'api.action.import_export.cancel', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::cancel'], ['version'], ['POST' => 0], null, false, false, null]],
        2877 => [[['_route' => 'api.seo-url-template.validate', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::validate'], ['version'], ['POST' => 0], null, false, false, null]],
        2926 => [[['_route' => 'api.seo-url-template.preview', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::preview'], ['version'], ['POST' => 0], null, false, false, null]],
        2975 => [[['_route' => 'api.seo-url-template.context', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getSeoUrlContext'], ['version'], ['POST' => 0], null, false, false, null]],
        3016 => [[['_route' => 'api.seo-url.canonical', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::updateCanonicalUrl'], ['version'], ['PATCH' => 0], null, false, false, null]],
        3067 => [[['_route' => 'api.seo-url.create', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::createCustomSeoUrls'], ['version'], ['POST' => 0], null, false, false, null]],
        3125 => [[['_route' => 'api.seo-url-template.default', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getDefaultSeoTemplate'], ['version', 'routeName'], ['GET' => 0], null, false, true, null]],
        3195 => [[['_route' => 'api.action.order.convert-to-cart', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderConverterController::convertToCart'], ['version', 'orderId'], ['POST' => 0], null, true, false, null]],
        3213 => [[['_route' => 'api.action.order.add-credit-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCreditItemToOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        3234 => [[['_route' => 'api.action.order.recalculate', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::recalculateOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        3259 => [[['_route' => 'api.action.order.add-product', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addProductToOrder'], ['version', 'orderId', 'productId'], ['POST' => 0], null, false, true, null]],
        3276 => [[['_route' => 'api.action.order.add-line-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCustomLineItemToOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        3319 => [[['_route' => 'api.action.document.preview', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::previewDocument'], ['version', 'orderId', 'deepLinkCode', 'documentTypeName'], ['GET' => 0], null, false, false, null]],
        3345 => [[['_route' => 'api.action.document.invoice', '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::createDocument'], ['version', 'orderId', 'documentTypeName'], ['POST' => 0], null, false, true, null]],
        3368 => [[['_route' => 'api.action.order.state_machine.order.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderStateTransition'], ['version', 'orderId', 'transition'], ['POST' => 0], null, false, true, null]],
        3423 => [[['_route' => 'api.action.order.replace-order-address', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::replaceOrderAddressWithCustomerAddress'], ['version', 'orderAddressId', 'customerAddressId'], ['POST' => 0], null, false, true, null]],
        3471 => [[['_route' => 'api.action.order.state_machine.order_transaction.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderTransactionStateTransition'], ['version', 'orderTransactionId', 'transition'], ['POST' => 0], null, false, true, null]],
        3512 => [[['_route' => 'api.action.order.state_machine.order_delivery.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderDeliveryStateTransition'], ['version', 'orderDeliveryId', 'transition'], ['POST' => 0], null, false, true, null]],
        3539 => [[['_route' => 'api.action.calculate-price', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\PriceActionController::calculate'], ['version'], ['POST' => 0], null, false, false, null]],
        3577 => [[['_route' => 'api.action.download.document', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::downloadDocument'], ['version', 'documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        3592 => [[['_route' => 'api.action.document.upload', '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::uploadToDocument'], ['version', 'documentId'], ['POST' => 0], null, false, false, null]],
        3643 => [
            [['_route' => 'api.action.promotion.codes', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getIndividualCodes'], ['version', 'promotionId'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api.action.promotion.codes.remove', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::deleteIndividualCodes'], ['version', 'promotionId'], ['DELETE' => 0], null, false, false, null],
        ],
        3673 => [[['_route' => 'api.action.promotion.setgroup.packager', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupPackagers'], ['version'], ['GET' => 0], null, false, false, null]],
        3688 => [[['_route' => 'api.action.promotion.setgroup.sorter', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupSorters'], ['version'], ['GET' => 0], null, false, false, null]],
        3759 => [[['_route' => 'api.customer-group.accept', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::accept'], ['version', 'customerId'], ['POST' => 0], null, false, true, null]],
        3828 => [[['_route' => 'api.customer-group.decline', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::decline'], ['version', 'customerId'], ['POST' => 0], null, false, true, null]],
        3867 => [[['_route' => 'api.admin.snippets', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::snippets'], ['version'], ['GET' => 0], null, false, false, null]],
        3886 => [[['_route' => 'api.admin.known-ips', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::knownIps'], ['version'], ['GET' => 0], null, false, false, null]],
        3936 => [[['_route' => 'api.action.theme.configuration', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::configuration'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        3960 => [[['_route' => 'api.action.theme.assign', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::assignTheme'], ['version', 'themeId', 'salesChannelId'], ['POST' => 0], null, false, true, null]],
        3974 => [[['_route' => 'api.action.theme.reset', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::resetTheme'], ['version', 'themeId'], ['PATCH' => 0], null, false, false, null]],
        3989 => [[['_route' => 'api.action.theme.fields', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::fields'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        4016 => [[['_route' => 'api.action.theme.structuredFields', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::structuredFields'], ['version', 'themeId'], ['GET' => 0], null, false, false, null]],
        4026 => [[['_route' => 'api.action.theme.update', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::updateTheme'], ['version', 'themeId'], ['PATCH' => 0], null, false, true, null]],
        4118 => [[['_route' => 'api.acl_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        4195 => [[['_route' => 'api.acl_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        4279 => [[['_route' => 'api.acl_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4368 => [[['_route' => 'api.acl_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4467 => [
            [['_route' => 'api.acl_user_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-user-role'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-user-role'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-user-role'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        4551 => [[['_route' => 'api.acl_user_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-user-role'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        4641 => [[['_route' => 'api.acl_user_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4736 => [[['_route' => 'api.acl_user_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4819 => [[['_route' => 'api.acl_user_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-user-role'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        4911 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        4988 => [[['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        5071 => [[['_route' => 'api.category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5159 => [[['_route' => 'api.category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5235 => [[['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5332 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5414 => [[['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        5502 => [[['_route' => 'api.category_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5595 => [[['_route' => 'api.category_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5676 => [[['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        5781 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        5871 => [[['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        5967 => [[['_route' => 'api.category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6068 => [[['_route' => 'api.category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6157 => [[['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6251 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        6330 => [[['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6415 => [[['_route' => 'api.cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6505 => [[['_route' => 'api.cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6583 => [[['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6676 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        6754 => [[['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        6838 => [[['_route' => 'api.cms_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        6927 => [[['_route' => 'api.cms_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7004 => [[['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7110 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        7201 => [[['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        7298 => [[['_route' => 'api.cms_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7400 => [[['_route' => 'api.cms_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7490 => [[['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7586 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        7667 => [[['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        7754 => [[['_route' => 'api.cms_section.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7846 => [[['_route' => 'api.cms_section.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        7926 => [[['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8019 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        8097 => [[['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        8181 => [[['_route' => 'api.cms_slot.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8270 => [[['_route' => 'api.cms_slot.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8347 => [[['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8453 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        8544 => [[['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        8641 => [[['_route' => 'api.cms_slot_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8743 => [[['_route' => 'api.cms_slot_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8833 => [[['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        8924 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9000 => [[['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        9082 => [[['_route' => 'api.country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9169 => [[['_route' => 'api.country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9244 => [[['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9342 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9425 => [[['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        9514 => [[['_route' => 'api.country_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9608 => [[['_route' => 'api.country_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9690 => [[['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        9801 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        9897 => [[['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        9999 => [[['_route' => 'api.country_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10106 => [[['_route' => 'api.country_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10202 => [[['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10307 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        10397 => [[['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        10493 => [[['_route' => 'api.country_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10594 => [[['_route' => 'api.country_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10683 => [[['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        10776 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        10854 => [[['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        10938 => [[['_route' => 'api.currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11027 => [[['_route' => 'api.currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11104 => [[['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11210 => [
            [['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11301 => [[['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        11398 => [[['_route' => 'api.currency_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11500 => [[['_route' => 'api.currency_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11590 => [[['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        11688 => [
            [['_route' => 'api.custom_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        11728 => [[['_route' => 'frontend.account.order.single.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0], null, false, true, null]],
        11744 => [[['_route' => 'frontend.account.order.cancel', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::cancelOrder'], [], ['POST' => 0], null, false, false, null]],
        11767 => [[['_route' => 'frontend.account.edit-order.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        11793 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        11818 => [[['_route' => 'frontend.account.edit-order.update-order', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        11848 => [[['_route' => 'frontend.account.address.edit.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        11887 => [[['_route' => 'frontend.account.address.set-default-address', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        11910 => [[['_route' => 'frontend.account.address.delete', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        11927 => [[['_route' => 'frontend.account.address.create', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        11945 => [[['_route' => 'frontend.account.address.edit.save', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        11989 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        12011 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        12059 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        12075 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        12097 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        12112 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        12124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        12199 => [[['_route' => 'sales-channel-api.info.openapi3', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        12228 => [[['_route' => 'sales-channel-api.info.open-api-schema', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        12252 => [[['_route' => 'sales-channel-api.info.swagger', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelApiSchemaController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        12276 => [
            [['_route' => 'sales-channel-api.context.update', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::update'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.context.get', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\SalesChannelContextController::getContext'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        12304 => [[['_route' => 'sales-channel-api.cms.page', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\SalesChannelCmsPageController::getPage'], ['version', 'pageId'], ['GET' => 0], null, false, true, null]],
        12332 => [
            [['_route' => 'sales-channel-api.checkout.cart.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::getCart'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.checkout.cart.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::createCart'], ['version'], ['POST' => 0], null, false, false, null],
        ],
        12362 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.product.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addProduct'], ['version', 'id'], ['POST' => 0], null, false, true, null]],
        12385 => [[['_route' => 'sales-channel-api.checkout.frontend.cart.code.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addCode'], ['version', 'code'], ['POST' => 0], null, false, true, null]],
        12420 => [
            [['_route' => 'sales-channel-api.checkout.cart.line-item.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::addLineItem'], ['version', 'id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItem'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.checkout.cart.line-item.update', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::updateLineItem'], ['version', 'id'], ['PATCH' => 0], null, false, true, null],
        ],
        12439 => [[['_route' => 'sales-channel-api.checkout.cart.line-items.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::removeLineItems'], ['version'], ['POST' => 0], null, false, false, null]],
        12451 => [[['_route' => 'sales-channel-api.checkout.cart.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCartController::cancelCart'], ['version'], ['DELETE' => 0], null, false, false, null]],
        12470 => [[['_route' => 'sales-channel-api.checkout.order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        12493 => [[['_route' => 'sales-channel-api.checkout.order.pay', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::payOrder'], ['version', 'orderId'], ['POST' => 0], null, false, false, null]],
        12519 => [[['_route' => 'sales-channel-api.checkout.guest-order.create', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::createGuestOrder'], ['version'], ['POST' => 0], null, false, false, null]],
        12538 => [[['_route' => 'sales-channel-api.checkout.guest-order.detail', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\SalesChannelCheckoutController::getDeepLinkOrder'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        12572 => [[['_route' => 'sales-channel-api.customer.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::login'], ['version'], ['POST' => 0], null, false, false, null]],
        12585 => [[['_route' => 'sales-channel-api.customer.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        12601 => [[['_route' => 'sales-channel-api.customer.order.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::orderList'], ['version'], ['GET' => 0], null, false, false, null]],
        12616 => [[['_route' => 'sales-channel-api.customer.email.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveEmail'], ['version'], ['PATCH' => 0], null, false, false, null]],
        12634 => [[['_route' => 'sales-channel-api.customer.password.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::savePassword'], ['version'], ['PATCH' => 0], null, false, false, null]],
        12654 => [[['_route' => 'sales-channel-api.customer.address.list', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddresses'], ['version'], ['GET' => 0], null, false, false, null]],
        12676 => [
            [['_route' => 'sales-channel-api.customer.address.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getAddress'], ['version', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sales-channel-api.customer.address.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::deleteAddress'], ['version', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        12707 => [[['_route' => 'sales-channel-api.customer.address.set-default-shipping-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultShippingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        12724 => [[['_route' => 'sales-channel-api.customer.address.set-default-billing-address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::setDefaultBillingAddress'], ['version', 'id'], ['PATCH' => 0], null, false, false, null]],
        12736 => [[['_route' => 'sales-channel-api.customer.address.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::upsertAddress'], ['version'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        12748 => [
            [['_route' => 'sales-channel-api.customer.create', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::register'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::saveProfile'], ['version'], ['PATCH' => 0], null, false, false, null],
            [['_route' => 'sales-channel-api.customer.detail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SalesChannelCustomerController::getCustomerDetail'], ['version'], ['GET' => 0], null, false, false, null],
        ],
        12791 => [[['_route' => 'sales-channel-api.product.cross-selling', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\SalesChannelCrossSellingController::getCrossSelling'], ['version', 'id'], ['GET' => 0], null, false, false, null]],
        12824 => [[['_route' => 'sales-channel-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        12841 => [[['_route' => 'sales-channel-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        12862 => [[['_route' => 'sales-channel-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\SalesChannelNewsletterController::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        12926 => [[['_route' => 'store-api.info.openapi3', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::info'], ['version'], ['GET' => 0], null, false, false, null]],
        12955 => [[['_route' => 'store-api.info.open-api-schema', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::openApiSchema'], ['version'], ['GET' => 0], null, false, false, null]],
        12979 => [[['_route' => 'store-api.info.swagger', 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::infoHtml'], ['version'], ['GET' => 0], null, false, false, null]],
        13009 => [
            [['_route' => 'store-api.context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextRoute::load'], ['version'], ['GET' => 0], null, false, false, null],
            [['_route' => 'store-api.switch-context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextSwitchRoute::switchContext'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        13029 => [[['_route' => 'store-api.contact.form', '_controller' => 'Shopware\\Core\\Content\\ContactForm\\SalesChannel\\ContactFormRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13045 => [[['_route' => 'store-api.country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13066 => [[['_route' => 'store-api.currency', '_controller' => 'Shopware\\Core\\System\\Currency\\SalesChannel\\CurrencyRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13119 => [[['_route' => 'store-api.customer-group-registration.config', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerGroupRegistrationSettingsRoute::load'], ['version', 'customerGroupId'], ['GET' => 0], null, false, true, null]],
        13140 => [[['_route' => 'store-api.category.search', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryListRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13159 => [[['_route' => 'store-api.category.detail', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['version', 'navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        13181 => [[['_route' => 'store-api.cms.detail', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['version', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        13209 => [[['_route' => 'store-api.checkout.cart.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartDeleteRoute::delete'], ['version'], ['DELETE' => 0], null, false, false, null]],
        13233 => [
            [['_route' => 'store-api.checkout.cart.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemAddRoute::add'], ['version'], ['POST' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.remove-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], ['version'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.update-lineitem', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemUpdateRoute::change'], ['version'], ['PATCH' => 0], null, false, false, null],
        ],
        13244 => [[['_route' => 'store-api.checkout.cart.read', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartLoadRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13260 => [[['_route' => 'store-api.checkout.cart.order', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartOrderRoute::order'], ['version'], ['POST' => 0], null, false, false, null]],
        13280 => [[['_route' => 'store-api.language', '_controller' => 'Shopware\\Core\\System\\Language\\SalesChannel\\LanguageRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13303 => [[['_route' => 'store-api.salutation', '_controller' => 'Shopware\\Core\\System\\Salutation\\SalesChannel\\SalutationRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13324 => [[['_route' => 'store-api.search', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Search\\ProductSearchRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13343 => [[['_route' => 'store-api.search.suggest', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Suggest\\ProductSuggestRoute::load'], ['version'], ['POST' => 0], null, false, false, null]],
        13360 => [[['_route' => 'store-api.seo.url', '_controller' => 'Shopware\\Core\\Content\\Seo\\SalesChannel\\SeoUrlRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13377 => [[['_route' => 'store-api.sitemap', '_controller' => 'Shopware\\Core\\Content\\Sitemap\\SalesChannel\\SitemapRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13402 => [[['_route' => 'store-api.shipping.method', '_controller' => 'Shopware\\Core\\Checkout\\Shipping\\SalesChannel\\ShippingMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13444 => [[['_route' => 'store-api.navigation', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\NavigationRoute::load'], ['version', 'requestActiveId', 'requestRootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        13474 => [[['_route' => 'store-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        13493 => [[['_route' => 'store-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::subscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13514 => [[['_route' => 'store-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterUnsubscribeRoute::unsubscribe'], ['version'], ['POST' => 0], null, false, false, null]],
        13569 => [[['_route' => 'store-api.product.cross-selling', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\ProductCrossSellingRoute::load'], ['version', 'productId'], ['POST' => 0], null, false, false, null]],
        13589 => [[['_route' => 'store-api.product-review.list', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewRoute::load'], ['version', 'productId'], ['POST' => 0], null, false, false, null]],
        13599 => [[['_route' => 'store-api.product-review.save', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewSaveRoute::save'], ['version', 'productId'], ['POST' => 0], null, false, false, null]],
        13611 => [[['_route' => 'store-api.product.detail', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Detail\\ProductDetailRoute::load'], ['version', 'productId'], ['POST' => 0], null, false, true, null]],
        13640 => [[['_route' => 'store-api.product.listing', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ProductListingRoute::load'], ['version', 'categoryId'], ['POST' => 0], null, false, true, null]],
        13650 => [[['_route' => 'store-api.product.search', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\ProductListListRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13675 => [[['_route' => 'store-api.payment.method', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\PaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13701 => [[['_route' => 'store-api.payment.handle', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\HandlePaymentMethodRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        13746 => [[['_route' => 'store-api.account.change-profile', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeCustomerProfileRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        13766 => [[['_route' => 'store-api.account.change-password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePasswordRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        13798 => [[['_route' => 'store-api.account.set.payment-method', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['version', 'paymentMethodId'], ['POST' => 0], null, false, true, null]],
        13815 => [[['_route' => 'store-api.account.change-email', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeEmailRoute::change'], ['version'], ['POST' => 0], null, false, false, null]],
        13836 => [
            [['_route' => 'store-api.account.customer', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'store-api.account.customer.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteCustomerRoute::delete'], ['version'], ['DELETE' => 0], null, false, false, null],
        ],
        13870 => [[['_route' => 'store-api.account.address.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteAddressRoute::delete'], ['version', 'addressId'], ['DELETE' => 0], null, false, true, null]],
        13909 => [[['_route' => 'store-api.account.address.change.default.shipping', 'type' => 'shipping', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['version', 'addressId'], ['PATCH' => 0], null, false, true, null]],
        13935 => [[['_route' => 'store-api.account.address.change.default.billing', 'type' => 'billing', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['version', 'addressId'], ['PATCH' => 0], null, false, true, null]],
        13954 => [[['_route' => 'store-api.account.address.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['version', 'addressId'], ['PATCH' => 0], null, false, true, null]],
        13965 => [[['_route' => 'store-api.account.address.create', 'addressId' => null, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['version'], ['POST' => 0], null, false, false, null]],
        13992 => [[['_route' => 'store-api.account.address.list.get', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ListAddressRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14009 => [[['_route' => 'store-api.account.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoginRoute::login'], ['version'], ['POST' => 0], null, false, false, null]],
        14022 => [[['_route' => 'store-api.account.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LogoutRoute::logout'], ['version'], ['POST' => 0], null, false, false, null]],
        14057 => [[['_route' => 'store-api.account.register.confirm', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterConfirmRoute::confirm'], ['version'], ['POST' => 0], null, false, false, null]],
        14067 => [[['_route' => 'store-api.account.register', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterRoute::register'], ['version'], ['POST' => 0], null, false, false, null]],
        14106 => [[['_route' => 'store-api.account.recovery.password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ResetPasswordRoute::resetPassword'], ['version'], ['POST' => 0], null, false, false, null]],
        14116 => [[['_route' => 'store-api.account.recovery.send.mail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SendPasswordRecoveryMailRoute::sendRecoveryMail'], ['version'], ['POST' => 0], null, false, false, null]],
        14153 => [[['_route' => 'store-api.order.state.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\CancelOrderRoute::cancel'], ['version'], ['POST' => 0], null, false, false, null]],
        14170 => [[['_route' => 'store-api.order.set-payment', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\SetPaymentOrderRoute::setPayment'], ['version'], ['POST' => 0], null, false, false, null]],
        14181 => [[['_route' => 'store-api.order', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderRoute::load'], ['version'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14226 => [[['_route' => 'store-api.product.export', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ProductExport\\SalesChannel\\ExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        14279 => [[['_route' => 'widgets.account.order.detail', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        14309 => [[['_route' => 'frontend.cms.page', 'id' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14347 => [[['_route' => 'frontend.cms.navigation.page', 'navigationId' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        14373 => [[['_route' => 'frontend.cms.navigation.filter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14428 => [[['_route' => 'frontend.checkout.line-item.delete', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        14463 => [[['_route' => 'frontend.checkout.line-item.change-quantity', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        14511 => [[['_route' => 'frontend.account.customer-group-registration.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::customerGroupRegistration'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        14554 => [[['_route' => 'frontend.maintenance.singlepage', '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        14584 => [[['_route' => 'frontend.navigation.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        14613 => [[['_route' => 'frontend.detail.page', '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        14630 => [[['_route' => 'frontend.detail.switch', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        14660 => [[['_route' => 'widgets.quickview.minimal', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        14697 => [[['_route' => 'frontend.detail.review.save', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        14713 => [[['_route' => 'frontend.product.reviews', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        14749 => [[['_route' => 'frontend.export', '_controller' => 'Shopware\\Storefront\\Controller\\ProductExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        14837 => [[['_route' => 'api.custom_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        14926 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15020 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15102 => [[['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15205 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        15293 => [[['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        15387 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15486 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15573 => [[['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15686 => [
            [['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        15784 => [[['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        15888 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        15997 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16094 => [[['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16187 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16265 => [[['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16349 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16438 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16515 => [[['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16617 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16704 => [[['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        16797 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16895 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        16981 => [[['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17081 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17166 => [[['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17257 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17353 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17437 => [[['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17568 => [
            [['_route' => 'api.customer_group_registration_sales_channels.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17684 => [[['_route' => 'api.customer_group_registration_sales_channels.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        17806 => [[['_route' => 'api.customer_group_registration_sales_channels.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        17933 => [[['_route' => 'api.customer_group_registration_sales_channels.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18048 => [[['_route' => 'api.customer_group_registration_sales_channels.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-registration-sales-channels'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18161 => [
            [['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18259 => [[['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18363 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18472 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18569 => [[['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18672 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        18760 => [[['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        18854 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        18953 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19040 => [[['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19138 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19221 => [[['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19310 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19404 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19486 => [[['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19584 => [
            [['_route' => 'api.dead_message.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'dead-message'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'dead-message'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        19667 => [[['_route' => 'api.dead_message.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'dead-message'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        19756 => [[['_route' => 'api.dead_message.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19850 => [[['_route' => 'api.dead_message.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        19932 => [[['_route' => 'api.dead_message.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'dead-message'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20031 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20115 => [[['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20205 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20300 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20383 => [[['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20495 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        20592 => [[['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        20695 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20803 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20899 => [[['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        20992 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        21070 => [[['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21154 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21243 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21320 => [[['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21427 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        21519 => [[['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        21617 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21720 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21811 => [[['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        21934 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22042 => [[['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22156 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22275 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22382 => [[['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22481 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        22565 => [[['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        22655 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22750 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22833 => [[['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        22945 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23042 => [[['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23145 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23253 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23349 => [[['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23447 => [
            [['_route' => 'api.event_action.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23530 => [[['_route' => 'api.event_action.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        23619 => [[['_route' => 'api.event_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23713 => [[['_route' => 'api.event_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23795 => [[['_route' => 'api.event_action.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        23900 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        23990 => [[['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24086 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24187 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24276 => [[['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24380 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        24469 => [[['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        24564 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24664 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24752 => [[['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        24860 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        24953 => [[['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25052 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25156 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25248 => [[['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25369 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25475 => [[['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        25587 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25704 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25809 => [[['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        25905 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        25986 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26073 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26165 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26245 => [[['_route' => 'api.integration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26338 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26416 => [[['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26500 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26589 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26666 => [[['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        26757 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        26833 => [[['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        26915 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27002 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27077 => [[['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27181 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27270 => [[['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27365 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27465 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27553 => [[['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27648 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        27728 => [[['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        27814 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27905 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        27984 => [[['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28089 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28179 => [[['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28275 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28376 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28465 => [[['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28583 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        28686 => [[['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        28795 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        28909 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29011 => [[['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29110 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29194 => [[['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29284 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29379 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29462 => [[['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29568 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        29659 => [[['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        29756 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29858 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        29948 => [[['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30063 => [
            [['_route' => 'api.mail_template_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30163 => [[['_route' => 'api.mail_template_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30269 => [[['_route' => 'api.mail_template_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30380 => [[['_route' => 'api.mail_template_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30479 => [[['_route' => 'api.mail_template_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30591 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        30688 => [[['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        30791 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30899 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        30995 => [[['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31100 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31190 => [[['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31286 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31387 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31476 => [[['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31594 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        31697 => [[['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        31806 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        31920 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32022 => [[['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32121 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32205 => [[['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32295 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32390 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32473 => [[['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32563 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        32638 => [[['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        32719 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32805 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32879 => [[['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        32986 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33078 => [[['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33176 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33279 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33370 => [[['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33468 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        33551 => [[['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        33640 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33734 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33816 => [[['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        33929 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34027 => [[['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34131 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34240 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34337 => [[['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34474 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        34596 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        34724 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34857 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        34978 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35073 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35153 => [[['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35239 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35330 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35409 => [[['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35510 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        35596 => [[['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        35688 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35785 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35870 => [[['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        35977 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36069 => [[['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36167 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36270 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36361 => [[['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36464 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        36552 => [[['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        36646 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36745 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36832 => [[['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        36938 => [
            [['_route' => 'api.message_queue_stats.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37029 => [[['_route' => 'api.message_queue_stats.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37126 => [[['_route' => 'api.message_queue_stats.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37228 => [[['_route' => 'api.message_queue_stats.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37318 => [[['_route' => 'api.message_queue_stats.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'message-queue-stats'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37424 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        37515 => [[['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        37612 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37714 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37804 => [[['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        37915 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38011 => [[['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38113 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38220 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38315 => [[['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38413 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38496 => [[['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        38585 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38679 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38761 => [[['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        38875 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        38974 => [[['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39079 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39189 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39287 => [[['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39392 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39482 => [[['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        39578 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39679 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39768 => [[['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        39879 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        39975 => [[['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40077 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40184 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40279 => [[['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40383 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40472 => [[['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        40567 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40667 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40755 => [[['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        40872 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        40974 => [[['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41082 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41195 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41296 => [[['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41386 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41461 => [[['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41542 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41634 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41708 => [[['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        41807 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        41891 => [[['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        41981 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42076 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42159 => [[['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42259 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42344 => [[['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42435 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42531 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42615 => [[['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42715 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        42800 => [[['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        42891 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        42987 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43071 => [[['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43181 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43276 => [[['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43377 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43483 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43577 => [[['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43679 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        43766 => [[['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        43859 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        43957 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44043 => [[['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44138 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44218 => [[['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44304 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44395 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44474 => [[['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44577 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        44665 => [[['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        44759 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44858 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        44945 => [[['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45045 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45130 => [[['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45221 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45317 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45401 => [[['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45514 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        45612 => [[['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        45716 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45825 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        45922 => [[['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46013 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46089 => [[['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46171 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46258 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46333 => [[['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46437 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46526 => [[['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        46621 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46721 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46809 => [[['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        46901 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        46978 => [[['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47061 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47149 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47225 => [[['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47327 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47414 => [[['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47507 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47605 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47691 => [[['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        47799 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        47892 => [[['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        47991 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48095 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48187 => [[['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48302 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48402 => [[['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        48508 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48619 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48718 => [[['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        48826 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        48919 => [[['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        49018 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49122 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49214 => [[['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49342 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        49455 => [[['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        49574 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49698 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49810 => [[['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        49931 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        50037 => [[['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50149 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50266 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50371 => [[['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50483 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        50580 => [[['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        50683 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50791 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50887 => [[['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        50987 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51072 => [[['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51163 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51259 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51343 => [[['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51449 => [
            [['_route' => 'api.product_feature_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        51540 => [[['_route' => 'api.product_feature_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        51637 => [[['_route' => 'api.product_feature_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51739 => [[['_route' => 'api.product_feature_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51829 => [[['_route' => 'api.product_feature_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        51948 => [
            [['_route' => 'api.product_feature_set_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        52052 => [[['_route' => 'api.product_feature_set_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52162 => [[['_route' => 'api.product_feature_set_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52277 => [[['_route' => 'api.product_feature_set_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52380 => [[['_route' => 'api.product_feature_set_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52493 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        52591 => [[['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        52695 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52804 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        52901 => [[['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53007 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53098 => [[['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53195 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53297 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53387 => [[['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53506 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        53610 => [[['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        53720 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53835 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        53938 => [[['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54037 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54121 => [[['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54211 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54306 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54389 => [[['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54489 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        54574 => [[['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        54665 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54761 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54845 => [[['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        54944 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55028 => [[['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55118 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55213 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55296 => [[['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55398 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55485 => [[['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        55578 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55676 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55762 => [[['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        55862 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        55947 => [[['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56038 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56134 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56218 => [[['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56327 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56421 => [[['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56521 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56626 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56719 => [[['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        56820 => [
            [['_route' => 'api.product_sorting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        56906 => [[['_route' => 'api.product_sorting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        56998 => [[['_route' => 'api.product_sorting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57095 => [[['_route' => 'api.product_sorting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57180 => [[['_route' => 'api.product_sorting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57294 => [
            [['_route' => 'api.product_sorting_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57393 => [[['_route' => 'api.product_sorting_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57498 => [[['_route' => 'api.product_sorting_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57608 => [[['_route' => 'api.product_sorting_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57706 => [[['_route' => 'api.product_sorting_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        57806 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        57891 => [[['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        57982 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58078 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58162 => [[['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58270 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58363 => [[['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58462 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58566 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58658 => [[['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        58771 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        58869 => [[['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        58973 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59082 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59179 => [[['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59276 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59358 => [[['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59446 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59539 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59620 => [[['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        59725 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        59815 => [[['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        59911 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60012 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60101 => [[['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60205 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60294 => [[['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60389 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60489 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60577 => [[['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60671 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        60750 => [[['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        60835 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        60925 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61003 => [[['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61109 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61200 => [[['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61297 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61399 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61489 => [[['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61593 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        61682 => [[['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        61777 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61877 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        61965 => [[['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62077 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62174 => [[['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62277 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62385 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62481 => [[['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62591 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        62686 => [[['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        62787 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62893 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        62987 => [[['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63099 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63196 => [[['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63299 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63407 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63503 => [[['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63610 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        63702 => [[['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        63800 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63903 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        63994 => [[['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64107 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64205 => [[['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64309 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64418 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64515 => [[['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64624 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        64718 => [[['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        64818 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        64923 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65016 => [[['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65126 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65221 => [[['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65322 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65428 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65522 => [[['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65626 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        65715 => [[['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        65810 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65910 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        65998 => [[['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66108 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66203 => [[['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66304 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66410 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66504 => [[['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66611 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        66703 => [[['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        66801 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66904 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        66995 => [[['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67095 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67180 => [[['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67271 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67367 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67451 => [[['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67559 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        67652 => [[['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        67751 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67855 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        67947 => [[['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68068 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68174 => [[['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68286 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68403 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68508 => [[['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68627 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        68725 => [[['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        68829 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        68938 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69035 => [[['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69124 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69198 => [[['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69278 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69363 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69436 => [[['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69536 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        69621 => [[['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        69712 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69808 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69892 => [[['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        69991 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70075 => [[['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70165 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70260 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70343 => [[['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70453 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        70548 => [[['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        70649 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70755 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70849 => [[['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        70957 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        71050 => [[['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71149 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71253 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71345 => [[['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71454 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        71548 => [[['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        71648 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71753 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71846 => [[['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        71953 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72045 => [[['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72143 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72246 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72337 => [[['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72446 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        72540 => [[['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        72640 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72745 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72838 => [[['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        72954 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73055 => [[['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73162 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73274 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73374 => [[['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73491 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        73593 => [[['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        73701 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73814 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        73915 => [[['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74027 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74124 => [[['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74227 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74335 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74431 => [[['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74536 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        74626 => [[['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        74722 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74823 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        74912 => [[['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75030 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75133 => [[['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75242 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75356 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75458 => [[['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75553 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        75633 => [[['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        75719 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75810 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75889 => [[['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        75997 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76090 => [[['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76189 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76293 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76385 => [[['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76485 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        76570 => [[['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        76661 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76757 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76841 => [[['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        76934 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77012 => [[['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77096 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77185 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77262 => [[['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77365 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77453 => [[['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        77547 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77646 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77733 => [[['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        77834 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        77920 => [[['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78012 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78109 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78194 => [[['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78302 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78395 => [[['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78494 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78598 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78690 => [[['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        78796 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        78887 => [[['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        78984 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79086 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79176 => [[['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79290 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79389 => [[['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79494 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79604 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79702 => [[['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        79794 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        79871 => [[['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        79954 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80042 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80118 => [[['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80215 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80297 => [[['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80385 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80478 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80559 => [[['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80658 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        80742 => [[['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        80832 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        80927 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81010 => [[['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81118 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81211 => [[['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81310 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81414 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81506 => [[['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81612 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        81703 => [[['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        81800 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81902 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        81992 => [[['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82111 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82215 => [[['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        82325 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82440 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82543 => [[['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82654 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        82750 => [[['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        82852 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        82959 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83054 => [[['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83166 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83263 => [[['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83366 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83474 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83570 => [[['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83669 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        83753 => [[['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        83843 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        83938 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84021 => [[['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84109 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84182 => [[['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84261 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84345 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84417 => [[['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84505 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84578 => [[['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        84657 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84741 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84813 => [[['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        84907 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        84986 => [[['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85071 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85161 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85239 => [[['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85339 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85424 => [[['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        85515 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85611 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85695 => [[['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        85808 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        85906 => [[['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86010 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86119 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86216 => [[['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86306 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86381 => [[['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86462 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86548 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86622 => [[['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86719 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        86801 => [[['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        86889 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        86982 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87063 => [[['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87169 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87260 => [[['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87357 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87459 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87549 => [[['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87652 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        87740 => [[['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        87834 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        87933 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88020 => [[['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88109 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88183 => [[['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88263 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88348 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88421 => [[['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88523 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        88610 => [[['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        88703 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88801 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88887 => [[['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        88973 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89046 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89126 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89211 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89313 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89400 => [[['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89493 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89591 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89677 => [[['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        89776 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        89860 => [[['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        89950 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90045 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90128 => [[['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90220 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90297 => [[['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90380 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90468 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90544 => [[['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90644 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        90729 => [[['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        90820 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        90916 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91000 => [[['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91106 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data'], ['version', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data'], ['version', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        91197 => [[['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data'], ['version', 'path'], ['GET' => 0], null, false, true, null]],
        91294 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91396 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91486 => [[['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data'], ['version', 'path'], ['POST' => 0], null, false, true, null]],
        91519 => [[['_route' => 'api.info.me', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::me'], ['version'], ['GET' => 0], null, false, false, null]],
        91533 => [[['_route' => 'api.info.ping', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::status'], ['version'], ['GET' => 0], null, false, false, null]],
        91563 => [[['_route' => 'api.user.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['version', 'userId'], ['DELETE' => 0], null, false, true, null]],
        91595 => [[['_route' => 'api.user_access_keys.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['version', 'userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        91605 => [[['_route' => 'api.user.update', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], ['version', 'userId'], ['PATCH' => 0], null, false, true, null]],
        91616 => [[['_route' => 'api.user.create', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], ['version'], ['POST' => 0], null, false, false, null]],
        91639 => [[['_route' => 'api.acl_role.create', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertRole'], ['version'], ['POST' => 0], null, false, false, null]],
        91661 => [
            [['_route' => 'api.acl_role.update', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertRole'], ['version', 'roleId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteRole'], ['version', 'roleId'], ['DELETE' => 0], null, false, true, null],
        ],
        91723 => [[['_route' => 'sales-channel-api.category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        91759 => [[['_route' => 'sales-channel-api.category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'category'], ['version'], ['POST' => 0], null, false, false, null]],
        91783 => [[['_route' => 'sales-channel-api.category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        91815 => [[['_route' => 'sales-channel-api.country.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        91850 => [[['_route' => 'sales-channel-api.country.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country'], ['version'], ['POST' => 0], null, false, false, null]],
        91873 => [[['_route' => 'sales-channel-api.country.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        91912 => [[['_route' => 'sales-channel-api.country_state.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'country-state'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        91954 => [[['_route' => 'sales-channel-api.country_state.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'country-state'], ['version'], ['POST' => 0], null, false, false, null]],
        91984 => [[['_route' => 'sales-channel-api.country_state.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'country-state'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        92017 => [[['_route' => 'sales-channel-api.currency.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'currency'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        92053 => [[['_route' => 'sales-channel-api.currency.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'currency'], ['version'], ['POST' => 0], null, false, false, null]],
        92077 => [[['_route' => 'sales-channel-api.currency.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'currency'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        92110 => [[['_route' => 'sales-channel-api.language.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'language'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        92146 => [[['_route' => 'sales-channel-api.language.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'language'], ['version'], ['POST' => 0], null, false, false, null]],
        92170 => [[['_route' => 'sales-channel-api.language.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'language'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        92209 => [[['_route' => 'sales-channel-api.main_category.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'main-category'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        92251 => [[['_route' => 'sales-channel-api.main_category.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'main-category'], ['version'], ['POST' => 0], null, false, false, null]],
        92281 => [[['_route' => 'sales-channel-api.main_category.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'main-category'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        92321 => [[['_route' => 'sales-channel-api.payment_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'payment-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        92364 => [[['_route' => 'sales-channel-api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'payment-method'], ['version'], ['POST' => 0], null, false, false, null]],
        92395 => [[['_route' => 'sales-channel-api.payment_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'payment-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        92427 => [[['_route' => 'sales-channel-api.product.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'product'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        92462 => [[['_route' => 'sales-channel-api.product.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'product'], ['version'], ['POST' => 0], null, false, false, null]],
        92485 => [[['_route' => 'sales-channel-api.product.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'product'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        92520 => [[['_route' => 'sales-channel-api.salutation.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'salutation'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        92558 => [[['_route' => 'sales-channel-api.salutation.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'salutation'], ['version'], ['POST' => 0], null, false, false, null]],
        92584 => [[['_route' => 'sales-channel-api.salutation.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'salutation'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        92617 => [[['_route' => 'sales-channel-api.seo_url.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'seo-url'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        92653 => [[['_route' => 'sales-channel-api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'seo-url'], ['version'], ['POST' => 0], null, false, false, null]],
        92677 => [[['_route' => 'sales-channel-api.seo_url.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'seo-url'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        92718 => [[['_route' => 'sales-channel-api.shipping_method.detail', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::detail', 'entity' => 'shipping-method'], ['version', 'id'], ['GET' => 0], null, false, true, null]],
        92762 => [[['_route' => 'sales-channel-api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::searchIds', 'entity' => 'shipping-method'], ['version'], ['POST' => 0], null, false, false, null]],
        92794 => [
            [['_route' => 'sales-channel-api.shipping_method.search', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\Entity\\SalesChannelApiController::search', 'entity' => 'shipping-method'], ['version'], ['POST' => 0, 'GET' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
