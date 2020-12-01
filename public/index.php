<?php
    require_once './bootsrap.php';

    use UK\core\Application;
    use UK\UK_Log;
    $d  = new MysqliDb();
    try {
        $app = new Application();
        $app->router->setStaticRoute('','admin/home');
        // $app->router->setStaticRoute('test','user',' ');
        //$app->router->setStaticRoute('david','admin',' ');
        $app->run();
    } catch (Throwable $e) {
        $error = new UK_Log();
        $error->error($e->getMessage() . "\n Stack trace : " . $e->getTraceAsString());
    }catch (Exception $e) {
        $error = new UK_Log();
        $error->error($e->getMessage() . "\n Stack trace : " . $e->getTraceAsString());
    }