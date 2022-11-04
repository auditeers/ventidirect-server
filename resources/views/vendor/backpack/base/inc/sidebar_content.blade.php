{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-title">Sales</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-cash-register"></i> Orders</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-truck"></i> Fulfillment</a></li>

<li class="nav-title">CRM</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-user-tag"></i> Clients</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-envelope"></i> Emails</a></li>

<li class="nav-title">Reports</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-box-open"></i> Sales</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-truck"></i> Fulfillment</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-headset"></i> Support</a></li>


<!-- li class="nav-item"><a class="nav-link" href="{{ backpack_url('address') }}"><i class="nav-icon la la-question"></i> Addresses</a></!-->

<li class="nav-title">PIM</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('product') }}"><i class="nav-icon la la-box"></i> Products</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-boxes"></i> Categories</a></li>

<li class="nav-title">CMS</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon la la-file-o'></i> <span>Pages</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>



<li class="nav-title">Users</li>
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>


<li class="nav-title">DevOps</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-plug'></i> API Status</a></li>