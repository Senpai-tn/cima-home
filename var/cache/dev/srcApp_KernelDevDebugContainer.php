<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGI6R4DD\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGI6R4DD/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGI6R4DD.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGI6R4DD\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGI6R4DD\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GI6R4DD',
    'container.build_id' => '2da23365',
    'container.build_time' => 1584441940,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGI6R4DD');
