<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link" id="dashboard">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    {{ __('Dashboard') }}
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.profile.edit') }}" class="nav-link" id="profile">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>
                    {{ __('Profile') }}
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview" id="prices">
            <a href="#" class="nav-link" id="prices_link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                    {{ __('Administration') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.doctors.index') }}" class="nav-link" id="doctors">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Doctors') }}</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview" id="prices">
            <a href="#" class="nav-link" id="prices_link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                    {{ __('General Admin') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.labs.index') }}" class="nav-link" id="labs">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Lab Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.centers.index') }}" class="nav-link" id="centers">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Center Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.faranchises.index') }}" class="nav-link" id="faranchises">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Faranchise Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.machine.index') }}" class="nav-link" id="machines">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Machine Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.section.index') }}" class="nav-link" id="sections">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Section Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.departments.index') }}" class="nav-link" id="department">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Department Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.payments.index') }}" class="nav-link" id="payments">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Payment Type Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.airlines.index') }}" class="nav-link" id="airlines">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Airline Registration') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.supervisorshift.index') }}" class="nav-link" id="supervisor_shift">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Supervisor Shift Open') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.usershift.index') }}" class="nav-link" id="user_shift">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('User Shift Open') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.discountrole.index') }}" class="nav-link" id="discountrole">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Discount Role') }}</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview" id="prices">
            <a href="#" class="nav-link" id="prices_link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                    {{ __('Test Management') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.pattern.index') }}" class="nav-link" id="patterns">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Pattern Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.sample.index') }}" class="nav-link" id="samples">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Sample Requirement') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.units.index') }}" class="nav-link" id="units">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Test Unit Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.test_registration.index') }}" class="nav-link" id="test_registration">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Test Registraton List') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.age_classification.index') }}" class="nav-link"
                        id="age_classification">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Age Classification') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.normal_range_heading.index') }}" class="nav-link"
                        id="normal_range_heading">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Normal Range Headings') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.product_registration.index') }}" class="nav-link"
                        id="product_registration">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Product Registrations') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.morphology_registration.index') }}" class="nav-link"
                        id="morphology_registration">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Morphology Registrations') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.package_registrations.index') }}" class="nav-link"
                        id="package_registrations">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Test Package Registrations') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.cbc_remarks.index') }}" class="nav-link" id="cbc_remarks">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('CBC Remarks') }}</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item has-treeview" id="prices">
            <a href="#" class="nav-link" id="prices_link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                    {{ __('Cust/Vend Management') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.customer_registration.index') }}" class="nav-link"
                        id="customer_registration">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Customer Registraton') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.customer_price_list.index') }}" class="nav-link"
                        id="customer_price_list">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Customer Price List') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.faranchise_price_list.index') }}" class="nav-link"
                        id="faranchise_price_list">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Faranchise Price List') }}</p>
                    </a>
                </li>


            </ul>
        </li>
        <li class="nav-item has-treeview" id="prices">
            <a href="#" class="nav-link" id="prices_link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                    {{ __('Patients Management') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.patients.index') }}" class="nav-link" id="patients">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Patients Registraton') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.groups.index') }}" class="nav-link" id="groups">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Cash and Credits Invoices') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.searching') }}" class="nav-link" id="searching">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Invoice Searching') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.invoice_cancel_req', '0') }}" class="nav-link" id="invoice_cancel">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Invoice Cancel Request') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.invoice_statuses') }}" class="nav-link" id="invoice_statuses">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Cancel Request Status') }}</p>
                    </a>
                </li>
                <!--
   <li class="nav-item">
   <a href="{{ route('admin.groups_credits.index') }}" class="nav-link" id="groups_credits">
    <i class="far fa-circle nav-icon"></i>
    <p>{{ __('Credits Sales/Invoices') }}</p>
   </a>
   </li>
   -->

            </ul>
        </li>



        {{-- @can('view_patient')
            <li class="nav-item">
                <a href="{{ route('admin.departments.index') }}" class="nav-link" id="departments">
                    <i class="fas fa-map-marked-alt nav-icon"></i>
                    <p>
                        {{ __('Departments') }}
                    </p>
                </a>
            </li>
        @endcan --}}

        @can('view_patient')
            <li class="nav-item">
                <a href="{{ route('admin.specializations.index') }}" class="nav-link" id="specializations">
                    <i class="fas fa-map-marked-alt nav-icon"></i>
                    <p>
                        {{ __('Specializations') }}
                    </p>
                </a>
            </li>
        @endcan



        @can('view_patient')
            <li class="nav-item">
                <a href="{{ route('admin.organizations.index') }}" class="nav-link" id="organizations">
                    <i class="fas fa-map-marked-alt nav-icon"></i>
                    <p>
                        {{ __('Organizations') }}
                    </p>
                </a>
            </li>
        @endcan


        @can('view_group')
            <!--
          <li class="nav-item">
            <a href="{{ route('admin.groups.index') }}" class="nav-link" id="groups">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                {{ __('Invoices') }}
              </p>
            </a>
          </li>
     -->
        @endcan

        @can('view_report')
            <li class="nav-item">
                <a href="{{ route('admin.reports.index') }}" class="nav-link" id="reports">
                    <i class="nav-icon fas fa-flag"></i>
                    <p>
                        {{ __('Reports') }}
                    </p>
                </a>
            </li>
        @endcan
        {{-- @can('view_branch')
        <li class="nav-item">
          <a href="{{route('admin.branches.index')}}" class="nav-link" id="branches">
            <i class="fas fa-map-marked-alt nav-icon"></i>
            <p>{{__('Branches')}}</p>
          </a>
        </li>
      @endcan

      @can('view_test')
      <li class="nav-item">
        <a href="{{route('admin.tests.index')}}" class="nav-link" id="tests">
          <i class="nav-icon fas fa-flask"></i>
          <p>
            {{__('Tests')}}
          </p>
        </a>
      </li>
      @endcan

      @can('view_culture')
      <li class="nav-item">
        <a href="{{route('admin.cultures.index')}}" class="nav-link" id="cultures">
          <i class="nav-icon fas fa-vial"></i>
          <p>
            {{__('Cultures')}}
          </p>
        </a>
      </li>
      @endcan

      @can('view_culture_option')
      <li class="nav-item">
        <a href="{{route('admin.culture_options.index')}}" class="nav-link" id="culture_options">
          <i class="nav-icon fas fa-vial"></i>
          <p>
            {{__('Culture options')}}
          </p>
        </a>
      </li>
      @endcan

      @can('view_antibiotic')
      <li class="nav-item">
        <a href="{{route('admin.antibiotics.index')}}" class="nav-link" id="antibiotics">
          <i class="nav-icon fas fa-capsules"></i>
          <p>
            {{__('Antibiotics')}}
          </p>
        </a>
      </li>
      @endcan

      @canany(['view_test_prices', 'view_culture_prices'])
        <li class="nav-item has-treeview" id="prices">
          <a href="#" class="nav-link" id="prices_link">
            <i class="nav-icon fas fa-list"></i>
            <p>
              {{__('Price List')}}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            @can('view_test_prices')
            <li class="nav-item">
              <a href="{{route('admin.prices.tests')}}" class="nav-link" id="tests_prices">
                <i class="far fa-circle nav-icon"></i>
                <p>{{__('Tests')}}</p>
              </a>
            </li>
            @endcan

            @can('view_culture_prices')
            <li class="nav-item">
              <a href="{{route('admin.prices.cultures')}}" class="nav-link" id="cultures_prices">
                <i class="far fa-circle nav-icon"></i>
                <p>{{__('Cultures')}}</p>
              </a>
            </li>
            @endcan

          </ul>
        </li>
      @endcan

      @can('view_contract')
      <li class="nav-item">
        <a href="{{route('admin.contracts.index')}}" class="nav-link" id="contracts">
          <i class="fas fa-file-contract nav-icon"></i>
          <p>{{__('Contracts')}}</p>
        </a>
      </li>
      @endcan



      @can('view_visit')
      <li class="nav-item">
        <a href="{{route('admin.visits.index')}}" class="nav-link" id="visits">
          <i class="nav-icon fas fa-home"></i>
          <p>
            {{__('Home Visits')}}
          </p>
        </a>
      </li>
      @endcan

      @can('view_chat')
          <li class="nav-item">
            <a href="{{route('admin.chat.index')}}" class="nav-link" id="chat">
              <i class="nav-icon far fa-comment-dots"></i>
              <p>
                {{__('Chat')}}
              </p>
            </a>
          </li>
      @endcan

      @canany(['view_accounting_reports', 'view_expense', 'view_expense_category'])
      <li class="nav-item has-treeview" id="accounting">
        <a href="#" class="nav-link" id="accounting_link">
          <i class="nav-icon fas fa-calculator"></i>
          <p>
            {{__('Accounting')}}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          @can('view_expense_category')
          <li class="nav-item">
            <a href="{{route('admin.expense_categories.index')}}" class="nav-link" id="expense_categories">
              <i class="far fa-circle nav-icon"></i>
              <p>
                {{__('Expense Categories')}}
              </p>
            </a>
          </li>
          @endcan

          @can('view_expense')
          <li class="nav-item">
            <a href="{{route('admin.expenses.index')}}" class="nav-link" id="expenses">
              <i class="far fa-circle nav-icon"></i>
              <p>
                {{__('Expenses')}}
              </p>
            </a>
          </li>
          @endcan

          @can('view_accounting_reports')
          <li class="nav-item">
            <a href="{{route('admin.accounting.index')}}" class="nav-link" id="accounting_reports">
              <i class="far fa-circle nav-icon"></i>
              <p>
                {{__('Accounting Report')}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.accounting.doctor_report')}}" class="nav-link" id="accounting_doctor_reports">
              <i class="far fa-circle nav-icon"></i>
              <p>
                {{__('Doctor report')}}
              </p>
            </a>
          </li>
          @endcan

        </ul>
      </li>
      @endcan

      @canany(['view_user', 'view_role'])
        <li class="nav-item has-treeview" id="users_roles">
          <a href="#" class="nav-link" id="users_roles_link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              {{__('Roles And Users')}}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            @can('view_role')
            <li class="nav-item">
              <a href="{{route('admin.roles.index')}}" class="nav-link" id="roles">
                <i class="far fa-circle nav-icon"></i>
                <p>{{__('Roles')}}</p>
              </a>
            </li>
            @endcan

            @can('view_user')
            <li class="nav-item">
              <a href="{{route('admin.users.index')}}" class="nav-link" id="users">
                <i class="far fa-circle nav-icon"></i>
                <p>{{__('Users')}}</p>
              </a>
            </li>
            @endcan

          </ul>
        </li>
      @endcan

      @can('view_setting')
      <li class="nav-item">
        <a href="{{route('admin.settings.index')}}" class="nav-link" id="settings">
          <i class="fa fa-cogs nav-icon"></i>
          <p>{{__('Settings')}}</p>
        </a>
      </li>
      @endcan

      @can('view_translation')
      <li class="nav-item">
        <a href="{{route('admin.translations.index')}}" class="nav-link" id="translations">
          <i class="fa fa-book nav-icon"></i>
          <p>{{__('Translations')}}</p>
        </a>
      </li>
      @endcan

      @can('view_activity_log')
      <li class="nav-item">
        <a href="{{route('admin.activity_logs.index')}}" class="nav-link" id="activity_logs">
          <i class="fa fa-server nav-icon"></i>
          <p>{{__('Activity Logs')}}</p>
        </a>
      </li>
      @endcan --}}

        @can('view_reporting')
            <li class="nav-item has-treeview" id="Reporting">
                <a href="#" class="nav-link" id="reports_link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        {{ __('Reporting') }}
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('admin.reporting.customer_registrations') }}" class="nav-link"
                            id="customer_registrations">
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                {{ __('Customer Registrations') }}
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.reporting.inactive_patients') }}" class="nav-link"
                            id="inactive_patients">
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                {{ __('Inactive Patients') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.reporting.daily_cash_reporting') }}" class="nav-link"
                            id="view_daily_cash_report">
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                {{ __('Daily Active Cash Report') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.reporting.daily_credit_reporting') }}" class="nav-link"
                            id="view_daily_credit_report">
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                {{ __('Daily Active Credit Report') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.reporting.patient_visit_report') }}" class="nav-link"
                            id="patient_visit_report">
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                {{ __('Patient Visit Report') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.reporting.patient_registration_report') }}" class="nav-link"
                            id="patient_registration_report">
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                {{ __('Patient Registration Report') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.reporting.test_history_report') }}" class="nav-link"
                            id="test_history_report">
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                {{ __('Test History Report') }}
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
        @endcan

        @can('view_backup')
            <li class="nav-item">
                <a href="{{ route('admin.backups.index') }}" class="nav-link" id="backups">
                    <i class="fa fa-database nav-icon"></i>
                    <p>{{ __('Database Backups') }}</p>
                </a>
            </li>
        @endcan


    </ul>
</nav>
