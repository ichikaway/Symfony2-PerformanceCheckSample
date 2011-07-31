<?php
//xhprof_enable();

require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';
require_once __DIR__.'/../app/AppCache.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
$kernel = new AppCache($kernel);
$kernel->handle(Request::createFromGlobals())->send();


// stop profiler
/*
        $xhprof_data = xhprof_disable();

        $XHPROF_ROOT        = '/var/www/php/cake/blog2/app/webroot';  //xhprofをインストールしたディレクトリ
        $XHPROF_SOURCE_NAME = 'cakephp';
        include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_lib.php";
        include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_runs.php";

        $xhprof_runs = new XHProfRuns_Default();
        $run_id = $xhprof_runs->save_run($xhprof_data, $XHPROF_SOURCE_NAME);


        echo "<a href=\"/php/cake/blog2/xhprof_html/index.php?run=$run_id&source=$XHPROF_SOURCE_NAME\">xhprof Result</a>\n";

*/
