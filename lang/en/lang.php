<?php return [
    'plugin'      => [
        'name'        => 'Easy Files',
        'description' => 'The safe and easy way to share files stored anywhere! (SFTP, Dropbox, AWS, Azure, Rackspace, & more)',
    ],

    'components' => [
        'filebrowser' => [
            'name'        => 'File Browser',
            'description' => '',
            'properties'  => [
                'disk_title'                 => 'Storage Disk',
                'disk_description'           => 'The storage disk (defined in config/filesystems.php) to use',
                'folder_title'               => 'Folder',
                'folder_description'         => 'The root folder to use',
                'include_styles_title'       => 'Include Styles',
                'include_styles_description' => 'Include base October styling (storm.css & october.css)',
                'allow_uploads_title'        => 'Allow Uploads',
                'allow_uploads_description'  => 'Check this to enable uploading',
            ],
        ]
    ]
];
