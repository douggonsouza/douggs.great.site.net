<?php

use douggonsouza\routes\router;
use douggonsouza\imwvg\controls\login;
use douggonsouza\imwvg\controls\register;
use douggonsouza\imwvg\controls\admin\dashboard;
use douggonsouza\genpermissions\controls\papers;
use douggonsouza\genpermissions\controls\menus;
use douggonsouza\genpermissions\controls\permissions_types;
use douggonsouza\genpermissions\controls\permissions;

router::routing(
    'GET', 
    "/", 
    new dashboard(PLAIN_PAGE)
);
router::routing(
    'POST', 
    "/", 
    new dashboard(PLAIN_PAGE)
);
router::routing(
    'GET', 
    "/login", 
    new login(LOGIN)
);
router::routing(
    'POST', 
    "/login", 
    new login(LOGIN)
);
router::routing(
    'POST', 
    "/register", 
    new register(LOGIN_REGISTER_CONTENT)
);
router::routing(
    'GET', 
    "/admin/dashboard", 
    new dashboard(LAYOUT_1,LAYOUT_1_PAGE_CONTENT)
);
router::routing(
    'POST', 
    "/admin/dashboard", 
    new dashboard(LAYOUT_1,LAYOUT_1_PAGE_CONTENT)
);
router::routing(
    'GET', 
    "/admin/paper", 
    new papers(LAYOUT_1,PAPERS)
);
router::routing(
    'POST', 
    "/admin/paper", 
    new papers(LAYOUT_1,PAPERS)
);
router::routing(
    'GET', 
    "/admin/menu", 
    new menus(LAYOUT_1, MENUS)
);
router::routing(
    'POST', 
    "/admin/menu", 
    new menus(LAYOUT_1, MENUS)
);
router::routing(
    'GET', 
    "/admin/type-permission", 
    new permissions_types(LAYOUT_1, PERMISSIONS_TYPES)
);
router::routing(
    'POST', 
    "/admin/type-permission", 
    new permissions_types(LAYOUT_1, PERMISSIONS_TYPES)
);
router::routing(
    'GET', 
    "/admin/permission", 
    new permissions(LAYOUT_1, PERMISSIONS)
);
router::routing(
    'POST', 
    "/admin/permission", 
    new permissions(LAYOUT_1, PERMISSIONS)
);

router::end('404');
?>
