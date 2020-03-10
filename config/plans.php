<?php

return [

    /*
     * The model which handles the plans tables.
     */

    'models' => [

        'plan' => \Metourni\Plans\Models\PlanModel::class,
        'subscription' => \Metourni\Plans\Models\PlanSubscriptionModel::class,
        'feature' => \Metourni\Plans\Models\PlanFeatureModel::class,
        'usage' => \Metourni\Plans\Models\PlanSubscriptionUsageModel::class,

        'stripeCustomer' => \Metourni\Plans\Models\StripeCustomerModel::class,

    ],

];
