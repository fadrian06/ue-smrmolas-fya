<?php

$sidebarNavItems = [
  [
    'href' => './',
    'title' => 'Dashboard',
    'flaticonIcon' => 'dashboard',
  ],
  // [
  //   'title' => 'Students',
  //   'flaticonIcon' => 'classmates',
  //   'subGroupMenuItems' => [
  //     [
  //       'href' => './all-student',
  //       'title' => 'All Students',
  //     ],
  //     [
  //       'href' => './student-details',
  //       'title' => 'Student Details',
  //     ],
  //     [
  //       'href' => './admit-form',
  //       'title' => 'Admission Form',
  //     ],
  //     [
  //       'href' => './student-promotion',
  //       'title' => 'Student Promotion',
  //     ],
  //   ],
  // ],
  // [
  //   'title' => 'Teachers',
  //   'flaticonIcon' => 'multiple-users-silhouette',
  //   'subGroupMenuItems' => [
  //     [
  //       'href' => './all-teacher',
  //       'title' => 'All Teachers',
  //     ],
  //     [
  //       'href' => './teacher-details',
  //       'title' => 'Teacher Details',
  //     ],
  //     [
  //       'href' => './add-teacher',
  //       'title' => 'Add Teacher',
  //     ],
  //     [
  //       'href' => './teacher-payment',
  //       'title' => 'Payment',
  //     ],
  //   ],
  // ],
  // [
  //   'title' => 'Parents',
  //   'flaticonIcon' => 'couple',
  //   'subGroupMenuItems' => [
  //     [
  //       'href' => './all-parents',
  //       'title' => 'All Parents',
  //     ],
  //     [
  //       'href' => './parents-details',
  //       'title' => 'Parents Details',
  //     ],
  //     [
  //       'href' => './add-parents',
  //       'title' => 'Add Parent',
  //     ],
  //   ],
  // ],
  // [
  //   'title' => 'Library',
  //   'flaticonIcon' => 'books',
  //   'subGroupMenuItems' => [
  //     [
  //       'href' => './all-book',
  //       'title' => 'All Book',
  //     ],
  //     [
  //       'href' => './add-book',
  //       'title' => 'Add New Book',
  //     ],
  //   ],
  // ],
  // [
  //   'title' => 'Acconunt',
  //   'flaticonIcon' => 'technological',
  //   'subGroupMenuItems' => [
  //     [
  //       'href' => './all-fees',
  //       'title' => 'All Fees Collection',
  //     ],
  //     [
  //       'href' => './all-expense',
  //       'title' => 'Expenses',
  //     ],
  //     [
  //       'href' => './add-expense',
  //       'title' => 'Add Expenses',
  //     ],
  //   ],
  // ],
  // [
  //   'title' => 'Class',
  //   'flaticonIcon' => 'maths-class-materials-cross-of-a-pencil-and-a-ruler',
  //   'subGroupMenuItems' => [
  //     [
  //       'href' => './all-class',
  //       'title' => 'All Classes',
  //     ],
  //     [
  //       'href' => './add-class',
  //       'title' => 'Add New Class',
  //     ],
  //   ],
  // ],
  // [
  //   'href' => './all-subject',
  //   'title' => 'Subject',
  //   'flaticonIcon' => 'open-book',
  // ],
  // [
  //   'href' => './class-routine',
  //   'title' => 'Class Routine',
  //   'flaticonIcon' => 'calendar',
  // ],
  // [
  //   'href' => './student-attendence',
  //   'title' => 'Attendence',
  //   'flaticonIcon' => 'checklist',
  // ],
  // [
  //   'title' => 'Exam',
  //   'flaticonIcon' => 'shopping-list',
  //   'subGroupMenuItems' => [
  //     [
  //       'href' => './exam-schedule',
  //       'title' => 'Exam Schedule',
  //     ],
  //     [
  //       'href' => './exam-grade',
  //       'title' => 'Exam Grades',
  //     ],
  //   ],
  // ],
  // [
  //   'href' => './transport',
  //   'title' => 'Transport',
  //   'flaticonIcon' => 'bus-side-view',
  // ],
  // [
  //   'href' => './hostel',
  //   'title' => 'Hostel',
  //   'flaticonIcon' => 'bed',
  // ],
  // [
  //   'href' => './notice-board',
  //   'title' => 'Notice Board',
  //   'flaticonIcon' => 'script',
  // ],
  // [
  //   'href' => './messaging',
  //   'title' => 'Messaging',
  //   'flaticonIcon' => 'chat',
  // ],
  // [
  //   'title' => 'UI Elements',
  //   'flaticonIcon' => 'menu-1',
  //   'subGroupMenuItems' => [
  //     [
  //       'href' => './notification-alart',
  //       'title' => 'Alart',
  //     ],
  //     [
  //       'href' => './button',
  //       'title' => 'Button',
  //     ],
  //     [
  //       'href' => './grid',
  //       'title' => 'Grid',
  //     ],
  //     [
  //       'href' => './modal',
  //       'title' => 'Modal',
  //     ],
  //     [
  //       'href' => './progress-bar',
  //       'title' => 'Progress Bar',
  //     ],
  //     [
  //       'href' => './ui-tab',
  //       'title' => 'Tab',
  //     ],
  //     [
  //       'href' => './ui-widget',
  //       'title' => 'Widget',
  //     ],
  //   ],
  // ],
  // [
  //   'href' => './map',
  //   'title' => 'Map',
  //   'flaticonIcon' => 'planet-earth',
  // ],
  [
    'href' => './account-settings',
    'title' => 'Cuenta',
    'flaticonIcon' => 'settings',
  ]
];

