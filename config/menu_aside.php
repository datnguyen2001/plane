<?php

return [
    'admin' => [
        [
            'name' => 'dashboard',
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid',
            'route' => 'admin.index',
            'submenu' => [],
            'number' => 1
        ],
        [
            'name' => 'banner',
            'title' => 'Banner hình ảnh',
            'icon' => 'bi bi-grid',
            'route' => 'admin.banner.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'partner',
            'title' => 'Đối tác',
            'icon' => 'bi bi-grid',
            'route' => 'admin.partner.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'about',
            'title' => 'Về chúng tôi',
            'icon' => 'bi bi-grid',
            'route' => null,
            'submenu' => [
                [
                    'title' => 'Về chúng tôi',
                    'route' => 'admin.about.index',
                    'name' => 'post'
                ],
                [
                    'title' => 'Hình ảnh liên quan',
                    'route' => 'admin.image-about.index',
                    'name' => 'image_about'
                ],
            ],
            'number' => 2
        ],
        [
            'name' => 'certificate',
            'title' => 'Giấy chứng nhận',
            'icon' => 'bi bi-grid',
            'route' => 'admin.certificate.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'become_pilot',
            'title' => 'Trở thành phi công',
            'icon' => 'bi bi-grid',
            'route' => 'admin.become-pilot.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'one_day_pilot',
            'title' => 'Một ngày trở thành phi công',
            'icon' => 'bi bi-grid',
            'route' => 'admin.one-day-pilot.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'news',
            'title' => 'Tin tức',
            'icon' => 'bi bi-grid',
            'route' => 'admin.news.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'training_course',
            'title' => 'Khóa huấn luyện',
            'icon' => 'bi bi-grid',
            'route' => 'admin.training-course.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'contact',
            'title' => 'Quản lý liên hệ',
            'icon' => 'bi bi-grid',
            'route' => 'admin.contact',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'register_information',
            'title' => 'Đăng ký nhận thông tin',
            'icon' => 'bi bi-grid',
            'route' => 'admin.register_information',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'setting',
            'title' => 'Cài đặt',
            'icon' => 'bi bi-grid',
            'route' => 'admin.setting.index',
            'submenu' => [],
            'number' => 2
        ],

]
];
