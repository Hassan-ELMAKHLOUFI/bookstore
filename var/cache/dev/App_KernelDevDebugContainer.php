<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXpvwlxn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXpvwlxn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXpvwlxn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXpvwlxn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXpvwlxn\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xpvwlxn',
    'container.build_id' => '2bcf274e',
    'container.build_time' => 1640625107,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXpvwlxn');
