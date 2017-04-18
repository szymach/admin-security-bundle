<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminSecurityBundle\EventListener;

use FSi\Bundle\AdminSecurityBundle\Event\ActivationEvent;
use FSi\Bundle\AdminSecurityBundle\Event\AdminSecurityEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class DeactivateUserListener implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            AdminSecurityEvents::DEACTIVATION => 'onDeactivation'
        ];
    }

    /**
     * @param ActivationEvent $event
     */
    public function onDeactivation(ActivationEvent $event)
    {
        $event->getUser()->setEnabled(false);
    }
}