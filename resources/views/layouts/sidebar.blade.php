<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{ URL::Asset('build/images/users/user2.jpg') }}" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-body fw-medium font-size-16">Patrick Becker</a>
                <p class="text-muted mt-1 mb-0 font-size-13">UI/UX Designer</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('table.index', ['table' => 'users', 'view' => 'index.index', 'columns' => json_encode(['user_id' => 'id' ,'user_photo' => 'profile_pic', 'user_name' => 'Name', 'emp_code' => 'Employee', 'user_phone' => 'Mobile' , 'role_id_fk' => 'role'])]) }}" class="waves-effect">
                        <i class="mdi mdi-account"></i>
                        <span>Users</span>
                    </a>
                </li>

                <li>

                    <a href="{{ route('table.index', ['table' => 'employees', 'view' => 'index.index', 'columns' => json_encode(['id' => 'id', 'personal_photo' => 'profile pic' , 'employee' => 'Name', 'emp_code' => 'Employee Code', 'phone' => 'Mobile' , 'card_num' => 'Card Number' , 'birth_date' => 'Birth Date' , 'adress' => 'Address' , 'employee_type' => 'Status'])]) }}" class="waves-effect">
                        <i class="mdi mdi-account-multiple"></i>
                        <span>Employees</span>
                    </a>

                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Employees Tasks</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-security"></i>
                        <span>Permissions</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-source-branch"></i>
                        <span>Branches</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-account-multiple"></i>
                        <span>Customers</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('table.index', ['table' => 'employees', 'view' => 'index.index', 'columns' => json_encode(['id' => 'id', 'personal_photo' => 'profile pic' , 'employee' => 'Name', 'emp_code' => 'Employee Code', 'phone' => 'Mobile' , 'card_num' => 'Card Number' , 'birth_date' => 'Birth Date' , 'adress' => 'Address' , 'employee_type' => 'Status'])]) }}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Projects</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-account-multiple"></i>
                        <span>Clients</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Clients Tasks</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-currency-usd"></i>
                        <span>Sales</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-receipt"></i>
                        <span>Reciepts</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Expenses</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-clipboard-text"></i>
                        <span>Reports</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Safe</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->