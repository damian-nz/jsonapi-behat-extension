<?php namespace Kielabokkie\BehatJsonApi\Context\Initializer;

use Behat\Behat\Context\Initializer\ContextInitializer;
use Behat\Behat\Context\ContextInterface;

class JsonApiInitializer implements ContextInitializer
{
    private $parameters;

    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    public function initializeContext(ContextInterface $context)
    {
        // Add all parameters to the context
        $context->setParameters($this->parameters);
    }
}