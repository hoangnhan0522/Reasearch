<?php

namespace ContainerXWoxaM1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PTDVkZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pTDVk_z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pTDVk_z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\UserCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CartController::deleteCartItem' => ['privates', '.service_locator.hrv7FUZ', 'get_ServiceLocator_Hrv7FUZService', true],
            'App\\Controller\\CartController::deleteOrder' => ['privates', '.service_locator.p1KYQUu', 'get_ServiceLocator_P1KYQUuService', true],
            'App\\Controller\\CartController::editOrder' => ['privates', '.service_locator.ruxHxcA', 'get_ServiceLocator_RuxHxcAService', true],
            'App\\Controller\\CartController::new' => ['privates', '.service_locator.UPCHK5q', 'get_ServiceLocator_UPCHK5qService', true],
            'App\\Controller\\CartController::orderIndex' => ['privates', '.service_locator.4n4ylFv', 'get_ServiceLocator_4n4ylFvService', true],
            'App\\Controller\\CartController::orderStatus' => ['privates', '.service_locator.qam6E0m', 'get_ServiceLocator_Qam6E0mService', true],
            'App\\Controller\\CartController::updateCartItem' => ['privates', '.service_locator.hrv7FUZ', 'get_ServiceLocator_Hrv7FUZService', true],
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.0CRkV7m', 'get_ServiceLocator_0CRkV7mService', true],
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.0CRkV7m', 'get_ServiceLocator_0CRkV7mService', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\CategoryController::new' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\CategoryController::show' => ['privates', '.service_locator.8IESKP1', 'get_ServiceLocator_8IESKP1Service', true],
            'App\\Controller\\ContactController::delete' => ['privates', '.service_locator.YSFMiv5', 'get_ServiceLocator_YSFMiv5Service', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.RT2MYic', 'get_ServiceLocator_RT2MYicService', true],
            'App\\Controller\\ContactController::new' => ['privates', '.service_locator.RT2MYic', 'get_ServiceLocator_RT2MYicService', true],
            'App\\Controller\\ContactController::show' => ['privates', '.service_locator..f4rJwr', 'get_ServiceLocator__F4rJwrService', true],
            'App\\Controller\\DetailController::search' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\DetailController::show' => ['privates', '.service_locator.TxLdxz8', 'get_ServiceLocator_TxLdxz8Service', true],
            'App\\Controller\\DetailnewController::show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\HomeController::airpodsIndex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController::index2' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController::ipadIndex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController::ipadProductDetail' => ['privates', '.service_locator.TxLdxz8', 'get_ServiceLocator_TxLdxz8Service', true],
            'App\\Controller\\HomeController::iphoneindex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController::macbookindex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController::search' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController::watchindex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\NewController::index2' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\OrderDetailController::delete' => ['privates', '.service_locator.46sBBwb', 'get_ServiceLocator_46sBBwbService', true],
            'App\\Controller\\OrderDetailController::edit' => ['privates', '.service_locator.46sBBwb', 'get_ServiceLocator_46sBBwbService', true],
            'App\\Controller\\OrderDetailController::index' => ['privates', '.service_locator.9ZMRGRi', 'get_ServiceLocator_9ZMRGRiService', true],
            'App\\Controller\\OrderDetailController::new' => ['privates', '.service_locator.9ZMRGRi', 'get_ServiceLocator_9ZMRGRiService', true],
            'App\\Controller\\OrderDetailController::show' => ['privates', '.service_locator.9ZMRGRi', 'get_ServiceLocator_9ZMRGRiService', true],
            'App\\Controller\\PositionController::delete' => ['privates', '.service_locator.X4ABE35', 'get_ServiceLocator_X4ABE35Service', true],
            'App\\Controller\\PositionController::edit' => ['privates', '.service_locator.X4ABE35', 'get_ServiceLocator_X4ABE35Service', true],
            'App\\Controller\\PositionController::index' => ['privates', '.service_locator.7bSenCk', 'get_ServiceLocator_7bSenCkService', true],
            'App\\Controller\\PositionController::new' => ['privates', '.service_locator.7bSenCk', 'get_ServiceLocator_7bSenCkService', true],
            'App\\Controller\\PositionController::show' => ['privates', '.service_locator.5eDsfgt', 'get_ServiceLocator_5eDsfgtService', true],
            'App\\Controller\\PostController::delete' => ['privates', '.service_locator.tOBp5Ci', 'get_ServiceLocator_TOBp5CiService', true],
            'App\\Controller\\PostController::edit' => ['privates', '.service_locator.tOBp5Ci', 'get_ServiceLocator_TOBp5CiService', true],
            'App\\Controller\\PostController::index' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController::new' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController::show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.DG8Afcf', 'get_ServiceLocator_DG8AfcfService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.DG8Afcf', 'get_ServiceLocator_DG8AfcfService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController::new' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.TxLdxz8', 'get_ServiceLocator_TxLdxz8Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.xVV8u.q', 'get_ServiceLocator_XVV8u_QService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\UserCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CartController:deleteCartItem' => ['privates', '.service_locator.hrv7FUZ', 'get_ServiceLocator_Hrv7FUZService', true],
            'App\\Controller\\CartController:deleteOrder' => ['privates', '.service_locator.p1KYQUu', 'get_ServiceLocator_P1KYQUuService', true],
            'App\\Controller\\CartController:editOrder' => ['privates', '.service_locator.ruxHxcA', 'get_ServiceLocator_RuxHxcAService', true],
            'App\\Controller\\CartController:new' => ['privates', '.service_locator.UPCHK5q', 'get_ServiceLocator_UPCHK5qService', true],
            'App\\Controller\\CartController:orderIndex' => ['privates', '.service_locator.4n4ylFv', 'get_ServiceLocator_4n4ylFvService', true],
            'App\\Controller\\CartController:orderStatus' => ['privates', '.service_locator.qam6E0m', 'get_ServiceLocator_Qam6E0mService', true],
            'App\\Controller\\CartController:updateCartItem' => ['privates', '.service_locator.hrv7FUZ', 'get_ServiceLocator_Hrv7FUZService', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.0CRkV7m', 'get_ServiceLocator_0CRkV7mService', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.0CRkV7m', 'get_ServiceLocator_0CRkV7mService', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\CategoryController:new' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\CategoryController:show' => ['privates', '.service_locator.8IESKP1', 'get_ServiceLocator_8IESKP1Service', true],
            'App\\Controller\\ContactController:delete' => ['privates', '.service_locator.YSFMiv5', 'get_ServiceLocator_YSFMiv5Service', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.RT2MYic', 'get_ServiceLocator_RT2MYicService', true],
            'App\\Controller\\ContactController:new' => ['privates', '.service_locator.RT2MYic', 'get_ServiceLocator_RT2MYicService', true],
            'App\\Controller\\ContactController:show' => ['privates', '.service_locator..f4rJwr', 'get_ServiceLocator__F4rJwrService', true],
            'App\\Controller\\DetailController:search' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\DetailController:show' => ['privates', '.service_locator.TxLdxz8', 'get_ServiceLocator_TxLdxz8Service', true],
            'App\\Controller\\DetailnewController:show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\HomeController:airpodsIndex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController:index2' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController:ipadIndex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController:ipadProductDetail' => ['privates', '.service_locator.TxLdxz8', 'get_ServiceLocator_TxLdxz8Service', true],
            'App\\Controller\\HomeController:iphoneindex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController:macbookindex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController:search' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\HomeController:watchindex' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\NewController:index2' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\OrderDetailController:delete' => ['privates', '.service_locator.46sBBwb', 'get_ServiceLocator_46sBBwbService', true],
            'App\\Controller\\OrderDetailController:edit' => ['privates', '.service_locator.46sBBwb', 'get_ServiceLocator_46sBBwbService', true],
            'App\\Controller\\OrderDetailController:index' => ['privates', '.service_locator.9ZMRGRi', 'get_ServiceLocator_9ZMRGRiService', true],
            'App\\Controller\\OrderDetailController:new' => ['privates', '.service_locator.9ZMRGRi', 'get_ServiceLocator_9ZMRGRiService', true],
            'App\\Controller\\OrderDetailController:show' => ['privates', '.service_locator.9ZMRGRi', 'get_ServiceLocator_9ZMRGRiService', true],
            'App\\Controller\\PositionController:delete' => ['privates', '.service_locator.X4ABE35', 'get_ServiceLocator_X4ABE35Service', true],
            'App\\Controller\\PositionController:edit' => ['privates', '.service_locator.X4ABE35', 'get_ServiceLocator_X4ABE35Service', true],
            'App\\Controller\\PositionController:index' => ['privates', '.service_locator.7bSenCk', 'get_ServiceLocator_7bSenCkService', true],
            'App\\Controller\\PositionController:new' => ['privates', '.service_locator.7bSenCk', 'get_ServiceLocator_7bSenCkService', true],
            'App\\Controller\\PositionController:show' => ['privates', '.service_locator.5eDsfgt', 'get_ServiceLocator_5eDsfgtService', true],
            'App\\Controller\\PostController:delete' => ['privates', '.service_locator.tOBp5Ci', 'get_ServiceLocator_TOBp5CiService', true],
            'App\\Controller\\PostController:edit' => ['privates', '.service_locator.tOBp5Ci', 'get_ServiceLocator_TOBp5CiService', true],
            'App\\Controller\\PostController:index' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController:new' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController:show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.DG8Afcf', 'get_ServiceLocator_DG8AfcfService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.DG8Afcf', 'get_ServiceLocator_DG8AfcfService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController:new' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.TxLdxz8', 'get_ServiceLocator_TxLdxz8Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.xVV8u.q', 'get_ServiceLocator_XVV8u_QService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::delete' => '?',
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::detail' => '?',
            'App\\Controller\\Admin\\UserCrudController::edit' => '?',
            'App\\Controller\\Admin\\UserCrudController::index' => '?',
            'App\\Controller\\Admin\\UserCrudController::new' => '?',
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => '?',
            'App\\Controller\\CartController::deleteCartItem' => '?',
            'App\\Controller\\CartController::deleteOrder' => '?',
            'App\\Controller\\CartController::editOrder' => '?',
            'App\\Controller\\CartController::new' => '?',
            'App\\Controller\\CartController::orderIndex' => '?',
            'App\\Controller\\CartController::orderStatus' => '?',
            'App\\Controller\\CartController::updateCartItem' => '?',
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\CategoryController::new' => '?',
            'App\\Controller\\CategoryController::show' => '?',
            'App\\Controller\\ContactController::delete' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\ContactController::new' => '?',
            'App\\Controller\\ContactController::show' => '?',
            'App\\Controller\\DetailController::search' => '?',
            'App\\Controller\\DetailController::show' => '?',
            'App\\Controller\\DetailnewController::show' => '?',
            'App\\Controller\\HomeController::airpodsIndex' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::index2' => '?',
            'App\\Controller\\HomeController::ipadIndex' => '?',
            'App\\Controller\\HomeController::ipadProductDetail' => '?',
            'App\\Controller\\HomeController::iphoneindex' => '?',
            'App\\Controller\\HomeController::macbookindex' => '?',
            'App\\Controller\\HomeController::search' => '?',
            'App\\Controller\\HomeController::watchindex' => '?',
            'App\\Controller\\NewController::index2' => '?',
            'App\\Controller\\OrderDetailController::delete' => '?',
            'App\\Controller\\OrderDetailController::edit' => '?',
            'App\\Controller\\OrderDetailController::index' => '?',
            'App\\Controller\\OrderDetailController::new' => '?',
            'App\\Controller\\OrderDetailController::show' => '?',
            'App\\Controller\\PositionController::delete' => '?',
            'App\\Controller\\PositionController::edit' => '?',
            'App\\Controller\\PositionController::index' => '?',
            'App\\Controller\\PositionController::new' => '?',
            'App\\Controller\\PositionController::show' => '?',
            'App\\Controller\\PostController::delete' => '?',
            'App\\Controller\\PostController::edit' => '?',
            'App\\Controller\\PostController::index' => '?',
            'App\\Controller\\PostController::new' => '?',
            'App\\Controller\\PostController::show' => '?',
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::new' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:delete' => '?',
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:detail' => '?',
            'App\\Controller\\Admin\\UserCrudController:edit' => '?',
            'App\\Controller\\Admin\\UserCrudController:index' => '?',
            'App\\Controller\\Admin\\UserCrudController:new' => '?',
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => '?',
            'App\\Controller\\CartController:deleteCartItem' => '?',
            'App\\Controller\\CartController:deleteOrder' => '?',
            'App\\Controller\\CartController:editOrder' => '?',
            'App\\Controller\\CartController:new' => '?',
            'App\\Controller\\CartController:orderIndex' => '?',
            'App\\Controller\\CartController:orderStatus' => '?',
            'App\\Controller\\CartController:updateCartItem' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\CategoryController:new' => '?',
            'App\\Controller\\CategoryController:show' => '?',
            'App\\Controller\\ContactController:delete' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\ContactController:new' => '?',
            'App\\Controller\\ContactController:show' => '?',
            'App\\Controller\\DetailController:search' => '?',
            'App\\Controller\\DetailController:show' => '?',
            'App\\Controller\\DetailnewController:show' => '?',
            'App\\Controller\\HomeController:airpodsIndex' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:index2' => '?',
            'App\\Controller\\HomeController:ipadIndex' => '?',
            'App\\Controller\\HomeController:ipadProductDetail' => '?',
            'App\\Controller\\HomeController:iphoneindex' => '?',
            'App\\Controller\\HomeController:macbookindex' => '?',
            'App\\Controller\\HomeController:search' => '?',
            'App\\Controller\\HomeController:watchindex' => '?',
            'App\\Controller\\NewController:index2' => '?',
            'App\\Controller\\OrderDetailController:delete' => '?',
            'App\\Controller\\OrderDetailController:edit' => '?',
            'App\\Controller\\OrderDetailController:index' => '?',
            'App\\Controller\\OrderDetailController:new' => '?',
            'App\\Controller\\OrderDetailController:show' => '?',
            'App\\Controller\\PositionController:delete' => '?',
            'App\\Controller\\PositionController:edit' => '?',
            'App\\Controller\\PositionController:index' => '?',
            'App\\Controller\\PositionController:new' => '?',
            'App\\Controller\\PositionController:show' => '?',
            'App\\Controller\\PostController:delete' => '?',
            'App\\Controller\\PostController:edit' => '?',
            'App\\Controller\\PostController:index' => '?',
            'App\\Controller\\PostController:new' => '?',
            'App\\Controller\\PostController:show' => '?',
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:new' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
