<?php

namespace Oro\Bundle\GridBundle\Filter\ORM;

use Symfony\Component\Translation\TranslatorInterface;
use Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Oro\Bundle\GridBundle\Filter\FilterInterface;

class DateTimeRangeFilter extends AbstractDateFilter implements FilterInterface
{
    /**
     * This Filter allows filtering by time
     *
     * @var boolean
     */
    protected $time = true;

    /**
     * This is a range filter
     *
     * @var boolean
     */
    protected $range = true;

    /**
     * @return array
     */
    public function getTypeOptions()
    {
        return array(
            DateTimeRangeType::TYPE_BETWEEN
                => $this->translator->trans('label_date_type_between', array(), 'SonataAdminBundle'),
            DateTimeRangeType::TYPE_NOT_BETWEEN
                => $this->translator->trans('label_date_type_not_between', array(), 'SonataAdminBundle'),
        );
    }
}
