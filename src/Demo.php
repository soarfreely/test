<?php
/**
 * Desc: 包功能的实现
 * User: <zhangxiang_php@vchangyi.com>
 * Date: 2019/2/22 Time: 11:02
 */
namespace Soar\Demo;

use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class Demo
{
    protected $session;

    protected $config;

    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    public function msg($msg)
    {
       $this->config->get('demo.options');

       echo $msg . "<strong> from your customer development package </strong>";
    }
}