$requestUrl = '.' . Flight::request()->url;

?>

<!-- Sidebar Area Start Here -->
<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
  <div class="mobile-sidebar-header d-md-none">
    <div class="header-logo">
      <a href="./">
        <img src="./resources/img/logo1.png" />
      </a>
    </div>
  </div>
  <div class="sidebar-menu-content">
    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
      <?php foreach ($sidebarNavItems as $sidebarNavItem) : ?>
        <?php

        $sidebarNavItem['href'] ??= '';
        $sidebarNavItem['subGroupMenuItems'] ??= [];

        $sidebarNavItem['isActive'] = $requestUrl === $sidebarNavItem['href'] || array_any(
          array_map(
            fn(array $subGroupMenuItem): string => (string) $subGroupMenuItem['href'] ?? '',
            (array) $sidebarNavItem['subGroupMenuItems'],
          ),
          fn(string $href): bool => $requestUrl === $href,
        );

        ?>
        <?php if ($sidebarNavItem['subGroupMenuItems']) : ?>
          <li class="nav-item sidebar-nav-item <?= !$sidebarNavItem['isActive'] ?: 'active' ?>">
            <a href="#" class="nav-link">
              <i class="flaticon-<?= $sidebarNavItem['flaticonIcon'] ?? '' ?>"></i>
              <span><?= $sidebarNavItem['title'] ?? '' ?></span>
            </a>
            <ul
              class="nav sub-group-menu <?= !$sidebarNavItem['isActive'] ?: 'menu-open' ?>"
              style="<?= !$sidebarNavItem['isActive'] ?: 'display: block' ?>">
              <?php foreach ((array) $sidebarNavItem['subGroupMenuItems'] ?? [] as $subGroupMenuItem) : ?>
                <li class="nav-item">
                  <a
                    href="<?= $subGroupMenuItem['href'] ?? '#' ?>"
                    class="nav-link <?= ($requestUrl) !== $subGroupMenuItem['href'] ?? '' ?: 'menu-active' ?>">
                    <i class="fas fa-angle-right"></i>
                    <?= $subGroupMenuItem['title'] ?? '' ?>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a
              href="<?= $sidebarNavItem['href'] ?? '' ?>"
              class="nav-link <?= !$sidebarNavItem['isActive'] ?: 'menu-active' ?>">
              <i class="flaticon-<?= $sidebarNavItem['flaticonIcon'] ?? '' ?>"></i>
              <span><?= $sidebarNavItem['title'] ?? '' ?></span>
            </a>
          </li>
        <?php endif ?>
      <?php endforeach ?>
    </ul>
  </div>
</div>
<!-- Sidebar Area End Here -->
