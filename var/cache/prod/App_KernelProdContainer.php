<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVCcfmUM\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVCcfmUM/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerVCcfmUM.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerVCcfmUM\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerVCcfmUM\App_KernelProdContainer([
    'container.build_hash' => 'VCcfmUM',
    'container.build_id' => '69f73777',
    'container.build_time' => 1640623893,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVCcfmUM');