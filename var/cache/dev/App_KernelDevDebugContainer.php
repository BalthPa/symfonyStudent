<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCP6KQzB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCP6KQzB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCP6KQzB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCP6KQzB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCP6KQzB\App_KernelDevDebugContainer([
    'container.build_hash' => 'CP6KQzB',
    'container.build_id' => '14d6eab4',
    'container.build_time' => 1583953528,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCP6KQzB');
