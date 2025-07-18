<?php

namespace Training\Sales\Plugin;

use Magento\Framework\App\RequestInterface;
use Psr\Log\LoggerInterface;

class CustomerLoginPostPlugin
{

    private $logger;
    private RequestInterface $request;
    /**
     * @param LoggerInterface $logger
     * @param RequestInterface $request
     */
    public function __construct(LoggerInterface $logger, RequestInterface $request)
    {
        $this->logger = $logger;
        $this->request = $request;
    }

    /**
     * Simple example of a before Plugin on a public method in a Controller
     */
    public function beforeExecute()
    {
        $login = $this->request->getParam('login');
        $username = $login['username'];
        $this->logger->notice("Login Post controller was used for " . $username);
    }
}
